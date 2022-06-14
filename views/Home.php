<?
$url[0] = 'Something';
?>
<section style="padding-top: 0">
    <div class="container">
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
                    <a href="#" class="btn btn-primary btn-theme pe-4 px-4">Upload</a>
                </div>
                <a href="#" type="button" class="btn btn-sm p-0 w-100" class="link-dark" text-start
                    style="text-decoration: none">
                    <div class="shadow-sm bg-body rounded p-2">
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
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section style="margin: 0">
    <div class="container">
        <h3>Shop by health conditions</h3>
        <hr />
        <div class="carousel-wrapper">
            <div class="owl-carousel owl-theme" id="owl-category">
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-coronavirus-50.png" alt="" class="src" />
                        <span>Covid Care</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body m-2 text-start btn-rise" style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-diabetes-50.png" alt="" class="src" />
                        <span>Diabeties Care</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-brain_-50.png" alt="" class="src" />
                        <span>Mind Care</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-liver-50.png" alt="" class="src" />
                        <span>Liver Care</span>
                    </a>
                </div>
                <dv class="item"><a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-medical-heart-50.png" alt=""
                            class="src" />
                        <span>Cardiac</span>
                    </a></dv>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-pain-relife-50.png" alt="" class="src" />
                        <span>Pain Relife</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-dental-crown-50.png" alt=""
                            class="src" />
                        <span>Oral Care</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-lungs-50.png" alt="" class="src" />
                        <span>Respiratory</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-cold_and_immunity_50.png" alt=""
                            class="src" />
                        <span>Cold & Immunity</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-stomach-50.png" alt="" class="src" />
                        <span>Stomach care</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-contraception-50.png" alt=""
                            class="src" />
                        <span>Sexual Health</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-ic_eyeear-50.png" alt="" class="src" />
                        <span>Eye & Ear care</span>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 text-start btn-rise"
                        style="min-width: 200px">
                        <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" class="src" />
                        <span>Elderly Care</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h3>Shop by health conditions</h3>
        <hr />

        <div class="owl-carousel owl-theme" id="owl-shop1">
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">1</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">2</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">3</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">4</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">5</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">6</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">7</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <h3>Shop by health conditions</h3>
        <hr />

        <div class="owl-carousel owl-theme" id="owl-shop2">
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">1</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">2</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">3</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">4</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">5</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">6</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="btn btn-sm shadow-sm bg-body rounded m-2 btn-rise" style="
                min-width: 200px;
                max-width: 200px;
                border-radius: 10px !important;
              ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= URLROOT?>/public/assets/img/icons/icons8-adult--50.png" alt="" width="70"
                                height="70" class="src" />
                        </div>
                        <p class="fs-6 border-bottom mx-auto w-75">7</p>
                        <p class="fs-5 text-success">
                            MRP(<span class="text-decoration-line-through text-black-50">RS. 975</span>)<br />
                            RS. 858
                        </p>
                        <p>25% less</p>
                        <button class="btn p-0 m-0">ADD TO CART</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<script>
$('#owl-category').each(function() {
    $(this).owlCarousel({
        loop: true,
        center: true,
        autoWidth: true,
        autoplay: false,
        smartSpeed: 500,
        dots: false,
        navigation: false,
        nav: false,
        lazyLoad: true,
    });
    // $('.category-next').click(function () {
    //   $('#owl-category').trigger('next.owl.carousel');
    // });
    // $('.category-prev').click(function () {
    //   $('#owl-category').trigger('prev.owl.carousel', [300]);
    // });
});
$('#owl-shop1').each(function() {
    $(this).owlCarousel({
        loop: true,
        center: true,
        autoWidth: true,
        autoplay: true,
        smartSpeed: 500,
        dots: false,
        navigation: false,
        nav: false,
        lazyLoad: true,
    });
    $('.next').click(function() {
        $('#owl-shop').trigger('next.owl.carousel');
    });
    $('.prev').click(function() {
        $('#owl-shop1').trigger('prev.owl.carousel', [300]);
    });
});
$('#owl-shop2').each(function() {
    $(this).owlCarousel({
        loop: true,
        center: true,
        autoWidth: true,
        autoplay: true,
        smartSpeed: 500,
        dots: false,
        nav: false,
        navText: [
            "<div class='nav-button owl-prev'>‹</div>",
            "<div class='nav-button owl-next'>›</div>",
        ],
        lazyLoad: true,
    });
});
</script>