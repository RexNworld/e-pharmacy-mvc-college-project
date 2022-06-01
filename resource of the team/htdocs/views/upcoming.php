<?php
    $sql = "SELECT * FROM `upcoming`";
    $result = $conn->query($sql);
    $film_row = array();
        ?>
<link rel="stylesheet" href="./assets/css/Bold-BS4-Cards-with-Hover-Effect-50.css">
<div class="container-fluid">
    <div class="btn-group" role="group"><a class="btn btn-primary" role="button" href="/add_upcoming" style="background: #07689f;border-width: 4px;border-color: #e0e0e0;">Add Upcoming</a></div>
</div>
<hr>
<section>
    <div class="row">
        <?php
         if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
           ?>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4" style="padding: 10px;" id="upcoming_{{u.id}}">
            <div class="box">
                <div class="box-img"><img src="<?php echo $row['image'] ?>"></div>
                <div class="box-content">
                    <h4 class="title"><?php echo $row['title'] ?></h4>
                    <p class="description">Release Date: <?php echo $row['release_date'] ?></p>
                     <div class="btn-group" role="group">
                     <?php 
                            if($row['active'] > 0){
                                echo '<a class="btn btn-primary" href="http://localhost/call_api.php?id='. $row['id'].'&api_mode=upcoming&isActive=0" type="button" id='. $row['id'].' type="button"  style="margin: 0 5px; border-radius: 5px;">Deactivate</a>';   
                            }else{
                                echo '<a class="btn btn-primary" href="http://localhost/call_api.php?id='. $row['id'].'&api_mode=upcoming&isActive=1" type="button" id='. $row['id'].' type="button" style="margin: 0 5px; border-radius: 5px;">Activate</a>';
                            }?>
                <a class="btn btn-primary" type="button" href="/edit_upcoming?id=<?php echo $row['id']?>" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Edit</a>
                         <?php
                        echo '<a href="http://localhost/call_api.php?id='. $row['id'].'&api_mode=delete&module=upcoming_del" class="btn btn-info bg-danger" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Delete</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php  }   
            }?>
    </div>
</section>