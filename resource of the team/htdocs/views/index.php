<?php
    $sql = "SELECT * FROM `user`";
    $result = array();
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $dbusercount = $result->num_rows;
    } 
    $sql = "SELECT * FROM `video` WHERE types='movie'";
    $res = array();
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        $dbvideocount = $res->num_rows;
    } 
    
    $sql = "SELECT * FROM `video`";
    $res_index = array();
    $res_index = $conn->query($sql);
    if($res_index->num_rows > 0){
        $dbvideoscount = $res_index->num_rows;
    } 
    $sql = "SELECT * FROM `video` WHERE types='webseries'";
    $result = array();
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $dbvideoscount = $result->num_rows;
    }

?>


    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card shadow border-start-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total Users</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $dbusercount ?></span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card shadow border-start-info py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Total Films</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $dbvideoscount ?></span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-film fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card shadow border-start-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Total Webseries</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $dbvideoscount ?></span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-film fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-xl-8">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Total data</h6>
                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="VideosTable" class="display">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Likes</th>
                                <th>Dislikes</th>
                                <th>Views</th>
                                <th>Trend</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
            if($res_index->num_rows > 0){
                while($row = $res_index->fetch_assoc()){
                    ?>
                       
                            <tr>
                                <td><b><?php echo "$row[title]" ?></b></td>
                                <td><?php echo "$row[likes]" ?></td>
                                <td><?php echo "$row[dislike]" ?></td>
                                <td><?php echo "$row[view]" ?></td>
                                <td>#<?php echo "$row[trend]" ?></td>
                                <td>
                                <button type="button" style="border:none;" data-toggle="modal" data-target="#exampleModalCenter">
                                <img src="images/edit.png" style="border-radius: 50%;" width="20px" heighr="20px">
                                </button></td>
                                
                            </tr>
                            <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Trend</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
        <form method="post">
            <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
            <input type="hidden" name="id">
                <span class="input-group-text" id="inputGroup-sizing-sm">Trending #</span>
            </div>
            
            <input type="number" name="trend" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" name="submit" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </form>
        </div>
        </div>
        <div class="col-lg-5 col-xl-4">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Sign In Method</h6>
                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Google&quot;,&quot;Email-Password&quot;,&quot;Apple&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#ff3300&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;{{total_google_login}}&quot;,&quot;{{total_email_login}}&quot;,&quot;{{total_apple_login}}&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}"></canvas></div>
                    <div class="text-center small mt-4"><span class="me-2"><i class="fas fa-circle text-primary"></i>&nbsp;Google</span><span class="me-2"><i class="fas fa-circle text-success"></i>&nbsp;Email-Password</span><span class="me-2"><i class="fas fa-circle text-danger"></i>&nbsp;Apple</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#VideosTable').DataTable();
    });
</script>
<!-- <script>
//     $(document).ready(function () {
//         $('#editbtn').on('click', function(){
            
//             $('#exampleModalCenter').modal('show');

//             $tr = $(this).closest('tr');

//             vardata = $tr.children("td").map(function(){
//                 return $(this).text();
//             }).get();

//             CONSOLE.LOG(data);

//             $("#idd").VAL(DATA[0]);
//             $("#trendd").VAL(DATA[1]);
//         });
//     });
// </script> -->