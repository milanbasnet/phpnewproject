<?php 

//database connection with different methods first one is with PDO
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="root";
$dbname="phpfirst";

try {
    $dbh = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    // $dbh = new PDO("host='localhost';port=3306;dbname='phpfirst; user='root'; password='root'");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";

    $sql= "CREATE TABLE users(
        id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(30) NOT NULL,
        phone INT(10) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE,
        password VARCHAR(100) NOT NULL
    )";
    
    $dbh->exec($sql);
    echo "table created";
} 
catch (PDOException $e) {
    echo ' Table creation failed: ' . $e->getMessage();
}

// //second is with MySQLi 
// $host="localhost";
// $port=3306;
// $socket="";
// $user="root";
// $password="root";
// $dbname="phpfirst";

// $conn=mysqli_connect($host, $user, $password);
// echo "connection was successful";


?>