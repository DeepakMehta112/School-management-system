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
    $database="school_management";
    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die("connection failed");
    }
    $id= $_GET['id'];
    $name=$_GET['name'];
    $address=$_GET['address'];
    $age=$_GET['age'];
    $phone_no=$_GET['phone_no'];
    $position=$_GET['position'];
    $salary=$_GET['salary'];
    $post=$_GET['post'];
    $gender=$_GET['gender'];
    $gmail=$_GET['gmail'];
    $dob=$_GET['dob'];
    $subject=$_GET['subject']; 
    $sql = "UPDATE staff SET name='$name',address='$address',age=$age,phone_no='$phone_no',position='$position',salary=$salary,post='$post',gender='$gender',gmail='$gmail',dob=$dob,subject='$subject' where id=$id";
    $result = $conn->query($sql);
    if($result === TRUE){
        echo("updated successfully");
        header("Location:index.php");
    }
    else{
        echo ("could not update");
    }
    ?>
</body>
</html>
</body>
</html>