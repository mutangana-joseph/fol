<?php

session_start();

if(!isset($_SESSION["role"])){
    header("Location: ./index.php");
    exit();
}
$first_name = $_SESSION["name"];

?>