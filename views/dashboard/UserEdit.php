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
                            <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                                aria-describedby="basic-addon1" name="user_id" value="<?= $data['userData'][0]->id ?>"
                                hidden disabled>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                                aria-describedby="basic-addon1" name="name" value="<?= $data['userData'][0]->name ?>">
                        </div>

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">User Name</span>
                            <input type="text" name="username" class="form-control" placeholder="User Name"
                                aria-label="User Name" aria-describedby="basic-addon1"
                                value="<?= $data['userData'][0]->user_name ?>" disabled>
                        </div>

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">E-mail</span>
                            <input type="text" name="email" class="form-control" placeholder="E-mail"
                                aria-label="E-mail" aria-describedby="basic-addon1"
                                value="<?= $data['userData'][0]->email ?>">
                        </div>

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">Phone no.</span>
                            <input type="text" name="mobile" class="form-control" placeholder="Phone no."
                                aria-label="Phone no." aria-describedby="basic-addon1"
                                value="<?= $data['userData'][0]->mobile ?>" disabled>
                        </div>

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">Status</span>
                            <input type="text" name="status" class="form-control" placeholder="Gender"
                                aria-label="Gender" aria-describedby="basic-addon1"
                                value="<?= $data['userData'][0]->status ?>">
                        </div>

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">User Type</span>
                            <select class="form-select" name="user_type" aria-label="select user type" value="DOCTOR">
                                <option value="SUPERADMIN"
                                    <?= $data['userData'][0]->user_type === 'SUPERADMIN'? 'selected':'' ?>>
                                    SUPERADMIN
                                </option>
                                <option value="ADMIN" <?= $data['userData'][0]->user_type === 'ADMIN'? 'selected':'' ?>>
                                    ADMIN</option>
                                <option value="STAFF" <?= $data['userData'][0]->user_type === 'STAFF'? 'selected':'' ?>>
                                    STAFF</option>
                                <option value="DOCTOR"
                                    <?= $data['userData'][0]->user_type === 'DOCTOR'? 'selected':'' ?>>DOCTOR
                                </option>
                                <option value="GUEST" <?= $data['userData'][0]->user_type === 'GUEST'? 'selected':'' ?>>
                                    GUEST</option>
                            </select>
                        </div>

                        <div class="input-group py-2">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <?php if($_SESSION['user_type'] === 'SUPERADMIN') :?>
                            <input type="text" name="pass" class="form-control" placeholder="Password"
                                aria-label="Password" aria-describedby="basic-addon1">
                            <?php else :?>
                            <input type="text" name="pass" class="form-control" placeholder="Password"
                                aria-label="Password" aria-describedby="basic-addon1" disabled>
                            <?php endif;?>
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
                                <?php if(!empty($data['userData'][0]->user_img)):?>
                                <div id="imagePreview"
                                    style="background-image: url(<?= URLROOT.'/uploads/'.$data['userData'][0]->user_img ?>);">
                                    <?php else :?>
                                    <div id="imagePreview"
                                        style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                    </div>
                                    <?php endif;?>

                                </div>
                                <span class="image-error">
                                    <?php echo empty($data['imageError']) ? '' : $data['imageError']; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card footer">
                        <input type="submit" name="editUser" id="adduser" class="btn btn-primary"
                            value="Save Changes" />

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