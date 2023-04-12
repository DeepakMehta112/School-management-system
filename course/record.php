<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="record.css">
    <script
      src="https://kit.fontawesome.com/3283cfe58e.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <h1>our courses.</h1>
    <div class="operations">
    <a href="add_form.php"><i class="fa-solid fa-plus fa-5x "></i></a>
    </div>
    <div class="container">
        <table border="2px solid black">
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Duration</th>
                <th>Description</th>
                <th>Syallabus</th>
                <th>Fee</th>
                <th>Discounted_fee</th>
                <th>Remarks</th>
                <th>Actions</th>

            </tr>
            <?php
            $conn=new mysqli('localhost','root','','School_Management');
            if (!$conn) {
                die('Connection Failed');
                # code...
            } else {
                $sql="SELECT * FROM courses";
                $result=$conn->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo($row['id']);?></td>
                            <td><?php echo($row['course_name']);?></td>
                            <td><?php echo($row['duration']);?></td>
                            <td><?php echo($row['description']);?></td>
                            <td><?php echo($row['syllabus']);?></td>
                            <td><?php echo($row['fee']);?></td>
                            <td><?php echo($row['discounted_fee']);?></td>
                            <td><?php echo($row['remarks']);?></td>
                            <td>
                            <a href="edit_form.php?id=<?php echo($row['id']);?>&cname=<?php echo($row['course_name']);?>&duration=<?php echo($row['duration']);?>&desc=<?php echo($row['description']);?>&$syllabus=<?php echo($row['syllabus']);?>&fee=<?php echo($row['fee']);?>&disc_fee=<?php echo($row['discounted_fee']);?>&remark=<?php echo($row['remarks']);?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="delete.php?id=<?php echo($row['id']);?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php

                    }
                }
            }
            ?>
        </table>
    </div>
    
</body>
</html>