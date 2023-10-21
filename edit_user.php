<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link rel="stylesheet" href="Css/edit_user.css" />
</head>

<body>

<h1>Edit Profile</h1>
<section class=container>
<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='post' class="form">
<div class="input-box">
<label>Fullname</label>
  <input type='text' value="<?php echo $_SESSION['fullname']; ?>" name='FName' required/><br>
</div>
<div class="input-box">
<label>Email</label>
  <input type='text' value="<?php echo $_SESSION['email']; ?>" name='email' required/><br>
</div>
<div class="input-box">
<label>Password</label>
  <input type='text' value="<?php echo $_SESSION['password']; ?>" name='password' required/><br>
</div>
<div class="input-box">
<label>Phone</label>
  <input type='text' value="<?php echo $_SESSION['phone']; ?>" name='phone' required/><br>
</div>
  
  <button class="button" type='submit' value='Submit' name='Submit'>Save</button>
</form>
</section>





</body>

</html> 
<?php



// Include connection
include_once "includes/dbh.inc.php";

// Check if the user is logged in.
if (!isset($_SESSION['fullname']) || !isset($_SESSION['email'])) {
    // Redirect the user to the login page.
    header('Location: login.php');
    exit();
}

?>



<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the user input.
    $name = $_POST['FName'];
    $email = $_POST['email'];
    $Password=$_POST['password'];
    $Phone=$_POST['phone'];

    // Escape the user input.
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $Password = mysqli_real_escape_string($conn, $Password);
    $Phone = mysqli_real_escape_string($conn, $Phone);

    // Update the user profile.
    $sql = "UPDATE users SET fullname='$name',phone='$Phone', password='$Password', email='$email' WHERE fullname = '" . $_SESSION['fullname'] . "'";
    $result = mysqli_query($conn, $sql);

    // Check if the update was successful.
    if ($result) {
        // Update the session variables.
        $_SESSION['fullname'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $Password;
        $_SESSION['phone'] = $Phone;

        // Redirect the user to the index page.
        header('Location: index.php');
        exit();
    } else {
        // Display an error message.
        echo 'Error updating user profile.';
    }
}

?>