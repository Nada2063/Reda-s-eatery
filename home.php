<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="Css/homecss.css">
    <script src="https://kit.fontawesome.com/f4bd0b4361.js" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
        <h1>REDA'S EATERY</h1>

    
        <i class="fa-solid fa-bars" id="fx" onclick="showmenu()"></i>
        <div class="navbar" id="naxx">

            <i class="fa-sharp fa-solid fa-xmark" id="fx" onclick="hidemenu()"></i>

            <ul>

                <li>
                    <input class="search" type="text" placeholder="Search Food">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </li>
                <li><a href="menu.php">Menu</a></li>
                <li>
                    <i class="fa-solid fa-cart-shopping" onclick="location.href = 'cart.php';"></i>
                    <a href=""></a>
               
                </li>
                <li><a  class="sign" href="profile.php">Profile</a></li>
                <li><a class="sign" href="index.php">Log Out</a></li>
            </ul>

        </div>



    </div>

    <div class="content">
        <h3>Welcome To Reda's eatery</h3>
        <h1>Returant & Cafe</h1>
      <button onclick="location.href = 'signin.php';">Place Your Order</button>
    </div>

   <section class="alifood">
        <h1>The fondest memories are made when gathered around the table </h1>

       </div>
   </section>



   <section class="dishes">
    <h1>Dishes Types</h1>
    <div class="row">
        <div class="foodcol2">
            <img src="photos/veget.jpg" alt="">
            <div class="layer"><h3>
                Main dishes 
            </h3></div>
        </div>

        <div class="foodcol2">
            <img src="photos/zzz.jpeg" alt="">
            <div class="layer"><h3>
                Side Dishes
            </h3></div>
        </div>

       <div class="foodcol2">
            <img src="photos/wl.jpg" alt="">
            <div class="layer"><h3>
                Drinks 
            </h3></div>
        </div>
    </div>


   </section>



  


<section class="rates">
    <h1>What Our Customers Says</h1>


    <div class="row">
        <div class="alirates">
            <img src="photos/model1.jpeg" alt="">
            <div>
                <p>
                    ting talented homebased cooks with hungry professting talented homebased cooks with hungry professting talented homebased cooks with hungry professting talented homebased cooks with hungry professting talented homebased cooks with hungry profess
                </p>
                <h3> Ahmed</h3>
            </div>
        </div>


        <div class="alirates">
            <img src="photos/model2.jpeg" alt="">
            <div>
                <p>
                    ting talented homebased cooks with hungry professting talented homebased cooks with hungry professting talented homebased cooks with hungry professting talented homebased cooks with hungry professting talented homebased cooks with hungry profess
                </p>
                <h3> Amr</h3>
            </div>
        </div>



    </div>

</section>


   



<!--<script>
var navv=document.getElementById("naxx")
function showmenu(){
    naxx.style.right="0"
}
function hidemenu(){
    naxx.style.right="-200px"
}
</script>-->

eserved by &copy;conceptial 2020</p>
</div>
</footer> 


<footer>
    <div class="main-content">
      <div class="left box">
        <h2 style="color: white;">About us</h2>
        <div class="content">
          <p>Reda’s Eatery an Egyptian food restaurant that serves food and drinks to customers. Paying tribute to serving up Egyptian sumptuous food . Oriental and fast food has been served too.</p>
          <div class="social">
            <a href="https://www.facebook.com/RedaEatery"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="https://instagram.com/redaeatery?igshid=NTc4MTIwNjQ2YQ=="><span class="fab fa-instagram"></span></a>
            <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>
      <div class="center box">
        <h2 style="color: white;">Address</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Fifth district,Obour City</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">01025999745</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">abc@example.com</span>
          </div>
        </div>
      </div>
      <div class="right box">
        <h2 style="color: white;">Contact us</h2>
        <div class="content">
          <form action="#">
            <div class="email">
              <div class="text">Email *</div>
              <input type="email" required style="width: 50%;">
            </div>
            <div class="msg">
              <div class="text">Message *</div>
              <textarea rows="2" cols="10" required ></textarea>
              
            </div>
           
          </form>
        </div>
      </div>
    </div>
    <div class="bottom">
     
      
      
    </div>
  </footer>



</body>
</html>