<?php   
$conn=new mysqli('localhost','root','','ob_db');

if(!$conn){
    die(mysqli_error($conn));
}

?>