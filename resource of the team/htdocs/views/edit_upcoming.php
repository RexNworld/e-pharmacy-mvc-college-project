<?php 

    $upcoming_id = $_GET['id'];
    $sql = "SELECT * FROM `upcoming` where id=$upcoming_id" ;
    $result = $conn->query($sql);
    $film_row = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $film_row = $row;
        }
    }
?>
                <div class="container-fluid">
                    <form class="border rounded-pill" method="POST" enctype="multipart/form-data" name="EditUpcomingForm" id="EditUpcomingForm">
                        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ uSnapshots.id }}">
                        <label class="form-label" style="font-weight: bold;">Title</label>
                        <input class="form-control" type="text" required value="<?php echo $film_row['title'] ?>" autofocus name="title" placeholder="Upcoming film/webseries/music title" style="border-width: 1px;border-color: rgb(51,12,38);"><br>
                        <label class="form-label" style="font-weight: bold;">Image URL (4:3)</label>
                        <input class="form-control" type="file" required name="poster" value="<?php echo $film_row['image'] ?>" style="border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Release Date</label>
                        <input class="form-control" type="datetime-local" required name="release_date" value="<?php echo $film_row['release_date'] ?>" style="border-color: rgb(51,12,38);">
                        <label class="form-label" style="font-weight: bold;">Trailer URL (optional)</label>
                        <input class="form-control" type="file" name="trailer" value="<?php echo $film_row['trailer'] ?>" style="border-color: rgb(51,12,38);">
                        <input type="submit" name="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="upload" />
                    </form>
                </div>
            </div>
            <?php
if(isset($_POST['submit'])){
    $title = $_REQUEST['title'];
    $release_date = $_REQUEST['release_date'];
    //for update poster
    $filename_poster= $_FILES["poster"]["name"];
    $tempname = $_FILES["poster"]["tmp_name"];  
    $folder_poster= "images/".$filename_poster;
    move_uploaded_file($tempname, $folder_poster);

    //for update trailer
    $filename_trailer= $_FILES["trailer"]["name"];
    $tempname = $_FILES["trailer"]["tmp_name"];  
    $folder_trailer= "videos/trailer/".$filename_trailer;
    move_uploaded_file($tempname, $folder_trailer);

    $sql="UPDATE `upcoming` SET title='$title',release_date='$release_date',image='$folder_poster',trailer='$folder_trailer' where id=$upcoming_id";
    if($conn->query($sql))
    {
        echo '<script>alert("Update data");</script>';
        
    }    
    else{
        echo '<script>alert("Error : in Update data")</script>';
    }
    
}

?>