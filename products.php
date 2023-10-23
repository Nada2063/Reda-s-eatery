<?php
  include_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>View Products</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="Css/products.css" />
  </head> 

  <body>
  <div class="component">

      <div class="content">
      <div id="header"><h2>All Products</h2></div>
        <div class="tablecont">
            <table>
              <thead class="tablehead">
                <tr>
                  <th class = "tableHeader">#ID</th>
                  <th class = "tableHeader">Title</th>
                  <th class = "tableHeader">Price</th>
                  <th class = "tableHeader">Description</th>
                  <th class = "tableHeader">Product &nbsp; Image</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT * FROM products";
                  $result = mysqli_query($conn,$sql);
                   //fetch all data inside the database
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $title = $row["title"];
                    $price = $row["price"];
                    $description = $row["description"];
                    $prod_image = $row["prod_image"];
                    echo '<tr>
                            <td> #'.$id.'</td>
                            <td>'.$title.'</td>
                            <td>'.$price.'</td>
                            <td>'.$description.'</td>
                            <td><img class="table_img" src="'.$prod_image.'"alt='.$title.'/></td>

                            <td>
                              <button class = "buttons" id ="edit"><a href="editProduct.php?update_id='.$id.'">Edit</a></button>
                              <button class = "buttons" id ="delete"><a href="deleteProduct.php?delete_id='.$id.'">Delete</a></button>
                            </td>
                          </tr>';
                  }
                ?>  
              </tbody>
            </table>
        </div>
    </div>
  </div>
  </body>
</html>