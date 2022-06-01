<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?=SITENAME;?> - <?=$data['title']?></title>
    <!-- Font Icon -->
    <link
      rel="stylesheet"
      href="<?= URLROOT?>/public/assets/fonts/material-icon/css/material-design-iconic-font.min.css"
    />
    <!-- Main css -->
    <link rel="stylesheet" href="<?= URLROOT?>/public/assets/css/signup.css" />
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
          <div class="signin-content">
            <div class="signin-image">
              <figure>
                <img
                  src="<?=URLROOT?>/public/assets/img/signin-image.jpg"
                  alt="sing up image"
                />
              </figure>
              <a href="register" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
              <h2 class="form-title">Log in</h2>
              <form method="POST" class="register-form" id="login-form">
                <div class="form-group">
                  <label for="username"
                    ><i class="zmdi zmdi-account material-icons-name"></i
                  ></label>
                  <input
                    type="text"
                    name="username"
                    id="username"
                    placeholder="Email or Phone"
                  />
                </div>
                <span class="error-form"><?=$data['nameError']?></span>
                <div class="form-group">
                  <label for="password"><i class="zmdi zmdi-lock"></i></label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                  />
                </div>
                <span class="error-form"><?=$data['passError']?></span>
                <div class="form-group">
                  <input
                    type="checkbox"
                    name="remember-me"
                    id="remember-me"
                    class="agree-term"
                  />
                  <label for="remember-me" class="label-agree-term"
                    ><span><span></span></span>Remember me</label
                  >
                </div>
                <div class="form-group form-button">
                  <input
                    type="submit"
                    name="signin"
                    id="signin"
                    class="form-submit"
                    value="Log in"
                  />
                </div>
              </form>
              <div class="social-login">
                <span class="social-label">Or login with</span>
                <ul class="socials">
                  <li>
                    <a href="#"
                      ><i class="display-flex-center zmdi zmdi-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="display-flex-center zmdi zmdi-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="display-flex-center zmdi zmdi-google"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
