<?php 

    $web_id = $_GET['id'];
    $sql = "SELECT * FROM `video` where id=$web_id" ;
    $result = $conn->query($sql);
    $web_row = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $web_row = $row;
        }
    }
?>
                <div class="container-fluid">
                    <form class="border rounded-pill" method="POST" enctype="multipart/form-data" name="EditWebseriesForm" id="EditWebseriesForm">
                        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{vsnapshot.id}}" required>
                        <label class="form-label" style="font-weight: bold;">Title</label><input class="form-control" type="text" required="" autofocus="" name="title" placeholder="Film Title" value="<?php echo $web_row['title']?>" style="border-width: 1px;border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Storyline</label><textarea class="form-control" name="storyline" placeholder="Brief story of the film..." value="<?php echo $web_row['storyline']?>" required="" rows="3" style="border-width: 1px;border-color: rgb(51,12,38);"><?php echo $web_row['storyline']?></textarea>
            
                        <div class="row">
                            <div class="col"><label class="form-label" style="font-weight: bold;">seasons</label><input class="form-control" type="text" name="seasons" placeholder="00h 00m 00s" required value="<?php echo $web_row['seasons']?>" style="border-color: rgb(51,12,38);"></div>
                            <div class="col"><label class="form-label" style="font-weight: bold;">Content Rating</label><select class="form-select" name="content_rating" required value="<?php echo $web_row['content_rating']?>" style="border-color: rgb(51,12,38);">
                                    <optgroup label="Select Rating">
                                    <option value="3+">3+</option>
                                    <option value="6+">6+</option>
                                    <option value="9+">9+</option>
                                    <option value="12+">12+</option>
                                    <option value="16+">16+</option>
                                    <option value="18+">18+</option>
                                        ?>
                                    </optgroup>
                                </select></div>
                            <div class="col"><label class="form-label" style="font-weight: bold;">Publish Year</label><input class="form-control" type="text" name="publish" placeholder="2021" required value="<?php echo $web_row['publish_year']?>" style="border-color: rgb(51,12,38);"></div>
                        </div>
                        <div class="row">
                            
                            <div class="col"><label class="form-label" style="font-weight: bold;">Genres</label>
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
                        <label class="form-label" style="font-weight: bold;">Poster URL (240px X 320px)</label>
                        <input class="form-control" type="file" name="poster" value="<?php echo $web_row['poster']?>" style="border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Banner URL (360px X 240px)</label>
                        <input class="form-control" type="file" name="banner" value="<?php echo $web_row['banner']?>" style="border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Trailer URL</label>
                        <input class="form-control" type="file" name="trailer" value="<?php echo $web_row['trailer']?>" style="border-color: rgb(51,12,38);">
                        <input type="submit" name="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="upload" />
                    </form>
                </div>
            
            <?php
            if(isset($_POST['submit'])){
                $title = $_REQUEST['title'];
                $storyline = $_REQUEST['storyline'];
                $seasons = $_REQUEST['seasons'];
                $rating = $_REQUEST['content_rating'];
                $publice_year = $_REQUEST['publish'];
                // $genres= $_REQUEST['genres'];
                $genres = implode(",",$_REQUEST['genres']);
                
                //for update poster
                $filename_poster= $_FILES["poster"]["name"];
                $tempname = $_FILES["poster"]["tmp_name"];  
                $folder_poster= "images/".$filename_poster;
                move_uploaded_file($tempname, $folder_poster);

                //for update banner
                $filename_banner= $_FILES["banner"]["name"];
                $tempname = $_FILES["banner"]["tmp_name"];  
                $folder_banner= "images/".$filename_banner;
                move_uploaded_file($tempname, $folder_banner);

                //for update trailer
                $filename_trailer= $_FILES["trailer"]["name"];
                $tempname = $_FILES["trailer"]["tmp_name"];  
                $folder_trailer= "videos/trailer/".$filename_trailer;
                move_uploaded_file($tempname, $folder_trailer);
                
                
                $sql="UPDATE `video` SET title='$title',storyline='$storyline',seasons='$seasons',content_rating='$rating',publish_year='$publice_year',genres='$genres',poster='$folder_poster',banner='$folder_banner',trailer='$folder_trailer' where id=$web_id";
                if($conn->query($sql))
                {
                    echo '<script>alert("Update data");</script>';
                    
                }    
                else{
                    echo '<script>alert("Error : in Update data")</script>';
                }
                
            }

            ?>
            