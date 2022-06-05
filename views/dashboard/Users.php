<div class="container-fluid">
    <div class="card table-responsive shadow-own2">
        <div class="card-header bg-white">
            
            <?php
                // if($data['users']->user_type == 'SUPERADMIN'){
                    echo '<button class="btn d-inline btn-warning" data-bs-toggle="modal" data-bs-target="#addUser" style="float:">Add User</button>';
                // }
            ?>
        </div>
        <div class="card-body">
            <table id="userTable" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile no</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
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
                        ?>
                </tbody>
            </table>
        </div>
    </div>
<!-- for add user model box -->
    <div class="modal fade" id="addUser" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addUserLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <dv class="container-fluid">
                        <form action="">
                            <div class="row">
                                <div class="col-md-8">
                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                    <input type="text" class="form-control" placeholder="Jhon Lee" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Username</span>
                                    <input type="text" class="form-control" placeholder="JhonLee18" aria-label="Username" aria-describedby="basic-addon1">
                                </div>


                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">E-mail</span>
                                    <input type="text" class="form-control" placeholder="xyz@gmail.com" aria-label="E-mail" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Phone no.</span>
                                    <input type="text" class="form-control" placeholder="+91 ----- -----" aria-label="Phone no." aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Gender</span>
                                    <input type="text" class="form-control" placeholder="Male/Femal" aria-label="Gender" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Address</span>
                                    <textarea class="form-control" placeholder="Delhi...." aria-label="Address" aria-describedby="basic-addon1"></textarea>
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                    <input type="text" class="form-control" placeholder="******" aria-label="Password" aria-describedby="basic-addon1">
                                </div>

                                </div>
                                <div class="col-md-4">
                                <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input class="inputs" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label class="labels" for="imageUpload"><i style="font-size:24px" class="fa">&#xf044;</i>
                                        </label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </dv>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add user</button>
                </div>
            </div>
        </div>
    </div>


    <!-- for Edit user model box -->
    <div class="modal fade" id="editUser" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editUserLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <dv class="container-fluid">
                        <form action="">
                            <div class="row">
                                <div class="col-md-8">
                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Username</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">E-mail</span>
                                    <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Phone no.</span>
                                    <input type="text" class="form-control" placeholder="Phone no." aria-label="Phone no." aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Gender</span>
                                    <input type="text" class="form-control" placeholder="Gender" aria-label="Gender" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Address</span>
                                    <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1">Password</span>
                                    <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>

                                </div>
                                <div class="col-md-4">
                                <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input class="inputs" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label class="labels" for="imageUpload"><i style="font-size:24px" class="fa">&#xf044;</i>
                                        </label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </dv>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Change</button>
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
