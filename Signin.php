<!DOCTYPE html>
<style>
.error {color:#FF0000;}
</style>
<html lang="en">
  <head>
    <title>Sign In</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./Css/signin.css" />
  </head>

  <body>
  <?php
$emailerr = $passworderr =$error="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate email
  if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerr = "Invalid email format";
    }
  }

  // Validate password
  if (empty($_POST["password"])) {
    $passworderr = "Password is required";
  }
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Start session
session_start();

// Include database connection file
require_once "includes/dbh.inc.php";

// Grab data from user and see if it exists in the admins table
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Email = $_POST["email"];
  $Password = $_POST["password"];

  if ($conn->connect_error) {
    die("Failed to connect to database: " . $conn->connect_error);
  }

 
     // Check if email exists in admins table
  $sql_admin = "SELECT * FROM admin WHERE email = '$Email' AND password = '$Password'";
  $result_admin = mysqli_query($conn, $sql_admin);

  if ($row_admin = mysqli_fetch_assoc($result_admin)) {
    $_SESSION['admin']=true;
    $_SESSION['ID'] = $row_admin['id'];
    $_SESSION['fullname'] = $row_admin['fullname'];
    $_SESSION['email'] = $row_admin['email'];
    $_SESSION['password'] = $row_admin['password'];
    $_SESSION['phone'] = $row_admin['phone'];

    // Redirect to admin dashboard
    header("Location: admin.php");
    exit();
  } else {
    // Check if email exists in registrations table
    $sql_reg = "SELECT * FROM users WHERE email = '$Email' AND password = '$Password'";
    $result_reg = mysqli_query($conn, $sql_reg);

    if ($row_reg = mysqli_fetch_assoc($result_reg)) {
      // Store session variables for regular users
      $_SESSION['admin']=false;
      $_SESSION['ID'] = $row_reg['id'];
      $_SESSION['fullname'] = $row_reg['fullname'];
      $_SESSION['email'] = $row_reg['email'];
      $_SESSION['password'] = $row_reg['password'];
      $_SESSION['phone'] = $row_reg['phone'];
   

      // Redirect to index.php
      header("Location: home.php");
      exit();
    } else {
      $error ="Invalid credentials.";
    }
  }
  }

?>


<section class="container">
<a href="index.php"><img class="form-logo" src="photos/lo.jpg" alt="logo" ></a>
    <form method="post" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="input-box">
            <label>Email</label>
            <input type="text" name="email" placeholder="username@email.com" required />
            <span class="error" style="color:red"><?php echo $emailerr;?></span>
          

            <br>
            <span>If you don't have an account please <a href="signup.php">SignUp</a><span>
        </div>

        <div class="input-box">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required />
            <span class="error"><?php echo $passworderr;?></span>
            <span class="error"><?php echo $error;?></span>
            <a href="#">Forget password?</a>
        </div>

        <button type="submit" name="submit" value="Submit">Submit</button>
    </form>
</section>
<?php 



?>

  </body>
</html>