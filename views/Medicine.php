<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="row">
                <div class="col-xs-12 col-sm-2 col-md-2 d-none d-sm-block" style="height: fit-content !important">
                    <div class="swiper swiperThumb sliderWrpr" style="height: 100%">
                        <div style="
                    position: relative;
                    text-align: center;
                    margin-bottom: 10px;
                    background: #fff;
                    z-index: 999;
                  " class="slickUparrow">
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                        </div>
                        <div class="swiper-wrapper thumbSliderWrapperClass">
                            <?php 
                                $image = explode(',',$data['medicine']->image);
                            ?>
                            <?php foreach($image as $img):?>
                            <div class="swiper-slide">
                                <img src="<?=URLROOT.'/uploads/'.$img?>" title="<?=$data['medicine']->name?>"
                                    alt="<?=$data['medicine']->name?>" width="100" class="productThumbImage" />
                            </div>
                            <?php endforeach;?>
                        </div>
                        <div class="slickDownarrow" style="
                    background: #fff;
                    z-index: 9999;
                    position: relative;
                    text-align: center;
                    margin-top: 10px;
                  ">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 p-0 m-0" style="height: 20%">
                    <div thumbsSlider="" class="swiper swiperPruduct">
                        <div class="swiper-wrapper">

                            <?php foreach($image as $img):?>
                            <div class="swiper-slide">
                                <img src="<?=URLROOT.'/uploads/'.$img?>" title="<?=$data['medicine']->name?>"
                                    alt="<?=$data['medicine']->name?>" width="100%" class="productThumbImage" />
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 product-details">
            <h3 style="color:#404040;"><?=$data['medicine']->name?></h3>
            <?php
            $tags = explode(',',$data['medicine']->categories);
            foreach($tags as $tag):
            ?>
            <div class="btn btn-secondary"
                style=" font-size: 12px; padding:6px; background-color:#f2f2f2; color:#737373; border:none;">
                <?=$tag?>
            </div>
            <?php endforeach;?>
            </br>
            <i> <?=$data['medicine']->short_dec?></i>
            <hr>
            <p>
                Expire Date: <?=$data['medicine']->expiry_date?> </p>
            <h3 style="color:#404040;">Best Price* </br></h3>
            <div class="d-flex">
                <div class="price me-2"><span>₹</span><?=$data['medicine']->m_price?></div>
                <div class="actialPrice me-2 text-decoration-line-through fw-light text-muted">
                    <span>₹<?=$data['medicine']->s_price?></span>
                </div>
                <div class="offer">
                    <span><?=intval((($data['medicine']->s_price - $data['medicine']->m_price)*100) /$data['medicine']->s_price)?>%OFF</span>
                </div>
            </div>
            <h5 style="font-size:16px; line-height:0.2;opacity: 0.5;padding-top: 10px;">(Inclusive of all taxes)</h5>
            <hr>
            <h4 style="color:#404040;">Description -</h3>
                <p><?=$data['medicine']->long_dec?>
                </p>

                <button type="button" onclick="setCookie('<?=$data['medicine']->name_slug?>','medicine',20)"
                    class="btn btn-lg" style="background-color:#ffb84d; color:#fff; width:180px;">Add
                    To Card <i class='fas fa-cart-plus' style='font-size:18px;color:#fff;'></i></button>
        </div>
    </div>
</div>
<section class="sec bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 title_bx">
                <h3 class="title"> Related Items </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 list-slider mt-4">
                <div class="swiper myswiper common_wd  owl-theme" id="recent_post">
                    <div class="swiper-wrapper">
                        <?php foreach($data['related'] as $med):?>
                        <?php $image = explode(',',$med->image)?>
                        <div class="swiper-slide item">
                            <div class="sq_box shadow">
                                <div class="pdis_img">
                                    <a href="<?=URLROOT?>/medicine/<?=$med->name_slug?>">
                                        <img src="<?=URLROOT?>/uploads/<?=$image[0]?>"
                                            style="object-fit: contain;width:100%">
                                    </a>
                                </div>
                                <a href="<?=URLROOT?>/medicine/<?=$med->name_slug?>"
                                    style="text-decoration:none; color:#2e2e1f;">
                                    <p class="mb-1"
                                        style="overflow: hidden;white-space: nowrap; text-overflow: ellipsis">
                                        <?=$med->name?></p>
                                </a>

                                <div class="price-box mb-2">
                                    <span class="price">₹<?=$med->s_price?> </span>
                                    <span class="offer-price text-decoration-line-through">₹<?= $med->m_price?>
                                    </span>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="btn btn-sm" type="button"
                                        onclick="setCookie('<?=$med->name_slug?>','medicine',20)"> <i
                                            class="fa fa-shopping-cart"></i>
                                        Add to Cart </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
var swiper = new Swiper('.swiperThumb', {
    spaceBetween: 10,
    slidesPerView: 5,
    direction: 'vertical',
    watchSlidesProgress: true,
});
var swiper2 = new Swiper('.swiperPruduct', {
    loop: true,
    navigation: {
        nextEl: '.slickDownarrow',
        prevEl: '.slickUparrow',
    },
    thumbs: {
        swiper: swiper,
    },
});

var categorySwiper = new Swiper('.myswiper', {
    // loop: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: false,
    },
    // autoplay: {
    //     delay: 2000,
    // },
    disableOnInteraction: false,
    pauseOnMouseEnter: false,
    breakpoints: {
        500: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>