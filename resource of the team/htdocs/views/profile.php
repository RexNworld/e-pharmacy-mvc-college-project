<?php 
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM `user` where id=$user_id" ;
    $result = $conn->query($sql);
    $user_row = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $user_row = $row;
        }
    }
    
?>         
                <div class="container-fluid">
                    
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <form method="POST" enctype="multipart/form-data">
                                <div class="card-body text-center shadow"><img src="<?php echo $user_row['profileImage']?>" class="rounded-circle mb-3 mt-4" width="160" height="160">
                                <div class="mb-3">
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="profile" value="Profile Update">
                                <input type="submit" name="profile_update" value="Upload" class="btn btn-primary">
                                </div>
                                </div>
                                </form>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small fw-bold">Server migration<span class="float-end">20%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="visually-hidden">20%</span></div>
                                    </div>
                                    <h4 class="small fw-bold">Sales tracking<span class="float-end">40%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="visually-hidden">40%</span></div>
                                    </div>
                                    <h4 class="small fw-bold">Customer Database<span class="float-end">60%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="visually-hidden">60%</span></div>
                                    </div>
                                    <h4 class="small fw-bold">Payout Details<span class="float-end">80%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="visually-hidden">80%</span></div>
                                    </div>
                                    <h4 class="small fw-bold">Account setup<span class="float-end">Complete!</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="visually-hidden">100%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card textwhite bg-primary text-white shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card textwhite bg-success text-white shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form method="POSt">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input class="form-control" type="text" id="username"  name="username" value="<?php echo $user_row['name']?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" value="<?php echo $user_row['email_id']?>" name="email"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" name="user_update">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Contact Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" value="<?php echo $user_row['address']?>" name="address"></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input class="form-control" type="text" id="city" value="<?php echo $user_row['city']?>" name="city"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input class="form-control" type="text" id="country" value="<?php echo $user_row['country']?>" name="country"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" name="address_update" type="submit">Save&nbsp;Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
          
                <?php
if(isset($_POST['profile_update'])){
    $filename_img = $_FILES["profile"]["name"];
    $tempname = $_FILES["profile"]["tmp_name"];  
    $folder_img = "images/".$filename_img;
    move_uploaded_file($tempname, $folder_img);
 
    $sql="UPDATE `user` SET profileImage='$folder_img' where id=$user_id";
    if($conn->query($sql))
    {
        echo '<script>alert("Update data");</script>';
        
    }    
    else{
        echo '<script>alert("Error : in Update data")</script>';
    }
    
}
if(isset($_POST['user_update'])){
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];

 
    $sql="UPDATE `user` SET name='$username',email_id='$email' where id=$user_id";
    if($conn->query($sql)){}
}

if(isset($_POST['address_update'])){
    $city = $_REQUEST['city'];
    $address = $_REQUEST['address'];
    $country = $_REQUEST['country'];

 
    $sql="UPDATE `user` SET city='$city',address='$address',country='$country' where id=$user_id";
    if($conn->query($sql)){}
}

?>