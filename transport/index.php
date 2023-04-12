<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport</title>
    <link rel="stylesheet" href="index.css">
    <script
      src="https://kit.fontawesome.com/3283cfe58e.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <a href="form.php" text-align="center"><h1> Transport</h1></a>
<div class="content">
            <div class="table">
                <table border="1px solid black">
                    <tr>
                        <th>Bus_no</th>
                        <th>Route</th>
                        <th>Driver_man</th>
                        <th >Phone_no</th>
                        <th >Fee</th>
                        <th >Remark</th>
                    </tr>
<?php
$servername="localhost";
$username="root";
$password="";
$database="school management system";
$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    # code...
    die("connection failed.");
} else {
    # code...
    // echo("Connection established.");
    $sql="SELECT * FROM transport ";
    $res=$conn->query($sql);
    if ($res->num_rows>0) {
       while($row=$res->fetch_assoc()){
       ?>
       <tr>
           
            <td>
                <a href="edit.php"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="delete.php?id=<?php echo($row['id']);?>"><i class="fa-solid fa-trash"></i></a>
            </td>
       </tr>
   <?php
       
    }
    } else {
        # code...
        echo("There are no data in the database.");
    }
    
    $conn->close();
}

?>

                 </table>
    </div>
</div>
</body>
</html>