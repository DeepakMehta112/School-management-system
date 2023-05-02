<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,300,0,0" />
</head>
<body>
    <div class="u">
        <h1>YOUR UNIVERSITY</h1>
    </div>
    <div class="s">
        <h2>School Managemanet System</h2>
        <br>
        <a href="add.php"> <span class="material-symbols-outlined">add</span></a>
    </div>
    
    <?php
    include('connection.php');
    ?>
    <div class="main">
<div class="container">
    <table>
 <tr>
    <th>id</th>
    <th>name</th>
    <th>address</th>
    <th>age</th>
    <th>phone_no</th>
    <th>position</th>
    <th>salary</th>
    <th>post</th>
    <th>gender</th>
    <th>gmail</th>
    <th>dob</th>
    <th>subject</th>
    <th>actions</th>
</tr>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="school_management";
    $conn=new mysqli($servername,$username,$password,$database);
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while( $row= $result->fetch_assoc()){
             ?>
            
        <tr>
              <td>   <?php echo$row['id'];?></td>
                <td>   <?php echo$row['name'];?></td>

                <td>  <?php echo$row['address'];?></td>

                <td> <?php echo$row['age'];?></td>

                <td> <?php echo$row['phone_no'];?></td>

                <td>  <?php echo$row['position'];?></td>

                <td> <?php echo$row['salary'];?></td>

                <td> <?php echo$row['post'];?></td>

                <td><?php echo$row['gender'];?></td>

                <td><?php echo$row['gmail'];?></td>

                <td>  <?php echo$row['dob'];?></td>

                <td> <?php echo $row['subject'];?></td>
                <td>
                <a href="editform.php?id=<?php echo $row['id'];?>&name=<?php echo $row['name'];?>&address=<?php echo$row['address'];?>&age=<?php echo $row['age'];?>&phone_no=<?php echo $row['phone_no'];?>&position=<?php echo$row['position'];?>&salary=<?php echo $row['salary'];?>&post=<?php echo $row['post'];?>&gender=<?php echo $row['gender'];?>&gmail=<?php echo$row['gmail'];?>&dob=<?php echo $row['dob'];?>&subject=<?php echo $row['subject'];?>">&#9998;</a>    
<<<<<<< HEAD

                <a href="delete.php?id=<?php echo $row['id'];?>"><i class="material-icons">delete</i></a>
=======
                <a href="delete.php?id=<?php echo $row['id'];?>"><i class="material-icons"></i></a>
>>>>>>> a389f3f3945fd0143716d95a79abf33c4743e67b
                </td>
             </tr> 
            </div>
        </div>
        <?php       
        }}
        $conn->close();
        ?>
        </table>
    </div>
    </div>
</body>
</html>