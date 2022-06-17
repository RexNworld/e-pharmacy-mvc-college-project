<div class="container-fluid">
    <div class="card table-responsive shadow-own2">
        <div class="card-header bg-white">

            <?php
                // if($data['allUser']->user_type == 'SUPERADMIN'){
                    echo '<a href="adduser" class="btn d-inline btn-warning" style="float:">Add User</a>';
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