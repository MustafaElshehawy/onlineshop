<?php
include("config.php");

if(isset($_POST['add'])){
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $addcard=mysqli_query($con,"INSERT INTO addcard (name ,price) VALUES('$NAME','$PRICE')");
    header('location: card.php');
}
?>