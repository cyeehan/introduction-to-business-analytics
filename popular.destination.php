<?php
session_start();
require 'check.if.added.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png"/>
    <title>Our Popular Destinations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div>
    <?php
    require 'header.php';
    ?>
    <div class="container">
        <div class="jumbotron" style="color: black; text-align: center">
            <h1 style="font-size: 35px">Most visited places by our customers.</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-brickfields.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Brickfields</h3>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-ipoh.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Ipoh</h3>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-jb.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Johor Bahru</h3>

                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-kuala-terengganu.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Kuala Terengganu</h3>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-penang.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Penang</h3>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-petaling-jaya.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Petaling Jaya</h3>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-putrajaya.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Putrajaya</h3>

                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-resort-world.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Resort World Genting</h3>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-shah-alam.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Shah Alam</h3>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-taiping.JPG" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Taiping</h3>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-taman-negera.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Taman Negara</h3>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="">
                        <img src="img/popular.places/img-kuala-selangor.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Kuala Selangor</h3>
                        </div>
                    </center>
                </div>
            </div>
        </div>

    </div>
</body>
<?php
require 'footer.php';
?>
</html>
