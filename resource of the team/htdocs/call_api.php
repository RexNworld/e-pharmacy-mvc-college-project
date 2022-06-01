<?php
    require "db.php";
   
       if($_REQUEST['api_mode'] == "fetch"){
        if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
            $email = $_REQUEST['email'];
            $password = sha1($_REQUEST['password']);

            $sql = "SELECT * FROM `user` WHERE email_id = '$email'";
            
            $results = mysqli_query($conn,$sql);
            if(mysqli_num_rows($results) > 0){
                while($result = mysqli_fetch_assoc($results)){
                    $allData[] = $result;
                }
                if($allData[0]['password'] === $password){
                    if($allData[0]['subscribed'] > 0){
                            echo json_encode($allData);
                        }else{
                            echo json_encode(array("res" => "Subscription Failed"));
                        }
                }else{
                    echo json_encode(array("res" => "Password invalid"));
                }
            }else{
                echo json_encode(array("res" => "Email doesn't exists"));
            }
        }else{
            echo json_encode(array("res"=>"Invalid Parameters"));
        }
       }


    //    http://localhost/call_api.php?id='.$film_row['id'].'&api_mode=is_carousel&isActive=0

        if(isset($_REQUEST['api_mode'])){
            //is movie or videos is active or deactive
            if($_REQUEST['api_mode'] == "is_active"){
                $is_Active = $_REQUEST['isActive'];
                $id = $_REQUEST['id'];

                $sql = " UPDATE `video` SET active = '$is_Active' WHERE id = '$id'";

                if (mysqli_query($conn,$sql) === TRUE) {
                    echo "Record updated successfully";
                    header("Location: http://localhost/film_details?id=$id");
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
            }else{
                echo json_encode(array("res" => "invalid Parameters"));
            }

            // if carousel active or deactive
            if($_REQUEST['api_mode'] == "is_carousel"){
                $is_Active = $_REQUEST['isActive'];
                $id = $_REQUEST['id'];

                $sql = " UPDATE `video` SET is_carousel = '$is_Active' WHERE id = '$id'";

                if (mysqli_query($conn,$sql) === TRUE) {
                    echo "Record updated successfully";
                    header("Location: http://localhost/film_details?id=$id");
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
            }else{
                echo json_encode(array("res" => "invalid Parameters"));
            }

             // if carousel active or deactive for wbseries
             if($_REQUEST['api_mode'] == "webseries"){
                $is_Active = $_REQUEST['isActive'];
                $id = $_REQUEST['id'];

                $sql = " UPDATE `video` SET is_carousel = '$is_Active' WHERE id = '$id'";

                if (mysqli_query($conn,$sql) === TRUE) {
                    echo "Record updated successfully";
                    header("Location: http://localhost/webseries_details?id=$id");
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
            }else{
                echo json_encode(array("res" => "invalid Parameters"));
            }
             // if carousel active or deactive for carouselpage
             if($_REQUEST['api_mode'] == "carousel"){
                $is_Active = $_REQUEST['isActive'];
                $id = $_REQUEST['id'];

                $sql = " UPDATE `video` SET is_carousel = '$is_Active' WHERE id = '$id'";

                if (mysqli_query($conn,$sql) === TRUE) {
                    echo "Record updated successfully";
                    header("Location: http://localhost/carousel");
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
            }else{
                echo json_encode(array("res" => "invalid Parameters"));
            }

            // if upcoming active or deactive for upcoming page
            if($_REQUEST['api_mode'] == "upcoming"){
                $is_Active = $_REQUEST['isActive'];
                $id = $_REQUEST['id'];

                $sql = " UPDATE `upcoming` SET active = '$is_Active' WHERE id = '$id'";

                if (mysqli_query($conn,$sql) === TRUE) {
                    echo "Record updated successfully";
                    header("Location: http://localhost/upcoming");
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
            }else{
                echo json_encode(array("res" => "invalid Parameters"));
            }

             // if chennal active or deactive for live details page
             if($_REQUEST['api_mode'] == "live_details"){
                $is_Active = $_REQUEST['isActive'];
                $id = $_REQUEST['id'];

                $sql = " UPDATE `live` SET active = '$is_Active' WHERE id = '$id'";

                if (mysqli_query($conn,$sql) === TRUE) {
                    echo "Record updated successfully";
                    header("Location: http://localhost/live_details?id=$id");
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
            }else{
                echo json_encode(array("res" => "invalid Parameters"));
            }



            if($_REQUEST['api_mode'] == "delete"){
                // Movie or video delete part
                if($_REQUEST['module'] == "video"){
                    $is_Active = $_REQUEST['isActive'];
                    $id = $_REQUEST['id'];

                    $sql = " DELETE FROM `video` WHERE id = '$id'";
                    // UPDATE `video` SET active = '1' WHERE id = '1';

                    if (mysqli_query($conn,$sql) === TRUE) {
                        echo "Record Deleted successfully";
                        header("Location: http://localhost/films");
                    } else {
                    echo "Error Deleting record: " . $conn->error;
                    }
                }
                // if webseries delete karna ho 
                if($_REQUEST['module'] == "webseries"){
                    $is_Active = $_REQUEST['isActive'];
                    $id = $_REQUEST['id'];

                    $sql = " DELETE FROM `video` WHERE id = '$id'";
                    // UPDATE `video` SET active = '1' WHERE id = '1';

                    if (mysqli_query($conn,$sql) === TRUE) {
                        echo "Record Deleted successfully";
                        header("Location: http://localhost/webseries");
                    } else {
                    echo "Error Deleting record: " . $conn->error;
                    }
                }
                // if genres delete karna ho
                if($_REQUEST['module'] == "genres"){
                    $id = $_REQUEST['id'];

                    $sql = "DELETE FROM `genres` WHERE id = '$id'";
                    // UPDATE `video` SET active = '1' WHERE id = '1';

                    if (mysqli_query($conn,$sql) === TRUE) {
                        echo "Record Deleted successfully";
                        header("Location: http://localhost/genres");
                    } else {
                    echo "Error Deleting record: " . $conn->error;
                    }
                }
                //Delete from season Id
                if($_REQUEST['module'] == "season"){
                    $id = $_REQUEST['id'];
                    $parent_id=$_REQUEST['parent_id'];
                    $sql = "DELETE FROM `seasons` WHERE id = '$id'";
                    // UPDATE `video` SET active = '1' WHERE id = '1';

                    if (mysqli_query($conn,$sql) === TRUE) {
                        echo "Record Deleted successfully";
                        header("Location: http://localhost/webseries_details?id=$parent_id");
                    } else {
                    echo "Error Deleting record: " . $conn->error;
                    }
                }

                //Delete from episode
                if($_REQUEST['module'] == "episode"){
                    $id = $_REQUEST['id'];
                    $id=$_REQUEST['id'];
                    $sql = "DELETE FROM `episodes` WHERE id = '$id'";
                    // UPDATE `video` SET active = '1' WHERE id = '1';

                    if (mysqli_query($conn,$sql) === TRUE) {
                        echo "Record Deleted successfully";
                        header("Location: http://localhost/webseries");
                    } else {
                    echo "Error Deleting record: " . $conn->error;
                    }
                }

                // if upcoming delete karna ho 
                if($_REQUEST['module'] == "upcoming_del"){
                    $is_Active = $_REQUEST['isActive'];
                    $id = $_REQUEST['id'];

                    $sql = " DELETE FROM `upcoming` WHERE id = '$id'";
                    // UPDATE `video` SET active = '1' WHERE id = '1';

                    if (mysqli_query($conn,$sql) === TRUE) {
                        echo "Record Deleted successfully";
                        header("Location: http://localhost/upcoming");
                    } else {
                    echo "Error Deleting record: " . $conn->error;
                    }
                }

                // if live_details delete karna ho 
                if($_REQUEST['module'] == "live_del"){
                    $is_Active = $_REQUEST['isActive'];
                    $id = $_REQUEST['id'];

                    $sql = " DELETE FROM `live` WHERE id = '$id'";
                    // UPDATE `video` SET active = '1' WHERE id = '1';

                    if (mysqli_query($conn,$sql) === TRUE) {
                        echo "Record Deleted successfully";
                        header("Location: http://localhost/live");
                    } else {
                    echo "Error Deleting record: " . $conn->error;
                    }
                }
            }
        }else{
            echo json_encode(array("res" => "invalid Parameters"));
        }
?>