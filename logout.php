<?php
     session_start();
     //$_SESSION["id"];
     // $_SESSION["username"];
     $_SESSION["user"];

     //unset($_SESSION["id"]);
     // unset($_SESSION["username"]);
     unset($_SESSION["user"]);
     session_unset();
     session_destroy();

     header("location:login.php");
?>
