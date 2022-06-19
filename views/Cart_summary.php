<?php $parts = explode('-', date("Y-m-d"));?>
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
    --size-bezel: 0.5rem;
    font-family: "Inter", sans-serif;
    background: var(--color-background);
}

.input {
    position: relative;
    width: 100%
}

.input__label {
    position: absolute;
    left: 0;
    top: 0;
    padding: calc(1 * 0.75) calc(1 * 0.5);
    margin: calc(var(--size-bezel) * 0.75 + 3px) calc(var(--size-bezel) * 0.5);
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
    padding: calc(var(--size-bezel) * 1.5) var(--size-bezel);
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
<form
    action="<?=URLROOT?>/cart-summary?price=<?=$data['priceSummary']['sel']?>&orderDate=<?=date('l jS F')?>&deliveryDate=<?=date("l jS F", mktime(0, 0, 0, $parts[1], $parts[2] + 6, $parts[0]))?>"
    method="POST">
    <div class="container-fluid bg-light p-0">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto">
                <div class="row mt-5 gx-3">
                    <!-- left side div -->
                    <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5">
                        <div class="delivery-address">
                            <p id="total-items-cart">Delivery Address</p>

                        </div>

                        <hr />
                        <div style="border-radius: 10px;">
                            <?php foreach($data['getAddress'] as $address):?>
                            <div class="address1">
                                <div style="display: flex; flex-wrap: wrap; height: 25px;">
                                    <input class="form-check-input" type="radio" name="addressType" id="addressType1"
                                        value="<?=$address->id?>" aria-label="..." checked>
                                    <p style="margin: 0 10px;"><b><?=$address->name?></b> </p>
                                    <p><?=$address->add_type?> <b><?=$address->number?></b> </p>
                                </div>
                                <p style="margin-left: 23px; font-size: 15px;"><?=$address->address?>,
                                    <?=$address->city?>,
                                    <?=$address->state?> - <?=$address->pin?> &nbsp;&nbsp;&nbsp;<a
                                        style="background:#ff0"
                                        href="<?=$_SERVER['REQUEST_URI']?>?userAddress=<?=$address->id?>">
                                        Remove</a>
                                </p>
                            </div>
                            <?php endforeach;?>

                            <button class="add_address mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                type="button" style="
                  background-color: rgb(66, 162, 162);
                  border-color: rgb(66, 162, 162);
                  color: white;
                  float:left !important;
                ">
                                ADD ADDRESS
                            </button>
                        </div>
                    </div>

                    <!-- right side div -->

                    <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
                        <div class="right_side p-3 shadow-sm bg-white">
                            <h2 class="product_name mb-5">The total amount of</h2>
                            <div class="price_indivisual d-flex justify-content-between">
                                <p>Product Ammount</p>
                                <p>₹<span id="product_total_amt"><?=$data['priceSummary']['mrp']?></span></p>
                            </div>
                            <div class="price_indivisual d-flex justify-content-between">
                                <p>Product Discount</p>
                                <p>- ₹<span id="shipping_charge"><?=$data['priceSummary']['dis']?></span></p>
                            </div>
                            <hr>

                            <div class="total_ammount d-flex justify-content-between font-weight-bold">
                                <p>The total ammount of (including VAT)</p>
                                <p>₹ <span id="total_cart_amt"><?=$data['priceSummary']['sel']?></span></p>
                            </div>
                            <button class="btn btn-primary text-uppercase" type="submit"
                                style="text-decoration: none; color: white;">Place order </button>
                        </div>



                        <div class="mt-3 shadow-sm p-3 bg-white">
                            <div class="pt-4">
                                <h5 class="mb-4">Expected delivery date</h5>
                                <p><?=date('l jS F')?> -
                                    <?=date("l jS F", mktime(0, 0, 0, $parts[1], $parts[2] + 6, $parts[0])) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>

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