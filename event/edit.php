<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $location=$_POST['location'];
    $price=$_POST['price'];
    $fromwhen=$_POST['fromwhen'];
    $towhen=$_POST['towhen'];
    $organizername=$_POST['organizername'];
    $time=$_POST['time'];

    $sql="UPDATE event set title='$title',location='$location',price='$price',fromwhen='$fromwhen',towhen='$towhen',organizername='$organizername',time='$time' where id=$id";
    $res=$conn->query($sql);
    if($res){
        // echo "Data inserted successfully";
        header('location:display.php');
    } else{
        die(mysqli_error($conn));
    }
}


?>


