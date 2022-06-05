<div class="container-fluid">
    <div class="card table-responsive shadow-own2">
        <div class="card-header bg-white">

            <?php
                // if($data['users']->user_type == 'SUPERADMIN'){
                    echo '<button class="btn d-inline btn-warning" data-bs-toggle="modal" data-bs-target="#addDoctor" style="float:">Add Doctor</button>';
                    echo '<button class="btn d-inline btn-primary" data-bs-toggle="modal" data-bs-target="#Specialties" style="float:right">Add Specialist</button>';
                // }
            ?>

        </div>
        <div class="row">
            <div class="card-body col-12">
                <table id="userTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile no</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Specialties</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>

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
                            <td>Rohit</td>
                            <td>rohit12@gmail.com</td>
                            <td>+91 98765 43210</td>
                            <td>Male</td>
                            <td>Cardiology</td>
                            <td>Kolkata</td>
                            <td>
                                <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editDoctor">
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
        <!-- for add doctor model box -->
        <div class="modal fade" id="addDoctor" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addDoctorLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDoctorLabel">Add Doctor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input class="inputs" type='file' id="imageUpload"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label class="labels" for="imageUpload"><i style="font-size:24px"
                                                        class="fa">&#xf044;</i>
                                                </label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview"
                                                    style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">Full Name</span>
                                            <input type="text" class="form-control" placeholder="Full Name"
                                                aria-label="Name" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">Username</span>
                                            <input type="text" class="form-control" placeholder="Username"
                                                aria-label="Name" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">Phone no.</span>
                                            <input type="number" class="form-control" placeholder="Phone no."
                                                aria-label="Name" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">Specialist</span>
                                            <select class="form-select" name="Specialist" required="">
                                                <optgroup label="Select Specialisation">
                                                    <option value="Dentist">Dentist</option>
                                                    <option value="Gynecologist">Gynecologist</option>
                                                    <option value="Neurologist">Neurologist</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group py-3">
                                                <span class="input-group-text" id="basic-addon1">DOB</span>
                                                <input type="date" class="form-control" placeholder="DOB"
                                                    aria-label="Name" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group py-3">
                                                <span class="input-group-text" id="basic-addon1">License</span>
                                                <input type="text" class="form-control" placeholder="License"
                                                    aria-label="Name" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group py-3">
                                                <span class="input-group-text" id="basic-addon1">Address</span>
                                                <textarea class="form-control" placeholder="Address" aria-label="Name"
                                                    aria-describedby="basic-addon1"></textarea>
                                            </div>

                                            <div class="input-group py-3">
                                                <span class="input-group-text" id="basic-addon1">E-mail</span>
                                                <input type="email" class="form-control" placeholder="E-mail"
                                                    aria-label="Name" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group py-3">
                                                <span class="input-group-text" id="basic-addon1">Gender</span>
                                                <select class="form-select" name="Specialist" required="">
                                                    <optgroup label="Select Gender">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                                    </optgroup>
                                                </select>
                                            </div>

                                            <div class="input-group py-3">
                                                <span class="input-group-text" id="basic-addon1">Registration no.</span>
                                                <input type="text" class="form-control" placeholder="Registration no."
                                                    aria-label="Name" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group py-3">
                                                <span class="input-group-text" id="basic-addon1">Google Map Url</span>
                                                <input type="url" class="form-control" placeholder="Google Map Url"
                                                    aria-label="Name" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group py-3">
                                                <span class="input-group-text" id="basic-addon1">Password</span>
                                                <input type="password" class="form-control" placeholder="Password"
                                                    aria-label="Name" aria-describedby="basic-addon1">
                                            </div>


                                        </div>
                                    </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add Doctor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- for Edit Doctor model box -->
    <div class="modal fade" id="editDoctor" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editDoctorLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDoctorLabel">Edit Doctor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <dv class="container-fluid">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input class="inputs" type='file' id="imageUpload"
                                                accept=".png, .jpg, .jpeg" />
                                            <label class="labels" for="imageUpload"><i style="font-size:24px"
                                                    class="fa">&#xf044;</i>
                                            </label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group py-3">
                                        <span class="input-group-text" id="basic-addon1">Full Name</span>
                                        <input type="text" class="form-control" placeholder="Full Name"
                                            aria-label="Name" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group py-3">
                                        <span class="input-group-text" id="basic-addon1">Username</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Name"
                                            aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group py-3">
                                        <span class="input-group-text" id="basic-addon1">Phone no.</span>
                                        <input type="number" class="form-control" placeholder="Phone no."
                                            aria-label="Name" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group py-3">
                                        <span class="input-group-text" id="basic-addon1">Specialist</span>
                                        <select class="form-select" name="Specialist" required="">
                                            <optgroup label="Select Specialisation">
                                                <option value="Dentist">Dentist</option>
                                                <option value="Gynecologist">Gynecologist</option>
                                                <option value="Neurologist">Neurologist</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">DOB</span>
                                            <input type="date" class="form-control" placeholder="DOB" aria-label="Name"
                                                aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">License</span>
                                            <input type="text" class="form-control" placeholder="License"
                                                aria-label="Name" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">Address</span>
                                            <textarea class="form-control" placeholder="Address" aria-label="Name"
                                                aria-describedby="basic-addon1"></textarea>
                                        </div>

                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">E-mail</span>
                                            <input type="email" class="form-control" placeholder="E-mail"
                                                aria-label="Name" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">Gender</span>
                                            <select class="form-select" name="Specialist" required="">
                                                <optgroup label="Select Gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">Registration no.</span>
                                            <input type="text" class="form-control" placeholder="Registration no."
                                                aria-label="Name" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">Google Map Url</span>
                                            <input type="url" class="form-control" placeholder="Google Map Url"
                                                aria-label="Name" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group py-3">
                                            <span class="input-group-text" id="basic-addon1">Password</span>
                                            <input type="password" class="form-control" placeholder="Password"
                                                aria-label="Name" aria-describedby="basic-addon1">
                                        </div>


                                    </div>
                                </div>
                        </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add Doctor</button>
            </div>
        </div>
    </div>
</div>
<!-- for Specialist model box -->
<div class="modal fade" id="Specialties" tabindex="-1" role="dialog" aria-labelledby="SpecialtiesLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SpecialtiesLabel">Specialisation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Enter Specialisation:
                <div class="input-group py-3">

                    <span class="input-group-text" id="basic-addon1">Specialist</span>
                    <input type="text" class="form-control" placeholder="Specialist" aria-label="Name"
                        aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
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
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
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