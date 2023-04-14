<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>

    <form method="get" action="add.php">
        <div class="list">Name: <input type="text" name="name" placeholder="Enter name" required></div>
        <div class="list">Address: <input type="text" name="address" placeholder="Enter  address" required> </div>
<div class="list">Age: <input type="number" name="age" placeholder="Enter age" required></div>
<div class="list">Phone no: <input type="number" name="phone" placeholder="Enter phone number" required> </div>
<div class="list">Class: <input type="text" name="class" placeholder="Enter class" required></div>
<div class="list">Guardian's Name: <input type="text" name="parent" placeholder="Enter the guardian's name" required></div>
<div class="list">Position: <input type="number" name="position" placeholder="Enter position" required></div>
<div class="list">DOB: <input type="date" name="dob" required> </div>
<div class="list">Gender: <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female </div>
   <div class="list">Gmail: <input name="email" type="email" placeholder="Enter email" ></div>
   <div class="list">Transport: <input type="radio" name="transport" value="yes">Yes<input type="radio" name="transport" value="no">No</div> 
       <div class="click"><button type="submit">ADD</button></div>
       
</form>
</body>
</html>