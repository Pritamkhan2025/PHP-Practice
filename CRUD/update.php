<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP CRUD</title>
  </head>
  <body>
    <h2>Registration Form:</h2>


    <?php
 
    include "config.php";

    $id = $_GET['updateid'];

    $sql = "SELECT * FROM 'user' WHERE id='$id'";

    $result = mysqli_query($conn, $sql);
    
     $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];

    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];



    $sql = "UPDATE `user` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id='$id' ";

    $result = mysqli_query($conn, $sql);

    if($result){
      echo "Updated succesfully";
      //header('location:view.php');

    }else{
      die(mysqli_error($conn));
      
    }
    }
    

    ?>


    <div class="container my-3">
<form action = "" method = "POST" >
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name= "name"   placeholder="Enter your name" value=<?php echo $name?>>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name= "email" placeholder="Enter email"<?php echo $email?>>
  </div>
  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" name= "mobile"  placeholder="Enter mobile number"<?php echo $mobile?>>
  </div> 
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name= "password" placeholder="Enter your Password"<?php echo $password?>>
  </div>
  <button type="submit" class="btn btn-primary" name= "submit" >Submit</button>
</form>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

    
