<style>
.active {
    background-color: #2a2a4b;
    border-radius: 15px 0 0 15px;
}
</style>
<?php
$url = rtrim($_GET['url'],'/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/',$url);

class sidebar_routes{
    public function getRoutes(){
        
        return array(
            ['/','fas fa-tachometer-alt','Dashboard'],
            ['users','fas fa-user','Users'],
            ['doctors','fas fa-user-md','Doctors'],
            ['orders','fas fa-cart-arrow-down','Orders'],
            ['medicine','fas fa-clinic-medical','Medicine'],
            ['appointment','far fa-calendar-check','Appointment'],
            ['feedback','fas fa-comments','Feedback'],
            ['profile','fas fa-user-alt','Profile'],
        );
    }
}
?>