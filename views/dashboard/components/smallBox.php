<?php
class smallBox{
    public function box($count = 0,$title = 'Change Me',$icon = 'fas fa-shopping-cart',$bgcolor = 'bg-warning',$link = 'link'){
        $count = !$count == '' ? $count : '0';
        $title = !$title == '' ? $title : 'Change Me';
        $icon = !$icon == '' ? $icon : 'fas fa-shopping-cart';
        $link = !$link == '' ? $link : 'link';
        $bgcolor = !$bgcolor == '' ? $bgcolor : 'bg-warning';
       return (print(
           '<div class="col-sm-12 col-md-3 col-lg-3">
                <a href="'.URLROOT.'/dashboard/'.$link.'" class="small-box shadow-own '.$bgcolor.'" style="text-decoration: none !important;">
                        <div class="inner">
                            <h3>'.$count.'</h3>
                            <p>'.$title.'</p>
                        </div>
                        <div class="icon">
                            <i class="'.$icon.'"></i>
                        </div>
                </a>
            </div>'
            ));
    }
}