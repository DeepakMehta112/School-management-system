<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from event where id=$id";
    $res=mysqli_query($conn,$sql);
    if($res){
        // echo "deleted";
        header('location:display.php');
    } else{
        echo "not";
    }
}

?>