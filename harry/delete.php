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

      $sql="DELETE FROM `users` WHERE `id`=2";
      $result=mysqli_query($connection, $sql);
      if($result){
          echo "deleted successfully";
      }
      else{
          echo "error deleteing".mysqli_error($connection);
      }
?>