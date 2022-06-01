<?php
    $web_id = $_REQUEST['id'];
    $sql = "SELECT * FROM `video` WHERE id = $web_id";
    $result = $conn->query($sql);
    $web_row = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $web_row = $row;
        }
    }
    ?>
<div class="container-fluid">
    <h3 class="text-dark mb-4"><?php echo $web_row['title']?></h3>
    <p><?php echo $web_row['view']?> Views | <?php echo $web_row['likes']?> Likes | <?php echo $web_row['dislike']?> Dislikes</p>
    <div class="card shadow">
        <div class="card-header py-3"><span><b>ID:&nbsp;&nbsp;<?php echo $web_row['id']?></b></span></div>
        <div class="card-body">
            <div class="btn-group" role="group">
            <?php 
                if($web_row['active'] > 0)
                    echo '<a class="btn btn-primary" href="http://localhost/call_api.php?id='.$web_row['id'].'&api_mode=is_active&isActive=0" type="button" id='.$web_row['id'].'  style="margin: 0 5px; border-radius: 5px;">Deactivate</a>';
                else
                    echo '<a class="btn btn-primary" href="http://localhost/call_api.php?id='.$web_row['id'].'&api_mode=is_active&isActive=1" type="button" id='.$web_row['id'].' style="margin: 0 5px; border-radius: 5px;">Activate</a>';
                ?>
                <a class="btn btn-primary" type="button" href="/edit_webseries?id=<?php echo $web_row['id']?>" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Edit</a>
                <!-- <a class="btn btn-primary" type="button" href="/casts/{{snapshot.id}}" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Cast</a>
                <a class="btn btn-primary" type="button" href="/crews/{{snapshot.id}}" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Crew</a> -->
                <?php 
                    if($web_row['is_carousel']>0)
                        echo '<a href="http://localhost/call_api.php?id='.$web_row['id'].'&api_mode=webseries&isActive=0" class="btn btn-info" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Added to Carousel</a>';
                    else
                        echo '<a href="http://localhost/call_api.php?id='.$web_row['id'].'&api_mode=webseries&isActive=1" class="btn btn-info" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Add to Carousel</a>';
                ?>
                <form method="post">
                    <?php
                echo '<a href="http://localhost/call_api.php?id='.$web_row['id'].'&api_mode=delete&module=webseries" class="btn btn-info" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Delete</a>';

                ?>
                </form>
                </div>
            <hr>
            <p><?php echo $web_row['storyline'] ?></p>
        </div>
    </div>
    <div class="card shadow" style="margin-top: 20px;">
        <div class="card-header py-3">
            <a class="btn btn-primary" type="button" href="/add_season?id=<?php echo $web_row['id'] ?>" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Add Season</a>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <?php
                 $id=$web_row['id'];
                $sql="SELECT * FROM `seasons` WHERE parent_id=$id";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){                      
                ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold"><?php echo $row['season_no'].". ".$row['season_name']?></div>
                    </div>
                    <a href="call_api.php?api_mode=delete&module=season&parent_id=<?php echo $row['parent_id'] ?>&id=<?php echo $row['id'] ?>" class="btn btn-light" type="button" ><i style="color: red;" class="fas fa-trash"></i></a>
                </li>
                <?php }}
                else
                  echo '<div class="fw-bold">No Season Avilable</div>';
                  ?>
            </ul>
        </div>
    </div>
    <div class="card shadow" style="margin-top: 20px;">
        <div class="card-header py-3">
            <a class="btn btn-primary" type="button" href="/add_episode?id=<?php echo $web_row['id'] ?>" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Add Episode</a>
        </div>
        <div class="card-body">
            
            <?php
                 $id=$web_row['id'];
                $sql="SELECT * FROM `episodes` WHERE season_id=$id ORDER BY season_name";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){                      
                ?>
                <ul class="list-group">
                <li class="list-group-item list-group-item-action align-items-start">
                <h4 class="mb-1 fw-bold">Season #<?php echo $row['season_name'] ?></h4>
                    <div class="d-flex w-100 justify-content-between">
                        <img src="<?php echo $row['thumbnail'] ?>" width="150" />
                        <div class="ms-2 me-auto">
                            <h5 class="mb-1 fw-bold"><?php echo $row['episode_name'] ?></h5>
                            <p class="mb-1">Episode Desc: <?php echo $row['episode_description'] ?></p>
                            <small>Duration: <?php echo $row['duration'] ?></small>
                        </div>
                    
                        <a href="call_api.php?api_mode=delete&module=episode&id=<?php echo $row['id'] ?>" class="btn btn-light" type="button" ><i style="color: red;" class="fas fa-trash"></i></a>
                    </div>
                    
                </li>
                <?php }}
                else
                  echo '<div class="fw-bold">No Season Avilable</div>';
                  ?>
            </ul>
        </div>
    </div>
 
</div>
