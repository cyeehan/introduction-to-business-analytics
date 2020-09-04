<?php
session_start();
require 'check.if.added.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png"/>
    <title>Selling Bus Tickets</title>
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
            <h1>Welcome to ETicketing Malaysia!</h1>
            <p style="font-weight: normal">We Make It Easy To Book Bus Tickets</p>
            <p style="font-weight: bold; color: blue">All buses are available on Monday to Sunday.</p>
            <h1 style="font-weight: bold; color: red; font-size: 30px">Important!</h1>
            <h2 style="font-weight: bold; color: black">Please show receipt of purchase sent to your email upon boarding
                the bus.</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/destination/img-alorsetar-box.jpg" alt="alorsetar">

                    <center>
                        <div class="caption">
                            <h3 style="font-weight: bold">KLIA/KLIA2 to Alor Setar</h3>
                            <p>RM70.00 per person<br>(Departure time: 4:30 PM)</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="user.login.php" role="button" class="btn btn-primary btn-block"
                                      style="font-size: 15px">Book Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) {
                                    echo '<a href="#" class=btn btn-block btn-success disabled style="font-size: 15px">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart.add.php?id=1" class="btn btn-block btn-primary" name="add" value="add"
                                       class="btn btn-block btr-primary" style="font-size: 15px">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">

                    <img src="img/destination/img-kangar-box.jpg" alt="kangar">

                    <center>
                        <div class="caption">
                            <h3 style="font-weight: bold">KLIA/KLIA2 to Kangar</h3>
                            <p>RM47.00 per person<br>(Departure time: 3:30 PM)</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="user.login.php" role="button" class="btn btn-primary btn-block"
                                      style="font-size: 15px">Book Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(2)) {
                                    echo '<a href="#" class=btn btn-block btn-success disabled style="font-size: 15px">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart.add.php?id=2" class="btn btn-block btn-primary" name="add" value="add"
                                       class="btn btn-block btr-primary" style="font-size: 15px">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/destination/img-kualabesut-box.jpg" alt="Kuala Besut">
                    <center>
                        <div class="caption">
                            <h3 style="font-weight: bold">KLIA/KLIA2 to Kuala Besut</h3>
                            <p>RM90.00 per person<br>(Departure time: 1:40 PM)</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="user.login.php" role="button" class="btn btn-primary btn-block"
                                      style="font-size: 15px">Book Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(3)) {
                                    echo '<a href="#" class=btn btn-block btn-success disabled style="font-size: 15px">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart.add.php?id=3" class="btn btn-block btn-primary" name="add" value="add"
                                       class="btn btn-block btr-primary" style="font-size: 15px">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/destination/img-kuantan-box.jpg" alt="Kuantan">
                    <center>
                        <div class="caption">
                            <h3 style="font-weight: bold">KLIA to Kuantan</h3>
                            <p>RM55.00 per person<br>(Departure time: 11:50 AM)</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="user.login.php" role="button" class="btn btn-primary btn-block"
                                      style="font-size: 15px">Book Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(4)) {
                                    echo '<a href="#" class=btn btn-block btn-success disabled style="font-size: 15px">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart.add.php?id=4" class="btn btn-block btn-primary " name="add"
                                       value="add" class="btn btn-block btr-primary" style="font-size: 15px">Add to
                                        cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/destination/img-muar-box.jpg" alt="Muar">
                    <center>
                        <div class="caption">
                            <h3 style="font-weight: bold">KLIA2 to Muar</h3>
                            <p>RM40.00 per person<br>(Departure time: 4:00 PM)</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="user.login.php" role="button" class="btn btn-primary btn-block"
                                      style="font-size: 15px">Book Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(5)) {
                                    echo '<a href="#" class=btn btn-block btn-success disabled style="font-size: 15px">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart.add.php?id=5" class="btn btn-block btn-primary " name="add"
                                       value="add" class="btn btn-block btr-primary" style="font-size: 15px">Add to
                                        cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/destination/img-melaka-box.jpg" alt="Melaka">
                    <center>
                        <div class="caption">
                            <h3 style="font-weight: bold">KLIA to Melaka</h3>
                            <p>RM35.00 per person<br>(Departure time: 6:30 PM)</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="user.login.php" role="button" class="btn btn-primary btn-block"
                                      style="font-size: 15px">Book Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) {
                                    echo '<a href="#" class=btn btn-block btn-success disabled style="font-size: 15px">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart.add.php?id=6" class="btn btn-block btn-primary " name="add"
                                       value="add" class="btn btn-block btr-primary" style="font-size: 15px">Add to
                                        cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/destination/img-kb-box.jpg" alt="Kota Bahru">

                    <center>
                        <div class="caption">
                            <h3 style="font-weight: bold">KLIA/KLIA2 to Kota Bahru</h3>
                            <p>RM44.00 per person<br>(Departure time: 9:30 PM)</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="user.login.php" role="button" class="btn btn-primary btn-block"
                                      style="font-size: 15px">Book Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(7)) {
                                    echo '<a href="#" class=btn btn-block btn-success disabled style="font-size: 15px">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart.add.php?id=7" class="btn btn-block btn-primary " name="add"
                                       value="add" class="btn btn-block btr-primary" style="font-size: 15px">Add to
                                        cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/destination/img-kt-box.jpg" alt="Kuala Terengganu">

                    <center>
                        <div class="caption">
                            <h3 style="font-weight: bold">KLIA2 to Kuala Terengganu</h3>
                            <p>RM70.00 per person<br>(Departure time: 2:20 PM)</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="user.login.php" role="button" class="btn btn-primary btn-block"
                                      style="font-size: 15px">Book Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(8)) {
                                    echo '<a href="#" class=btn btn-block btn-success disabled style="font-size: 15px">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart.add.php?id=8" class="btn btn-block btn-primary " name="add"
                                       value="add" class="btn btn-block btr-primary" style="font-size: 15px">Add to
                                        cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

    </div>
    <br><br><br><br><br><br><br><br>
    <?php
    require 'footer.php';
    ?>
</body>
</html>
