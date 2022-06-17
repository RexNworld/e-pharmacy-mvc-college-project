<div class="container">
    <p id="total-items-cart">My Bag <?=countCart()?> item(s)</p>
    <div class="row p-0 m-0">
        <div class="col-md-7 col-sm-12 m-0">
            <div class="df-wrap">
                <div class="df-inner" style="background-color: rgb(252, 255, 238); height: 50px">
                    <img class="truckmove df-img" src="https://images.bewakoof.com/web/Red-truck.png" alt="truck"
                        style="width: 19px; height: 12px; animation-duration: 2s" />
                    <p class="pt-3" style="font-size: 12px; color: black; font-family: Montserrat">
                        Shop for <strong>₹50</strong> more to get <strong>FREE delivery</strong>!
                    </p>
                </div>
            </div>
            <?php foreach($data['cartData'] as $item):?>
            <div class="card p-3 pb-0 cardMedia mb-2">
                <div class="card-body p-0">
                    <div class="prod-row">
                        <div class="cartProdText">
                            <span><a class="uAdRROcivfJ5x1Rmvq1zZpZ5huFzyNmdumlq32TDDQ" aria-current="false"
                                    href="p/plain-half-sleeves-t-shirt-men-blue-114?src=cart"><?=$item->name?></a></span>
                            <div class="vq3wCE45Mr1b clearfix">
                                <span
                                    class="nCO9izgeR4DFi5JOQSiMUfkaYFW9qhpE9RF3gpleowQ"><b>₹</b><?=$item->m_price?></span><span
                                    class="AS6Jdr40MwTS">₹<?=$item->s_price?></span>
                            </div>
                            <div class="Ad6f">You saved ₹<?=$item->s_price - $item->m_price?>!</div>
                            <div class="KwIyuQ9G6E8ljOqwgozK6cup8Wa6NjVritWt844">
                                <div class="fY9jTItCuJ9wIqYrPGZVU">
                                    <div class="CQ8wzZnxMzMzFcX1PFmTQqQXcedWShB49x8OPp38JY">
                                        <input type="number" min="1" max="10" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="productImgTag">
                            <?php $img = explode(',',$item->image)?>
                            <a aria-current="false" href="<?=URLROOT?>/medicine/<?=$item->name_slug?>"><img
                                    src="<?=URLROOT?>/uploads/<?=$img[0]?>" title="<?=$item->name?>"
                                    alt="<?=$item->name?>" /></a>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-end p-0">
                    <a type="button" onclick="eraseCookie('<?=$item->name_slug?>')" class="add-w-action">Remove</a>
                </div>
            </div>
            <?php endforeach;?>

            <!--  -->
        </div>
        <div class="col-md-5 col-sm-12 m-0">
            <div class="card cardMedia">
                <button class="p-2 m-0 border-0 w-100 bg-white">
                    <div class="cart-story-tribe px-3 m-0"
                        style="height: 32px; background-color: rgba(66, 162, 160, 0.1); color: #42a2a2">
                        <div class="cart-story-tribe-text">
                            <small>Have a Coupon / Referral / Gift Card ?</small>
                        </div>
                        <div style="display: flex">
                            <div class="icon_next_one">
                                <span class="reedem-text">Redeem</span>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                            <div class="icon_next_two">
                                <i class="fa fa-angle-right" aria-hidden="true" style="margin-left: -7px"></i>
                            </div>
                        </div>
                    </div>
                </button>
                <div class="card-header border-0 border-top" style="font-weight: bold; font-size: 16px">
                    <span class="reedem-heading">PRICE SUMMARY</span>
                </div>
                <div class="card-body p-3">
                    <div class="row container">
                        <div class="d-flex justify-content-between p-2">
                            <div class="summary_text">Total MRP (Incl. of taxes)</div>
                            <div class="summary_text">₹ <?=$data['priceSummary']['mrp']?></div>
                        </div>
                        <div class="d-flex justify-content-between p-2">
                            <div class="summary_text">Delivery Fee</div>
                            <div class="summary_text" style="color: rgb(29, 136, 2)">FREE</div>
                        </div>
                        <div class="d-flex justify-content-between p-2">
                            <div class="summary_text">Bag Discount</div>
                            <div class="summary_text">- ₹<?=$data['priceSummary']['dis']?></div>
                        </div>
                        <div class="d-flex justify-content-between p-2">
                            <div class="summary_text">Subtotal</div>
                            <div class="summary_text">₹ <?=$data['priceSummary']['sel']?></div>
                        </div>
                    </div>
                    <div class="row container px-4">
                        <div class="col-12 rounded-pill mb-3 mt-2 savingLabel_cart"
                            style="background-color: rgba(29, 136, 2, 0.1); color: rgb(29, 136, 2)">
                            You are saving ₹ <?=$data['priceSummary']['dis']?> on this order
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-between">
                    <div class="sub_total ps-2">
                        <span>Total</span>
                        <p>₹ <?=$data['priceSummary']['sel']?></p>
                    </div>
                    <button class="add_address w-75" style="
                  background-color: rgb(66, 162, 162);
                  border-color: rgb(66, 162, 162);
                  color: white;
                ">
                        ADD ADDRESS
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- section part -->
</div>