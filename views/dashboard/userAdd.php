<style>
.image-error {
    display: block;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #e74a3b;
}
</style>
<div class="container">
    <form method="POST" enctype="multipart/form-data">
        <div class="card shadow p-4 w-75 mx-auto">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" class="form-control" placeholder="Jhon Lee" aria-label="Name"
                                aria-describedby="basic-addon1" name="name" value="<?=$data['name']?>" required>
                                <span style="width: 100%;color: red;font-style: italic;"><?=$data['nameError']?></span>
                            </div>

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">E-mail</span>
                            <input type="text" class="form-control" placeholder="xyz@gmail.com" aria-label="E-mail"
                                aria-describedby="basic-addon1" name="email" value="<?=$data['email']?>" required>
                                <span style="width: 100%;color: red;font-style: italic;"><?=$data['emailError']?></span>
                            </div>
                            

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">Phone no.</span>
                            <input type="text" class="form-control" placeholder="Your mobile number" aria-label="Phone no."
                                aria-describedby="basic-addon1" name="mobile" value="<?=$data['mobile']?>" required>
                                <span style="width: 100%;color: red;font-style: italic;"><?=$data['mobileError']?></span>
                            </div>

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">User Type</span>
                            <select class="form-select" name="user_type" aria-label="select user type" value="DOCTOR">
                                <option value="GUEST" <?= $data['user_type'] === 'GUEST'? 'selected':'' ?>>GUEST</option>
                                <option value="DOCTOR" <?= $data['user_type'] === 'DOCTOR'? 'selected':'' ?>>DOCTOR</option>
                                <option value="STAFF" <?= $data['user_type'] === 'STAFF'? 'selected':'' ?>>STAFF</option>
                                <option value="ADMIN" <?= $data['user_type'] === 'ADMIN'? 'selected':'' ?>>ADMIN</option>
                                <?php if($_SESSION['user_type'] === 'SUPERADMIN'):?>
                                <option value="SUPERADMIN" <?= $data['user_type'] === 'SUPERADMIN'? 'selected':'' ?>>SUPERADMIN</option>
                                <?php endif;?>

                            </select>
                        </div>

                        

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <input type="text" class="form-control" placeholder="******" aria-label="Password"
                                aria-describedby="basic-addon1" name="pass" required>
                                <span style="width: 100%;color: red;font-style: italic;"><?=$data['passError']?></span>
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
                                <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                </div>
                            </div>
                            <span style="width: 100%;color: red;font-style: italic;"><?=$data['imageError']?></span>

                        </div>
                    </div>
                    <div class="card footer">
                        <input type="submit" name="addUser" id="adduser" class="btn btn-primary"
                            value="Save Changes" />

                    </div>
                </div>
            </div>
        </div>

    </form>

</div>

<script>
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