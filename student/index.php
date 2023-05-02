<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="./style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>   

</head>
<body>
    <div class="head"><h2>DREAM HIGH SCHOOL</h2></div>
    <div class="add"><a href="./addform.php"><i class='fas fa-plus' style='font-size:25px;color:purple'></i></a></div>
<div class="container">
        <?php include 'conn.php';
        $sql= "SELECT * FROM std";
        $res=$conn->query($sql);
        if($res->num_rows>0){
            while($row=$res->fetch_assoc()){
                ?>
                <div class="desc">
                <div class="id"><?php echo $row['id'];?>. 
                <?php echo $row['name'];?></div>
                <br>
                <div class="person">
                 <div class="gender">Gender: <?php echo $row['gender']; ?></div>
                 <div class="age">Age: <?php echo $row['age']; ?></div>
                 <div class="address">Address: <?php echo $row['address'];?></div>
                 <div class="phone">Phone no:  <?php echo $row['phone']; ?></div>
                 <div class="class">Class:  <?php echo $row['class']; ?></div>
                 <div class="post">Position:  <?php echo $row['position']; ?></div>
                 <div class="dob">DOB:  <?php echo $row['dob']; ?></div>
                 <div class="parent">Guardian:  <?php echo $row['parent']; ?></div>
                 <div class="mail">Gmail:  <?php echo $row['email']; ?></div>
                 <div class="transport">Transport:  <?php echo $row['transport']; ?></div>
                </div>
                <div class="modify">
                <a href="./editform.php?id=<?php echo $row['id'];?>&name=<?php echo $row['name'];?>&address=<?php echo $row['address'];?>&age=<?php echo $row['age'];?>&phone=<?php echo $row['phone'];?>&class=<?php echo $row['class'];?>&parent=<?php echo $row['parent'];?>&position=<?php echo $row['position'];?>&transport=<?php echo $row['transport'];?>&gender=<?php echo $row['gender'];?>&email=<?php echo $row['email'];?>&dob=<?php echo $row['dob'];?>">
                <i class='fas fa-pen' style='font-size:15px'></i></a>
                <a href="./delete.php?id=<?php echo $row['id'];?>"><i class='far fa-trash-alt' style='font-size:15px'></i></a>
            </div>
                </div>


                <?php
            }
        }
        
       $conn->close() ;?>
</div>
</body>
<script src="./script.js"></script>
</html>