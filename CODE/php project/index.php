<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Emergency Medical Help</title>
        <!-- Bootstrap Core CSS -->
         <link href="style2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
    </head>

    <body style="padding-top: 50px;">
    	<?php
        include 'includes/header.php';
        ?>
        <!-------------------------------------------------------------- Header ------------------------------------------------------>

    
     
    
        <!-------------------------------------------------------------- Header ---------------------------------------------------------->

    
    <div id="mySidenav" class="sidenav">
  <a href="index.html" id="home">Home</a>
  <a href="about.html" id="about">About</a>
  <a href="contact.html" id="contact">Contact</a>
  <a href="#" id="blog">Blog</a>
</div>


          <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>An Apple a day keeps the doctor away.</h1>
                            <p>Blood donation reduces the risk of heart attacks and strokes, too.</p>
                            <br/>
                            <a  href="blood.html" class="btn btn-danger btn-lg active">DONATE BLOOD</a>
                        </div>
                    </center>
                </div>
            </div>


 <!------------------------------------------------Main banner image end------------------------------------------------------------------------>
 <SECTION>
    <H3>TAKE THE HELP:-</H3>
 </SECTION>

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.html#" >
                            <div class="thumbnail">
                                <img src="800.jpg" alt="">
                                <div class="caption">
                                    <h3>BLOOD</h3>
                                    <p></p>
                                </div>
                            </div> 
                        </a>
                    </div>

                        <div class="col-sm-4">
                        <a href="appointment.html" >
                            <div class="thumbnail">
                                <img src="images.jpg" alt="">
                                <div class="caption">
                                    <h3>Request an Appoinment</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="yoga.html" >
                            <div class="thumbnail">
                                <img src="aziz-acharki-368189-unsplash.jpg" alt="">
                                <div class="caption">
                                    <h3>YOGA</h3>
                                    <p></p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="ayurveda.html" >
                            <div class="thumbnail">
                                <img src="chinh-le-duc-264152-unsplash.jpg" alt="">
                                <div class="caption">
                                    <h3>AYURVEDA</h3>
                                    <p></p>
                                </div>
                            </div> 
                        </a>
                    </div>


                    <div class="col-sm-4">
                        <a href="products.html" >
                            <div class="thumbnail">
                                <img src="kelly-sikkema-475112-unsplash.jpg" alt="">
                                <div class="caption">
                                    <h3>MEDICAL</h3>
                                    <p></p>
                                </div>
                            </div> 
                        </a>
                    </div>

                   <div class="col-sm-4">
                        <a href="cardio.html" >
                            <div class="thumbnail">
                                <img src="mathew-schwartz-718956-unsplash.jpg" alt="">
                                <div class="caption">
                                    <h3>CARDIO</h3>
                                    <p></p>
                                </div>
                            </div> 
                        </a>
                    </div>


                
                      
                      <div class="middle">

                          
                      </div>
                           
                                <div class="caption">
                                    <h3>MAP</h3>
                                    
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d727.7345500826398!2d77.15866126224088!3d24.43640322739969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397aff3abbbad69f%3A0x9af2aa865b395399!2sJaypee+University+Of+Engineering+And+Technology!5e0!3m2!1sen!2sin!4v1534410819418" width="100%" height="300" frameborder="1" style="border:1" allowfullscreen></iframe>
                            
                       
                       
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>

         <!--............................................................2.nd banner......................................................................-->


        
            <!--------------------------------------------------------Main banner image#A9A9A9-------------------------------------------->
            <div id = "banner_img">
                <div class="container"> 
                     
                        <div id="banner_con">
                               <img src="xyz.jpg" alt="">
                               <div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
            <option value="usa">INDIA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
  <img class="a" src="1LOGO.jpg" alt="Emergency Medical Help">
 <p>Thanks for visiting,</p> <h1>Emergency Medical Help</h1>
</div>
                           </div>
                    
                </div>

               
            </div>
         <!--............................................................Footer...........................................................-->
        <div class="base">
            <div id="banner_img">
                
            </div>
        </div>
       

        <!--Footer end-->
        <?php
        include 'includes/footer.php';
        ?>
    </body>
    </html>