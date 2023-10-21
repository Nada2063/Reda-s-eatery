<!DOCTYPE html>
<html>
<head>
  <title>Reda's Eatery</title>
  <link rel="stylesheet" href="Menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav">
  <div class="img">
    <img src="logo.jpg" height="50" width="50">
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
  <div class = "name">
    <p>Reda's Eatery </p>
  </div>  
</div>
<div>
  <div class="main">
    <h2>Dinner Menu</h2>
    <div class="menu">
      <div class="menu-item">
        <img src="photoss/api.jpg">
        <p>Appetizers</p>
        <p>Price: 20.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/Potage.jpg">
        <p>Potage Creme</p>
        <p>Price: 10.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/casser salad.jpg">
        <p>Casser Salad</p>
        <p>Price: 18.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/fried mozzarella cheese sticks.jpg">
        <p>Fried mozzarella cheese sticks</p>
        <p>Price: 15.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/pc.webp">
        <p>Pasta Chicken</p>
        <p>Price: 25.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/chickenw.jpg">
        <p>Chicken Wings</p>
        <p>Price: 30.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/burger.jpeg">
        <p>Burger</p>
        <p>Price: 25.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/pizza.jpeg">
        <p>Pizza</p>
        <p>Price: 25.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/fried chicken.jpg">
        <p>Fried Chicken</p>
        <p>Price: 35.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/steak.jpg">
        <p>Steak</p>
        <p>Price: 45.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/Mashed Potatoes.jpg">
        <p>Mashed Potatoes</p>
        <p>Price: 15.00$</p>
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
<script src="script.js"></script>
</body>
</html>