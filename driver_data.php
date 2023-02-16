<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ashok_leyland";
 
// Connection
$conn = mysqli_connect($servername,
               $username, $password, $dbname);
 
// Check if connection is
// Successful or not
if (!$conn) {
  die("Connection failed: "
      . mysqli_connect_error());
}
$id=$_POST['id'];
$sql="SELECT * FROM ashok_leyland WHERE driver_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$dest=$row["Destination_Location"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DEVELOPERS x LEYLAND</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header style="backgroud-color:rgb(0, 0, 0)" class="site-navbar py-3" role="banner" style="background-color:white;opacity:0.4">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-11 col-xl-2">
                        <img src="/logistics-master/images/Logo.png" style="width: 300px;height:70px">
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="#" style="color:rgb(0, 0, 0)">Track Driver</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </header>



        

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="mb-0 text-primary">Your Consinment </h2>

                    </div>
                </div>

                <div class="site-section bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mb-5">



                                <form action="#" class="p-5 bg-white">


                                    <div class="row form-group">
                                        <div class="col-md-12 mb-3 mb-md-0">
                                            <label class="text-black" for="fname">Your ID :</label><?php echo "  ".$row["driver_id"] ?>

                                        </div>
                                    </div>
                                  

                                   
                                    <div class="row form-group">

                                        <div class="col-md-12">
                                            <label class="text-black" for="subject">Vehicle Number:</label><?php echo "  ".$row["vehicle_no"] ?>

                                        </div>
                                    </div>

                                    <div class="row form-group">

                                        <div class="col-md-12">
                                            <label class="text-black" for="subject">Pickup Location :</label><?php echo "  ".$row["Origin_Location"] ?>

                                        </div>
                                    </div>                    
                                </form>
                            </div>
                            <div class="col-md-6 mb-5">
                                <form action="#" class="p-5 bg-white">
                                    <div class="row form-group">

                                        <div class="col-md-12">
                                            <label class="text-black" for="subject">Destination Location :</label><?php echo "  ".$row["Destination_Location"] ?>

                                        </div>
                                    </div>
                                    <div class="row form-group">

                                        <div class="col-md-12">
                                            <label class="text-black" for="subject">Planned ETA :</label><?php echo "  ".$row["Planned_ETA"]."  Hours" ?>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 text-center border-primary">
                    <p><a href="#" class="btn btn-primary py-6 px-5 text-white" style="background-color:red">Medical Emergency !</a></p>
                    </div>
                    <div class="col-md4 text-center border-primary">
                    <p><a href="#" class="btn btn-primary py-6 px-5 text-white" style="background-color:#1F5190">Mechanic Emergency !</a></p>
                    </div>
            </div>
        </div>
        

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-12 text-center border-primary">
                        <h2 class="mb-0 text-primary">Destination Location: </h2>
                        <iframe
                            width="600"
                            height="450"
                            style="border: 20px;"
                            loading="lazy"
                            allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBv9cjwGA2RdmdHbiZkRS9TT5Gp6TiDpXE
                             &q=Daimler india commercial">
                            </iframe>
                    </div>
                </div>

                
            </div>
        </div>
       




        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Track Drivers</a></li>
                                    <li><a href="#">Contact Drivers</a></li>

                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h2 class="footer-heading mb-4">Products</h2>
                                <ul class="list-unstyled">
                                    <li><a href="https://www.ashokleyland.com/in/en/products/trucks?tab=2">ICV Distributions</a></li>
                                    <li><a href="https://www.ashokleyland.com/in/en/products/trucks?tab=1">Haulage</a></li>
                                    <li><a href="https://www.ashokleyland.com/in/en/products/trucks?tab=4">Tractors</a></li>
                                    <li><a href="https://www.ashokleyland.com/in/en/products/trucks?tab=3">Tippers</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="https://www.facebook.com/AshokLeylandOfficial/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="https://twitter.com/ALIndiaOfficial" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="https://www.instagram.com/ashokleyland_official/?hl=en" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="https://www.linkedin.com/company/ashok-leyland/" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>

                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Dot.Developers</a>

                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>

   
    <script src="js/main.js"></script>

</body>

</html>

