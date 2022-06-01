<?php
    $film_id = $_REQUEST['id'];
    $sql = "SELECT * FROM `video` WHERE id = $film_id";
    $result = $conn->query($sql);
    $film_row = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $film_row = $row;
        }
    }
    // echo print_r($film_row);
?>
<div class="container-fluid">
    <h3 class="text-dark mb-4"><?php echo $film_row['title']?></h3>
    <p><?php echo $film_row['view']?> Views | <?php echo $film_row['likes']?> Likes | <?php echo $film_row['dislike']?> Dislikes</p>
    <div class="card shadow">
        <div class="card-header py-3"><span><b>ID:&nbsp;&nbsp;<?php echo $film_row['id']?></b></span></div>
        <div class="card-body">
            <div class="btn-group" role="group">
                <?php 
                if($film_row['active'] > 0)
                    echo '<a class="btn btn-primary" href="http://localhost/call_api.php?id='.$film_row['id'].'&api_mode=is_active&isActive=0" type="button" id='.$film_row['id'].'  style="margin: 0 5px; border-radius: 5px;">Deactivate</a>';
                else
                    echo '<a class="btn btn-primary" href="http://localhost/call_api.php?id='.$film_row['id'].'&api_mode=is_active&isActive=1" type="button" id='.$film_row['id'].' style="margin: 0 5px; border-radius: 5px;">Activate</a>';
                ?>
                
                <a class="btn btn-primary" type="button" href="/edit_film?id=<?php echo $film_row['id']?>" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Edit</a>
                <!-- <a class="btn btn-primary" type="button" href="/casts?id=<?php echo $film_row['id']?>" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Cast</a>
                <a class="btn btn-primary" type="button" href="/crews>id=<?php echo $film_row['id']?>" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Crew</a> -->

                <?php 
                    if($film_row['is_carousel']>0)
                        echo '<a href="http://localhost/call_api.php?id='.$film_row['id'].'&api_mode=is_carousel&isActive=0" class="btn btn-info" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Added to Carousel</a>';
                    else
                        echo '<a href="http://localhost/call_api.php?id='.$film_row['id'].'&api_mode=is_carousel&isActive=1" class="btn btn-info" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Add to Carousel</a>';
                ?>
                <form method="post">
                    <?php
                echo '<a href="http://localhost/call_api.php?id='.$film_row['id'].'&api_mode=delete&module=video" class="btn btn-info" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Delete</a>';

                ?>
                </form>
                </div>
            <hr>
            <p><?php echo $film_row['storyline'] ?></p> 
        </div>
    </div>
</div>


