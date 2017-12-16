<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nutrition Plans
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
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <!--//fonts-->
</head>
<?php include "header.php" ?>
<body>
<div id="single">
    <div data-target="about" class="about" id="about">
        <div class="contact-w3layouts">
            <div class="container">
                <div class="col-md-6 contact-agileits-w3layouts-left">
                    <h3 class="title-w3-agile-sub"><span>Nutrition Plans</span></h3>
                </div>
                <br/>
                <br/>
                <div class="col-md-6 mail-grid1-form ">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nutrition Plan Name</th>
                            <th>Details</th>
<!--                            <th></th>-->
                        </tr>
                        <?php
                        if($fetch_data->num_rows()>0){

                            foreach($fetch_data->result()as $row){
                                $id=$row->n_no;
                            ?>
                                <tr>
                                    <td><?php echo $row->n_no?></td>
                                    <td><?php echo $row->n_name?></td>
                                    <td>
                                        <?php
                                            if($id==1){
                                            echo $row->detail;
                                            }else{
                                                ?>
                                                <center><input type="button" value="OPEN" onclick="open(<?php echo $row->n_no;?>)"></center>
                                            <?php
                                            }
                                            ?>

                                    </td>

                                </tr>
                            <?php

                            }

                        }else{

                        }
                        ?>
                    </table>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>

</div>

    <?php include "footer.php" ?>
</body>


</html>

<?php
 function open($id){
        $query = $this->db->query("SELECT detail from nutrition_plan WHERE n_no=$id");

        $row = $query->row_array($id);

        if (isset($row))
        {
            echo $row['detail'];

        }
    }
?>