<style>
.input-container {
    position: relative;
    margin-bottom: 25px;
    display: inline;
}

.input-container label {
    position: absolute;
    top: 0px;
    left: 0px;
    font-size: 16px;
    color: #808080;
    pointer-event: none;
    transition: all 0.2s ease-in-out;
}

.input-container input {
    border: 0;
    border-bottom: 1px solid #555;
    background: transparent;
    width: 30%;
    padding: 8px 0 5px 0;
    font-size: 16px;
    color: black;
}

.input-container input:focus {
    border: none;
    outline: none;
    border-bottom: 2px solid black;
}

.input-container input:focus~label,
.input-container input:valid~label {
    top: -12px;
    font-size: 12px;

}

/* for profile pic update */
.picture-container {
    position: relative;
    cursor: pointer;
    text-align: center;
}

.picture {
    width: 106px;
    height: 106px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}

.picture:hover {
    border-color: #2ca8ff;
}

.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src {
    width: 100%;
}

.pro_bg {
    background-image: url(https://static.vecteezy.com/system/resources/previews/002/127/140/original/medical-insurance-concept-illustration-a-man-filling-medical-document-form-can-use-for-web-homepage-mobile-apps-web-banner-character-cartoon-illustration-flat-style-free-vector.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
</style>

<div class="container">
    <div class="row">
        <h2 style="font-weight:bold; color:#000;">My Profile</h2>
        <hr style="width:100px; height:3px; margin-left:13px; color:#00e6ac;">
        <form id="register" method="post">
            <div class="row">
                <div class="col-md-5 col-12">
                    <div class="picture-container">
                        <div class="picture">
                            <img src="https://stahnu.cz/data/stahnu.cz/appimages/54/54737.jpg" class="picture-src"
                                id="wizardPicturePreview" title="">
                            <input type="file" id="wizard-picture" class="">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 py-4">
                                <div class="input-container pt-2 mb-2">
                                    <input type="text" required="" style="width:100%;" />
                                    <label>First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 py-4">
                                <div class="input-container pt-2 mb-2">
                                    <input type="text" required="" style="width:100%;" />
                                    <label>Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 py-4">
                            <div class="input-container pt-2 mb-2">
                                <input type="number" required="" style="width:100%;" />
                                <label>Phone no.</label>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 py-4">
                            <div class="input-container pt-2 mb-2">
                                <input type="text" disabled required="" style="width:100%;" />
                                <label>Username</label>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 py-4">
                            <div class="input-container pt-2 mb-2">
                                <input type="email" disabled required="" style="width:100%;" />
                                <label>E-mail</label>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 py-4">
                            <div class="input-container pt-2 mb-2">
                                <input type="password" required="" style="width:100%;" />
                                <label>Password</label>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 py-4">
                            <div class="input-container pt-2 mb-2">
                                <input type="text" required="" style="width:100%;" />
                                <label>Address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-12 pro_bg">
                </div>
            </div>


            <p><input type="checkbox"> I accept all the Term & Conditions of E-pharmacy.</p>
            <button type="button" class="btn btn-outline-success">Update</button>
        </form>
    </div>
</div>
</div>
<!-- script for profile change -->
<script>
$(document).ready(function() {
    $("#wizard-picture").change(function() {
        readURL(this);
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>