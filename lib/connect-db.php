<?php
if (!defined('DB_SERVER')) {
    define('DB_SERVER', 'localhost:3306');
}
if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', 'root');
}
if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', '');
}

if (!defined('DB_NAME')) {
    define('DB_NAME', 'test');
}



$conn = null;
$stmt = null;
try {
    $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo 'error in database';
    error_log("Error: " . $e->getMessage());
    die("Database error occurred");
}


// include("../lib/connect-db.php");
//     // Example query
//     $stmt = $conn->prepare("SELECT * FROM hz_user");
//     $stmt->execute();
//     foreach($stmt->fetchAll() as $row) {
//         echo "ID: " . $row['id'] . " - Email: " . $row['email'] . "<br>";
//     }

?>
