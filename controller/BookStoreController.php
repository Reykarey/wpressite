<?php
include(APP_PATH . "/models/Book.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['name'])) {
        $name = trim(strip_tags($_POST['name']));
    }
    if(isset($_POST['email'])) {
        $email = trim(strip_tags($_POST['email']));
    }
    if(isset($_POST['msg'])) {
        $msg = strip_tags($_POST['msg']);
    }
}

if(isset($name) && isset($email) && isset($msg)) {
    $result = storeBook($name, $email, $msg);
    if(!$result){
        $_SESSION['errors'][] = "Errorrrr: " . mysqli_error($link);
    }
}

header("Location: /book");
exit;
