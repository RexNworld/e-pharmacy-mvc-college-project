<style>
    .form-control:hover{
        box-shadow:none;
    }
    </style>
<div class="sticky-top">
    <nav class="bg-dark d-none d-md-block">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="nav-color nav-font d-flex">
                    <a href="#" class="text-reset text-decoration-none fst-italic p-2">Facebook</a>
                    <a href="#" class="text-reset text-decoration-none fst-italic p-2">Twitter</a>
                    <a href="#" class="text-reset text-decoration-none fst-italic p-2">Instagram</a>
                    <a href="#" class="text-reset text-decoration-none fst-italic p-2">Youtube</a>
                </div>
                <div class="nav-color d-flex">
                    <a href="<?=URLROOT?>/about" class="text-reset text-decoration-none fst-italic p-2">About Us</a>
                    <a href="<?=URLROOT?>/contact" class="text-reset text-decoration-none fst-italic p-2">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation"
                class="btn navbar-toggler border-0 d-md-none">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>

            <a href="<?=URLROOT?>" class="navbar-brand brand-style"><img
                    src="<?=URLROOT?>/public/assets/img/e_pharmacy_dark.png" alt="e-Pharmacy" height="30" srcset=""
                    class="d-inline-block align-text-top logo-navbar" /></a>

            <ul class="navbar-nav d-md-none">
                <li class="nav-item">
                    <!-- <a class="btn" href="#">
                        <span class="btn-link"><i class="fa fa-search" style="font-size: 20px"></i> </span>
                    </a> -->
                    <a class="btn" href="<?=URLROOT?>/cart">
                        <span class="position-relative"><i class="fa fa-shopping-cart" style="font-size: 20px"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"
                                style="font-size: 10px" id="cartCount"><?=countCart()?></span></span>
                    </a>
                </li>
            </ul>
            <!-- Search Bar -->
            <div class="collapse navbar-collapse">
                <div class="ms-auto">
                    <div class="input-group">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px; background-color:#e6fff2;" placeholder="Search for..."
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline" type="button" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px; background-color:#e6fff2; border:1px solid #798686;"
                                    id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="me-0 m-2 vr"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn" href="<?=URLROOT?>/cart">
                            <span class="position-relative"><i class="fa fa-shopping-cart" style="font-size: 20px"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"
                                    style="font-size: 10px" id="cartCount"><?=countCart()?></span></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <?php if(!empty($_SESSION['user_img'])):?>
                            <button class="btn dropdown-toggle p-0" type="button" id="profileDropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= URLROOT.'/uploads/'.$_SESSION['user_img'] ?>" width="40" height="40"
                                    style="object-fit: cover" class="special-img" />
                                <?php if(!empty($_SESSION['user_name'])):?>
                                <?php $name = explode(' ',$_SESSION['user_name']); echo $name[0];?>
                                <b class="caret"></b>
                                <?php endif;?>
                            </button>
                            <?php else :?>
                            <a href="<?=URLROOT?>/login">
                                <img src="<?=URLROOT?>/public/assets/img/profile_pic.jpg" width="40" height="40"
                                    style="object-fit: cover" class="special-img" />
                            </a>
                            <?php endif;?>

                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="<?=URLROOT?>/profile">Profile</a>
                                <?php if($_SESSION['user_type'] == 'SUPERADMIN') :?>
                                <a class="dropdown-item" href="<?=URLROOT?>/dashboard">Dashboard</a>
                                <?php endif;?>
                                <a class="dropdown-item" href="<?=URLROOT?>/logout">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start" style="width: 270px" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <!-- {% isAuth query if true%} -->
                <!-- Hello name -->
                <!-- {% else %} -->
                <?php if(isAuth() != 0):?>
                Welcome
                <?=$_SESSION['user_name']?>
                <?php else:?>
                Welcome Guest
                <?php endif;?>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <!-- {% isAuth query if true%} -->
            <?php if(isAuth() != 0):?>
            <?php else:?>
            <div class="border-bottom p-2 mx-4 d-flex justify-content-evenly">
                <a href="<?=URLROOT?>/login" class="text-decoration-none">Login</a>/<a href="<?=URLROOT?>/register"
                    class="text-decoration-none">Sign up</a>
            </div>
            <?php endif;?>

            <!-- {% else %} -->
            <ul class="navbar-nav p-4">
                <p class="text-uppercase fw-bold text-muted text-light border-bottom m-0">Menu</p>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Man</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Customise products</a>
                </li>
            </ul>
            <ul class="navbar-nav bg-light p-4">
                <p class="text-uppercase fw-bold text-muted text-light border-bottom m-0">Profile</p>
                <li class="nav-item col">
                    <a class="nav-link" aria-current="page" href="#">Profile</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" aria-current="page" href="#">Women</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" aria-current="page" href="#">Accessories</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" aria-current="page" href="#">Customise products</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="p-2"></div>
</div>