<!DOCTYPE html>
<html>
<head>
  <title>Reda's Eatery</title>
  <link rel="stylesheet" href="./Css/Menu.css">
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
                <a href="menu.php"><button class="nav-btn btn-secondry">Menu</button></a>
              </li>
              <li class="search nav-item">
              <input type="search" name="search" placeholder="Search Food">
              <i class="fa-solid fa-magnifying-glass"></i>


              
              </li>
            </ul>
          </div>
        </nav>
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
    <form method="post" action="cart.php">
    <input type="hidden" name="product_id" value="<?= $row['ID']?>">
    <button type="submit" class="addButton" name="add_to_cart">Add to Cart</button>
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