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
    <h2>Lunch Menu</h2>
    <div class="menu">
      <div class="menu-item">
        <img src="photoss/burger.jpg">
        <p>Burger</p>
        <p>Price: 20.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/pasta.jpeg">
        <p>Pasta</p>
        <p>Price: 60.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/lasg.jpg">
        <p>Lasagna</p>
        <p>Price: 28.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/loi.jpg">
        <p>Sandwich</p>
        <p>Price: 30.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/pizza.jpeg">
        <p>Pizza</p>
        <p>Price: 37.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/hotd.jpg">
        <p>Hot Dog</p>
        <p>Price: 18.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/fet.jpg">
        <p>Fettuccine Alfredo</p>
        <p>Price: 22.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/byry.jpg">
        <p>Biryani</p>
        <p>Price: 32.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/chic.jpg">
        <p>chicken wings</p>
        <p>Price: 25.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/sushi.jpg">
        <p>Sushi</p>
        <p>Price: 32.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/noodles.jpg">
        <p>Noodles</p>
        <p>Price: 12.00$</p>
        <button class="addButton">Add</button>
        <button class="orderButton">Order</button>
        <button class="deleteButton">Delete</button>
      </div>
      <hr>
      <div class="menu-item">
        <img src="photoss/sandw.jpg">
        <p>Sandwich</p>
        <p>Price: 32.00$</p>
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