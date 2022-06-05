<div class="container-fluid">
    <div class="card table-responsive shadow-own2">
        <div class="card-header bg-white">
          

        </div>
        <div class="row">
        <div class="card-body col-8">
            <table id="userTable" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Buyer Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Details</th>
                        
                    </tr>
                </thead>
                <tbody>
                     <!-- <?php
                            foreach($data['doctor'] as $user){
                                echo '<tr>';
                                echo '<th scope="row">'.$user->id.'</th>';
                                echo '<td>'.$user->Name.'</td>';
                                echo '<td>'.$user->Email.'</td>';
                                echo '<td>'.$user->Ph_no.'</td>';
                                echo '<td>'.$user->Gender.'</td>';
                                echo '<td>'.$user->Address.'</td>';
                                echo '<td>
                                        <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editDoctor">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn text-danger">
                                            <i class="fas fa-trash-alt"></i>
                                            </button>
                                      </td>';
                                echo '<td>
                                <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editDoctor">
                                <i class="fa">&#xf105;</i>
                                    </button>
                                        </td>';
                                echo '</tr>';
                            }
                        ?>  -->
                  
                                <tr>
                                <th scope="row">1</th>
                                <td>001</td>
                                <td>D-Gold Total</td>
                                <td>$ 199</td>
                                <td>Rohit</td>
                                <td>12pes</td>
                                <td>Pending</td>
                                <td>
                                        
                                        <button class="btn text-danger">
                                            <i class="fas fa-trash-alt"></i>
                                            </button>
                                      </td>
                                 <td>
                                <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#addDoctor">
                                <i class="fa">&#xf105;</i>
                                    </button>
                                        </td> 
                                </tr>
                       
                </tbody>
            </table>
            
        </div>
       
        </div>
        
    </div>
<!-- for order details model box -->
    <div class="modal fade" id="addDoctor" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addDoctorLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDoctorLabel">Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                <img src="<?=URLROOT?>/public/images/total_med.jpeg" width="300px">
                                </div>
                                <div class="col-md-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Product Id</span>
                                    <input type="text" disabled class="form-control" placeholder="Product Id" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Product Name</span>
                                    <input type="text" disabled class="form-control" placeholder="Product Name" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Price</span>
                                    <input type="number" disabled class="form-control" placeholder="Price" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <!-- <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Specialist</span>
                                    <select class="form-select" name="Specialist" required="" >
                                        <optgroup label="Select Specialisation">
                                        <option value="Dentist">Dentist</option>
                                        <option value="Gynecologist">Gynecologist</option>
                                        <option value="Neurologist">Neurologist</option>
                                        </optgroup>
                                        </select>
                                </div> -->
                            </div>

                            <div class="row">
                                <div class="col-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Byuer Id</span>
                                    <input type="text" disabled class="form-control" placeholder="Byuer Id" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Order Date</span>
                                    <input type="date" disabled class="form-control" placeholder="Order Date" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Address</span>
                                    <textarea class="form-control" disabled placeholder="Address" aria-label="Name" aria-describedby="basic-addon1"></textarea>
                                </div>
                              
                                </div>
                                <div class="col-6">
                                
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Buyer Name</span>
                                    <input type="text" disabled class="form-control" placeholder="Buyer Name" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Estimated Delivery Date</span>
                                    <input type="date" disabled class="form-control" placeholder="Estimated Delivery Date" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Order Status</span>
                                    <select class="form-select" style="background-color:#cce6ff;" name="Order Status" required="" >
                                        <optgroup label="Select Status">
                                        <option style="color:yellow;" value="Dentist">Pending</option>
                                        <option style="color:Green;" value="Gynecologist">Delivered</option>
                                        <option style="color:red;" value="Gynecologist">Failed</option>
                                        <option style="color:orange;" value="Neurologist">Cancelled</option>
                                        </optgroup>
                                        </select>
                                </div>

                                
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Status</button>
                </div>
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
</script>
<!-- for profile upload -->
<script>

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>
