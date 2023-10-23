<?php
  include_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Users</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="Css/allUsers.css" />
    <link rel="icon" href="../../imgs/Sweet Dreams logo-01.png"type="image/icon type" />
  </head> 

  <body>
  <div class="component">
   

      <div class="content">
      <div id="header"><h2>All Users</h2></div>
        <div class="tablecont">
            <table>
              <thead class="tablehead">
                <tr>
                  <th class = "tableHeader">#ID</th>
                  <th class = "tableHeader">Full Name</th>
                  <th class = "tableHeader">Email</th>
                  <th class = "tableHeader">Password</th>
                  <th class = "tableHeader">Phone</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT * FROM users";
                  $result = mysqli_query($conn,$sql);
                   //fetch all data inside the database
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $fullname = $row["fullname"];
                    $email = $row["email"];
                    $password = $row["password"];
                    $phone = $row["phone"];
                    echo '<tr>
                            <td> #'.$id.'</td>
                            <td>'.$fullname.'</td>
                            <td>'.$email.'</td>
                            <td>'.$password.'</td>
                            <td>'.$phone.'</td>
                            <td>
                              <button class = "buttons" id ="delete"><a href="deleteUser.php?delete_id='.$id.'">Delete</a></button>
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
