<?php
  include_once "includes/dbh.inc.php";

//The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
//used get method because we can access the variables from the url
if(isset($_GET['delete_id'])){//delete_id in the url 

    $id = $_GET['delete_id']; //access the delete_id variable
    $sql = "DELETE FROM products WHERE ID = '$id';";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:Products.php");

    }
    if(!$result){
        die(mysqli_error($conn));
    }
}
?>