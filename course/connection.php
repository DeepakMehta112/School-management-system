<?php
$conn=new mysqli('localhost','root','','School_Management');
if (!$conn) {
    die('Connection Failed');
    # code...
} else {
    echo ("Connection Established.");
    $conn->close();
    
    # code...
}


?>