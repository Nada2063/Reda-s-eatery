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
<?php
    $sql = "SELECT * FROM products WHERE category='drinks'";
    include_once "includes/dbh.inc.php";
    $result = mysqli_query($conn, $sql);
    ?>
<div>
  <div class="main">
    <h2>Drinks Menu</h2>
    <?php
            // Loop through the products and display them dynamically
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row["ID"];
              $title = $row["title"];
              $price = $row["price"];
              $description = $row["description"];
              $prod_image = $row["prod_image"];
              $category = $row["category"];
            ?>
    <div class="menu">
            <div class="menu-item">
            <img src="<?php echo $prod_image; ?>">
<div class="design">
    <h5><?php echo $title; ?></h5>
    <h6><?php echo $description; ?></h6>
    <h6><?php echo $price; ?></h6>
    <!--<form method="post" action="cart.php">
    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
    <button type="submit" class="btn" name="add_to_cart"><i class="fa fa-shopping-bag"></i></button>-->
    
</form>
   </div>
       </div>
         <?php
         }
         ?>
         </div>
<script src="JavaScript/script.js"></script>
</body>
</html>