<?php 
    $servername="localhost";
    $username= "root";
    $password="root";
    $databasename="harry";

    // * if database is to create from here above databasename is not mentioned and created database using query from here


    $con=mysqli_connect($servername, $username, $password, $databasename);
    if(!$con){
        die("failed to connect". mysqli_connect_error());
    }
    else{
        echo "connection successful";
    }
    // // * create db 
    // $sql= "CREATE DATABASE databasename";
    // $result= mysqli_query($con, $sql);

    $sql="CREATE TABLE `users`(
        id INT(4) NOT NULL AUTO_INCREMENT,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE,
        phone INT(10) NOT NULL,
        password VARCHAR(100) NOT NULL, 
        PRIMARY KEY (id)  --define primary key as this 
    )";
    if(mysqli_query($con, $sql)){
        echo "table users created successfully";
    }
    else{
        echo "Error creating table: ".mysqli_error($con);
    }
    mysqli_close($con);

// // database connection(object oriented)

//         $con= new mysqli($servername, $username, $password, $databasename);
//         if($con->connect_error){
//             die("connection failed: ".$con->connect_error);
//         }
//         else{
//             echo "connection successfull";
//         }

//         $sql="CREATE TABLE `users`(
//         id INT(4) NOT NULL  AUT0_INCREMENT PRIMARY KEY,
//         name VARCHAR(30) NOT NULL,
//         email VARCHAR(70) NOT NULL UNIQUE,
//         phone INT(10) NOT NULL,
//         password VARCHAR(100) NOT NULL
//     )";

//     if($con->query($sql===TRUE)){  //showing error empty query
//         echo "table users created successfully";
//     }
//     else{
//         echo "Error creating table: ".$con->error;
//     }
//     $con->close();
?>

