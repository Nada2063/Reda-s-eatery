<!DOCTYPE html>
<html>
<head>
  <title>Reda's Eatery</title>
  <link rel="stylesheet" href="Css/Menu.css">
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
    <h2>Desserts Menu</h2>
    <div class="menu">
      <div class="menu-item">
        <img src="photos/red.jpg">
        <p>Red velvet cake</p>
        <p>Price: 15.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/ice.jpg">
        <p>Strawberry Icecream</p>
        <p>Price: 8.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/chocolate.jpg">
        <p>Chocolate Bar</p>
        <p>Price: 12.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/cup.jpg">
        <p>Cupcake</p>
        <p>Price: 18.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/chocolatewaf.jpg">
        <p>Chocolate Waffle</p>
        <p>Price: 25.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/carrot.jpg">
        <p>Carrot Cake</p>
        <p>Price: 18.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/panc.jpg">
        <p>Pancake</p>
        <p>Price: 22.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/mill.jpg">
        <p>Mille Feuille</p>
        <p>Price: 28.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/chocolateic.jpg">
        <p>Chocolate Icecream</p>
        <p>Price: 25 EGP</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/tirma.jpg">
        <p>Tiramisu Cake</p>
        <p>Price: 20.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/choccake.jpg">
        <p>Chocolate Cake</p>
        <p>Price: 30.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/marc.jpg">
        <p>Macaroons</p>
        <p>Price: 23.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
    </div>
  </div>
</div>
<div class="footer">
  <p>© <?php echo date("Y"); ?> Meal Makers. All Rights Reserved.</p>
</div>
<script src="JavaScript/script.js"></script>
</body>
</html>