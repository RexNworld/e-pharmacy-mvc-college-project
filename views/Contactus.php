    <style>
* {
    font-family: Calibri;
}

@media only screen and (min-width: 1400px) {
    .brand-style {
        width: 30% !important;
        margin: 0;
    }
}

@media only screen and (max-width: 1400px) {
    .brand-style {
        width: 20% !important;
        margin: 0;
    }
}

@media only screen and (max-width: 1200px) {
    .brand-style {
        width: 20% !important;
        margin: 0;
    }
}

@media only screen and (max-width: 990px) {
    .brand-style {
        width: 30% !important;
        margin: 0;
    }
}

@media only screen and (max-width: 600px) {
    .brand-style {
        width: 50% !important;
        margin: 0;
    }
}

.carousel-indicators .active {
    background-color: #f0810f;
}

section:nth-child(even) {
    padding: 1rem;
    background: #f9fafb;
    margin-bottom: 30px;
    position: relative;
    z-index: 1;
}

section:nth-child(odd) {
    padding: 1rem;
    background: #fff;
    margin-bottom: 30px;
    position: relative;
    z-index: 1;
}

.btn-theme {
    background-color: #f0810f !important;
    border-color: #f0810f !important;
}

.hide-scrollbar {
    overflow: -moz-scrollbars-none;
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.hide-scrollbar::-webkit-scrollbar {
    width: 0 !important;
    display: none;
}

.btn-rise {
    border-radius: 20px !important;
}

.btn-rise:hover,
.btn-rise:focus {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    transform: translateY(-0.25em);
}

/* contact ------------------------------ */
.contact {
    padding-bottom: 130px;
}

.contact .info {
    padding: 30px;
    background: #fff;
    width: 100%;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .info i {
    font-size: 20px;
    color: #149ddd;
    float: left;
    width: 44px;
    height: 44px;
    background: #dff3fc;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
}

.contact .info h4 {
    padding: 0 0 0 60px;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #050d18;
}

.contact .info p {
    padding: 0 0 10px 60px;
    margin-bottom: 20px;
    font-size: 14px;
    color: #173b6c;
}

.contact .info .email p {
    padding-top: 5px;
}

.contact .info .social-links {
    padding-left: 60px;
}

.contact .info .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #333;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
    margin-right: 10px;
}

.contact .info .social-links a:hover {
    background: #149ddd;
    color: #fff;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
    background: #149ddd;
    color: #fff;
}

.contact .php-email-form {
    width: 100%;
    padding: 30px;
    background: #fff;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .php-email-form .form-group {
    padding-bottom: 8px;
}

.contact .php-email-form .validate {
    display: none;
    color: red;
    margin: 0 0 15px 0;
    font-weight: 400;
    font-size: 13px;
}

.contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: left;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .error-message br+br {
    margin-top: 25px;
}

.contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
}

.contact .php-email-form .loading:before {
    content: '';
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
}

.contact .php-email-form .form-group {
    margin-bottom: 15px;
}

.contact .php-email-form label {
    padding-bottom: 8px;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
}

.contact .php-email-form input {
    height: 44px;
}

.contact .php-email-form textarea {
    padding: 10px 15px;
}

.contact .php-email-form button[type='submit'] {
    background: #149ddd;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 4px;
}

.contact .php-email-form button[type='submit']:hover {
    background: #37b3ed;
}

@-webkit-keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
    </style>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Us</h2>
                <p>"All your essential madicine, Deliver with personalized care"</p>
            </div>

            <div class="row" data-aos="fade-in">
                <div class="col-md-5 col-sm-12 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d920.0540350406175!2d88.485605!3d22.7202064!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8a20f7e6d7905%3A0x7c07bacdedc3d98d!2sChapadali%20More%20Bus%20Stand!5e0!3m2!1sen!2sin!4v1655452869830!5m2!1sen!2sin"
                            frameborder="0" style="border: 0; width: 100%; height: 290px" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>