<div class="container-fluid">
    <div class="btn-group" role="group"><a class="btn btn-primary" role="button" href="/add_channel" style="background: #07689f; border-width: 4px;border-color: #e0e0e0;">Add Channel</a></div>
</div>
<hr>
<section id="filmsSection">
<div class="row g-0">
<?php
            $sql = "SELECT * FROM `live`";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){

    
        echo '<div class="col-4 col-lg-3 col-xl-3 col-xxl-3" style="padding: 6px;" id="channel_">';
                      echo '<a href="/live_details?id='.$row['id'].'"><div class="container-fluid image-container" style="padding: 0;">';
                    if(!file_exists($row['channel_logo']))
                        echo '<img class="shadow-lg" style="width: 100%; height: fit-container;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1200px-No-Image-Placeholder.svg.png" loading="lazy">';
                    else
                        echo '<img class="shadow-lg" style="width: 100%; " src="'.$row['channel_logo'].'" loading="lazy">';
                    echo '<h4>'.$row['channel_name'].'</h4>';
                    echo '</div></a>';
            
        echo '</div>';
    }}?>
    </div>

</section>
