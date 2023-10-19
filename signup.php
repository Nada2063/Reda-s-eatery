<!DOCTYPE html>
<html lang="en">
<head>
   
    <script src="https://kit.fontawesome.com/f4bd0b4361.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signupcss.css">

</head>
<body>
    
    <div class="container">
        
       
        
   
        <h1>Sign Up Now</h1>
        <form action='#' method='post' onsubmit='return validate(this)'>
        
        <input type="text" id="inputfname" name="firstname" placeholder="Firstname" size="15" />
        <div id='fname' class='err'></div>
      
        <input type="text" id="inputmname" name="middlename" placeholder="Middlename" size="15"  />
        <div id='mname' class='err'></div>

        
        <input type="text"  id="inputlname" name="lastname" placeholder="Lastname" size="15"  />
        <div id='lname' class='err'></div>

        
       
        <input type="text" id="inputphone" name="phone" placeholder="phone no." size="11">
        <div id='phone' class='err'></div>

        
        <input type="email" id="inputmail" placeholder="Enter Email" name="email" required>
        <div id='mail' class='err'></div>


        
        <input type="password"name="psw" id="inputpass" placeholder="Enter Password"  >
        <div id='password' class='err'></div>
        
        <input type="password" name="psw-confirmt" id="inputcpass" placeholder="confirm Password"  >
        <div id='cpassword' class='err'></div>

        <button type="submit" class="registerbtn">Sign Up</button>
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

            <p>Already have an account? <a href="signin.php">sign
                    in</a></p>


    </div>

</body>
</html>