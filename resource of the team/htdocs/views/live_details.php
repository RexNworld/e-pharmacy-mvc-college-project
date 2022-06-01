<?php
if(isset($_GET['id'])){
    $live_id = $_GET['id'];
    $sql = "SELECT * FROM `live` WHERE id = $live_id";
    $result = $conn->query($sql);
    $live_row = array();
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $live_row = $row;
        }
}
?>
<div class="container-fluid">
    <h3 class="text-dark mb-4"><?php echo $live_row['channel_name']?></h3>
    <p><?php echo $live_row['view']?> Views</p>
    <div class="card shadow">
        <div class="card-header py-3"><?php echo $live_row['id']?></b></span></div>
        <div class="card-body">
            <div class="btn-group" role="group">
            <?php 
                if($live_row['active']>0)
                    echo '<a href="http://localhost/call_api.php?id='.$live_row['id'].'&api_mode=live_details&isActive=0" class="btn btn-info" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Deactivate</a>';
                else
                    echo '<a href="http://localhost/call_api.php?id='.$live_row['id'].'&api_mode=live_details&isActive=1" class="btn btn-info" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Activate</a>';
            ?>
                <a class="btn btn-primary" type="button" href="/edit_channel?id=<?php echo $live_row['id']?>" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Edit</a>
                <?php
                echo '<a href="http://localhost/call_api.php?id='.$live_row['id'].'&api_mode=delete&module=live_del" class="btn btn-outline-danger" type="button" style="margin: 0 5px;background: rgb(255,255,255);color: rgb(0,0,0);border-radius: 5px;">Delete</a>';
                ?>
            </div>
           
        </div>
    </div>
</div>
<?php
}else
 echo json_encode(array('Error' => 'Parameter Missmatch'));
