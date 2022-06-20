<div class="container-fluid">
    <div class="card table-responsive shadow-own2">
        <div class="card-body">
            <table id="userTable" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price </th>
                        <th scope="col">Buyer Name</th>
                        <th scope="col">Buyer Number</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['orderList'] as $order):?>
                    <?php $medData = explode(', ',$order->product);?>
                    <?php foreach($medData as $med):?>
                    <?php $data = $this->userModel->getMedicineByTag($med)?>
                    <?php $buyerInfo = $this->userModel->getAddressById($order->user_details)?>
                    <tr>
                        <td><img src="<?=URLROOT?>/uploads/<?=explode(',',$data[0]->image)[0]?>" width="50px">
                        </td>
                        <td><?=$data[0]->name?></td>
                        <td><?=$data[0]->m_price?></td>
                        <td><?=$buyerInfo[0]->name?></td>
                        <td><?=$buyerInfo[0]->number?></td>
                        <?php
                        if($order->status === 'PENDING')
                            echo '<td><span class="badge bg-danger">'.$order->status.'</span></td>';
                        elseif($order->status === 'ACCEPTED')
                        echo '<td><span class="badge bg-success">'.$order->status.'</span></td>';
                        elseif($order->status === 'PACKEGING')
                        echo '<td><span class="badge bg-primary">'.$order->status.'</span></td>';
                        elseif($order->status === 'OUT FOR DELIVERY')
                        echo '<td><span class="badge bg-warning">'.$order->status.'</span></td>';
                        elseif($order->status === 'DELIVERED')
                        echo '<td><span class="badge bg-light">'.$order->status.'</span></td>';
                        ?>
                        <td>
                            <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#viewDetails"
                                data-bs-whatever="<?=$order->id?>" data-bs-name="<?=$buyerInfo[0]->name?>"
                                data-bs-number="<?=$buyerInfo[0]->number?>" data-bs-city="<?=$buyerInfo[0]->city?>"
                                data-bs-state="<?=$buyerInfo[0]->state?>" data-bs-address="<?=$buyerInfo[0]->address?>"
                                data-bs-pin="<?=$buyerInfo[0]->pin?>" data-bs-landmark="<?=$buyerInfo[0]->landmark?>"
                                data-bs-add_type="<?=$buyerInfo[0]->add_type?>"
                                data-bs-image="<?=URLROOT?>/uploads/<?=explode(',',$data[0]->image)[0]?>">
                                <i class="fa">&#xf105;</i>
                            </button>
                        </td>
                    </tr>

                    <?php endforeach;?>
                    <?php endforeach;?>


                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- for order details model box -->
<div class="modal fade" id="viewDetails" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewDetailsLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewDetailsLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="modalForm" action="">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="image" src="<?=URLROOT?>/public/images/total_med.jpeg" width="300px"
                                    style="height: 300px;object-fit: contain;">
                            </div>
                            <div class="col-md-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text">Product Id</span>
                                    <input type="text" disabled class="form-control" placeholder="Product Id"
                                        aria-label="Name" id="orderNumber" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text">Buyer Name</span>
                                    <input type="text" disabled class="form-control" placeholder="Buyer Name"
                                        aria-label="Name" aria-describedby="basic-addon1" id="buyerName">
                                </div>
                                <div class="input-group py-3">
                                    <span class="input-group-text">Buyer Name</span>
                                    <input type="text" disabled class="form-control" placeholder="Buyer Name"
                                        aria-label="Name" aria-describedby="basic-addon1" id="buyerNumber">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group py-3">
                                        <span class="input-group-text">Byuer Id</span>
                                        <input type="text" disabled class="form-control" placeholder="Byuer Id"
                                            aria-label="Name" aria-describedby="basic-addon1" id="city">
                                    </div>

                                    <div class="input-group py-3">
                                        <span class="input-group-text">Order Date</span>
                                        <input type="text" disabled class="form-control" placeholder="Order Date"
                                            aria-label="Name" aria-describedby="basic-addon1" id="pin">
                                    </div>

                                    <div class="input-group py-3">
                                        <span class="input-group-text">Address</span>
                                        <textarea class="form-control" disabled placeholder="Address" aria-label="Name"
                                            aria-describedby="basic-addon1" id="address"></textarea>
                                    </div>

                                </div>
                                <div class="col-6">

                                    <div class="input-group py-3">
                                        <span class="input-group-text">State</span>
                                        <input type="text" disabled class="form-control" placeholder="Buyer Name"
                                            aria-label="Name" aria-describedby="basic-addon1" id="state">
                                    </div>

                                    <div class="input-group py-3">
                                        <span class="input-group-text">Landmark</span>
                                        <input type="text" disabled class="form-control" aria-label="type"
                                            aria-describedby="basic-addon1" id="landmark">
                                    </div>

                                    <div class="input-group py-3">
                                        <span class="input-group-text">Type</span>
                                        <input type="text" disabled class="form-control" aria-label="type"
                                            aria-describedby="basic-addon1" id="add_type">
                                    </div>

                                    <div class="input-group py-3">
                                        <span class="input-group-text">Order Status</span>
                                        <select class="form-select" name="order" required="">
                                            <optgroup label="Select Status">
                                                <!-- 'PENDING','ACCEPTED','PACKEGING','OUT FOR DELIVERY','DELIVERED' -->
                                                <option style="color:red;" value="PENDING">Pending</option>
                                                <option style="color:Green;" value="ACCEPTED">Accepted</option>
                                                <option style="color:blue;" value="PACKEGING">Packeging</option>
                                                <option style="color:#ff00d4;" value="OUT FOR DELIVERY">Out For Delivery
                                                </option>
                                                <option style="color:black;" value="DELIVERED">Delivered</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Order</button>
                </div>
            </form>
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
const exampleModal = document.getElementById('viewDetails')
exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    const image = button.getAttribute('data-bs-image')

    const name = button.getAttribute('data-bs-name')
    const number = button.getAttribute('data-bs-number')
    const address = button.getAttribute('data-bs-address')
    const city = button.getAttribute('data-bs-city')
    const state = button.getAttribute('data-bs-state')
    const pin = button.getAttribute('data-bs-pin')
    const landmark = button.getAttribute('data-bs-landmark')
    const add_type = button.getAttribute('data-bs-add_type')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')
    document.getElementById("image").src = image;
    modalTitle.textContent = `Order number ${recipient}`
    document.getElementById("modalForm").action = `?id=${recipient}`;

    document.getElementById("orderNumber").value = recipient;
    document.getElementById("buyerName").value = name;
    document.getElementById("buyerNumber").value = number;
    document.getElementById("city").value = address;
    document.getElementById("pin").value = city;
    document.getElementById("address").value = state;
    document.getElementById("state").value = pin;
    document.getElementById("landmark").value = landmark;
    document.getElementById("add_type").value = add_type;
})
</script>