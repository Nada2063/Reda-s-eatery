

<!DOCTYPE html>
<html lang="en">

<head>

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Css/admincss.css">
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
    <?php include 'partials/admin_sideBar.php';?>
    <!--users-->
    <div class="right">
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
        </div>
        
    </div>


        
    </div>

                   

</body>

</html>