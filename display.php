<?php
include "connect.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
      <h1 class="text-center">CRUD Operation</h1>
        <a href="user.php"><button class="btn btn-success mt-5 p-xxl-5">Add User</button></a>
<table class="table mt-5 ">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from `crud`";
    $result = mysqli_query($con,$sql);
    if($result){
        while ($row= mysqli_fetch_assoc($result)) {
            # code...
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <a href="update.php?updateid='.$id.'"><button class="btn btn-primary text-lignt">update</button></a>
            <a href="delete.php?deleteid='.$id.'"><button class="btn bg-danger text-light ">Delete</button></a> 
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