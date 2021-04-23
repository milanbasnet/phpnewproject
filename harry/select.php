<?php
$servername= 'localhost';
$username='root';
$password='root';
$dbname='harry';

$connection= mysqli_connect($servername, $username, $password, $dbname);
if(!$connection){
    echo "not connected".mysqli_error($connection);
}
else{
    echo "connected sussfully";
}
$select="SELECT * FROM `users`";

$result=mysqli_query($connection, $select);

$num=mysqli_num_rows($result);  // checking the number of rows in database
echo $num;

//display the rows returned by query
if($num>0){
   while($row=mysqli_fetch_assoc($result)){   //gives first row or only one row and while loop gives the total rows
    echo $row['name']. $row['phone']."\n";   // displays 
   } 
}

?>