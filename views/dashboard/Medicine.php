<div class="container-fluid">
    <div class="card table-responsive shadow-own2">
        <div class="card-header bg-white">
            
            <?php
                // if($data['users']->user_type == 'SUPERADMIN'){
                    echo '<button class="btn d-inline btn-warning" data-bs-toggle="modal" data-bs-target="#addMedicine" style="float:">Add Medicine</button>';
                // }
            ?>
        </div>
        <div class="card-body">
            <table id="userTable" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Use for</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php
                            foreach($data['users'] as $user){
                                echo '<tr>';
                                echo '<th scope="row">'.$user->id.'</th>';
                                echo '<td>'.$user->Name.'</td>';
                                echo '<td>'.$user->Email.'</td>';
                                echo '<td>'.$user->Ph_no.'</td>';
                                echo '<td>'.$user->Gender.'</td>';
                                echo '<td>'.$user->Address.'</td>';
                                echo '<td>
                                        <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editUser">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn text-danger">
                                            <i class="fas fa-trash-alt"></i>
                                            </button>
                                      </td>';
                                
                                echo '</tr>';
                            }
                        ?> -->
                         <tr>
                                <th scope="row">1</th>
                                <td><img src="<?=URLROOT?>/public/images/total_med.jpeg" width="50px"></td>
                                <td>D-Gold Total</td>
                                <td>Cold & Fever</td>
                                <td>$ 199/-</td>
                                <td>Common medicine</td>
                                <td>10box</td>
                                <td>
                                        <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editMedicine">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn text-danger">
                                            <i class="fas fa-trash-alt"></i>
                                            </button>
                                      </td>
                                <!-- <td>
                                <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editDoctor">
                                <i class="fa">&#xf105;</i>
                                    </button>
                                        </td> -->
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td><img src="<?=URLROOT?>/public/images/total_med.jpeg" width="50px"></td>
                                <td>D-Gold Total</td>
                                <td>Cold & Fever</td>
                                <td>$ 199/-</td>
                                <td>Common medicine</td>
                                <td>5box</td>
                                <td>
                                        <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editMedicine">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn text-danger">
                                            <i class="fas fa-trash-alt"></i>
                                            </button>
                                      </td>
                                <!-- <td>
                                <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editDoctor">
                                <i class="fa">&#xf105;</i>
                                    </button>
                                        </td> -->
                                </tr>
                </tbody>
            </table>
        </div>
    </div>
<!-- for add Medicine model box -->
<div class="modal fade" id="addMedicine" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addMedicineLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMedicineLabel">Add Medicine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input class="inputs" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label class="labels" for="imageUpload"><i style="font-size:24px" class="fa">&#xf044;</i>
                                        </label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvbw59Xfw1ORAjwhClAE58qwR_OA9WfV6-R6dhaqFOZLvOA8iCCFMNL1sLId9Aonyyi5s&usqp=CAU);">
                                            </div>
                                        </div>
                                    
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Product Id</span>
                                    <input type="text"  class="form-control" placeholder="#001" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Product Name</span>
                                    <input type="text"  class="form-control" placeholder="D-Gold Total" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Use For</span>
                                    <input type="text"  class="form-control" placeholder="cold, Fever etc." aria-label="Name" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">MRP</span>
                                    <input type="number"  class="form-control" placeholder="$ 279" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Pacing Date</span>
                                    <input type="date"  class="form-control" placeholder="22-09-2021" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Category</span>
                                    <select class="form-select" name="category" required="" >
                                        <optgroup label="Select Category">
                                        <option value="Dentist">Common Medicine</option>
                                        <option value="Gynecologist">Baby Care</option>
                                        <option value="Gynecologist">Skin Care</option>
                                        <option value="Neurologist">COVID</option>
                                        </optgroup>
                                        </select>
                                </div>


                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Short Des.</span>
                                    <textarea class="form-control"  placeholder="Short Description..." aria-label="Name" aria-describedby="basic-addon1"></textarea>
                                </div>
                              
                                </div>
                                <div class="col-6">
                                
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Price</span>
                                    <input type="number"  class="form-control" placeholder="$ 199" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Expire Date</span>
                                    <input type="date"  class="form-control" placeholder="12-08-2023" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Stock</span>
                                    <input type="number"  class="form-control" placeholder="10 box" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Long Des.</span>
                                    <textarea class="form-control"  placeholder="Long Description" aria-label="Name" aria-describedby="basic-addon1"></textarea>
                                </div>
                                                                
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Medicine</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- for Edit Medicine model box -->
    <div class="modal fade" id="editMedicine" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editMedicineLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMedicineLabel">Edit Medicine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input class="inputs" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label class="labels" for="imageUpload"><i style="font-size:24px" class="fa">&#xf044;</i>
                                        </label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvbw59Xfw1ORAjwhClAE58qwR_OA9WfV6-R6dhaqFOZLvOA8iCCFMNL1sLId9Aonyyi5s&usqp=CAU);">
                                            </div>
                                        </div>
                                    
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Product Id</span>
                                    <input type="text"  class="form-control" placeholder="#001" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Product Name</span>
                                    <input type="text"  class="form-control" placeholder="D-Gold Total" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Use For</span>
                                    <input type="text"  class="form-control" placeholder="cold, Fever etc." aria-label="Name" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">MRP</span>
                                    <input type="number"  class="form-control" placeholder="$ 279" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Pacing Date</span>
                                    <input type="date"  class="form-control" placeholder="22-09-2021" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Category</span>
                                    <select class="form-select" name="category" required="" >
                                        <optgroup label="Select Category">
                                        <option value="Dentist">Common Medicine</option>
                                        <option value="Gynecologist">Baby Care</option>
                                        <option value="Gynecologist">Skin Care</option>
                                        <option value="Neurologist">COVID</option>
                                        </optgroup>
                                        </select>
                                </div>


                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Short Des.</span>
                                    <textarea class="form-control"  placeholder="Short Description..." aria-label="Name" aria-describedby="basic-addon1"></textarea>
                                </div>
                              
                                </div>
                                <div class="col-6">
                                
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Price</span>
                                    <input type="number"  class="form-control" placeholder="$ 199" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Expire Date</span>
                                    <input type="date"  class="form-control" placeholder="12-08-2023" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Stock</span>
                                    <input type="number"  class="form-control" placeholder="10 box" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Long Des.</span>
                                    <textarea class="form-control"  placeholder="Long Description" aria-label="Name" aria-describedby="basic-addon1"></textarea>
                                </div>
                                                                
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Change</button>
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
