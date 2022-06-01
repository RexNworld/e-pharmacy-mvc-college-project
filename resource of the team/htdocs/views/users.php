<?php
    $sql = "SELECT * FROM `user`";
    $result = $conn->query($sql);
?>
<div class="container-fluid">
    <div class="btn-group" role="group"><button class="btn btn-primary" data-toggle="modal" data-target="#addUserModel"
            role="button" style="background: #07689f; border-width: 4px;border-color: #e0e0e0;">Add User</button></div>
</div>
<hr>
<div class="container-fluid">
    <table id="UsersTable" class="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email ID</th>
                <th>Country</th>
                <th>subscription Duration</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo '<tr>';
                    echo '<td><a style="color: #000; text-decoration: none;" href="/users/'.$row['id'].'><b>'.$row['name'].'</b></a><br><span class="small">'.$row['name'].'</span></td>';
                    echo '<td>'.$row['email_id'].'</td>';
                    echo '<td>'.$row['country'].'</td>';
                    echo '<td>'.$row['subscriptionDuration'].'</td>';
                    echo '<td><a href="/profile?id='.$row['id'].'"><i class="fas fa-chevron-right"></i></a></td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#UsersTable').DataTable();
    });
</script>
<!-- Modal -->
<div class="modal fade" id="addUserModel" tabindex="-1" role="dialog" aria-labelledby="addUserModelTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-9">
                            <label for="nameinput">Name:</label>
                            <input type="text" placeholder="Name" name="name" id="nameinput" class="form-control" required>
                            <label for="emailinput">Email address :</label>
                            <input type="email" placeholder="Email Id" name="email" id="emailinput" class="form-control" required>
                            <label for="passwordinput">Password :</label>
                            <input type="password" placeholder="Password" name="password" minlength="8" maxlength="16" id="passwordinput"
                                class="form-control" required>
                                <label for="nameinput">Country:</label>
                            <input type="text" placeholder="Country" name="country" id="nameinput" class="form-control" required>
                            <label for="subscriptioninput">Subscription Duration</label>
                            <input type="date" placeholder="Subscription Duration" name="subscription_duration"
                                id="subscriptioninput" class="form-control" required>
                        </div>
                        <div class="col-3">
                            <input type="file" name="uploadimage">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Add User" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php


if (isset($_POST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $subscriptionDuration = $_REQUEST['subscription_duration'];
    $country = $_REQUEST['country'];

    $filename = $_FILES["uploadimage"]["name"];
    $tempname = $_FILES["uploadimage"]["tmp_name"];  
    $folder = "images/".$filename;   

        $sql = "INSERT INTO `user` (name,email_id,password,profileImage,subscriptionDuration,country) VALUES ('$name','$email','$password','$folder', '$subscriptionDuration','$country')";
       
        if (move_uploaded_file($tempname, $folder)) {
            if($conn->query($sql) === TRUE)
                echo '<script>alert("Data inserted")</script>';
            else
                echo '<script>alert("Error : in insertion data")</script>';
        }else{
            echo '<script>alert("Error : in insertion data")</script>';
        }
}

?>
