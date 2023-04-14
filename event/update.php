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





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter the title ">
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="location" placeholder="Enter Location">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label>From When</label>
                <input type="date" class="form-control" name="fromwhen" placeholder="Enter Date">
            </div>
            <div class="form-group">
                <label>To When</label>
                <input type="date" class="form-control" name="towhen" placeholder="Enter Date">
            </div>
            <div class="form-group">
                <label>Organizer Name</label>
                <input type="text" class="form-control" name="organizername" placeholder="Enter Org name">
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="time" class="form-control" name="time" placeholder="Enter time">
            </div>
            


            <button type="submit" class="btn btn-primary" name="submit">Update</button>
</body>

</html>