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
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Issue</th>
                        <th scope="col">App. Date & Time</th>
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
                                <td>Dr. Rohit</td>
                                <td>Reena Khan</td>
                                <td>Skin Problem</td>
                                <td>22-05-2022 10:30 AM</td>
                                <td>Upcoming</td>
                                <td>
                                        
                                        <button class="btn text-danger">
                                            <i class="fas fa-trash-alt"></i>
                                            </button>
                                      </td>
                                 <td>
                                <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#detailsDoctor">
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
    <div class="modal fade" id="detailsDoctor" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailsDoctorLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsDoctorLabel">Appointment Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="">
                            <div class="row border">
                            <div class="col-6 border">
                                <center>
                            <img src="<?=URLROOT?>/public/image/doc-icon.png" style="border-radius:50%; width:200px;" Alt="Doctor Pic">
                        </center>  
                        <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Appointment Id</span>
                                    <input type="text" disabled class="form-control" placeholder="#001" aria-label="Name" aria-describedby="basic-addon1">
                                </div>
                                
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Doctor Id</span>
                                    <input type="text" disabled class="form-control" placeholder="#101" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Dr. Name</span>
                                    <input type="text" disabled class="form-control" placeholder="Dr. Rohit" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Specilist</span>
                                    <input type="text" disabled class="form-control" placeholder="Dentist" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Status</span>
                                    <input type="text" disabled class="form-control" placeholder="Upcoming" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Prescription</span>
                                    <a href="<?=URLROOT?>/public/images/pre.jpg" class="btn btn-success btn-sm btn-block py-2" download="Prescription" style="width:240px; text-decoration:none; color:#fff; font-size:15px;">
                                    Download
                                    </a>
                                </div>
                        </div>
                        
                            <div class="col-6 border">
                            <center>
                            <img src="<?=URLROOT?>/public/image/profile_icon.png" style="border-radius:50%; width:200px;" Alt="Doctor Pic">
                            </center>    
                            <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Patient Id</span>
                                    <input type="text" disabled class="form-control" placeholder="#202" aria-label="Name" aria-describedby="basic-addon1">
                                </div>
                                
                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Patient Name</span>
                                    <input type="text" disabled class="form-control" placeholder="Reena Khan" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">App. Booking Date</span>
                                    <input type="datetime-local" disabled class="form-control" placeholder="20-04-2022 5:33 PM" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">App. Date</span>
                                    <input type="datetime" disabled class="form-control" placeholder="22-05-2022 10:30 AM" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Issue</span>
                                    <input type="text" disabled class="form-control" placeholder="Skin Problem" aria-label="Name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group py-3">
                                    <span class="input-group-text" id="basic-addon1">Previous Report</span>
                                    <a href="<?=URLROOT?>/public/images/report (2).png" class="btn btn-success btn-sm btn-block py-2" download="Report" style="width:210px; text-decoration:none; color:#fff; font-size:15px;">
                                    Download
                                    </a>
                                </div>
                        </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
