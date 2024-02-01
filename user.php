<?php
 include 'connect.php';
 if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result  =  mysqli_query($con,$sql);
    if($result){
        // echo "data inserted";
        header("location:display.php");
        
    }else{
        die(mysqli_error($con));
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
<h1 class="text-center ">Add details</h1>    

<form  method="post">

    
  <div class="mb-3">
    <label  class="form-label">Name </label>
    <input type="name"  name="name" class="form-control" autocomplete="off" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Email </label>
    <input type="email"  name="email" class="form-control"autocomplete="off" >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile </label>
    <input type="number" name="mobile" class="form-control" autocomplete="off" >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" autocomplete="off" >
   
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Add User</button>

    </form>
    

</div>

</body>
</html>