<!DOCTYPE html>
<html lang="en">

<head>
  <title> profile</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link rel="stylesheet" href="./Css/profile.css" />
</head>

<body>
  
<?php
session_start();
echo "<h1>My Profile</h1>";
?>
<section class=container>
<form class="form">
<div class="input-box">
<label>Fullname: </label>
<?php
echo  $_SESSION["fullname"];
?>
</div>
<div class="input-box">
<label>Email: </label>
<?php
echo   	$_SESSION["email"];

?>
</div>
<button ><a href="edit_user.php"class="button" >Update info</a></button>
<button ><a href="delete_user.php"class="button" >Delete account</a></button>

</form>
</section>



</body>
</html> 