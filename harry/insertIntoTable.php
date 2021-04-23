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

// // * practice section
// $servername='localhost';
// $username='root';
// $password='root';
// $databasename='harry';

// $connection= mysqli_connect($servername, $username, $password, $databasename);
// if(!$connection){
// die("failed to connect".mysqli_error($connection));
// }
// else{
//     echo "connected";
// }
// $sql="CREATE TABLE `next1`(
//     id INT(6) NOT NULL AUTO_INCREMENT,
//     name VARCHAR(40) NOT NULL,
//     password VARCHAR(70) NOT NULL,
//     email VARCHAR(100) NOT NULL UNIQUE,
//     PRIMARY KEY(id)
// )";

// $result= mysqli_query($connection, $sql);
// if($result){
//     echo "table next created";
// }
// else{
//     echo "table not created".mysqli_error($connection);
// }
// //insert into table
// $insert= "INSERT INTO `next`(name, email, password) VALUES('Milan', 'mngfdsi@gmail.com', 'jgkasdjg')";
// $result1=mysqli_query($connection, $insert);
// if($result){
//     echo "inserted";
// }
// else {
//     echo "not insertd".mysqli_error($connection);

// }
// //* practice section ends

?>

