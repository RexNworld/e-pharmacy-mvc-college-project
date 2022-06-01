
                <div class="container-fluid">
                    <form class="border rounded-pill" method="POST" name="AddGenreForm" id="AddGenreForm">
                        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                        <label class="form-label" style="font-weight: bold;">Name</label>
                        <input class="form-control" type="text" required name="name" placeholder="Genre name" style="border-width: 1px;border-color: rgb(51,12,38);"><br>
                        <input type="submit" name="submit" class="btn btn-primary d-block btn-user" style="margin: 10px 0;" value="upload" />
                    </form>
                </div>
            </div>

            <?php
            if (isset($_POST['submit'])) {
                $name = $_REQUEST['name'];  

                    $sql = "INSERT INTO `genres` (name) VALUES ('$name')";                                    
                        if($conn->query($sql) === TRUE)
                            echo '<script>alert("Data inserted")</script>';
                        else
                            echo '<script>alert("Error : in insertion data")</script>';
                                    }
                        ?>