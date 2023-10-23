<!DOCTYPE html>
<html lang="en">

<head>
  <title> Admin Profile</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link rel="stylesheet" href="Css/adminprofile.css" />
</head>

<body>
  
<?php
session_start();
echo "<h1>Your Profile</h1>";
?>
<section class=container>
<form class="form">
<div class="input-box">
            <label for="fullname:">Name: &nbsp;</label>
              <?php echo $_SESSION["fullname"];?>
            </div>

            <div class="input-box">
            <label for="email">Email: &nbsp;</label>
            <?php echo $_SESSION["email"]; ?>
        </div> 
<button ><a href="edit_admin.php"class="button" >Update info</a></button>
<button ><a href="delete_admin.php"class="button" >Delete account</a></button>

</form>
</section>


</body>
</html> 