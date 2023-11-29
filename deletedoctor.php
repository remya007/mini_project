<?php

if( isset($_GET["id"]) ) {
    $id = $_GET["id"];


    //create connection

    $hostname ="localhost";
    $username="root";
    $password="";
    $db_name= "mini";
    
    
    $conn = mysqli_connect($hostname,$username,$password,$db_name);

 $sql = "DELETE FROM doctor WHERE id=$id";
 $conn->query($sql);

}

header("location: /medshoppe/doctorlist.php");
exit;
?>
