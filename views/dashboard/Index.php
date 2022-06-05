<?php
 require_once PATH_ROOT . '/views/dashboard/components/smallBox.php';
 $box = new smallBox;

?>
<div class="container-fluid">
    <div class="row">
        <?php 
        $box->box('250','Change Me','fas fa-user-plus','bg-info','link'); 
        $box->box('15','Change Me','fas fa-shopping-bag','bg-success','link'); 
        $box->box('5','Appointment','fas fa-calendar-day','bg-warning','link'); 
        $box->box('10','Feedback','fas fa-comment-dots','bg-danger','link'); 
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
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
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
                                <th scope="col">First</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Mark</td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>Jacob</td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>Larry the Bird</td>
                            </tr>
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