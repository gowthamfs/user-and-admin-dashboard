<?php include("./includes/header.php"); ?>
<?php include './config/dbcon.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sample Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
 <div class="container my-5">
    <table class="table">
  <thead>
    <tr> 
      <th scope="col">SI No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>
    
  <?php


$con = mysqli_connect('localhost', 'root', '', 'phpecom') or die("Connection failed:" .mysqli_connect_error());
$sql="Select * from users"; //select all from sql database
$resut=mysqli_query($con, $sql); // result: common for all pages

if($resut)
{
    while($row=mysqli_fetch_assoc($resut))
    {
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td scope="row">'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$password.'</td>
      </tr>';
    }
}
?>


  </tbody>
</table>
 </div>   
</body>
</html>