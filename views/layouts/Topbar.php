<nav class="navbar navbar-expand-md navbar-dark main-menu" style="box-shadow: none; background-color: #063852">
    <div class="container">
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="btn btn-link d-block d-md-none">
            <i class="bi bi-list"></i>
        </button>

        <a href="<?=URLROOT?>" class="navbar-brand brand-style"><img
                src="<?=URLROOT?>/public/assets/img/e_pharmacy_light.png" alt="e-Pharmacy" width="150" height="30"
                srcset="" class="d-inline-block align-text-top logo-navbar" /></a>

        <ul class="navbar-nav ml-auto d-block d-md-none">
            <li class="nav-item">
                <a class="btn text-white" href="#">
                    <span class="position-relative btn-link me-2"><i class="bi bi-cart-fill"
                            style="font-size: 20px"></i><span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            style="font-size: 10px">99+</span></span>
                </a>
            </li>
        </ul>

        <!-- Search Bar -->
        <div class="collapse navbar-collapse">
            <div class="form-inline my-2 my-lg-0 mx-auto" style="margin-left: 0 !important; width: 50%">
                <div class="input-group">
                    <span class="input-group-text bg-light" id="basic-addon3">Delivery to</span>
                    <div class="vr"></div>
                    <input class="form-control me-2" type="search" placeholder="Search for products..."
                        aria-label="Search" />
                </div>
            </div>

            <!-- <form class="d-flex form-inline my-2 my-lg-0 mx-auto">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search for products..."
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form> -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn text-white" href="#">
                        <span class="position-relative btn-link me-2 text-white" style="text-decoration: none"><i
                                class="bi bi-bag-heart-fill" style="font-size: 20px"></i></span>
                        Wishlist
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn text-white" href="#">
                        <span class="position-relative btn-link me-2"><i class="bi bi-cart-fill text-white"
                                style="font-size: 20px"></i><span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                style="font-size: 10px">99+</span></span>
                        Cart
                    </a>
                </li>
                <?php if(isAuth() !=0) :?>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn text-white p-0 m-0 dropdown-toggle" type="button" id="profileDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="position-relative me-2 text-white">
                                <?php if(!empty($_SESSION['user_img'])):?>
                                <img src="<?= URLROOT.'/uploads/profile_images/'.$_SESSION['user_secret_name'].'/'.$_SESSION['user_img'] ?>"
                                    class="special-img">
                                <?php else :?>
                                <img src="<?=URLROOT?>/public/assets/img/profile_pic.jpg" class="special-img">
                                <?php endif;?>
                                <?php $name = explode(' ',$_SESSION['user_name']); 
                                echo $name[0];
                                ?>
                                <b class="caret"></b>
                            </span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="profile">Profile</a>
                            <?php if($_SESSION['user_type'] == 'SUPERADMIN') :?>
                            <a class="dropdown-item" href="dashboard">Dashboard</a>
                            <?php endif;?>
                            <a class="dropdown-item" href="logout">Logout</a>
                        </div>
                    </div>
                </li>
                <?php else :?>
                <li class="nav-item">
                    <a class="btn text-white" href="login">
                        <span class="position-relative btn-link me-2 text-white">
                            <i class="bi bi-person-fill" style="font-size: 20px"></i></span>
                        Sign in
                    </a>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>
<!-- <div id="wrapper"> -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <div class="col-12 d-md-none">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search for products..."
                    aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Covid</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Wellness</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Lab Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Ayurvedic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Homeopathy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Fitness</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Baby</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Beauty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Treatments</a>
                </li>
            </ul>
        </div>
    </div>
</nav>