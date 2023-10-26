<!DOCTYPE html>
<html>
<head>
  <title>Reda's Eatery</title>
  <link rel="stylesheet" type="text/css" href="./Css/Category.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/f4bd0b4361.js" crossorigin="anonymous"></script>
</head>
<body>
<nav>
          <div class="navbar-brand">
            <img src="photos/lo.jpg" alt="" class="nav-logo">
            <h2>REDA'S EATERY</h2>
          </div>
          <div class="navigation">
            <ul class="nav-list">
              <li class="nav-item">
                <a href="home.php"><button class="nav-btn btn-secondry">Home</button></a>
              </li>
              <li class="nav-item">
                <a href="home.php"><button class="nav-btn btn-secondry">Contact us</button></a>
              </li>

              <li class="search nav-item">
              <input type="search" name="search" placeholder="Search Food">
              <i class="fa-solid fa-magnifying-glass"></i>

              
              </li>
            </ul>
          </div>
        </nav>
  
</div>
<div>
  <div class="main">
    <h2>Menu</h2>
    <div class="menu">
      <div class="category-button">
        <a href="BreakfastMenu.php" target="_blank" class="button"><h3>Breakfast</h3></a>
      </div>
      <div class="category" id="breakfast">
      </div>
      <div class="category-button">
        <a href="LunchMenu.php" target="_blank" class="button"><h3>Lunch</h3></a>
      </div>
      <div class="category" id="lunch">
      </div>
      <div class= "category-button">
        <a href="DinnerMenu.php" target="_blank" class="button"><h3>Dinner</h3></a>
      </div>
      <div class="category" id="dinner">
      </div>
      <div class="category-button">
        <a href="DessertsMenu.php" target="_blank" class="button"><h3>Desserts</h3></a>
      </div>
      <div class="category" id="desserts">
      </div>
      <div class="category-button">
        <a href="DrinksMenu.php" target="_blank" class="button"><h3>Drinks</h3></a>
      </div>
      <div class="category" id="drinks">
      </div>
    </div>
  </div>
</div>
</div>
<div class="footer">
  <p>© <?php echo date("Y"); ?> Meal Makers. All Rights Reserved.</p>
</div>
<script src="JavaScript/script.js"></script>
</body>
</html>
