<?php
include("conn.php");
$id = $_GET['id'];

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $website = $_POST['website'];

    $sql = "UPDATE `pass_details` SET `name`='$name',`username`='$username',`email`='$email',`password`='$password',`website`='$website' WHERE id=$id";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location:home.php?msg=Data Updated successfully");
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
            <h3>Edit Password Data</h3>

        <a href="logout.php" class="btn btn-dark mb-3 float-end">logout</a>
            <p class="text-muted">Click to Update</p>
        </div>
        <?php
        $sql = "SELECT * FROM `pass_details` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vm; min-width: 300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Name: </label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Username: </label>
                        <input type="text" class="form-control" name="username" value="<?php echo $row['username']?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">E-mail: </label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password: </label>
                    <input type="password" class="form-control" name="password" value="<?php echo $row['password']?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Website: </label>
                    <input type="url" class="form-control" name="website" value="<?php echo $row['website']?>">
                </div>
                
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="home.php" class="btn btn-danger">Cancel</a>
                </div>
        </form>
        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>