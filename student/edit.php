<?php include 'conn.php';
$id=$_GET['id'];
$name=$_GET['name'];
$address=$_GET['address'];
$age=$_GET['age'];
$phone=$_GET['phone'];
$class=$_GET['class'];
$parent=$_GET['parent'];
$position=$_GET['position'];
$transport=$_GET['transport'];
$gender=$_GET['gender'];
$email=$_GET['email'];
$dob=$_GET['dob'];
$sql="UPDATE STD SET name='$name',address='$address',age=$age,phone='$phone',class='$class',parent='$parent',position=$position,transport='$transport',gender='$gender',email='$email',dob='$dob'where id=$id;";

$res=$conn->query($sql);
if($res===TRUE){
    header('location:index.php');
}
else{
    echo ("update failed");
}
$conn->close() 
?>