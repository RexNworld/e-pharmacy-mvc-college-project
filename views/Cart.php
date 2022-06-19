<script src="<?=URLROOT?>/public/assets/vendors/jquery.validate.min.js"></script>
<style>
:root {
    --color-light: white;
    --color-dark: #212121;
    --color-signal: #fab700;
    --color-background: var(--color-light);
    --color-text: var(--color-dark);
    --color-accent: var(--color-signal);
    --size-radius: 4px;
    line-height: 1.4;
    --size-c: 0.5rem;
    font-family: "Inter", sans-serif;
    background: var(--color-background);
    padding: 0 calc(var(--size-c) * 3);
}

.input {
    position: relative;
    width: 100%
}

.input__label {
    position: absolute;
    left: 0;
    top: 0;
    padding: calc(var(--size-c) * 0.75) calc(var(--size-c) * 0.5);
    margin: calc(var(--size-c) * 0.75 + 3px) calc(var(--size-c) * 0.5);
    background: pink;
    white-space: nowrap;
    transform: translate(0, 0);
    transform-origin: 0 0;
    background: var(--color-background);
    transition: transform 120ms ease-in;
    font-weight: bold;
    line-height: 1.2;
}

.input__field {
    box-sizing: border-box;
    display: block;
    width: 100%;
    border: 1px solid currentColor;
    padding: calc(var(--size-c) * 1.5) var(--size-c);
    color: currentColor;
    background: transparent;
    border-radius: var(--size-radius);
}

.input__field:not(:-moz-placeholder-shown)+.input__label {
    transform: translate(0.25rem, -65%) scale(0.8);
    color: var(--color-accent);
}

.input__field:not(:-ms-input-placeholder)+.input__label {
    transform: translate(0.25rem, -65%) scale(0.8);
    color: var(--color-accent);
}

.input__field:focus+.input__label,
.input__field:not(:placeholder-shown)+.input__label {
    transform: translate(0.25rem, -65%) scale(0.8);
    color: var(--color-accent);
}

.input__field:not(:-moz-placeholder-shown)+label+.input__label {
    transform: translate(0.25rem, -65%) scale(0.8);
    color: var(--color-accent);
}

.input__field:not(:-ms-input-placeholder)+label+.input__label {
    transform: translate(0.25rem, -65%) scale(0.8);
    color: var(--color-accent);
}

.input__field:focus+label+.input__label,
.input__field:not(:placeholder-shown)+label+.input__label {
    transform: translate(0.25rem, -65%) scale(0.8);
    color: var(--color-accent);
}

.error {
    font-style: italic;
    color: red;
    background: transparent;
}

.error:focus,
.error:hover,
input:focus+label {
    outline: none;
}
</style>
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
                    <?php if($data['isAddress'] != true):?>
                    <button class="add_address w-75" data-bs-toggle="modal" data-bs-target="#exampleModal" style="
                  background-color: rgb(66, 162, 162);
                  border-color: rgb(66, 162, 162);
                  color: white;
                ">
                        ADD ADDRESS
                    </button>
                    <?php else:?>
                    <a type="button" href="<?=URLROOT?>/cart-summary" class="add_address w-75 text-center " style="
                  background-color: rgb(66, 162, 162);
                  border-color: rgb(66, 162, 162);
                  color: white !important;
                ">
                        Contnue
                    </a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <!-- section part -->
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4">
                <form id="modalAddressForm" method="POST">
                    <label class="input mb-4">
                        <input class="input__field" type="text" placeholder=" " id="address" name="address" require />
                        <span class="input__label">Address</span>
                    </label>
                    <label class="input mb-4">
                        <input class="input__field" type="number" placeholder=" " id="pincode" name="pincode" require />
                        <span class="input__label">Pin Code</span>
                    </label>

                    <label class="input mb-4">
                        <input class="input__field" type="text" placeholder=" " id="city" name="city" require />
                        <span class="input__label">City</span>
                    </label>

                    <label class="input mb-4">
                        <input class="input__field" type="text" placeholder=" " id="state" name="state" require />
                        <span class="input__label">State</span>
                    </label>


                    <label class="input mb-4">
                        <input class="input__field" type="text" placeholder=" " id="landmark" name="landmark" />
                        <span class="input__label">Landmark(optional)</span>
                    </label>
                    <hr />

                    <label class="input mb-4">
                        <input class="input__field" type="text" placeholder=" " id="name" name="name"
                            value="<?=$data['name']?>" require />
                        <span class="input__label">Name</span>
                    </label>
                    <label class="input mb-4">
                        <input class="input__field" type="text" placeholder=" " id="mobile" name="mobile"
                            value="<?=$data['mobile']?>" require />
                        <span class="input__label">Mobile</span>
                    </label>
                    <div class="my-3">
                        <p>Save Address as</p>
                        <div>
                            <input type="radio" class="btn-check" name="type" id="home" value="Home" checked />
                            <label class="inputCustomSelect" for="home">Home</label>
                            <input type="radio" class="btn-check" name="type" id="office" autocomplete="off"
                                value="Office" />
                            <label class="inputCustomSelect" for="office">Office</label>
                            <input type="radio" class="btn-check" name="type" id="others" autocomplete="off"
                                value="Others" />
                            <label class="inputCustomSelect" for="others">Others</label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-info">Cancel Address</button>
                        <button type="submit" class="btn btn-info">Save Address</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script>
$(function() {
    $("#modalAddressForm").validate({
        rules: {
            address: {
                required: true,
            },
            pincode: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
        },
        messages: {
            address: {
                required: "Please enter your address",
            },
            pincode: {
                required: "Please enter your pincode",
            },
            city: {
                required: "Please enter your City",
            },
            state: {
                required: "Please enter your State",
            },
        }
    });
});
</script>