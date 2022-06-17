<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

    :root {
        --green: #16a085;
        --black: #444;
        --light-color: #777;
        --box-shadow: .5rem .5rem 0 rgba(22, 160, 133, .2);
        --text-shadow: .4rem .4rem 0 rgba(0, 0, 0, .2);
        --border: .2rem solid var(--green);
    }

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-transform: capitalize;
        transition: all .2s ease-out;
        text-decoration: none;
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-padding-top: 7rem;
        scroll-behavior: smooth;
    }

    section {
        padding: 1rem 9%;
    }

    section:nth-child(even) {
        background: #f5f5f5;
    }

    .heading {
        text-align: center;
        padding-bottom: 2rem;
        text-shadow: var(--text-shadow);
        text-transform: uppercase;
        color: var(--black);
        font-size: 5rem;
        letter-spacing: .4rem;
    }

    .heading span {
        text-transform: uppercase;
        color: var(--green);
    }

    .btn {
        display: inline-block;
        margin-top: 1rem;
        padding: .5rem;
        padding-left: 1rem;
        border: var(--border);
        border-radius: .5rem;
        box-shadow: var(--box-shadow);
        color: var(--green);
        cursor: pointer;
        font-size: 1.7rem;
        background: #fff;
    }

    .btn span {
        padding: .7rem 1rem;
        border-radius: .5rem;
        background: var(--green);
        color: #fff;
        margin-left: .5rem;
    }

    .btn:hover {
        background: var(--green);
        color: #fff;
    }

    .btn:hover span {
        color: var(--green);
        background: #fff;
        margin-left: 1rem;
    }

    .icons-container {
        display: grid;
        gap: 2rem;
        grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
        padding-top: 5rem;
        padding-bottom: 5rem;
    }

    .icons-container .icons {
        border: var(--border);
        box-shadow: var(--box-shadow);
        border-radius: .5rem;
        text-align: center;
        padding: 2.5rem;
    }

    .icons-container .icons i {
        font-size: 4.5rem;
        color: var(--green);
        padding-bottom: .7rem;
    }

    .icons-container .icons h3 {
        font-size: 4.5rem;
        color: var(--black);
        padding: .5rem 0;
        text-shadow: var(--text-shadow);
    }

    .icons-container .icons p {
        font-size: 1.7rem;
        color: var(--light-color);
    }

    .about .row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
    }

    .about .row .image {
        flex: 1 1 45rem;
    }

    .about .row .image img {
        width: 100%;
    }

    .about .row .content {
        flex: 1 1 45rem;
    }

    .about .row .content h3 {
        color: var(--black);
        text-shadow: var(--text-shadow);
        font-size: 4rem;
        line-height: 1.8;
    }

    .about .row .content p {
        color: var(--light-color);
        padding: 1rem 0;
        font-size: 1.5rem;
        line-height: 1.8;
    }

    .doctors .box-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
        gap: 2rem;
    }

    .doctors .box-container .box {
        text-align: center;
        background: #fff;
        border-radius: .5rem;
        border: var(--border);
        box-shadow: var(--box-shadow);
        padding: 2rem;
    }

    .doctors .box-container .box img {
        height: 20rem;
        border: var(--border);
        border-radius: .5rem;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .doctors .box-container .box h3 {
        color: var(--black);
        font-size: 2.5rem;
    }

    .doctors .box-container .box span {
        color: var(--green);
        font-size: 1.5rem;
    }

    .doctors .box-container .box .share {
        padding-top: 2rem;
    }

    .doctors .box-container .box .share a {
        height: 5rem;
        width: 5rem;
        line-height: 4.5rem;
        font-size: 2rem;
        color: var(--green);
        border-radius: .5rem;
        border: var(--border);
        margin: .3rem;
    }

    .doctors .box-container .box .share a:hover {
        background: var(--green);
        color: #fff;
        box-shadow: var(--box-shadow);
    }

    li {
        color: var(--light-color);
        font-size: 1.5rem;
        line-height: 1.8;
    }

    /* media queries  */
    @media (max-width:991px) {

        html {
            font-size: 55%;
        }

        .header {
            padding: 2rem;
        }

        section {
            padding: 2rem;
        }

    }

    @media (max-width:768px) {

        #menu-btn {
            display: initial;
        }

        .header .navbar {
            position: absolute;
            top: 115%;
            right: 2rem;
            border-radius: .5rem;
            box-shadow: var(--box-shadow);
            width: 30rem;
            border: var(--border);
            background: #fff;
            transform: scale(0);
            opacity: 0;
            transform-origin: top right;
            transition: none;
        }

        .header .navbar.active {
            transform: scale(1);
            opacity: 1;
            transition: .2s ease-out;
        }

        .header .navbar a {
            font-size: 2rem;
            display: block;
            margin: 2.5rem;
        }

    }

    @media (max-width:450px) {

        html {
            font-size: 50%;
        }

    }
    </style>

</head>

<body>

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="<?=URLROOT?>/public/assets/img/about-img.svg" alt="">
            </div>

            <div class="content">
                <h3>we take care of your healthy life</h3>
                <p>We, at E-Pharmacy delivers the right medicine to the customer
                    at reasonable rate and at most ease. E-Pharmacy started by a
                    group of committed professional bringing the customer comfortability
                    forward and are contented to serve the society in the upcoming future.
                    Our aim is to provide the all the medical services to the customer at their
                    doorstep also maintaining the price ratio. We are obliged to serve the society
                    and contributing to the country’s economy. We are eager to provide the services
                    to the customer and are planning to spread out the functionalities all over the globe.
                </p>

                <li>One to one patient doctor video appointment</li>
                <li>Home Delivery of Medicine</li>
                <li>Diagnosis for possible disease at home</li>
                <li>Direct doctor consultant</li>
                <li>Prevention and curation tips for disease</li>
                <li>Both online and offline doctor consultancy</li>


            </div>

        </div>

    </section>
</body>

</html>