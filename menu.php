<!DOCTYPE html>
<html>
<head>
  <title>Reda's Eatery</title>
  <link rel="stylesheet" type="text/css" href="Css\Category.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav">
  <div class="img">
    <img src="photos/logo.jpg" height="50" width="50">
  </div>
  <a href="home.php" target="_blank">Home</a>
  <a class="active" href="menu.php">Menu</a>
  <a href="Contactus.php" target="_blank">Contact Us</a>
  <div class="search-container">
    <form action="search.php"> 
      <input type="text" placeholder="Search Menu" name="search">
      <button type="submit" id="searchButton"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <div class="name">
    <p>Reda's Eatery</p>
  </div>  
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
