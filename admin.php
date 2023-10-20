<!DOCTYPE html>
<html lang="en">

<head>

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="Css/user.css">
    <link rel="stylesheet" href="admincss.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<script>
    let current="ordd";
    function change_view(target){
        document.getElementById(current).style.display='none';
        document.getElementById(target).style.display='block';
        current=target;
    }
</script>
<body>
    <!--side panel-->
    <div id="side_panel">
        <ul>
            <li onclick="change_view('uss')"> <img src="photos/profile.png" alt=""><span> Users</span></li>
            <hr>
            <li onclick="change_view('mmn')"> <img src="photos/playlist.png" alt=""><span> Menu</span></li>
            <hr>
            <li onclick="change_view('ordd')"> <img src="photos/website.png" alt=""><span> Orders</span>
            </li>
            <hr>
            <li onclick="change_view('custt')"> <img src="photos/customer.png" alt=""><span> Customers</span></li>
            <hr>
            <li > <img src="photos/user.png" alt=""><span> Your Account</span></li>
            <hr>
            <li onclick="change_view('stt')"> <img src="photos/analytics.png" alt=""><span> Statistics</span></li>
            <hr>
            <li onclick="change_view('msg-area')"> <img src="photos/chat.png" alt=""><span> Chat requests</span>
            </li>
            <hr>
            <li > <img src="photos/log-out.png" alt=""><a href='home.php'>Log Out</a></li>
            <hr>
        </ul>
    </div>
    <!--users-->
    <div class="right">
        <div class="main-content" style="display: none; background-color: white;" id="uss">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                        <h2 class="ml-lg-2">Manage Employees</h2>
                    </div>
                    <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                            <i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                            <i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
                        <td> Portland, USA</td>
                        <td> 5552222</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                <label for="checkbox2"></label>
                            </span>
                        </td>
                        <td>Dominique Perrier</td>
                        <td>dominiqueperrier@mail.com</td>
                        <td> Berlin, Germany</td>
                        <td> 5555735</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                <label for="checkbox3"></label>
                            </span>
                        </td>
                        <td>Maria Anders</td>
                        <td>mariaanders@mail.com</td>
                        <td> Paris, France</td>
                        <td> 5559931</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                <label for="checkbox4"></label>
                            </span>
                        </td>
                        <td>Fran Wilson</td>
                        <td>franwilson@mail.com</td>
                        <td> Madrid, Spain</td>
                        <td> 6195731</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                <label for="checkbox5"></label>
                            </span>
                        </td>
                        <td>Martin Blank</td>
                        <td>martinblank@mail.com</td>
                        <td> Turin, Italy</td>
                        <td> 6312097</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- menu-->
        <div class="menu" id="mmn" style="display: none;">
            <div class="heading">

                <h1>Restuernt food</h1>
                <h3>&mdash;Menu info &mdash;</h3>
                <div class="dd"><button class="ad">Add</button></div>
            </div>
            <div class="food-item" style="
            position: relative;
            top: 18px;">
                <img src="photos/Hamburger.jpg" width="50%" style="
                position: relative;
                left: 107px;
                border-radius: 8px;">
                <div class="details-m">
                <div class="details-sub-m">
                    <h5>Burger</h5>
                    <h5 class="price"> 59 LE </h5>
                </div>
                <p> Slices of raw onion, lettuce, bacon, mayonnaise, and other ingredients add flavor</p>
                <button class="del">Delete </button>
                <button class="edi" > Edit </button>
                 </div>
            </div>
    
            <div class="food-item" style="
            position: relative;
            top: 18px;">
                <img src="photos/pizza.jpg"width="50%" style="
                position: relative;
                left: 107px;
                border-radius: 8px;">
                <div class="details-m">
                <div class="details-sub-m">
                    <h5>Pizza</h5>
                    <h5 class="price"> 80 LE </h5>
                </div>
                <p> Slices of raw onion, lettuce, bacon, mayonnaise, and other ingredients add flavor</p>
                <button class="del">Delete </button>
                <button class="edi" > Edit </button>
                  </div>
            </div>
    
            <div class="food-item">
                <img src="photos/wings.jpg"width="40%" style="
                position: relative;
                left: 107px;
                border-radius: 8px;">
                <div class="details-m">
                <div class="details-sub-m">
                    <h5>Wings</h5>
                    <h5 class="price"> 75 LE </h5>
                </div>
                <p> Slices of raw onion, lettuce, bacon, mayonnaise, and other ingredients add flavor</p>
                <button class="del">Delete </button>
                <button class="edi" > Edit </button>

                </div>
            </div>
    
            <div class="food-item">
                <img src="photos/salad.jpg" width="55%" style="
                position: relative;
                left: 107px;
                border-radius: 8px;">
                <div class="details-m">
                <div class="details-sub-m">
                    <h5>Salad</h5>
                    <h5 class="price"> 40 LE </h5>
                </div>
                <p> Slices of raw onion, lettuce, bacon, mayonnaise, and other ingredients add flavor</p>
                <button class="del">Delete </button>
                <button class="edi" > Edit </button>
                </div>
            </div>
            <div class="food-item">
                <img src="photos/fried chekein.jpg" width="50%" style="
                position: relative;
                left: 107px;
                border-radius: 8px;">
                <div class="details-m">
                <div class="details-sub-m">
                    <h5>Fried Chicken</h5>
                    <h5 class="price"> 100 LE </h5>
                </div>
                <p> Slices of raw onion, lettuce, bacon, mayonnaise, and other ingredients add flavor</p>
                <button class="del">Delete </button>
                <button class="edi" > Edit </button>
                </div>
                <div class="food-item">
                    <img src="photos/meatgril.jpg" width="60%" style="
                    position: relative;
                    left: 107px;
                    border-radius: 8px;">
                    <div class="details-m">
                    <div class="details-sub-m">
                        <h5>Steak</h5>
                        <h5 class="price"> 59 LE </h5>
                    </div>
                    <p> Slices of raw onion, lettuce, bacon, mayonnaise, and other ingredients add flavor</p>
                    <button class="del">Delete </button>
                    <button class="edi" > Edit </button>
                    </div>
                </div>  
                
            </div>  
        </div>
        <!--chats-->
        <div id ="msg-area" style="display:none;" >
            <div id ="customers-msgs">
<ul id ="chat-list">
<li>
    <img src="photos/user-chat.png" alt="" id="user-chat">
    <span id="Name"><strong>Nada Abdlerahman</strong></span>
    <span id="time">11:30 AM</span>
    <p id ="phone"><strong>0123456789</strong></p>
</li>

<li>
    <img src="photos/user-chat.png" alt="" id="user-chat">
    <span id="Name"><strong>Donya hany </strong></span>
    <span id="time">11:35 AM</span>
    <p id ="phone"><strong>0123456789</strong></p>
</li>

<li>
    <img src="photos/user-chat.png" alt="" id="user-chat">
    <span id="Name"><strong>Yassin Mohamed</strong></span>
    <span id="time">11:40 AM</span>
    <p id ="phone"><strong>0123456789</strong></p>
</li>

<li>
    <img src="photos/user-chat.png" alt="" id="user-chat">
    <span id="Name"><strong>Amgad Emad</strong></span>
    <span id="time">11:45 AM</span>
    <p id ="phone"><strong>0123456789</strong></p>
</li>

<li>
    <img src="photos/user-chat.png" alt="" id="user-chat">
    <span id="Name"><strong>Ahmed Mahmoud</strong></span>
    <span id="time">11:45 AM</span>
    <p id ="phone"><strong>0123456789</strong></p>
</li>
</ul>

            </div>
            <div id="chat-form">
                <div id="top-chat">
                    <button id="end-btn">End Chat</button>
                </div>
                <div id="message-body">
                    <div id="msg1">
<p id ="msg-body">Hello I have an Order with number 12345 </p>
                    </div>
                   
                    <div id="msg2">
<p id ="msg-body">Hello , I'm Mohamed How can I help You .</p>
                    </div>
                    <div id ="msg-box">
                        <textarea name="" id="msg-text" cols="33" rows="4" placeholder="Enter Message Here " wrap="physical"></textarea>
                        <button id="send">Send</button>
                    </div>
                </div>
            </div>
        </div>
        
                <canvas id="myChart" style="width:100%;max-width:600px ; display: none;" ></canvas>

       
        <div id="Account" style="margin:auto; width: 300px ; padding-left: 120px; height: 450px; background-color: rgb(203, 224, 243); display: none;" >
            <h1> Admin name: Dr.Essam</h1> 
            <h1>ID:1234</h1>
            <h2>change password</h2>
            <form action='#' method='post' onsubmit='return validate1(this)' >
                <input type="password"name="psw" id="inputpass" placeholder="Enter new Password"  >
                <div id='password' class='err'></div>
                <input type="password" name="psw-confirmt" id="inputcpass" placeholder="confirm Password"  >
                <div id='cpassword' class='err'></div>
        
                <button type="submit" class="registerbtn" style="margin-left: 3%; ">Update password</button>
            </form>


        </div>


      
<!--statistics-->
        
        <div class="cardBox" style="display: none;" id="stt">
            <div class="card">
               <div>
                <div class="numbers">1,504</div>
                <div class="cardName">Daily Views</div>
               </div>

               <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
               </div>
            </div>

            <div class="card">
                <div>
                 <div class="numbers">80</div>
                 <div class="cardName">sales</div>
                </div>
 
                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
             </div>

             <div class="card">
                <div>
                 <div class="numbers">504</div>
                 <div class="cardName">Comments</div>
                </div>
 
                <div class="iconBx">
                    <ion-icon name="chatbubble-outline"></ion-icon>
                </div>
             </div>

             <div class="card">
                <div>
                 <div class="numbers">7000$</div>
                 <div class="cardName">Earning</div>
                </div>
 
                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
             </div>
        </div>
<!-- orders-->
        <div class="details" style="width: 100%;" >
            <div class="recentOrders"  id="ordd" style="width: 1100px; height: 700px; top: -30px; left: 5px;">
                <div class="cardHeader">
                    <h2>Recent Orders</h2>
                    <a href="#" class="btnv">View All</a>
                
                </div>

                <table style="width: 100%;">
                    <thead>
                        <tr>
                            <td>
                                Name
                            </td>
                            <td>
                                Price
                            </td> <td>
                                Payment
                            </td> <td>
                              Status
                            </td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                               Pizza
                            </td>
                            <td>
                               120$
                            </td> <td>
                               Paid
                            </td> <td>
                             <span class="delivered">Delivered</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Pizza
                            </td>
                            <td>
                               120$
                            </td> <td>
                               Paid
                            </td> <td>
                             <span class="pen">Pending</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Pizza
                            </td>
                            <td>
                               120$
                            </td> <td>
                               Paid
                            </td> <td>
                             <span class="ret">Return</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Pizza
                            </td>
                            <td>
                               120$
                            </td> <td>
                               Paid
                            </td> <td>
                             <span class="in">in progress</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Pizza
                            </td>
                            <td>
                               120$
                            </td> <td>
                               Paid
                            </td> <td>
                             <span class="delivered">Delivered</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Pizza
                            </td>
                            <td>
                               120$
                            </td> <td>
                               Paid
                            </td> <td>
                             <span class="pen">Pending</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Pizza
                            </td>
                            <td>
                               120$
                            </td> <td>
                               Paid
                            </td> <td>
                             <span class="ret">Return</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Pizza
                            </td>
                            <td>
                               120$
                            </td> <td>
                               Paid
                            </td> <td>
                             <span class="in">in progress</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--customers-->
            <div class="recentCustomers" style="display: none;" id="custt">
                <div class="cardHeader">
                    <h2>Recent Customers</h2>
                </div>
                <table>
                    <tr>
                        <td width="60px"><div class="imgBx">
                           
                        </div></td>
                        <td><h4>David <br><span>Italy</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px"><div class="imgBx">
                            
                        </div></td>
                        <td><h4>fareed <br><span>Egypt</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px"><div class="imgBx">
                           
                        </div></td>
                        <td><h4>Yassin <br><span>India</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px"><div class="imgBx">
                            
                        </div></td>
                        <td><h4>Ahmed <br><span>Kuwait</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px"><div class="imgBx">
                            
                        </div></td>
                        <td><h4>Ali <br><span>Egypt</span></h4></td>
                    </tr>

                    <tr>
                        <td width="60px"><div class="imgBx">
                            
                        </div></td>
                        <td><h4>David <br><span>Italy</span></h4></td>
                    </tr>
                </table>
            </div>
    
    
        </div>

       
       
        
    </div>


        
    </div>
                   

</body>

</html>