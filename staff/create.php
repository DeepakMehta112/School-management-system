<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="stdb";
    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die("connection failed");
    }
    echo ("connection successful");
    $name = $_GET['name'];
    $address = $_GET['address'];
    $age= $_GET['age'];
    $phone_no= $_GET['phone_no'];
    $position= $_GET['position'];
    $salary= $_GET['salary'];
    $post= $_GET['post'];
    $gender= $_GET['gender'];
    $gmail= $_GET['gmail'];
    $dob= $_GET['dob'];
    $subject= $_GET['subject'];
    $sql="INSERT INTO staff(id,name,address,age,phone_no,position,salary,post,gender,gmail,dob,subject)VALUES(null,'$name','$address',$age,'$phone_no','$position',$salary,'$post','$gender','$gmail',$dob,'$subject')";
    $result = $conn->query($sql);
    if($result === TRUE){
        echo("inserted successfully");
        header("Location:index.php");
    }
    else{
        echo ("could not insert");
    }
    ?>
</body>
</html>
</body>
</html>