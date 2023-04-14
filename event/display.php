<?php
include 'connect.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operetion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> Add User </a>
    
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Location</th>
      <th scope="col">price</th>
      <th scope="col">fromwhen</th>
      <th scope="col">Towhen</th>
      <th scope="col">Organizer Name</th>
      <th scope="col">Time</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

<?php
$sql="SELECT * from event";
$res=mysqli_query($conn,$sql);
if($res){
    // $row=mysqli_fetch_assoc($res);
    // echo $row['title'];
    while( $row=mysqli_fetch_assoc($res)){
        $id=$row['id'];
        $title=$row['title'];
        $location=$row['location'];
        $price=$row['price'];
        $fromwhen=$row['fromwhen'];
        $towhen=$row['towhen'];
        $organizername=$row['organizername'];
        $time=$row['time'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$title.'</td>
        <td>'.$location.'</td>
        <td>'.$price.'</td>
        <td>'.$fromwhen.'</td>
        <td>'.$towhen.'</td>
        <td>'.$organizername.'</td>
        <td>'.$time .'</td>
        <td>
    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
</td>
      </tr>';
        
    }

}

?>

  </tbody>
</table>
    </div>
    
</body>
</html>