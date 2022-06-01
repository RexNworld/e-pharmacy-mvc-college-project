
                <div class="container-fluid">
                    <form class="border rounded-pill" method="POST" enctype="multipart/form-data" name="AddChannelForm" id="AddChannelForm">
                        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                        <label class="form-label" style="font-weight: bold;">Channel Name</label><input class="form-control" type="text" required="" autofocus="" name="channel_name" placeholder="Name of the live channel" style="border-width: 1px;border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Channel Logo</label><input class="form-control" type="file" required="" autofocus="" name="channel_logo" placeholder="Url of the channel logo" style="border-width: 1px;border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Live Url</label><input class="form-control" type="url" required="" autofocus="" name="live_url" placeholder="" style="border-width: 1px;border-color: rgb(51,12,38);">
                        <input type="submit" name="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="upload" />
                    </form>
                </div>
            </div>
            <?php
                if(isset($_POST['submit'])){
                    $channel_name = $_REQUEST['channel_name'];
                    $live_url = $_REQUEST['live_url'];
                    
                //for poster upload
                $filename_img = $_FILES["channel_logo"]["name"];
                $tempname = $_FILES["channel_logo"]["tmp_name"];  
                $folder_img = "images/".$filename_img;
                move_uploaded_file($tempname, $folder_img);

                $sql="INSERT INTO `live`(channel_name,live_url,channel_logo) VALUES('$channel_name','$live_url','$folder_img ')";
                if(!mysqli_query($conn,$sql))
                {
                    echo "data not insert";
                }    
                else{
                    echo "data insert";
                }
            }
        ?>
