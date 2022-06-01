<?php 

    $live_id = $_GET['id'];
    $sql = "SELECT * FROM `live` where id=$live_id" ;
    $result = $conn->query($sql);
    $live_row = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $live_row = $row;
        }
    }
?>
                <div class="container-fluid">
                    <form class="border rounded-pill" method="POST" enctype="multipart/form-data" name="EditChannelForm" id="EditChannelForm">
                        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="cid" value="{{ csnapshot.id }}">
                        <label class="form-label" style="font-weight: bold;">Channel Name</label><input class="form-control" type="text"  autofocus="" value="<?php echo $live_row['channel_name']?>" name="channel_name" placeholder="Name of the live channel" style="border-width: 1px;border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Channel Logo</label><input class="form-control" type="file"  autofocus="" value="<?php echo $live_row['channel_logo']?>" name="channel_logo" placeholder="Url of the channel logo" style="border-width: 1px;border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Live Url</label><input class="form-control" type="url"  autofocus="" value="<?php echo $live_row['live_url']?>" name="live_url" placeholder="" style="border-width: 1px;border-color: rgb(51,12,38);">
                        <input type="submit" name="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="update" />
                    </form>
                </div>
            </div>
            
                <?php
if(isset($_POST['submit'])){
    $channel_name = $_REQUEST['channel_name'];
    $live_url = $_REQUEST['live_url'];
    //for update logo
    $filename_poster= $_FILES["channel_logo"]["name"];
    $tempname = $_FILES["channel_logo"]["tmp_name"];  
    $folder_poster= "images/".$filename_poster;
    move_uploaded_file($tempname, $folder_poster);


    $sql="UPDATE `live` SET channel_name='$channel_name',live_url='$live_url',channel_logo='$folder_poster' where id=$live_id";
    if($conn->query($sql))
    {
        echo '<script>alert("Update data");</script>';
        
    }    
    else{
        echo '<script>alert("Error : in Update data")</script>';
    }
    
}

?>
