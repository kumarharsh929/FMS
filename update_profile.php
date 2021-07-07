<?php include 'header.php';?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Update Profile</h1>
                    </div>
                    <!-- Data Of Update Profile -->
                <div style="width:800px; margin-left: 200px; color: black;">
                    <div id='a'>
                    <form action="update_profile.php" method="post">
                        <h5> Basic Detail</h5>
                        <br/>
                        <?php
                            $conn = mysqli_connect("localhost", "root", "", "fms"); 
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                              }
                              
                              $sql = "SELECT * FROM register where name ='Rohit Kumar'";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                            ?>
                        <label style="margin-top:10px; margin-bottom:0px;">Name</label>
                        <br/>
                        <input type="text" placeholder="Agasthya Prasad" class="form-control" value="<?php echo $row['name'];?>" required="true" id="name" name="name" disabled>
                        <br/>
                        <label style="margin-top:10px; margin-bottom:0px;">Mobile-no</label>
                        <br/>
                        <input type="number" placeholder="9546125789" class="form-control" required="true" value="<?php echo $row['mobileno'];?>" id="mobileno" name="mobileno" disabled>
                        <br/>
                        <label style="margin-top:10px; margin-bottom:0px;">Email</label>
                        <br/>
                        <input type="email" placeholder="agasthyap@hotmail.com" class="form-control" value="<?php echo $row['email'];?>" required="true" name="email" id="email" disabled>
                        <br/>
                    </div>

                    <div id='b'>
                        <h5> Personal Detail </h5>
                        <br/>
                        <label style="margin-top:10px; margin-bottom:0px;">DOB</label>
                        <br/>
                        <input type="text" placeholder="18/07/2000" class="form-control"value="<?php echo $row['dob'];?>" name="dob" required="true" id="dob">
                        <br/>
                        <label style="margin-top:10px; margin-bottom:0px;">Address</label>
                        <br/>
                        <input type="text" placeholder="24*7 Church Road, Mombaya, India" value="<?php echo $row['address'];?>" name="address" class="form-control" required="true" id="address"/>
                        <br/>
                        <input type="submit" class="btn" style="background:rgb(0, 0,51); color:#fff;" id="submit" name="submit" value="Update">
                        </form>
                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
            <?php
                            }
                        } else {
                            echo "No results";
                          }
                          $conn->close();
            ?>
<?php
    if(isset($_POST['submit'])){
        $con = mysqli_connect('localhost', 'root', '', 'fms');
        $dob =  $_POST['dob'];
        $email = 'rk98356@gmail.com';
        echo $email;
		$address=$_POST['address'];
        $query="UPDATE register SET `dob`='".$dob."',`address`='".$address."' WHERE `email`='".$email."' ";
        $result = mysqli_query($con, $query);
        if($result){
            echo'<script> alert("User Details update successfully");</script>';
        }
        else{
            echo $query;
        }
    }
?>
<?php include 'footer.php';?>