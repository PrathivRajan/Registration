<?php
//include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
     
<head>
  <title>MOBILE MECHANIC</title>
    <link rel="icon" href="images/icon1.png" type="image/gif">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>-->
 <style>
     
body {
  background-image: url('reg.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
    background-color: #fb8a4d;
}
    </style>
</head>
<body>
<div>
  <div class="container" style="padding-top:5%;">
      
   <form class="form-horizontal" method="post">
     <div class="form-group">
      <label class="control-label col-sm-2"></label>
      <div class="col-sm-6">
        <h1><u>Registration   </u></h1>
      </div>
    </div>  
    <div class="form-group">
      <label class="control-label col-sm-2">Name  :  </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="place" placeholder="Enter your Name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Phone  :  </label>
      <div class="col-sm-6">
        <input type="tel" class="form-control" id="place" placeholder="Enter your Name" name="ph">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Address  :  </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="place" placeholder="Enter your Name" name="add">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Categary  :  </label>
        <div class="col-sm-6">
      <select id="place" class="form-control" name="cate">
      <option value="">Select</option>
      <option value="Admin">Admin</option>
      <option value="Mechanic">Mechanic</option>
      <option value="User">User</option>
      </select>
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">UserName  :  </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="place" placeholder="Enter your username" name="uname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:  :  </label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="place" placeholder="Enter your password" name="pwd">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-6">
        <input type="submit" name="sb" class="btn btn-danger" value="Registor">&nbsp;&nbsp;&nbsp;
          Click Me For Login: <a style="color:white;" href="index.php"><u>Click Me</u></a>
      </div>
    </div>
  </form>
  </div>
</div>
</body>
</html>

<?php
if(isset($_POST['sb']))
{
    $name=$_POST['name'];
    $phone=$_POST['ph'];
    $address=$_POST['add'];
    $category=$_POST['cate'];
    $username=$_POST['uname'];
    $password=$_POST['pwd'];
    $query="INSERT INTO `registration`(`name`, `phone`, `address`, `category`, `username`, `password`) VALUES ('$name','$phone','$address','$category','$username','$password')";
    $res=mysqli_query($con,$query) or die(mysqli_error($con));
    if(!empty($res))
    {
        header('location:index.php');
    }
    else
    {
        echo'<script>alert("Please Try Again")</script>';
    }
}
?>