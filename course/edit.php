<?php
$conn=new mysqli('localhost','root','','school_management');
if (!$conn) {
    die("Connection Failed.");
    # code...
} else {
    # code...
    // echo "success";
    $id=$_GET['id'];
    $course_name=$_GET['cname'];
    $duration=$_GET['duration'];
    $description=$_GET['desc'];
    $syllabus=$_GET['syllabus'];
    $fee=$_GET['fee'];
    $discounted_fee=$_GET['disc_fee'];
    $remarks=$_GET['remark'];
    $sql="UPDATE courses SET course_name='$course_name',duration='$duration',description='$description',syllabus='$syllabus',fee='$fee',discounted_fee='$discounted_fee',remarks='$remarks' WHERE id=$id";
    $result=$conn->query($sql);
    if ($result===TRUE) {
        header('location:record.php');
        # code...
    } else {
        # code...
    }
    $conn->close();
}





?>