<?php

// Define a constant
define('ROOT_PATH', '/chefproject/');


// require_once('config.php');
require_once('inc/app.php');



$pageName = myAppRequestRoute();
$pageName = explode("?",$pageName)[0];
// ============================================================

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST["form"]) && ($_POST["form"] === "login")){
        $checkUsername = array(
            "column" => "username",
            "operator" => "=",
            "value" => $_POST['username']
        );
        $checkPassword = array(
            "column" => "password",
            "operator" => "=",
            "value" => $_POST['password']
        );
        $where[] = $checkUsername;
        $where[] = $checkPassword;
        $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);
        $admins = db_select($connection,"admins","*",$where);
        // print_r($reciepes); exit;
        if(count($admins) > 0){
            $_SESSION['isSignedIn'] = true;
        }
    }

}
// echo $pageName; exit;
if($pageName == "login"){
    if(isset($_SESSION['isSignedIn']) && $_SESSION['isSignedIn']){
        header("Location: ".ROOT_PATH);
        exit;
    }
}
if($pageName == "admin/addreciepe"){
    if(!isset($_SESSION['isSignedIn']) && ($_SESSION['isSignedIn'] == false)){
        header("Location: ".ROOT_PATH);
        exit;
    }
}
if($pageName == "admin/addcountry"){
    if(!isset($_SESSION['isSignedIn']) && ($_SESSION['isSignedIn'] == false)){
        header("Location: ".ROOT_PATH);
        exit;
    }
}
if($pageName == "logout"){
    unset($_SESSION['isSignedIn']);
    session_unset();
    session_destroy();
    header("Location: ".ROOT_PATH);
    exit;
}




// ============================================================
// Construct the file path
$filePath = 'pages/' . $pageName . '.php';
// echo $filePath; exit;

// Check if the file exists
if (file_exists($filePath)) {
    require_once('layout/header.php');
    // Include or require the file
    require_once($filePath);
    require_once('layout/footer.php');
} else {
    require_once('layout/header.php');
    // File not found, handle the error
    require_once('pages/notfound.php');
    require_once('layout/footer.php');
}
