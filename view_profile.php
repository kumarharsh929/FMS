<?php include 'header.php';?>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">My Account</h1>
                    </div>
                    <!-- Data Of View Profile -->
                <div style="width:800px; margin-left: 200px;color: black;">
                    <div id='a'>
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
                        <input type="text" placeholder="Agasthya Prasad" value="<?php echo $row['name'];?>"class="form-control" required="true" id="name" disabled>
                        <br/>
                        <label style="margin-top:10px; margin-bottom:0px;">Mobile-no</label>
                        <br/>
                        <input type="number" placeholder="9546125789" class="form-control"value="<?php echo $row['mobileno'];?>" required="true" id="mobileno" disabled>
                        <br/>
                        <label style="margin-top:10px; margin-bottom:0px;">Email</label>
                        <br/>
                        <input type="email" placeholder="agasthyap@hotmail.com" class="form-control"value="<?php echo $row['email'];?>" required="true" id="email" disabled>
                        <br/>
                    </div>

                    <div id='b'>
                        <h5> Personal Detail </h5>
                        <br/>
                        <label style="margin-top:10px; margin-bottom:0px;">DOB</label>
                        <br/>
                        <input type="text" placeholder="18/07/2000" class="form-control" value="<?php echo $row['dob'];?>"required="true" id="dob" disabled>
                        <br/>
                        <label style="margin-top:10px; margin-bottom:0px;">Address</label>
                        <br/>
                        <input type="text" placeholder="24*7 Church Road, Mombaya, India" class="form-control" value="<?php echo $row['address'];?>" required="true" id="address" disabled/>
                        <br/>
                    </div>
                </div>
                    <?php
                            }
                        } else {
                            echo "No results";
                          }
                          $conn->close();
                            ?>
<?php include 'footer.php';?>