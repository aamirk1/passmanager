<?php
include("conn.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $website = $_POST['website'];

    $sql = "INSERT INTO `pass_details`(`id`, `name`, `username`, `email`, `password`, `website`) VALUES (NULL,'$name','$username','$email','$password','$website')";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location:home.php?msg=new record created successfully");
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Password Manager</title>
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color: #00ff5563">Password Manager</nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Add Password</h3>
            <p class="text-muted">Complete the form</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vm; min-width: 300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Name: </label>
                        <input type="text" class="form-control" required name="name" placeholder="Google">
                    </div>
                    <div class="col">
                        <label class="form-label">Username: </label>
                        <input type="text" class="form-control" required name="username" placeholder="admin123">
                    </div>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">E-mail: </label>
                    <input type="email" class="form-control" required name="email" placeholder="example123@gmail.com">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Password: </label>
                    <input type="password" class="form-control" required name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Website: </label>
                    <input type="url" class="form-control" required name="website" placeholder="https://www.google.com/">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="home.php" class="btn btn-danger">Cancel</a>
                </div>
        </form>
        </div>
    </div>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>