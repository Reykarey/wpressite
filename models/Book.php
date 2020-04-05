<?php
include(APP_PATH."/models/Model.php");

function storeBook($name, $email, $msg)
{
    global $link;
    $sql = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
    return mysqli_query($link, $sql);
}
