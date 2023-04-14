<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link rel="stylesheet" href="./form.css">

</head>
<body>
    <form method="get" action="edit.php">
            <input type="number" name="id" value="<?php echo $_GET['id']; ?>" hidden>
        <div class="list">Name: <input type="text" name="name" value="<?php echo $_GET['name'] ;?>" placeholder="Enter name" required></div>
        <div class="list">Address: <input type="text" name="address" value="<?php echo $_GET['address'];?>" placeholder="Enter  address" required> </div>
<div class="list">Age: <input type="number" name="age" value="<?php echo $_GET['age'] ;?>" placeholder="Enter age" required></div>
<div class="list">Phone no: <input type="number" name="phone" value="<?php echo $_GET['phone']; ?>" placeholder="Enter phone number" required> </div>
<div class="list">Class: <input type="text" name="class" value="<?php echo $_GET['class']; ?>"placeholder="Enter class" required></div>
<div class="list">Guardian's Name: <input type="text" name="parent" value="<?php echo $_GET['parent']; ?>" placeholder="Enter the guardian's name" required></div>
<div class="list">Position: <input type="number" name="position" value="<?php echo $_GET['position']; ?>" placeholder="Enter position" required></div>
<div class="list">DOB: <input type="date" name="dob" value="<?php echo $_GET['dob']; ?>" required> </div>
<div class="list">Gender: <input type="text" name="gender" value="<?php echo $_GET['gender'] ;?>"> </div>
   <div class="list">Gmail: <input name="email" type="email" placeholder="Enter email" value="<?php echo $_GET['email'] ;?>" ></div>
   <div class="list">Transport: <input type="text" name="transport" value="<?php echo $_GET['transport']; ?>"></div> 
       <div class="click"> <button type="submit">EDIT</button></div>
</form>
</body>
</html>