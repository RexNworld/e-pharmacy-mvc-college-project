<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=SITENAME;?> - <?=$data['title']?></title>
    <link rel="stylesheet"
        href="<?= URLROOT?>/public/assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= URLROOT?>/public/assets/css/signup.css">
    <style>
    .bg_img {
        background-image: url('<?=URLROOT?>/public/assets/img/background_image3.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        width: 100%;
        height: 100vh;
        padding: 0;
        margin: 0;
    }

    .shadow-own {
        box-shadow: -12px 1rem 0.2rem -8px rgb(58 59 69 / 20%) !important;
    }

    .bg_div {
        padding: 4%;
    }
    </style>
</head>
<body class="bg_img">
    <div class="bg_div">
        <section class="sign-in">
            <div class="container shadow-own">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <span class="error-form"><?=$data['nameError']?></span>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <span class="error-form"><?=$data['emailError']?></span>
                            <div class="form-group">
                                <label for="phonno"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="mobile" id="mobile" placeholder="Your Mobile" />
                            </div>
                            <span class="error-form"><?=$data['mobileError']?></span>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <span class="error-form"><?=$data['passError']?></span>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <span class="error-form"><?=$data['rePassError']?></span>
                            <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                            statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?=URLROOT?>/public/assets/img/signup-image.jpg" alt="sing up image">
                        </figure>
                        <a href="login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>