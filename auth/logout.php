<?php
include("../lib/cookie.php");

logoutUser();

// Redirect to home or login page
header("Location: ../index.php");
exit();
?>