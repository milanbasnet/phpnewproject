<?php 
    $servername='localhost';
    $username='root';
    $password='root';
    $dbname='harry';

    $connection=mysqli_connect($servername, $username, $password, $dbname);
    if(!$connection){
        echo "failed to connect".mysqli_error($connection);
    }
    else{
        echo "connected";
    }

    $sql="SELECT * FROM `users` WHERE `name`='milan'";
    $result=mysqli_query($connection, $sql);

    $number=mysqli_num_rows($result);
    echo $number;

    if($number>0){
        while($row=mysqli_fetch_assoc($result)){
            echo $row['id'].$row['name'].$row['phone']."\n";
        }
    }

    //uses of where clause to update data
    $sql= "UPDATE `users` SET `name`='milanji' WHERE `id`=1";
    $result=mysqli_query($connection, $sql);
    $aff=mysqli_affected_rows($connection);
    echo "number of affected rows".$aff;

    if($result){
        echo "updated successfully";
    }
    else{
        echo "not updated";
    }
?>