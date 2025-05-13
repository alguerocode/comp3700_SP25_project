<?php 
include("../lib/connect-db.php");
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM hz_event WHERE id='$id'");
$stmt->execute();
$event = $stmt->fetchAll()[0];
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hajz | Technology Conference</title>
    <!-- <link rel="stylesheet" href="/global.css"> -->
    <!-- <link rel="stylesheet" href="/events/events-description/event-description.css"> -->
    <link rel="icon" type="image/x-icon" href="/public/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("../shared/navbar.php"); ?>

    <div class="event d-flex flex-column align-items-center justify-content-center gap-3 mx-auto my-4" style="width: 95%; max-width: 700px;">
       <?php 
       
       echo '<h1>'. $event['title'] .'</h1>
        <img style="width: 100%; height: auto; max-width: 700px; border-radius: 20px; aspect-ratio: 16/9;" src="'. $event['img_url'] .'" alt="" width="300" height="160">
        <p>'. $event['description'] .'</p>

<div class="card w-100" style="max-width: 33rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex" style="justify-content:space-between">
                        <div><img  class="d-inline-block" style="width: 20px; height: 20px; margin-right: 10px;" src="/public/events/location.png" width="10px" height="10px" />Location</div>
                <div>'. $event['location'] .'</div>
    </li>
    <li class="list-group-item d-flex" style="justify-content:space-between">
    <div><img  class="d-inline-block" style="width: 20px; height: 20px; margin-right: 10px;" src="/public/events/calendar.png" width="10px" height="10px" />Event Time</div>
                <div>'. $event['time'] .'</div>
    </li>
    <li class="list-group-item d-flex" style="justify-content:space-between">
                    <div>
                    <img  class="d-inline-block" style="width: 20px; height: 20px; margin-right: 10px;" src="/public/events/group.png" width="20px" height="20px" /> Maximum audience
                </div>
                <div>'. $event['max_aud'] .'</div>
    </li>
    <li class="list-group-item d-flex" style="justify-content:space-between">
                    <div><img src="/public/events/ticket.png" width="20px" height="20px"  class="d-inline-block" style="width: 20px; height: 20px; margin-right: 10px;" /> Available Tickets
                </div>
                <div>'. $event['max_aud'] .'</div>
    </li>
  </ul>

</div>        
 <a href="/events/event-calculator/event-calculator.php?id='. $id. '" class="get-ticket w-100" style="max-width: 33rem;">
        <div class="ticket btn w-100 btn-primary" style="max-width: 33rem; background-color: #6518ff; color: white;">
           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="mx-2 bi bi-ticket-detailed-fill" viewBox="0 0 16 16">
  <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4 1a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5m0 5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5M4 8a1 1 0 0 0 1 1h6a1 1 0 1 0 0-2H5a1 1 0 0 0-1 1"/>
</svg>Get Tickets
        </div>
        </a>';
       ?>

    </div>
    <?php include("../shared/footer.php"); ?>
</body>

</html>