<?
if( isset($_GET["medid"]) ) {
    $medid = $_GET["medid"];


    //create connection

    $hostname ="localhost";
    $username="root";
    $password="";
    $db_name= "mini";
    
    
    $conn = mysqli_connect($hostname,$username,$password,$db_name);

 $sql = "DELETE FROM medicine WHERE medid=$medid";
 $conn->query($sql);

}
 

header("location: /medshoppe/medicinelist.php");
exit;
?>
