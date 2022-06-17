<div class="container-fluid" id="addMedicine">
    <div class="row px-4 pb-4">
        <div class="card p-2">
            <form method="POST" enctype="multipart/form-data"">
            <div class=" card-body">
                <div class="container-fluid">
                    <div class=" row">
                        <div class="col-md-6">
                            <div class="input-group py-3">
                                <span class="input-group-text" id="basic-addon1">Product Name</span>
                                <input type="text" class="form-control" placeholder="Covid" aria-label="Name"
                                    aria-describedby="basic-addon1" name="m_name" id="m_name"
                                    value="<?=$data['medicineDetails'][0]->name?>">
                                <span
                                    style="width: 100%;color: red;font-style: italic;"><?=$data['m_nameError']?></span>
                            </div>

                            <div class="input-group py-3">
                                <span class="input-group-text" id="basic-addon1">Use For</span>
                                <input type="text" class="form-control" placeholder="cold, Fever etc." aria-label="Name"
                                    aria-describedby="basic-addon1" name="m_short_dec"
                                    value="<?=$data['medicineDetails'][0]->short_dec?>">
                                <span
                                    style="width: 100%;color: red;font-style: italic;"><?=$data['m_short_decError']?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div dir="rtl" class="swiper imagesSlide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" href="product.html">
                                        <input type="file" class="file" id="upload_file" accept="all"
                                            name="upload_file[]" oninput="preview_image()" multiple />
                                        <label for="upload_file"><img
                                                src="https://icon-library.com/images/insert-photo-icon/insert-photo-icon-16.jpg"
                                                style="cursor: pointer" alt="" class="slide-image"></label>

                                    </div>
                                </div>
                            </div>
                            <span style="width: 100%;color: red;font-style: italic;"><?=$data['m_imageError']?></span>
                            <h2 class="text-center text-primary">Upload Images</h2>

                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">MRP</span>
                                    <input type="number" class="form-control" placeholder="$ 279" aria-label="Name"
                                        aria-describedby="basic-addon1" name="m_price"
                                        value="<?=$data['medicineDetails'][0]->s_price?>">
                                    <span
                                        style="width: 100%;color: red;font-style: italic;"><?=$data['m_priceError']?></span>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Price</span>
                                    <input type="number" class="form-control" placeholder="$ 199" aria-label="Name"
                                        aria-describedby="basic-addon1" name="m_m_price"
                                        value="<?=$data['medicineDetails'][0]->m_price?>">
                                    <span
                                        style="width: 100%;color: red;font-style: italic;"><?=$data['m_m_priceError']?></span>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Pacing Date</span>
                                    <input type="date" class="form-control" placeholder="22-09-2021" aria-label="Name"
                                        aria-describedby="basic-addon1" name="m_p_date"
                                        value="<?=$data['medicineDetails'][0]->packaging_date?>">
                                    <span
                                        style="width: 100%;color: red;font-style: italic;"><?=$data['m_p_dateError']?></span>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Expire Date</span>
                                    <input type="date" class="form-control" placeholder="12-08-2023" aria-label="Name"
                                        aria-describedby="basic-addon1" name="m_e_date"
                                        value="<?=$data['medicineDetails'][0]->expiry_date?>">
                                    <span
                                        style="width: 100%;color: red;font-style: italic;"><?=$data['m_e_dateError']?></span>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="dropdown">

                                    <div class="input-group py-3">
                                        <span class="input-group-text" id="basic-addon1">Category</span>
                                        <button class="btn border dropdown-toggle w-75" type="button" id="optionsDown"
                                            data-bs-toggle="dropdown" aria-expanded="false">Select Category</button>
                                        <div class="dropdown-menu w-50" aria-labelledby="optionsDown">
                                            <div class="dropdown-item customHove">
                                                <?php
                                            // $tax = explode(',',$data['medicineDetails'][0]->categories);
                                            for($i=0,$c=0;$i<count($data['categoryList']);$i++){?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="<?=$data['categoryList'][$i]->c_name?>"
                                                        id="flexCheckDefault" name="m_categories[]">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        <?=$data['categoryList'][$i]->c_name?>
                                                    </label>
                                                </div>
                                                <?php 
                                            }?>
                                            </div>
                                        </div>
                                    </div>
                                    <span
                                        style="width: 100%;color: red;font-style: italic;"><?=$data['m_categoriesError']?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Stock</span>
                                    <input type="number" class="form-control" placeholder="10 box" aria-label="Name"
                                        aria-describedby="basic-addon1" name="m_stock"
                                        value="<?=$data['medicineDetails'][0]->stock?>">
                                    <span
                                        style="width: 100%;color: red;font-style: italic;"><?=$data['m_stockError']?></span>

                                </div>
                            </div>

                            <div class="input-group py-3">
                                <span class="input-group-text" id="basic-addon1">Description</span>
                                <textarea class="form-control" placeholder="Description about the medicine"
                                    aria-label="Name" aria-describedby="basic-addon1"
                                    name="m_description"><?=$data['medicineDetails'][0]->long_dec?></textarea>
                                <span
                                    style="width: 100%;color: red;font-style: italic;"><?=$data['m_descriptionError']?></span>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card-footer w-100 bg-white">
            <input type="submit" name="Add Medicine" value="Add Medicine" class="btn btn-warning w-100"></input>
        </div>
        </form>
    </div>
</div>
</div>

<script>
var swiper = new Swiper('.imagesSlide', {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
});

function preview_image() {

    var total_file = document.getElementById("upload_file").files.length;
    for (var i = 0; i < total_file; i++) {
        swiper.appendSlide("<div class='swiper-slide'><img src='" + URL
            .createObjectURL(
                event.target.files[i]) +
            "' class='slide-image' style='cursor: grab'/></div>"
        );
    }
}
</script>