<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'book');
$con = 'no';

if(!empty($_SESSION['id'])){
    $con = 'yes';
 }else{
     header("Location: login.php");
 }
 
//  error_reporting(E_ERROR | E_PARSE);
?>