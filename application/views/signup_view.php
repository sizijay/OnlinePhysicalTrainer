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
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/cm-overlay.css" /><!-- //overlay-->
<link rel="stylesheet" href="<?php echo base_url();?>/css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/login.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
<!--//fonts-->
<link href="<?php echo base_url();?>css/styleSignup.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="<?php echo base_url();?>text/javascript" src="js/jquery-2.1.4.minSignup.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Anton&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<?php include "header.php" ?>
<body>
<div id="single">
    <div data-target="about" class="about" id="about">
<!-- banner -->
  <div class="center-container">
      <div class="contact-w3layouts">
<!--  <div class="banner-dott">-->
    <div class="main">
      <h1 class="w3layouts_head">Auditions Registration Form</h1>
        <div class="w3layouts_main_grid">
          <form action="#" method="post" class="w3_form_post">
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>First Name </label>
                <input type="text" name="Task" placeholder="First Name" required="">
              </span>
            </div>
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Last Name </label>
                <input type="text" name="Task" placeholder="Last Name" required="">
              </span>
            </div>
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Your Email </label>
                <input type="text" name="Task" placeholder="Your Email" required="">
              </span>
            </div>
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Phone Number </label>
                <input type="text" name="Task" placeholder="Phone Number" required="">
                </span>
            </div>
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Select Category </label>
                <select name="country">
                  <option value="none" selected="" disabled="">Select Category</option>
                  <option value="Ph">Hero</option>
                  <option value="Po">Heroine</option>
                  <option value="So">Model</option>
                  <option value="Sp">Music</option>

                </select>
              </span>
            </div>
            <div class="agileits_w3layouts_main_grid w3ls_main_grid">
              <span class="agileinfo_grid">
                <label>Date / Time </label>
                <div class="agileits_w3layouts_main_gridl">
                  <input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                </div>
                <div class="agileits_w3layouts_main_gridr">
                  <input type="time" name="Time" placeholder=" " required="">
                </div>
                  <div class="clear"> </div>
              </span>
            </div>
          
          <div class="w3_main_grid">
            <div class="w3_main_grid_right">
              <input type="submit" value="Submit">
            </div>
          </div>
        </form>
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

    </div>
  </div>
  </div>
<?php include "footer.php" ?>
</div>


</body>


</html>