<!DOCTYPE html>
<html lang="en">
    <head>
    <script src="https://kit.fontawesome.com/f4bd0b4361.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="signincss.css">
</head>
<body>

    <div class="container">


        <h1>Sign In</h1>
        <form action='#' method='post' onsubmit='return validate(this)'>
        <input type="text" id="idmail" placeholder="Enter Email" >
        <div id='mail' class='err'></div>
        <input type="password" name="email" id="idpass" placeholder="Enter Password" name="psw">
        <div id='password' class='err'></div>
        <button type="submit" class="registerbtn">Sign In</button> 
    </form>

    <div class="icon">
        <i class="fa-brands fa-facebook"></i>
        <span>Facebook</span>
    </div>
        <div class="icon">
        <i class="fa-brands fa-google"></i>
        <span>Google</span>
    </div>

 <div class="icon">
        <i class="fa-brands fa-apple"></i>
        <span>apple</span>
</div>

</body>
</html>