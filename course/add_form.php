<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="add_form.css">
</head>
<body >
    <h1 >ADD MORE</h1>
    <div class="container" >
    
    <div class="_form">
    <form action="add.php" method="get" class="block text-center">
        <!-- ID : <input type="number" hidden> -->
        <label>Course Name :</label> <input type="text" placeholder="Course name here." name="cname"><br><br>
        <label>Duration :</label> <input type="varchar" placeholder="Course duration." name="duration"><br><br>
        <label>Description :</label> <input type="textarea" placeholder="Course description." name="desc"><br><br>
        <label>Syllabus :</label> <input type="varchar" placeholder="Course syllabus." name="syllabus"><br><br>
        <label>Fee :</label> <input type="number" placeholder="Fee." name="fee"><br><br>
        <label>Discounted fee :</label> <input type="number" placeholder="Course syllabus." name="disc_fee"><br><br>
        <label>Remarks :</label> <input type="textarea" placeholder="Remarks." name="remark"><br><br>
        <button type="submit" class="btn1">Done</button>
    </form>
    </div>
    </div>
</body>
</html>