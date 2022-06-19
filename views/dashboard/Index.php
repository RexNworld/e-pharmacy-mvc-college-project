<?php
 require_once PATH_ROOT . '/views/dashboard/components/smallBox.php';
 $box = new smallBox;

?>
<div class="container-fluid">
    <div class="row">
        <?php 
        $box->box(count($data['allUser']),'Total User','fas fa-user-plus','bg-info','users'); 
        $box->box(count($data['allmed']),'Total Medicine','fas fa-shopping-bag','bg-success','medicine'); 
        $box->box(count($data['alltag']),'Total Category','fa fa-tags','bg-warning','medicine'); 
        $box->box(count($data['allorder']),'Total Orders','fa fa-bookmark','bg-danger','orders'); 
        ?>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card table-responsive shadow-own2">
                <div class="card-header bg-white">
                    <button class="btn d-inline disabled" style="color: #36b9cc;font-weight: bold;">Medicine
                        Stock</button>
                </div>
                <div class="card-body">
                    <table id="medicineTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['allmed'] as $item) :?>
                            <?php $img = explode(',',$item->image);?>
                            <tr>
                                <td scope="row"><img src="<?=URLROOT?>/uploads/<?=$img[0]?>" width="50px"></td>
                                <td><?=$item->name?></td>
                                <td><?=$item->categories?></td>
                                <td><?=$item->m_price?></td>
                                <td><?=$item->stock?></td>
                                <td><?=$item->date?></td>
                            </tr>
                            <?php endforeach;?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card table-responsive shadow-own2">
                <div class="card-header bg-white">
                    <button class="btn d-inline disabled" style="color: #36b9cc;font-weight: bold;">New Users</button>
                    <button class="btn btn-success d-inline" style="float:right">View all</button>
                </div>
                <div class="card-body">
                    <table id="medicineTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ( array_slice(array_reverse($data['allUser']), 0, 8, true) as $user ):?>
                            <tr>
                                <td scope="row"><?=$user->id?></td>
                                <td><?=$user->name?></td>
                                <td><?=$user->email?></td>
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
    $('#medicineTable').DataTable();
});
</script>