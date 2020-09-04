<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Francois+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Carousel.css">
    <link rel="stylesheet" href="assets/css/Corporate-Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet"
          href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_navbar-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_navbar.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div>
    <div id="parallax-box-njp-1" style="height: 1100px;">
        <?php
        require 'header.php';
        ?>
        <div id="new-joiner-form" style="max-height: 400px;">
            <form data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200" id="fill-info-1"
                  class="fill-info-1" method="post" action="user.registration.script.php">
                <div class="form-group" id="application-form">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr></tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="border-top: 0px;">
                                    <h1 class="text-center" id="new-joiner-form-title" style="color: orange;">Sign
                                        Up</h1><input class="form-control" type="text" data-toggle="tooltip"
                                                      data-bs-tooltip="" data-placement="bottom"
                                                      placeholder="*Full Name as Per NRIC" title="Full Name as Per NRIC"
                                                      name="name" required="true">
                                    <input class="form-control"
                                           type="text" data-toggle="tooltip" data-bs-tooltip="" data-placement="bottom"
                                           placeholder="*IC / Passport (e.g. 110011-00-1100)" name="ic_passport"
                                           required="true"
                                           pattern="(([[1-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))-([0-9]{2})-([0-9]{4})">
                                    <div class="form-row">
                                        <div class="col"><input class="form-control" type="password"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                placeholder="*Password (at least 6 characters)"
                                                                name="password" required="true" pattern=".{6,}"
                                                                onkeyup='check();'></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><input class="form-control" type="email" data-toggle="tooltip"
                                                                data-placement="bottom" placeholder="*Email Address"
                                                                title="Email Address" name="email" required="true"
                                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></div>
                                        <div class="col"><input class="form-control" type="text" data-toggle="tooltip"
                                                                data-bs-tooltip="" data-placement="bottom"
                                                                placeholder="*Phone No. (e.g. 0178578811)"
                                                                name="contact" required="true"
                                                                pattern="^(01)[0-46-9]*[0-9]{7,8}$"></div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr></tr>
                            </thead>
                            <tbody>
                            <tr style="border-bottom: 1px solid #dee2e6;">
                                <td>
                                    <h1 class="text-left" id="register-form-2">I hereby declare that the information
                                        given by me in this form is accurate and true to the best of my knowledge and
                                        subject to validation by ETicketing Malaysia<br></h1>
                                    <div class="form-check agreement"><input class="form-check-input" name="agreement"
                                                                             value="True" type="checkbox"
                                                                             id="form-check-agreement"
                                                                             required=""><label class="form-check-label"
                                                                                                for="formCheck-1"
                                                                                                style="font-weight: bold;">I
                                            have read &amp; agree to the statement above</label></div>
                                    <button
                                            class="btn btn-primary btn-lg text-center shadow btn-register" type="submit"
                                            value="Sign Up">SUBMIT
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require 'footer.php';
?>
</body>

</html>