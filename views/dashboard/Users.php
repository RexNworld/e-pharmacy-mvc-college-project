<div class="container-fluid">
    <div class="card table-responsive shadow-own2">
        <div class="card-header bg-white">

            <?php
                // if($data['allUser']->user_type == 'SUPERADMIN'){
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
                        <th scope="col">User Role</th>
                        <th scope="col">Last Login</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 0;
                            foreach($data['allUser'] as $user){
                                echo '<tr>';
                                echo '<th scope="row">'.++$count.'</th>';
                                echo '<td>'.$user->name.' </td> ';
                                echo '<td>'.$user->email.'</td>';
                                echo '<td>'.$user->mobile.'</td>';
                                echo '<td>';
                                    if($user->status != 0)
                                        echo $user->user_type; 
                                    else
                                        echo '<span class="badge bg-danger">Suspend</span>';
                                echo '</td>';
                                echo '<td>'.$user->last_login_datetime.'</td>';
                                echo '<td>
                                        <a class="btn text-primary" href="'.URLROOT.'/dashboard/users/'.$user->id.'">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn text-danger" href="'.URLROOT.'/dashboard/deleteUser/'.$user->id.'">
                                            <i class="fas fa-trash-alt"></i>
                                            </a>
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
                <form method="POST">

                    <div class="modal-body">
                        <dv class="container-fluid">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group py-2">
                                        <span class="input-group-text" id="basic-addon1">Name</span>
                                        <input type="text" class="form-control" placeholder="Jhon Lee" aria-label="Name"
                                            aria-describedby="basic-addon1" name="name">
                                    </div>

                                    <div class="input-group py-2">
                                        <span class="input-group-text" id="basic-addon1">E-mail</span>
                                        <input type="text" class="form-control" placeholder="xyz@gmail.com"
                                            aria-label="E-mail" aria-describedby="basic-addon1" name="email">
                                    </div>

                                    <div class="input-group py-2">
                                        <span class="input-group-text" id="basic-addon1">Phone no.</span>
                                        <input type="text" class="form-control" placeholder="+91 ----- -----"
                                            aria-label="Phone no." aria-describedby="basic-addon1" name="mobile">
                                    </div>

                                    <div class="input-group py-2">
                                        <span class="input-group-text" id="basic-addon1">Address</span>
                                        <textarea class="form-control" placeholder="Delhi...." aria-label="Address"
                                            aria-describedby="basic-addon1" name="address"></textarea>
                                    </div>

                                    <div class="input-group py-2">
                                        <span class="input-group-text" id="basic-addon1">Password</span>
                                        <input type="text" class="form-control" placeholder="******"
                                            aria-label="Password" aria-describedby="basic-addon1" name="pass">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input class="inputs" name="image" type='file' id="imageUpload"
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
                            </div>

                        </dv>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="adduser" id="adduser" class="btn btn-primary" value="Add user" />
                        </div>
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

    // profile mage changing
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