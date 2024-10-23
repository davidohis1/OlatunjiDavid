<?php

require 'connect.php';
$id = $_GET['id'];

echo $id;
mysqli_query($conn, "DELETE * FROM carts WHERE id= '$id'  ");
header("Location: index.php");
?>