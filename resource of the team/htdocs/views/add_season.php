<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT count(season_no) as season_count FROM `seasons` WHERE parent_id=$id";
   $results = $conn->query($sql);
   $result=$results->fetch_assoc();
?>
                <div class="container-fluid">
                    <span><b>Video ID:&nbsp;&nbsp;<?php echo $id?></b></span>
                    <hr>
                    <form class="border rounded-pill" method="POST" name="AddSeasonForm" id="AddSeasonForm">
                        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="webseries_id" value="<?php echo $id ?>" required>
                        <div class="row">
                            <!-- <div class="col">
                                <label class="form-label" style="font-weight: bold;">Season Number</label>
                            </div> -->
                            <div class="col">
                                <input  type="hidden" name="season_no" value="<?php echo ++$result['season_count']?>">
                                <label class="form-label" style="font-weight: bold;">Season Name</label>
                                <input class="form-control" type="text" required="" autofocus="" name="season_name" placeholder="ex: Season 1" style="border-width: 1px;border-color: rgb(51,12,38);">
                            </div>
                        </div>
                        <br>
                        <input type="submit" name="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="Add" />
                    </form>
                </div>
<?php }
else
    echo '<h1>Parameter mismatch</h1>';

if(isset($_POST['submit'])){
    $webseries_id=$_POST['webseries_id'];
    $season_no=$_POST['season_no'];
    $season_name=$_POST['season_name'];

    $sql="INSERT INTO `seasons` (parent_id,season_no,season_name)VALUES('$webseries_id','$season_no','$season_name')";
    if(!mysqli_query($conn,$sql))
        echo '<script>alert("Something Wrong please contact service provider!")</script>';
    
}
?>