<?php
 include 'connect.php';
 $id = $_GET['updateid'];
$sql= "select * from `crud` where id=$id";

$result = mysqli_query($con,$sql);
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

    $sql = "update `crud` set id = $id ,name='$name',email='$email'
    ,mobile=$mobile,password='$password' where id=$id";
    $result  =  mysqli_query($con,$sql);
    if($result){
        //  echo "data updated";
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
    <title>update page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
  <h1 class="text-center">Update details</h1>
    <form  method="post">
    
  <div class="mb-3">
    <label  class="form-label">Name </label>
    <input type="name"  name="name" class="form-control" value=<?php
    echo $name;
    ?> >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Email </label>
    <input type="email"  name="email" class="form-control" value=<?php
    echo $email;?> >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile </label>
    <input type="number" name="mobile" class="form-control" value=<?php
    echo $mobile;
    ?>>
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" value=<?php
    echo $password;
    ?>>
   
  </div>

  <button type="submit" class="btn btn-primary" name="submit">update</button>


    </form>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>