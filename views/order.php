<section class="gradient-custom">
    <div class="container">
        <?php foreach($data['orderDetails'] as $order):?>
        <?php $medData = explode(', ',$order->product);?>
        <?php foreach($medData as $med):?>
        <?php $data = $this->userModel->getMedicineByTag($med)?>
        <?php 
            if($order->status === 'PENDING')
                $progress = '10%';
            elseif($order->status === 'ACCEPTED')
                $progress = '30%';
            elseif($order->status === 'PACKEGING')
                $progress = '50%';
            elseif($order->status === 'OUT FOR DELIVERY')
                $progress = '70%';
            elseif($order->status === 'DELIVERED')
                $progress = '100%';
            else
                $progress = '1%';

        ?>
        <div class="card shadow-0 border mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <img src="<?=URLROOT?>/uploads/<?=explode(',',$data[0]->image)[0]?>" class="img-fluid"
                            alt="Medicine Img" style="height:100px">
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0"><?=$data[0]->name?></p>
                    </div>

                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">Use: <?=$data[0]->short_dec?></p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">Qty: 1</p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">Rs. <?=$data[0]->m_price?></p>
                    </div>
                </div>
                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                <div class="row d-flex align-items-center">
                    <div class="col-md-2">
                        <p class="text-muted mb-0 small">Track Order</p>
                    </div>
                    <div class="col-md-10">
                        <div class="progress">
                            <!-- variation 
                                Pending - 10%
                                Order Placed 30%
                                Packaging 50%
                                Out for delivery 70%
                                Delivered 100%
                        -->
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?=$progress?>"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-around mb-1">
                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Pending</p>
                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Order Placed</p>
                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Packaging</p>
                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivery</p>
                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <?php endforeach;?>

    </div>
</section>