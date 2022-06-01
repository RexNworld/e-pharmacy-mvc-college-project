<?php
    $sql = "SELECT * FROM `video` WHERE is_carousel='1'";
    $result = $conn->query($sql);
?>
<div class="container-fluid">
    <ul class="list-group">
    <?php
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-xl-5" style="padding: 0px;"><img src="<?php echo $row['banner']?>" style="width: 100%; height: 300px;"></div>
                            <div class="col">
                                <h1><?php echo $row['title']?></h1>
                                
                                <?php 
                            if($row['is_carousel'] > 0){
                                echo '<a class="btn btn-primary" href="http://localhost/call_api.php?id='. $row['id'].'&api_mode=carousel&isActive=0" type="button" id='. $row['id'].' type="button"  style="margin: 0 5px; border-radius: 5px;">Deactivate</a>';   
                            }else{
                                echo '<a class="btn btn-primary" href="http://localhost/call_api.php?id='. $row['id'].'&api_mode=carousel&isActive=1" type="button" id='. $row['id'].' type="button" style="margin: 0 5px; border-radius: 5px;">Activate</a>';
                            }?>
                             <br>
                             <form method="POST">
                               <label class="form-label">Order:</label>
                                <input class="form-control" type="number" id="<?php echo $row['id'] ?>" name="carouselOrder" min="0" max="8" step="1" required="" value="Enter Order" />
                                <input type="submit" name="submit" value="Done" class="btn btn-success btn-sm">
                        </form>
                        
                            </div>
                        </div>
                    </li>
                    <?php
                    if (isset($_POST['submit'])) {
                        $name = $_REQUEST['carouselOrder'];  

                    $sql = "UPDATE `video` SET carousel_order='$name' WHERE id=$row[id]";                                    
                        if($conn->query($sql) === TRUE)
                            echo '<script>alert("Data inserted")</script>';
                        else
                            echo '<script>alert("Error : in insertion data")</script>';
                                    }
                                    
                        ?>
        <?php } }?>
    </ul>
</div>

