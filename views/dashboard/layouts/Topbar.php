<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                    id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                <h3 class="text-dark mb-1"><?=ucwords(isset($url[1]) ? $url[1] : $url[0])?></h3>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="<?=URLROOT?>/public/assets/img/profile_pic.jpg" class="special-img">
                        <?php $name = explode(' ',$_SESSION['user_name']); echo $name[0];?>
                        <b class="caret"></b>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="profile">Profile</a>
                        <?php if($_SESSION['user_type'] == 'SUPERADMIN') :?>
                        <a class="dropdown-item" href="dashboard">Dashboard</a>
                        <?php endif;?>
                        <a class="dropdown-item" href="logout">Logout</a>
                    </div>
                </div>

            </div>
        </nav>