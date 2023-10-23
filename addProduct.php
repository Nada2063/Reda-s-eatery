<!--displaying from db-->
<?php
  include_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en"> 
  <head>
    <title>Add Product</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="Css/addProduct.css" />
    
  </head> 
<body>

<?php
 //whenever this submit button is clicked, this functions will be performed 
 if(isset($_POST['submit'])){
    //storing values 
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $prod_image =$_FILES['prod_image'];//2D global array

    $image_filename = $prod_image['name']; //get image name
    $image_filetemp = $prod_image['tmp_name']; //get temp path
    $filename_separate=explode('.',$image_filename);  //separate name by dot(array)
    $file_extension=strtolower(end($filename_separate)); //get file extension
    $extensions = array('jpg', 'jpeg', 'png'); //extensions 

    if(in_array($file_extension,$extensions)){
      $upload_image='uploads/'.$image_filename; //save image inside uploads folder
      move_uploaded_file($image_filetemp,$upload_image);

      $sql="INSERT INTO products (title,price,description,prod_image)
       VALUES('$title','$price','$description','$upload_image');";
       $result = mysqli_query($conn,$sql);//excute query
       if(!$result)
        die(mysqli_error($conn));
    }
 }
?>
<!--validation-->
<?php
      // if ($_SERVER["REQUEST_METHOD"] === "POST") {
      //     $productName = $_POST['title'];
      //     $productPrice = $_POST['price'];
      //     $productDescription = $_POST['description'];
      
      //     if (empty($productName) || empty($productPrice) || empty($productDescription)) {
      //         echo "<p style='color: red;'>All fields are required.</p>";
      //     } elseif (!ctype_alpha($productName)) {
      //         echo "<p style='color: red;'>Product title should contain only words.</p>";
      //     } elseif (!ctype_digit($productPrice)) {
      //         echo "<p style='color: red;'>Product price should be a number.</p>";
      //     } elseif (!ctype_alpha($productDescription)) {
      //         echo "<p style='color: red;'>Product description should contain only words.</p>";
      //     } elseif (empty($_FILES['prod_image']['title'])) {
      //         echo "<p style='color: red;'>Please upload a product image.</p>";}
          // } else {
          //  
          //     echo "<p>Product Title: $productName</p>";
          //     echo "<p>Product Price: $productPrice</p>";
          //     echo "<p>Product Description: $productDescription</p>";
          // }
      //}
?>

<div class ="component">
 

  <div class ="content rows">
  <section class="container">
        <form action="" class="form" method="post" enctype= "multipart/form-data">
          <div id="header"><h2>Add a new product</h2></div>

          <div class="input-box">
              <label for ="title">Product Title</label>
              <input type="text" id="title" name="title" placeholder="Enter product's title" />
          </div>

          <div class="input-box">
              <label for="price" >Product price</label>
              <input type="number" step="any" id ="price" name ="price" placeholder="Enter product's price" />
          </div>

          <div class="input-box">
              <label for ="description">Product description</label>
              <textarea id="description" name="description" rows="4" cols="85" placeholder="Enter product's description"></textarea>
          </div> 

          <div class="input-box">
              <label for="prod_image">Product image</label>
              <input type="file" id="prod_image" name="prod_image" accept =".png,.jpg,.jpeg"/>
          </div>

         

          <button type="submit" name="submit">Add Product</button>
        </form>
      </section>
  </div>
</div>

  </body>
</html>