<div class="container-fluid">
    <div class="card table-responsive shadow-own2">
        <div class="card-header bg-white">
            <button class="btn d-inline disabled" style="color: #36b9cc;font-weight: bold;">Medicine
                Stock</button>
            <?php
                // if($data['users']->user_type == 'SUPERADMIN'){
                    echo '<button class="btn d-inline btn-warning" data-bs-toggle="modal" data-bs-target="#addUser" style="float:">Add User</button>';
                // }
            ?>
        </div>
        <div class="card-body">
            <table id="medicineTable" class="table table-hover">
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
                                        <button class="btn text-primary">
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
                                <div class="col-md-8"><input type="text"></div>
                                <div class="col-md-4"><input type="text"></div>
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
</div>
<script>
$(document).ready(function() {
    $('#medicineTable').DataTable({
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