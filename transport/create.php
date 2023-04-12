<?php
$servername="localhost";
$username="root";
$password="";
$database="school management system";
$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    # code...
    die("Failed");
} else {
    # code...
    $Bus_no=$_GET['Bus_no'];
    $Route=$_GET['Route'];
    $Driver_name=$_GET['Driver_name'];
    $Phone_no=$_GET['Phone_no'];
    $Fee=$_GET['Fee'];
    $Remark=$_GET['Remark'];
    // echo ($title);
    $sql="INSERT INTO transport (id,title,rating,description) VALUES (null,' $Bus_no','$Route','$Driver_name',' $Phone_no','$Fee','$Remark')";

    $res=$conn->query($sql);
    if ($res===TRUE) {
        # code...
        echo "Added successfully";
        header("location:index.php");
    } else {
        # code...
    }
    
}


?>