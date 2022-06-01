<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
?>
    <div class="container-fluid">
        <span><b>Webseries ID:&nbsp;&nbsp;<?php echo $id?></b></span>
        <hr>
        <form class="border rounded-pill" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{vid}}" required>
            <input type="hidden" name="ep_id" value="<?php echo $id ?>" required>
            <label class="form-label" style="font-weight: bold;">Season Name</label>
            <select class="form-select" name="season_name" required="" style="border-color: rgb(51,12,38);">
                <optgroup label="Select Season">
                <?php
                
                $sql="SELECT * FROM `seasons` WHERE parent_id=$id";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){                      
                       echo '<option value="'.$row['season_no'].'">'.$row['season_name'].'</option>';
                    }
                }else
                    echo '<b>No Season Found</b>';
                ?>
                </optgroup>
            </select>
            <br>
            <div class="row">
                <div class="col">
                    <label class="form-label" style="font-weight: bold;">Episode Number</label>
                    <input class="form-control" type="number" min="1" required="" autofocus="" name="episode_no" placeholder="ex: 1" style="border-width: 1px;border-color: rgb(51,12,38);">
                </div>
                <div class="col">
                    <label class="form-label" style="font-weight: bold;">Episode Name</label>
                    <input class="form-control" type="text" required="" autofocus="" name="episode_name" placeholder="ex: Episode 1" style="border-width: 1px;border-color: rgb(51,12,38);">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label class="form-label" style="font-weight: bold;">Duration</label>
                    <input class="form-control" type="time" name="duration" placeholder="00h 00m 00s" required="" style="border-color: rgb(51,12,38);">
                </div>
                <div class="col">
                    <label class="form-label" style="font-weight: bold;">Episode Description</label>
                    <input class="form-control" type="text" required name="epsode_desc" style="border-color: rgb(51,12,38);">
                </div>
            </div>
            <br>
            <label class="form-label" style="font-weight: bold;">thumbnail (320px X 240px)</label>
            <input class="form-control" type="file" name="thumbnail" id="formFileMultiple" multiple>
            <label class="form-label" style="font-weight: bold;">Video</label>
            <div class="input-group mb-3">
            <input class="form-control" type="file" name="Video" id="formFileMultiple" multiple>
            </div>
            
            <input type="submit" name="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="upload" />
        </form>
    </div>
</div>
<?php }
else
    echo '<h1>Parameter mismatch</h1>';
?>

<?php
if(isset($_POST['submit'])){
    $ep_id=$_POST['ep_id'];
    $season_name=$_POST['season_name'];
    $episode_no=$_POST['episode_no'];
    $episode_name=$_POST['episode_name'];
    $duration=$_POST['duration'];
    $epsode_desc=$_POST['epsode_desc'];

    //for Episode upload
    $filename_ep=$_FILES["Video"]["name"];
    $tempname=$_FILES["Video"]["tmp_name"];
    $folder_ep= "videos/webseries/".$filename_ep;
    move_uploaded_file($tempname, $folder_ep);
    //for poster upload
    $filename_epimg = $_FILES["thumbnail"]["name"];
    $tempname = $_FILES["thumbnail"]["tmp_name"];  
    $folder_epimg = "images/".$filename_epimg;
    move_uploaded_file($tempname, $folder_epimg);
    $epsode_desc=str_replace("'", '‘',$epsode_desc);
    $episode_name=str_replace("'", '‘',$episode_name);
    $sql="INSERT INTO `episodes` (season_id,season_name,episode_no,episode_name,duration,episode_description,video,thumbnail)VALUES('$ep_id','$season_name','$episode_no','$episode_name','$duration','$epsode_desc','$folder_ep','$folder_epimg')";
    if(!mysqli_query($conn,$sql))
    {
        echo "data not insert";
    }    
    else{
        echo "data insert";
    }
}
?>