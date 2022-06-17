<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="card table-responsive shadow-own2">
                <div class="card-header bg-white">
                    <?php if($_SESSION['user_type'] == 'SUPERADMIN' || $_SESSION['user_type'] == 'ADMIN'):?>
                    <h5 class="d-inline disabled p-2" style="color: #36b9cc;font-weight: bold;">All Medicine</h5><a
                        class="btn d-inline btn-warning" href="addmedicine" style="float:">Add Medicine</a>
                    <?php endif;?>
                </div>
                <div class="card-body">
                    <table id="userTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Use for</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['medicineList'] as $item) :?>
                            <tr>
                                <?php $img = explode(',',$item->image);?>
                                <td><img src="<?=URLROOT?>/uploads/<?=$img[0]?>" width="50px"></td>
                                <td><?=$item->name?></td>
                                <td><?=$item->short_dec?></td>
                                <td><?=$item->categories?></td>
                                <td><?=$item->s_price?></td>
                                <td><?=$item->stock?></td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn text-primary" href="editMedicine/<?=$item->name_slug?>">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn text-danger"
                                            href="<?=URLROOT?>/dashboard/deleteMedicine/<?=$item->name_slug?>">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <?php if($_SESSION['user_type'] == 'SUPERADMIN' || $_SESSION['user_type'] == 'ADMIN'):?>
            <div class="row py-3">
                <form method="POST" enctype="multipart/form-data">
                    <div class="input-group py-2">
                        <span class="input-group-text" id="basic-addon1">Category Name</span>
                        <input type="text" class="form-control" placeholder="Category Name" name="c_name" id="c_name"
                            aria-label="Name" aria-describedby="basic-addon1" oninput="genarateSlug(this)" />
                        <span style="width: 100%;color: red;font-style: italic;"><?=$data['c_Error']?></span>
                    </div>

                    <div class="input-group py-2">
                        <span class="input-group-text" id="basic-addon1">Category slug</span>
                        <input type="text" class="form-control" placeholder="category-name" name="c_slug" id="c_slug"
                            aria-label="Name" aria-describedby="basic-addon1" />
                    </div>

                    <div class="py-2">
                        <input type="file" class="form-control" name="c_image" id="imageUpload"
                            accept=".png, .jpg, .jpeg" />
                        <span style="width: 100%;color: red;font-style: italic;"><?=$data['c_imageError']?></span>
                    </div>
                    <div class="py-2">
                        <input type="submit" class="btn btn-warning w-100" name="addCategory" value="Add Category" />
                    </div>
                </form>
            </div>
            <?php endif;?>
            <div class="card table-responsive shadow-own2">
                <div class="card-header bg-white">

                    <h5 class="d-inline disabled p-2" style="color: #36b9cc;font-weight: bold;">All Category</h5>
                </div>
                <div class="card-body">
                    <table id="userTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['categoryList'] as $tag) :?>
                            <tr>
                                <td><img src="<?=URLROOT?>/uploads/<?=$tag->c_img?>" width="50px"></td>
                                <td><?=$tag->c_name?></td>
                                <td><?=$tag->c_tag?></td>
                                <td>
                                    <a class="btn text-primary" href="editCategory/<?=$tag->c_tag?>">
                                        <i class="fa">&#xf105;</i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#userTable').DataTable({
        pageLength: 25,
        language: {
            paginate: {
                first: '«',
                previous: '‹',
                next: '›',
                last: '»'
            },
            aria: {
                paginate: {
                    first: 'First',
                    previous: 'Previous',
                    next: 'Next',
                    last: 'Last'
                }
            }
        },
    });
});

function genarateSlug(c_name) {
    var c_name = document.getElementById('c_name');
    var c_slug = document.getElementById('c_slug');

    var key = c_name.value.toLowerCase();
    key = key.replace(/ /g, "-");
    c_slug.value = key;
}
</script>