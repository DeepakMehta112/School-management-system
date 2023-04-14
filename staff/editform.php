<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="f">
        <h2>STUDENT INFORMATION COLLECTION FORM</h2>
    </div>
    <fieldset>
        <legend> <b>Please enter all the details:</b></legend>
    <form action="edit.php" method="GET">
        <input type="number" name="id" placeholder="enter your id" value="<?php echo $_GET['id'];?>">
<br>
        <label for="name">NAME:</label>
        <br>
        <input type="text" name="name" placeholder= "enter your name" value="<?php echo$_GET['name'];?>" required>
<br>
        <label for="address">ADDRESS:</label><br>
        <input type="address" name ="address" placeholder="enter your address" value ="<?php echo$_GET['address'];?>" required>
<br>
        <label for="age">AGE:</label><br>
        <input type="age" name="age" placeholder="enter your age" value="<?php echo$_GET['age'];?>" required>
<br>
        <label for="phone_no">PHONE_NO:</label><br>
        <input type="text" name="phone_no" placeholder="enter your phonenumber" maxlength="10" value="<?php echo $_GET['phone_no'];?>" required>
        <br>
        <label for="position">POSITION:</label><br>
        <input type="text" name="position" placeholder="enter your position" value="<?php echo$_GET['position'];?>" required>
<br>
        <label for="salary">SALARY</label><br>
        <input type="number" name="salary" placeholder="enter your salary"  value="<?php echo$_GET['salary'];?>" required>
<br>
        <label for="post">POST:</label><br>
        <input type="text" name="post" placeholder="enter your post" value="<?php echo$_GET['post'];?>" required>
        <br>
        <label for="gender">GENDER:</label><br>
        <input type="radio" name="gender" value="<?php echo$_GET['gender'];?>" required> male 
        <input type="radio" name="gender" value="<?php echo$_GET['gender'];?>"required>female
<br>
        <label for="gmail">GMAIL:</label><br>
        <input type="text" name="gmail" placeholder="enter your gmail" value="<?php echo$_GET['gmail'];?>" required>
<br>
        <label for="dob">DATE OF BIRTH:</label>
        <input type="date" name="dob" placeholder="enter your dob"value="<?php echo$_GET['dob'];?>" required>
    <br>
        <label for="subject">SUBJECT:</label>
        <input type="text" name="subject" placeholder="enter your subject" value="<?php echo$_GET['subject'];?>" required>
        <br>
        <br>
        <button type="submit">ADD</button>
    </form>
    </fieldset>
    <div class="footer"> <footer>&copy;<b>PRAKRITI LIMBU</b></footer></div>
</body>
</html>
