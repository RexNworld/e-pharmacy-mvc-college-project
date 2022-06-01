<?php
    $sql = "SELECT * FROM `video` WHERE types='movie'";
    $result = $conn->query($sql);
?>
    <div class="container-fluid">
    <div class="btn-group" role="group"><a class="btn btn-primary" role="button" href="/add_film" style="background: #07689f; border-width: 4px;border-color: #e0e0e0;">Add Film</a></div>
</div>
<hr>

<section id="filmsSection">
    
    <div class="row g-0">
    
        <div class="col-6 col-lg-3 col-xl-3 col-xxl-2" style="padding: 6px;" >
            <?php
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo '<a href="/film_details?id='.$row['id'].'"><div class="container-fluid image-container" style="padding: 0;">';
                    echo '<img class="shadow-lg" style="width: 100%; height: fit-content;" src="'.$row['poster'].'" loading="lazy">';
                    echo '<h4 class="text-center">'.$row['title'].'</h4>';
                    echo '</a>';
                }
            }else
                {
                echo '<img class="shadow-lg" style="width: 100%; height: fit-content;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1200px-No-Image-Placeholder.svg.png" loading="lazy">';
                echo '<h4>Title not Available</h4>';
            }
                  
                  
        echo '</div>';
        echo '</div>';
    ?> 
</section>
