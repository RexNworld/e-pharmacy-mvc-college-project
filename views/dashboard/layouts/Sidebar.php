<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
    style="background: #010c14">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"></div>
            <div class="sidebar-brand-text mx-3"><span style="color: #00fffa;"><?= SITENAME?></span>
            </div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link" href="<?=URLROOT?>">
                    <i class="fa fa-home"></i>
                    <span>← Back to Home page</span></a>
            </li>
            <hr class="my-0">
            <hr>
            <?php
                require_once '/../sidebar_routes.php';
                $routes = new sidebar_routes;
                $sidebar = $routes->getRoutes();
               foreach($sidebar as $val => $value){
                    if($sidebar[$val][0] == '/')
                        $active = 'active';
                    else
                        $active = '';
                   if(isset($url[1])){
                    if($url[1] == $sidebar[$val][0])
                        $active = 'active';
                    else 
                        $active = '';
                   }
                   echo '<li class="nav-item"><a class="nav-link '.$active.'" href="'.URLROOT.'/dashboard/'.$sidebar[$val][0].'"><i class="'.$sidebar[$val][1].'"></i>&nbsp;&nbsp;&nbsp;<span>'.$sidebar[$val][2].'</span></a></li>';
               }
            ?>
        </ul>
        <!-- <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
        </div> -->
    </div>
</nav>