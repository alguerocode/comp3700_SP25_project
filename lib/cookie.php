<?php 

$is_auth = false;
$cookie_name = 'name';
$userid = '';

// Get a cookie
if (isset($_COOKIE["theme"])) {
    echo "Current theme: " . $_COOKIE["theme"];
}

// Delete a cookie
setcookie("theme", "", time() - 3600, "/");


// create cookie
function createCookie($id) {
    global $cookie_name, $userid;
    setcookie($cookie_name, $id, time() + (86400 * 30), "/");
    $userid = $id;
}

// delete cookie
function deleteCookie() {
    global $cookie_name;
    setcookie($cookie_name, "", time() - 3600, "/");
}

// get cookie
function getCookieUserid() {
    global $cookie_name;
    global $userid;
    if (isset($_COOKIE[$cookie_name])) {



        $dbID = '';
        include ("connect-db.php");
        $stmt = $conn->prepare("SELECT * FROM `hz_user` WHERE `id` =  '$_COOKIE[$cookie_name]';");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && isset($result['id'])) {
             $dbID = $result['id'];
        }
        $userid = $_COOKIE[$cookie_name];


        if ($dbID == $userid) {
            return $_COOKIE[$cookie_name];
        }
        else {
            logoutUser();
        }

        return $_COOKIE[$cookie_name];
    }
    return '';
}


// logout
function logoutUser(){
    deleteCookie();
    header("Location: ../index.php");

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