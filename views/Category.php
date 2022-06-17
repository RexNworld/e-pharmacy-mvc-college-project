<div class="container">
    <div class="mainHeading">
        <div class="headingInner">
            <h1>
                <?=$data['title']?>
                <span class="">(<?=count($data['medcineList'])?>)</span>
            </h1>
            <div></div>
        </div>
    </div>
</div>
<div class="p-4"></div>
<div class="container">
    <div class="row wrap" id="wrap" style="max-height: 100%; position: relative; min-height: 484.2px">
        <div class="col-md-3 product-sidebar d-none d-md-block">
            <div class="sticky">
                <div class="box">
                    <div class="filterHeading">
                        <h4>FILTERS</h4>
                    </div>
                    <div class="row w-100 m-0">
                        <button class="m-0 d-flex justify-content-between" type="button" data-bs-toggle="collapse"
                            data-bs-target="#categoryCollapse" aria-expanded="false" aria-controls="categoryCollapse">
                            <span>Categories</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <div class="collapse" id="categoryCollapse">
                            <ul class="p-0">
                                <?php foreach($data['categoryList'] as $tags): ?>
                                <li class="listType">
                                    <a class="m-0 w-100 p-1 collapseBtn" aria-current="false"
                                        href="<?=URLROOT.'/category/'.$tags->c_tag?>"><?=$tags->c_name?></a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <button class="m-0 d-flex justify-content-between" type="button" data-bs-toggle="collapse"
                            data-bs-target="#offersCollapse" aria-expanded="false" aria-controls="offersCollapse">
                            <span>Offers</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <div class="collapse" id="offersCollapse">
                            <ul class="p-0">
                                <li class="listType">
                                    <a class="m-0 w-100 p-1 collapseBtn" aria-current="false" href="#">Bue 1 Get 1</a>
                                </li>
                            </ul>
                        </div>
                        <button class="m-0 d-flex justify-content-between" type="button" data-bs-toggle="collapse"
                            data-bs-target="#duscountCollapse" aria-expanded="false" aria-controls="duscountCollapse">
                            <span>Discounts</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <div class="collapse" id="duscountCollapse">
                            <ul class="p-0">
                                <li class="listType">
                                    <a class="m-0 w-100 p-1 collapseBtn" aria-current="false" href="#">10% More</a>
                                </li>
                                <li class="listType">
                                    <a class="m-0 w-100 p-1 collapseBtn" aria-current="false" href="#">20% More</a>
                                </li>
                                <li class="listType">
                                    <a class="m-0 w-100 p-1 collapseBtn" aria-current="false" href="#">30% More</a>
                                </li>
                                <li class="listType">
                                    <a class="m-0 w-100 p-1 collapseBtn" aria-current="false" href="#">40% More</a>
                                </li>
                                <li class="listType">
                                    <a class="m-0 w-100 p-1 collapseBtn" aria-current="false" href="#">50% More</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        <button class="btn btn-primary" type="button">Button with data-bs-target</button>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-9 offset-md-3">

            <div class="container p-0">
                <?php if(count($data['medcineList']) == 0): ?>
                <h2>No Result Found</h2>
                <?php endif;?>
                <div class="row" id="produc-listng">

                    <?php foreach($data['medcineList'] as $medicine):?>
                    <?php
                        $image = explode(',',$medicine->image);
                    ?>
                    <div class="col-6 col-sm-4 p-2">

                        <div class="productCardBox">
                            <div class="productCardImg false">
                                <a href="<?=URLROOT.'/medicine/'.$medicine->name_slug?>">
                                    <div class="productImg" style="width: 100%;height: 70%; position: relative;">
                                        <img src="<?=URLROOT?>/uploads/<?=$image[0]?>" alt="" width="100%" height="100%"
                                            style="object-fit: contain;" />
                                    </div>
                                </a>
                                <div class="productCardDetail">
                                    <div class="d-flex">
                                        <a href="<?=URLROOT.'/medicine/'.$medicine->short_dec?>">
                                            <div class="productNaming bkf-ellipsis">
                                                <h3 class="brand-name"><?= $medicine->name?></h3>
                                                <div class="clr-shade4 h3-p-name">
                                                    <?= $medicine->short_dec?>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="productPriceBox d-flex align-items-end">
                                        <div class="discountedPriceText clr-p-black">
                                            <span>₹</span><?= $medicine->m_price?>
                                        </div>
                                        <div class="actualPriceText clr-shade5">₹<?= $medicine->s_price?></div>
                                        <span class="sellingFastBox"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between loyalty-stock-wrap">
                                    </div>
                                    <a class="btn btn-theme " type="button"
                                        onclick="setCookie('<?=$medicine->name_slug?>','medicine',20)"><b>Add to
                                            cart</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>