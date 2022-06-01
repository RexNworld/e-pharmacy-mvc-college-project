
    <div class="container-fluid">
        <form class="border rounded-pill" method="POST" enctype="multipart/form-data" name="AddUpcomingForm" id="AddUpcomingForm">
            <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
            <input type="hidden" name="upcoming" value="true">
            <label class="form-label" style="font-weight: bold;">Title</label>
            <input class="form-control" type="text" required autofocus="" name="title" placeholder="Upcoming film/webseries/music title" style="border-width: 1px;border-color: rgb(51,12,38);"><br>
            <label class="form-label" style="font-weight: bold;">Image URL (4:3)</label>
            <input class="form-control" type="file" required name="image" style="border-color: rgb(51,12,38);">
            <label class="form-label" style="font-weight: bold;">Release Date</label>
            <input class="form-control" type="datetime-local" required name="release_date" style="border-color: rgb(51,12,38);">
            <label class="form-label" style="font-weight: bold;">Trailer URL (optional)</label>
            <input class="form-control" type="file" name="trailer" style="border-color: rgb(51,12,38);">
            <input type="submit" name="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="upload" />
        </form>
    </div>
            
            <?php
                if(isset($_POST['submit'])){
                    
                    $title = $_REQUEST['title'];
                    $release_date = $_REQUEST['release_date'];

                //for poster upload
                $filename_img = $_FILES["image"]["name"];
                $tempname = $_FILES["image"]["tmp_name"];  
                $folder_img = "images/".$filename_img;
                move_uploaded_file($tempname, $folder_img);

                //for trailer upload
                $filename_trailer = $_FILES["trailer"]["name"];
                $tempname = $_FILES["trailer"]["tmp_name"];  
                // $folder_trailer = "".$filename_trailer;
                $ext = pathinfo($filename_trailer, PATHINFO_EXTENSION);
                $trailer_name = sha1($filename_trailer).".".$ext;
                
                if(move_uploaded_file($tempname, "videos/trailer/$trailer_name")){

                

            $sql="INSERT INTO `upcoming`(title,image,release_date,trailer) VALUES ('$title','$folder_img','$release_date','$trailer_name')";
            
            if(!mysqli_query($conn,$sql))
            {
                echo "data not insert";
                // echo $result = $conn->query(sql);
                // echo $result->error();
                
            }    
            else{
                echo "data insert";
            }
        }
    }
        ?>