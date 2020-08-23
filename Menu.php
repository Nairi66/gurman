<?php 

    include 'session.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Գուրման Վանաձոր | Մենյու</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
<?php include_once 'assets/header.php'; ?>
    
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Մենյու</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- best_burgers_area_start  -->
    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>Food Menu</span>
                        <h3>Ամենահամեղ ուտելիքները</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'gurman');
        
                            $query = "SELECT * FROM `foods`";
                            $result = mysqli_query($conn, $query);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo '<div class="col-xl-6 col-md-6 col-lg-6">';
                                        echo '<div class="single_delicious d-flex align-items-center">';
                                        echo '<div class="thumb"><img src="img/inserted_foods/'.$row["filename"].'" alt=""></div>';
                                        echo '<div class="info">';
                                        echo '<h3 >'.$row["name"].'</h3>';
                                        echo '<p>'.$row["descript"].'</p>';
                                        echo '<span id="'.str_replace(' ', '_', $row["name"]).'">'.$row["price"].' դրամ</span></div></div>';
                                        echo '</div>';
                                    }
                                  }

                            ?>
                </div>
            </div>
        </div>
    </div>
    <center><h1>Պատվեր: <b><?php echo $_SESSION['username']; ?></b><br></h1></center><br><hr>

    <form method="post" id="carform" class="container box">
        <p>+</p>
        <select id="order" name="my_order" form="carform" style="float: left;">
            <option value="" selected disabled hidden>Ընտրեք ուտեստը</option>
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'gurman');
        
                $query = "SELECT * FROM `foods`";
                $result = mysqli_query($conn, $query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                       echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
                   }
                }
            ?>


        </select>
        <!-- <label for="quantity">Քանակը։ </label> -->
        <input type="number" class="form-control col-sm-1" style="font-size: 25px; float: left; text-align: center;" id="quantity" value="1" min="1">

        <input type="number" value="0" class="price form-control col-sm-5" style="float: left; font-size: 25px;" readonly>
        <input type="text" value="Դրամ" class="form-control col-sm-1" style="float: left; font-size: 25px;" readonly>
        <input type="submit" class="form-control col-sm-2" value="Պատվիրել" style="font-size: 25px;" name="order">

         <script>
            $( "form" ).change(function() {
                var name = $("#order" ).val()
                var price_0 = '#' + name.replace(/ /g, "_");
                var price = $(price_0).html()
                price = price.replace(' դրամ', '')
                var quantity = $('#quantity').val()
                console.log(quantity)
                $('.price').val(price*quantity)
            });

        </script>
    </form>
    <br>

    
    <!-- best_burgers_area_end  -->

    <!-- footer_start  -->
    <?php include_once 'assets/footer.php'; ?>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>