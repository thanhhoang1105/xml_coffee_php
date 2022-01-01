<?php
session_start();
//logout
if(isset($_GET['logout'])){unset($_SESSION['logged_in']);session_destroy();}


//check login
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    //json decode user details from session into an array
    $user_details = json_decode($_SESSION['user_details'],true);
}else{
    exit(header("Location: ../login.php"));
}
?>