
<div class="container-fluid">
<form class="border rounded-pill" method="POST" enctype="multipart/form-data" name="AddWebseriesForm" id="AddWebseriesForm">
<input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
<label class="form-label" style="font-weight: bold;">Title</label><input class="form-control" type="text" required="" autofocus="" name="title" placeholder="Webseries Title" style="border-width: 1px;border-color: rgb(51,12,38);">
<label class="form-label" style="font-weight: bold;">Storyline</label><textarea class="form-control" name="storyline" placeholder="Brief story of the webseries..." required="" rows="3" style="border-width: 1px;border-color: rgb(51,12,38);"></textarea>

<div class="row">
    <div class="col"><label class="form-label" style="font-weight: bold;">type</label><input class="form-control" type="text" name="types" value="webseries"  required="" style="border-color: rgb(51,12,38);"></div>
    <div class="col"><label class="form-label" style="font-weight: bold;">Season</label><input class="form-control" type="text" name="season" placeholder="Season 1.." required="" style="border-color: rgb(51,12,38);"></div>
    <div class="col"><label class="form-label" style="font-weight: bold;">Content Rating</label><select class="form-select" name="content_rating" required="" style="border-color: rgb(51,12,38);">
            <optgroup label="Select Rating">
            <option value="6+">3+</option>
            <option value="9+">6+</option>
            <option value="12+">9+</option>
            <option value="16+">12+</option>
            <option value="18+">16+</option>
            <option value="3+">18+</option>
            </optgroup>
        </select></div>
    <div class="col"><label class="form-label" style="font-weight: bold;">Publish Year</label><input class="form-control" type="text" name="publish" placeholder="2021" required="" style="border-color: rgb(51,12,38);"></div>
</div>
<div class="row">
    
<div class="col">
    <label class="form-label" style="font-weight: bold;">Genres</label>
    <select class="form-select" multiple required size="6" name="genres[]" style="border-color: rgb(51,12,38);">
            <optgroup selected label="Select genres">
                <?php
                $sql = "SELECT * FROM `genres`";
                $result = $conn->query($sql);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        // $result = $row;
                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                    }
                }
                else{
                    echo '<option disabled>There is no genres avialabled please add genres first</option>';
                }
                ?>
            </optgroup>
        </select></div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" style="font-weight: bold;">Language</label>
                <input class="form-control" type="text" name="language" id="formFileMultiple" multiple></div>
            <div class="col">
                <label class="form-label" style="font-weight: bold;">Poster</label>
                <input class="form-control" type="file" name="poster" id="formFileMultiple" multiple>
            </div>
            <div class="col">
                <label class="form-label" style="font-weight: bold;">Banner</label>
                <input class="form-control" type="file" name="banner" id="formFileMultiple" multiple>
            </div>
                <div class="col"><label class="form-label" style="font-weight: bold;">Series</label>
                <input class="form-control" type="file" name="file2" id="formFileMultiple" multiple></div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="upload" />
    </form>
    </div>

            <?php
                if(isset($_POST['submit'])){
                    $types = $_REQUEST['types'];
                    $title = $_REQUEST['title'];
                    $storyline = $_REQUEST['storyline'];
                    $season = $_REQUEST['season'];
                    $rating = $_REQUEST['content_rating'];
                    $publice_year = $_REQUEST['publish'];
                    // $genres = $_REQUEST['genres'];
                    $language = $_REQUEST['language'];
                   
                $genres = implode(",",$_REQUEST['genres']);

                //for weseries upload
                $filename=$_FILES["file2"]["name"];
                $tempname=$_FILES["file2"]["tmp_name"];
                $folder_webseries= "videos/webseries/".$filename;
                move_uploaded_file($tempname, $folder_webseries);

                //for poster upload
                $filename_img = $_FILES["poster"]["name"];
                $tempname = $_FILES["poster"]["tmp_name"];  
                $folder_img = "images/".$filename_img;
                move_uploaded_file($tempname, $folder_img);

                //for banner upload
                $filename_banner= $_FILES["banner"]["name"];
                $tempname = $_FILES["banner"]["tmp_name"];  
                $folder_banner= "images/".$filename_banner;
                move_uploaded_file($tempname, $folder_banner);
                
                $title=str_replace("'", '‘',$title);
                $storyline=str_replace("'", '‘',$storyline);
                $sql="INSERT INTO `video`(title,storyline,seasons,content_rating,publish_year,genres,languages,poster,video,banner,types)
                VALUES('$title','$storyline','$season','$rating','$publice_year','$genres','$language','$folder_img','$folder_webseries','$folder_banner','webseries')";

            if(!mysqli_query($conn,$sql))
            {
                echo '<script>alert("Something wrong...")</script>';
            }    
        }
        ?>