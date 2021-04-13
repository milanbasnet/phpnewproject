<?php
$servername="localhost";
$username= "root";
$password="root";
$databasename="harry";

$con=mysqli_connect($servername, $username, $password, $databasename);
if(!$con){
    die("failed to connect". mysqli_connect_error());
}
else{
    echo "connection successful";
}
$name="Suraj";
$phone=964545;
$email="suraj@gmail.com";
$password="surajvai";
// $sql= "INSERT INTO `users`(name, phone, email, password) VALUES('Milan','962548', 'milan@gmail.com','gfdgjhdjfk')"; //without using variables
$sql= "INSERT INTO `users`(name, phone, email, password) VALUES('$name','$phone', '$email','$password')";
$result= mysqli_query($con, $sql);

if($result){
    echo "data inserted";
}
else{
    echo "not inserted".mysqli_error($con);
}
?>