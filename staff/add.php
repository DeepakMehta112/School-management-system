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
    <fieldset>
        <legend>Please enter all the details:</legend>
    <form action="create.php" method="GET">
        <label for="name"><b>NAME OF APPLICANT:</b></label>
        <input type="text" name="name" placeholder= "enter your name" required>
        <br> <br>
        <label for="address"><b>ADDRESS:</b></label>
        <input type="address" name ="address" placeholder="enter your address" required> <br>
        <br>
        <label for="age"><b>AGE:</b></label>
        <input type="number" name="age" placeholder="enter your age" required><br>
        <br>
        <label for="phone_no"><b>PHONE_NO:</b></label>
        <input type="number" name="phone_no" placeholder="enter your phonenumber" maxlength="10"required><br>
        <br>
        <label for="position"><b>POSITION:</b></label>
        <input type="text" name="position" placeholder="enter your position"  required><br>
        <br>
        <label for="salary"><b>SALARY:</b></label>
        <input type="number" name="salary" placeholder="enter your salary"  required><br>
        <br>
        <label for="post"><b>POST:</b></label>
        <input type="text" name="post" placeholder="enter your post"  required><br>
        <br>
        <label for="gender"><b>GENDER:</b></label><br>
        <input type="radio" name="gender" value="male"required> male<br>
        <input type="radio" name="gender" value="female"required>female<br>
        <br>
        <label for="gmail"><b>GMAIL:</b></label>
        <input type="text" name="gmail" placeholder="enter your gmail"required><br>
        <br>
        <label for="dob"><b>DATE OF BIRTH:</b></label>
        <input type="date" name="dob" placeholder="enter your dob" required><br>
        <br>
        <label for="subject"><b>SUBJECT:</b></label>
        <input type="text" name="subject" placeholder="enter your subject"  required><br>
        <br>
        <button type="submit">ADD</button>
    </form>
    </fieldset>
    </div>
    <div class="footer"> <footer>&copy;<b>PRAKRITI LIMBU</b></footer></div>
</body>
</html>
