<?php
$conn=new mysqli('localhost','root','','School_Management');
if (!$conn) {
    die('Connection Failed');
    # code...
} else {
    // echo ("Connection Established.");
    // $conn->close();
    // $id=$_GET['id'];
    $course_name=$_GET['cname'];
    $duration=$_GET['duration'];
    $desc=$_GET['desc'];
    $syllabus=$_GET['syllabus'];
    $fee=$_GET['fee'];
    $disc_fee=$_GET['disc_fee'];
    $remark=$_GET['remark'];
    $sql="INSERT INTO courses (id,course_name,duration,description,syllabus,fee,discounted_fee,remarks) VALUES(null,'$course_name','$duration','$desc','$syllabus','$fee','$disc_fee','$remark')";
    $result=$conn->query($sql);
    if($result===TRUE){
        header('location:record.php');
        // echo ("Successful");

    }
    $conn->close();
    
    # code...
}


?>