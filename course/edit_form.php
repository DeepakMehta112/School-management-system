<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit-form.css">
</head>
<body >
    <h1 >EDIT EXISTING DATA.</h1>
    <div class="container" >
    
    <div class="_form">
    <form action="edit.php" method="get">
        <!-- <label>ID :</label> <input type="number" hidden name="id" value="<?php echo($_GET['id']);?>"><br><br> -->
        <label>Course Name :</label> <input type="text" placeholder="Course name here." name="cname" value="<?php echo($_GET['cname']);?>"><br><br>

        <label>Duration :</label> <input type="varchar" placeholder="Course duration." name="duration" value="<?php echo($_GET['duration']);?>"><br><br>

        <label>Description :</label> <input type="textarea" placeholder="Course description." name="desc" value="<?php echo($_GET['desc']);?>"><br><br>

        <label>Syllabus :</label> <input type="varchar" placeholder="Course syllabus." name="syllabus" value="<?php echo($_GET['$syllabus']);?>"><br><br>

        <label>Fee :</label> <input type="number" placeholder="Fee." name="fee" value="<?php echo($_GET['fee']);?>"><br><br>

        <label>Discounted fee :</label> <input type="number" placeholder="Course syllabus." name="disc_fee" value="<?php echo($_GET['disc_fee']);?>"><br><br>

        <label>Remarks :</label> <input type="textarea" placeholder="Remarks." name="remark" value="<?php echo($_GET['remark']);?>"><br><br>
        
        <button type="submit" class="btn1">Done</button>
    </form>
    </div>
    </div>
</body>
</html>