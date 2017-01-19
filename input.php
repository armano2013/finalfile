<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "mysql";
    $database = "recorded";

    $con = mysqli_connect($host, $user, $password, $database);  
   if(empty($_GET['txtAddname'])==false)
  {
	  $test = "INSERT INTO tablenow (Name) VALUES ('". $_GET ['txtAddname']. "');";
  $update=mysqli_query($con, $test);
  echo 'added';
  }
   if(empty($_GET['txtDeleteID'])==false)
  {
	 $delete=mysqli_query($con, "DELETE FROM tablenow WHERE  Name = '". $_GET ['txtDeleteID']. "');");
	 echo 'delete'; 
  }
   if(empty($_GET['txtview'])==true && empty($_GET['txtDeleteID'])==true && empty($_GET['txtAddname'])==true)
  {
	  $sqlall = 'SELECT * FROM tablenow';
	   $result = mysqli_query($con, $sqlall);  
  
        while($row = mysqli_fetch_row($result))
        {
          
          // Test whether row even or odd
          echo "<tr>";
          // Build columns
          echo "<td>$row[0]</td>";
          echo "<td>$row[1]</td>";
          echo "<td>$row[2]</td>";
        
          // End row
          echo "</tr>";
 
        }
  }
   
   ?>