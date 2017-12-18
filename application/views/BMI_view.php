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

<!-- Default-JavaScript-File -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->

<!-- default css files -->
  <link rel="stylesheet" href="css/bootstrapUser.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/styleUser.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/font-awesome.minUser.css" />

<!-- default css files -->
  
<!-- For testimonials --> 
<link rel="stylesheet" href="css/flexsliderUser.css" type="text/css" media="screen" /><!-- Flexislider-CSS -->
<!-- //For testimonials -->

<!-- gallery -->
<link href='css/simplelightbox.minUser.css' rel='stylesheet' type='text/css'>
<!-- //gallery -->

<!-- web font-->
  <link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext,vietnamese" rel="stylesheet">
<!-- //web font-->
<style>
  
h3 {
    color: blue;
    font-family: verdana;
    font-size: 300%;
}


</style>
</head>

<?php include "header.php" ?>
<<body>
<div id="single">
<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
     <td valign="top" align="left" background="https://redfynn-gt7rmksqqwq7f30mi.netdna-ssl.com/wp-content/uploads/2016/08/home-italian-food-background.jpg" style="background-repeat:no-repeat; background-size:cover;"> 

<!-- banner -->
  <div class="center-container">
      <div class="contact-w3layouts">
<!--  <div class="banner-dott">-->



<!-- about -->
  <div >
    
    <div class="container">
      <div class="w3ls_banner_bottom_grids">
        <div class="col-md-6 w3_agileits_about_grid_left">
        
          
          <p><b><i>Your body mass index, or BMI, is a measure of your body fat based on your height and weight, according to the National Heart, Lung and Blood Institute. In order to be at an ideal weight, you must have a BMI of 18.5 to 24.9. A BMI of 25 to 29.9 is considered overweight, and below 18.5 is considered underweight.</i></b></p>
          <br><br>
          <h1>Your BMI is: <?php echo $BMI; ?> </h1>
          <br><br><br>
          <?php 
            if($BMI <18.5){
               print "<strong>You are Under weight<br></strong>";
              print "<strong>The key to healthy weight gain is to choose nutrient-rich foods as often as possible. Consuming more empty-calorie foods such as soft drinks, candy and chips is not a successful way to build muscle, strengthen bones or repair tissue after surgery. For smart weight gain, you need the nutrient power of all the food groups</strong>";
            }

            elseif ($BMI >30) {
              print "<strong>You have normal weight<br></strong>";
               print "<strong>It’s natural for anyone trying to lose weight to want to lose it very quickly. But evidence shows that people who lose weight gradually and steadily (about 1 to 2 pounds per week) are more successful at keeping weight off. Healthy weight loss isn’t just about a “diet” or “program”. It’s about an ongoing lifestyle that includes long-term changes in daily eating and exercise habits.To lose weight, you must use up more calories than you take in. Since one pound equals 3,500 calories, you need to reduce your caloric intake by 500—1000 calories per day to lose about 1 to 2 pounds per week</strong>";
            }

            else {
              print "<strong>You are over weight<br></strong>";
              print "<strong>you’re currently at a healthy weight, you’re already one step ahead of the game. To stay at a healthy weight, it’s worth doing a little planning now. Or maybe you are overweight but aren’t ready to lose weight yet. If this is the case, preventing further weight gain is a worthy goal.As people age, their body composition gradually shifts — the proportion of muscle decreases and the proportion of fat increases. This shift slows their metabolism, making it easier to gain weight. In addition, some people become less physically active as they get older, increasing the risk of weight gain.</strong>";
            }


          ?>
          
          <br><br><br>

          <div><input type="button" value="  Back  " onclick="window.location.href='<?php echo base_url();?>User'" /></div>
 


        </div>
        <div class="col-md-6 w3_agileits_about_grid_right">
          <img src="https://i.pinimg.com/originals/22/4a/70/224a707cc9ee9857a2ebd50ff63b237a.jpg">
        </div>
        <div class="clearfix"> </div>
      </div>
      
    </div>
  </div>
  
  
<!-- Testimonials script js -->
  <script defer src="js/jquery.flexsliderUser.js"></script>
  <!--Start-slider-script-->
      <script type="text/javascript">
      
      $(window).load(function(){
        $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
        });
      });
      </script>
  <!--End-slider-script-->
<!-- //Testimonials script js -->

<!-- Owl-Carousel-JavaScript -->
  <script src="js/owl.carouselUser.js"></script>
  <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel ({
        items : 3,
        lazyLoad : true,
        autoPlay : true,
        pagination : true,
      });
    });
  </script>
<!-- //Owl-Carousel-JavaScript -->  

<!-- start-smooth-scrolling -->
<script src="js/SmoothScroll.minUser.js"></script>
<script type="text/javascript" src="js/move-topUser.js"></script>
<script type="text/javascript" src="js/easingUser.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });
  </script>
<!-- //here ends scrolling icon -->
<?php include "footer.php" ?>
</div>
</td>
   </tr>
 </table>

</body>


</html>