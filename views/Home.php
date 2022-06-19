<section style="padding-top: 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div id="carouselExampleIndicators" class="carousel slide shadow-sm bg-body rounded"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner bg-dark">
                        <div class="carousel-item active">
                            <img src="<?=URLROOT?>/public/images/1.jpg" class="d-block w-100"
                                alt="<?=URLROOT?>/public/images/1.jpg" />
                        </div>
                        <div class="carousel-item">
                            <img src="<?=URLROOT?>/public/images/2.jpg" class="d-block w-100"
                                alt="<?=URLROOT?>/public/images/2.jpg" />
                        </div>
                        <div class="carousel-item">
                            <img src="<?=URLROOT?>/public/images/3.jpg" class="d-block w-100"
                                alt="<?=URLROOT?>/public/images/3.jpg" />
                        </div>
                        <div class="carousel-item">
                            <img src="<?=URLROOT?>/public/images/4.jpg" class="d-block w-100"
                                alt="<?=URLROOT?>/public/images/4.jpg" />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="shadow-sm bg-body rounded p-3 mb-3">
                    <div class="row pb-2">
                        <div class="col-9">
                            <h6 class="card-text">
                                Place your order via <br />
                                Prescription
                            </h6>
                        </div>
                        <div class="col-3">
                            <img src="<?= URLROOT?>/public/assets/img/ic_prescription_pad.svg" alt="Prescription"
                                class="d-block" />
                        </div>
                    </div>
                    <!-- <a href="#" class="btn btn-primary btn-theme pe-4 px-4">Upload</a> -->
                </div>
                <a href="#" type="button" class="btn btn-sm p-0 w-100" class="link-dark" text-start
                    style="text-decoration: none">
                    <div class="shadow-sm bg-body rounded p-2">
                        <a href="<?=URLROOT?>/orders">
                            <div class="row">
                                <div class="col-10">
                                    <h5 class="card-text text-start">
                                        <i class="bi bi-folder-check"></i> Your order
                                    </h5>
                                </div>
                                <div class="col-2">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section style="margin: 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 title_bx">
                <h3 class="title"> All Catgories </h3>
            </div>
        </div>
        <div class="swiper categorySwiper">
            <div class="swiper-wrapper">
                <?php foreach($data['categoryList'] as $tag):?>
                <div class="swiper-slide">
                    <a href="<?=URLROOT.'/category/'. $tag->c_tag?>"
                        class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise" style="width: 100%">
                        <img src="<?= URLROOT?>/uploads/<?=$tag->c_img?>" alt="" class="src" />
                        <span><?=$tag->c_name?></span>
                    </a>
                </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>
</section>
<script>
var categorySwiper = new Swiper('.categorySwiper', {
    loop: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: false,
    },
    breakpoints: {
        200: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        500: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 7,
            spaceBetween: 30,
        },
    },
});
</script>
<section class="sec bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 title_bx">
                <h3 class="title"> Covid Care </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 list-slider mt-4">
                <div class="swiper myswiper common_wd  owl-theme" id="recent_post">
                    <div class="swiper-wrapper">
                        <?php foreach($data['categoryPain'] as $med):?>
                        <?php $image = explode(',',$med->image)?>
                        <div class="swiper-slide item">
                            <div href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise"
                                style="min-width: 200px;max-width: 200px;border-radius: 10px !important;">
                                <div class="row">
                                    <a href="<?=URLROOT?>/medicine/<?=$med->name_slug?>">
                                        <div class="col-12">
                                            <img src="<?=URLROOT?>/uploads/<?=$image[0]?>" alt="" width="70" height="70"
                                                class="src" />
                                        </div>
                                        <p class="fs-6 border-bottom mx-auto w-75"
                                            style="overflow: hidden;white-space: nowrap; text-overflow: ellipsis">
                                            <?=$med->name?></p>
                                        <p class="fs-5 text-success">
                                            MRP(<span
                                                class="text-decoration-line-through text-black-50">₹<?=$med->s_price?></span>)<br />
                                            ₹<?= $med->m_price?>
                                        </p>
                                        <p><?=intval((($med->s_price - $med->m_price)*100) /$med->s_price)?>%
                                            less</p>
                                    </a>
                                    <a class="btn p-0 m-0" type="button"
                                        onclick="setCookie('<?=$med->name_slug?>','medicine',20)">ADD TO CART</a>
                                </div>
                            </div>
                        </div>

                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
var categorySwiper = new Swiper('.myswiper', {
    loop: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: false,
    },
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        200: {
            slidesPerView: 2,
            spaceBetween: 1,
        },
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
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 7,
            spaceBetween: 20,
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>
<section class="sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 title_bx">
                <h3 class="title"> Oral Care </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 list-slider mt-4">
                <div class="swiper myswiper2 common_wd  owl-theme" id="recent_post">
                    <div class="swiper-wrapper">
                        <?php foreach($data['categoryOral'] as $med):?>
                        <?php $image = explode(',',$med->image)?>
                        <div class="swiper-slide item">
                            <div href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise"
                                style="min-width: 200px;max-width: 200px;border-radius: 10px !important;">
                                <div class="row">
                                    <a href="<?=URLROOT?>/medicine/<?=$med->name_slug?>">
                                        <div class="col-12">
                                            <img src="<?=URLROOT?>/uploads/<?=$image[0]?>" alt="" width="70" height="70"
                                                class="src" />
                                        </div>
                                        <p class="fs-6 border-bottom mx-auto w-75"
                                            style="overflow: hidden;white-space: nowrap; text-overflow: ellipsis">
                                            <?=$med->name?></p>
                                        <p class="fs-5 text-success">
                                            MRP(<span
                                                class="text-decoration-line-through text-black-50">₹<?=$med->s_price?></span>)<br />
                                            ₹<?= $med->m_price?>
                                        </p>
                                        <p><?=intval((($med->s_price - $med->m_price)*100) /$med->s_price)?>%
                                            less</p>
                                    </a>
                                    <a class="btn p-0 m-0" type="button"
                                        onclick="setCookie('<?=$med->name_slug?>','medicine',20)">ADD TO CART</a>
                                </div>
                            </div>
                        </div>

                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
var categorySwiper = new Swiper('.myswiper2', {
    loop: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: false,
    },
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        200: {
            slidesPerView: 2,
            spaceBetween: 1,
        },
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
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 7,
            spaceBetween: 20,
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>
<section class="sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 title_bx">
                <h3 class="title"> Mind Care </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 list-slider mt-4">
                <div class="swiper myswiper3 common_wd  owl-theme" id="recent_post">
                    <div class="swiper-wrapper">
                        <?php foreach($data['categoryMind'] as $med):?>
                        <?php $image = explode(',',$med->image)?>
                        <div class="swiper-slide item">
                            <div href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise"
                                style="min-width: 200px;max-width: 200px;border-radius: 10px !important;">
                                <div class="row">
                                    <a href="<?=URLROOT?>/medicine/<?=$med->name_slug?>">
                                        <div class="col-12">
                                            <img src="<?=URLROOT?>/uploads/<?=$image[0]?>" alt="" width="70" height="70"
                                                class="src" />
                                        </div>
                                        <p class="fs-6 border-bottom mx-auto w-75"
                                            style="overflow: hidden;white-space: nowrap; text-overflow: ellipsis">
                                            <?=$med->name?></p>
                                        <p class="fs-5 text-success">
                                            MRP(<span
                                                class="text-decoration-line-through text-black-50">₹<?=$med->s_price?></span>)<br />
                                            ₹<?= $med->m_price?>
                                        </p>
                                        <p><?=intval((($med->s_price - $med->m_price)*100) /$med->s_price)?>%
                                            less</p>
                                    </a>
                                    <a class="btn p-0 m-0" type="button"
                                        onclick="setCookie('<?=$med->name_slug?>','medicine',20)">ADD TO CART</a>
                                </div>
                            </div>
                        </div>

                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
var categorySwiper = new Swiper('.myswiper3', {
    loop: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: false,
    },
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        200: {
            slidesPerView: 2,
            spaceBetween: 1,
        },
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
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 7,
            spaceBetween: 20,
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>