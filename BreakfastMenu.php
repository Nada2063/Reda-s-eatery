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
  <div class="name">
  <p>Reda's Eatery</p>
  </div>  
</div>
<div>
  <div class="main">
    <h2>Breakfast Menu</h2>
    <div class="menu">
      <div class="menu-item">
        <img src="photos/omelette.jpg">
        <p>Omelette</p>
        <p>Price: 20.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/grill.jpg">
        <p>Grilled Cheese Sandwich</p>
        <p>Price: 15.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/cott.jpg">
        <p>Cottage Cheese</p>
        <p>Price: 25.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/green.jpg">
        <p>Green Burger</p>
        <p>Price: 22.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/fool.jpg">
        <p>Fool</p>
        <p>Price: 20.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/Greek Chicken Salad.webp">
        <p>Greek Chicken Salad</p>
        <p>Price: 30.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/pot.jpg">
        <p>Roasted Potatoes</p>
        <p>Price: 15.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/savorycottagecheesetoast.jpg">
        <p>Cottage cheese toast</p>
        <p>Price: 17.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/French Fries.jpg">
        <p>French Fries</p>
        <p>Price: 20.00$ </p>
        <button class="addButton">Add</button>
        <button class="orderButton">order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/hotdog.jpg">
        <p>Hot Dog</p>
        <p>Price: 12.00$ </p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/honey.jpg">
        <p>Honey French Toast</p>
        <p>Price: 18.00$ </p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photos/bakery.jpg">
        <p>Bakery</p>
        <p>Price: 28.00$ </p>
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