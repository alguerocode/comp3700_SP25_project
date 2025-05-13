<?php 

$is_auth = false;
$cookie_name = 'userid';
$userid = '';

// Get a cookie
if (isset($_COOKIE["theme"])) {
    echo "Current theme: " . $_COOKIE["theme"];
}

// Delete a cookie
setcookie("theme", "", time() - 3600, "/");


// create cookie
function createCookie(&id) {
    setcookie($cookie_name, $id, time() + (86400 * 30), "/");
    $userid = $id;
}

// delete cookie
function deleteCookie() {
    setcookie($cookie_name, "", time() - 3600, "/");
}

// get cookie
function getCookieUserid() {
    if (isset($_COOKIE[$cookie_name])) {
        $userid = $_COOKIE[$cookie_name]; 
        return $_COOKIE[$cookie_name];
    }
    return ''
}


// logout
function logoutUser(){
    deleteCookie();
    header("Location: index.php");
    exit();
}
// protect auth routes
function protectAuthRoutes() {
    $ck = getCookieUserid();
    if(strlen($ck) == 0) {
        header("Location: /auth/login.php");
        exit();
    }
}

// protect unauth routes
function protectUnAuthRoutes() {
    $ck = getCookieUserid();
    if(strlen($ck) != 0) {
        header("Location: index.php");
        exit();
    }
}

?>