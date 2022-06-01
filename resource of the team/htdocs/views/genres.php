<?php
    $sql = "SELECT * FROM `genres`";
    $result = $conn->query($sql);
?>
<div class="container-fluid">
    <div class="btn-group" role="group"><a class="btn btn-primary" role="button" href="/add_genre" style="background: #ff0d45;border-width: 4px;border-color: #e0e0e0;">Add Genre</a></div>
</div>
<hr>
<section id="filmsSection">   
    <?php
        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
        ?>
        <div class="row g-0">
       <!-- <a href="/genres?id=" style="text-decoration:none;">       -->
        <div class=" col-6 col-md-3 col-lg-4 col-xl-3 col-xxl-2" style="padding: 10px;" id="<?php echo $row['id'] ?>" key="<?php echo $row['id'] ?>">
            <div class="container-fluid justify-content-center" style="background: #00091A;padding: 15px;text-align: center; border-radius: 12px; height: 120px; overflow: hidden; position: relative;">
                <h5 style="margin-top: 10px; color: #fff;"><?php echo $row['name'] ?></h5>         
               <a class="btn btn-danger" href="call_api.php?api_mode=delete&module=genres&id=<?php echo $row['id'] ?>" type="submit" name="deletes" style="position: absolute;right: 0;top:0;border-radius: 50px;height: 40px;"><i class="fas fa-trash"></i></a>
               </a>
            </div>
        </div>
         <!-- </a> -->
    </div>
    <?php }}
        ?>
</section>
