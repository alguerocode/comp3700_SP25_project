<?php
session_start();
header('Content-Type: application/json');

// this for making sure that the user is logging in 

// if (!isset($_SESSION['user_id'])) {
//   echo json_encode(['success'=>false,'message'=>'Not authenticated']);
//   exit;
// }

$userId    = $_SESSION['user_id'];
$eventId   = $_POST['eventId'] ?? '';
$action    = $_POST['action']  ?? '';
$count     = intval($_POST['ticketsNumber'] ?? 0);
$food      = isset($_POST['foodService']);
$vip       = isset($_POST['vipTickets']);
$child     = isset($_POST['childrenTickets']);

try {
  // adjust these to your own DB-connection file
  require '../../shared/db.php'; // e.g. creates $pdo = new PDO(...);

  if ($action === 'insert') {
    $stmt = $pdo->prepare("
      INSERT INTO hz_ticket
        (userid, eventid, count, food_service, vip_tickets, children_tickets)
      VALUES
        (?,      ?,       ?,     ?,            ?,           ?)
    ");
    $stmt->execute([
      $userId, $eventId, $count,
      $food ? 1 : 0,
      $vip  ? 1 : 0,
      $child? 1 : 0
    ]);

  } elseif ($action === 'delete') {
    $stmt = $pdo->prepare("
      DELETE FROM hz_ticket
       WHERE userid = ? AND eventid = ?
    ");
    $stmt->execute([$userId, $eventId]);
  }

  // now fetch the up-to-date list
  $stmt = $pdo->prepare("
    SELECT id, count, food_service, vip_tickets, children_tickets
      FROM hz_ticket
     WHERE userid = ? AND eventid = ?
  ");
  $stmt->execute([$userId, $eventId]);
  $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode(['success'=>true,'tickets'=>$tickets]);
}
catch (Exception $e) {
  echo json_encode([
    'success' => false,
    'message' => $e->getMessage()
  ]);
}
