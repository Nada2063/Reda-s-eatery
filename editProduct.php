<!--displaying from db-->

<?php
  include_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en"> 
  <head>
    <title>Edit Product</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="Css/addProduct.css" />
  </head> 
<body>

<?php
 //whenever this submit button is clicked, this functions will be performed 
 $id= $_GET ["update_id"];//taken from url
 $query="SELECT * FROM products WHERE id = '$id';";

 $result = mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 $title= $row ["title"];
 $price= $row ["price"];
 $description= $row ["description"];
 $prod_image= $row ["prod_image"];
 $category= $row ["category"];

 if(isset($_POST['submit'])){
    //storing values 
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $prod_image = $_FILES['prod_image'];
    $category = $_POST['category'];

    //image
    $image_filename = $prod_image['name']; //get image name
    $image_filetemp = $prod_image['tmp_name']; //get temp path
    $filename_separate=explode('.',$image_filename);  //separate name by dot(array)
    $file_extension=strtolower(end($filename_separate)); //get file extension
    $extensions = array('jpg', 'jpeg', 'png'); //extensions 
  
    if(in_array($file_extension,$extensions)){
      $upload_image='uploads/'.$image_filename; //save image inside uploads folder
      move_uploaded_file($image_filetemp,$upload_image);
    }

    $sql="UPDATE products SET title = '$title', price= '$price',
    description='$description', prod_image='$upload_image', category = '$category'
    WHERE ID ='$id';";

    $result = mysqli_query($conn,$sql);//excute query
    if($result)
      header("Location: Products.php");
    else
     die(mysqli_error($conn));
 }
?>


<div class ="component">
 

  <div class ="content rows">
  <section class="container">
        <form action="" class="form" method="post" enctype= "multipart/form-data">
          <div id="header"><h2>Edit product</h2></div>

          <div class="input-box">
              <label for ="title">Product Title</label>
              <input type="text" id="title" name="title" value="<?php echo "$title"?>" />
          </div>

          <div class="input-box">
              <label for="price" >Product price</label>
              <input type="number" step="any" id ="price" name ="price"  value="<?php echo "$price"?>" />
          </div>

          <div class="input-box">
              <label for ="description">Product description</label>
              <textarea id="description" name="description" rows="4" cols="85"><?php echo "$description"?></textarea>
          </div> 

          <div class="input-box">
              <label for="prod_image">Product image</label>
              <input type="file" id="prod_image" name="prod_image"  value="<?php echo "$prod_image"?>" accept =".png,.jpg,.jpeg"/>
          </div>

          <div class="input-box">
              <label for ="category">Category</label>
          </div> 

          <div>
          <div>
            <input type="radio" name="category" id="breakfast" value="breakfast">
            <label for ="breakfast" >Breakfast</label>
          </div>
          <div>
            <input type="radio" name="category" id="lunch" value="lunch">
            <label for ="lunch" >Lunch</label>
          </div>        
          <div>
            <input type="radio" name="category" id="dinner" value="dinner">
            <label for ="dinner" >Dinner</label>
          </div>
          <div>
            <input type="radio" name="category" id="desserts" value="dsserts">
            <label for ="desserts" >Desserts</label>
          </div>
          <div>
            <input type="radio" name="category" id="drinks" value="drinks">
            <label for ="drinks" >Drinks</label>
          </div>
        </div>


          <button type="submit" name="submit">Update</button>
        </form>
      </section>
  </div>
</div>

  </body>
</html>