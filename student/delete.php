<?php include 'conn.php';
$id=$_GET['id'];
$sql="DELETE FROM STD where id=$id; ";
$res=$conn->query($sql);
if($res===TRUE){
    header("location:index.php");
}
else{
    echo ("Deletion failed");
}
?>                                         
