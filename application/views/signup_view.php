<!DOCTYPE html>
<html lang="en">
<head>
<title>Login
</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gym Workout Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
<!--//fonts-->    

<link href="<?php echo base_url();?>css/styleSignup.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="<?php echo base_url();?>text/javascript" src="js/jquery-2.1.4.minSignup.js"></script>
<!-- //js -->
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/cm-overlay.css" /><!-- //overlay-->
<link rel="stylesheet" href="<?php echo base_url();?>/css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/login.css" rel="stylesheet" type="text/css" media="all" />


<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Anton&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<?php include "header.php" ?>
<body>
<div id="single">

<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
     <td valign="top" align="left" background="http://liwli.com/wp-content/uploads/2015/05/gym-workout.jpg" style="background-repeat:no-repeat; background-size:cover;"> 

<!-- banner -->
  <div class="center-container">
      <div class="contact-w3layouts">
<!--  <div class="banner-dott">-->
    <div class="main">
      <h1 class="w3layouts_head">Registration Form</h1>
        <div class="w3layouts_main_grid">
        <?php echo validation_errors(); ?>
        <?php echo form_open('signup/RegisterUser'); ?>
         <!-- <form action="#" method="post" class="w3_form_post">-->
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>First Name </label>
                <input type="text" id= "fname" name="fname" placeholder="First Name" required="">
              </span>
            </div>

            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Last Name </label>
                <input type="text" id= "lname" name="lname" placeholder="Last Name" required="">
              </span>
            </div>

            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Age </label>
                <input type="text" id= "age" name="age" placeholder="Age" required="">
              </span>
            </div>
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Email </label>
                <input type="text" id= "email" name="email" placeholder="Email" required="">
              </span>
            </div>
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Contact Number </label>
                <input type="text" id= "contactNumber" name="cnumber" placeholder="Contact Number" required="">
                </span>
            </div>

            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Address </label>
                <input type="text" id= "address" name="address" placeholder="Address" required="">
                </span>
            </div>

            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Height </label>
                <input type="text" id= "height" name="height" placeholder="Height" required="">
                </span>
            </div>

            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Weight </label>
                <input type="text" id= "weight" name="weight" placeholder="Weight" required="">
                </span>
            </div>

            <!--<div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Faculty </label>
                <select name="country">
                  <option value="none" selected="" disabled="">Select Option</option>
                  <option value="Ph">UCSC</option>
                  <option value="Ph">Science</option>
                  <option value="Po">Art</option>
                  <option value="So">Management</option>                
                </select>
              </span>
            </div>-->

            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>NIC No. </label>
                <input type="text" id= "nic" name="nic" placeholder="NIC No." required="">
                </span>
            </div>
            

            <!--<div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Category </label>
                <select name="country">
                  <option value="none" selected="" disabled="">Select Option</option>
                  <option value="Ph">Aerobic</option>
                  <option value="Po">Strength Exercises</option>
                  <option value="So">Flexibility</option>
                  <option value="Sp">Balance Exercises</option>

                </select>
              </span>
            </div>-->

            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Password </label>
                <input type="password" id= "password" name="password" placeholder="Password" required="">
                </span>
            </div>

            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Confirm Password </label>
                <input type="password" id= "confirmPassword" name="cpassword" placeholder="Confirm Password" required="">
                </span>
            </div>
            
          
          <div class="w3_main_grid">
            <div class="w3_main_grid_right">
              <input type="submit" value="Submit">
            </div>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
    <!-- Calendar -->
      <link rel="stylesheet" href="css/jquery-uiSignup.css" />
        <script src="js/jquery-ui.js"></script>
          <script>
            $(function() {
              $( "#datepicker" ).datepicker();
            });
          </script>
    <!-- //Calendar -->

      <div class="w3layouts_copy_right">
        <div class="container">
          <!--<p>© 2017 Auditions Registration Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>-->
        </div>
      </div>

    </div>
  </div>
  </div>
<?php include "footer.php" ?>
</div>
</td>
   </tr>
 </table>

</body>


</html>