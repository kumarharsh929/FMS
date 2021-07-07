<?php include 'header.php';?>  
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Contact Us</h1>
                    </div>
                    <form action="contact.php" method="post" style="font-family: Arial, Helvetica, sans-serif;font-size:12px;" autocomplete="off">
                        <fieldset style="color: black;margin-left: 350px;width: 500px;">
                            <div style="background-color:lightsteelblue;">
                                <br/><h3 style="text-align: center;">Contact Us</h3>
                                <h6 style="text-align: center;">Please fill this form in a decent manner!</h6><br/>
                            </div><br/><br/>
                            <table style="margin-left: 50px;font-size: 15px;">

                                <tr>

                                    <td><b>Name<span style="color:red;">*</b></span><br/>&nbsp;</td>

                                    <td><input class="cus" required="true" placeholder="Your Name.." onkeypress="rem()" type="text" id="ename" name="ename"/><br/>&nbsp;</td>

                                </tr>

                                <tr>

                                    <td><b>Contact<span style="color:red;">*</b></span><br/>&nbsp;</td>

                                    <td><input class="cus" required="true" placeholder="Mobile No.." onkeydown="rem()" type="tel" id="emob" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="emob"/><br/>&nbsp;</td>

                                </tr>

                                <tr>

                                    <td><b>Email<span style="color:red;">*</b></span><br/>&nbsp;</td>

                                    <td><input class="cus" required="true" placeholder="you@example.org" onkeypress="rem()" type="email" id="email" name="email"/><br/>&nbsp;</td>

                                </tr>
                                <tr>

                                    <td><b>Message<span style="color:red;">*</b></span><br/>&nbsp;</td>

                                    <td><textarea class="cus" required="true" placeholder="Comments.." onkeypress="rem()" name="bio" style="height: 50px;" id="bio"></textarea><br/>&nbsp;</td>

                                </tr>

                                <tr><td colspan="2"><span id="errormsg" style="color:red;"></span></td></tr>

                                <tr><td></td><td><input type="submit" name="submit" value="Submit" style="border-radius:7px;background-color:dodgerblue;width:100px;height:30px;margin-left:250px;" onclick="chk()"/><br/>&nbsp;</td></tr>

                            </table>
                        </fieldset>
                    </form>
                </div>
<script>
        function chk()
        {
            var phno = /^\d{10}$/;
            var en = document.getElementById('ename').value;
            var mob = document.getElementById('emob').value;
            var email = document.getElementById('email').value;
            var bio = document.getElementById('bio').value;
            var mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
            if(en==""|| mob=="" || email=="" || bio=="")
            {
                // alert(1);
                document.getElementById("errormsg").innerHTML = "*Please fill all the required fields";
            }
            else if(!email.match(mail))
            {
                // alert(1);
                document.getElementById("errormsg").innerHTML = " Invalid Email-Id";
            }
            else if(!mob.match(phno))
            {
                document.getElementById("errormsg").innerHTML = "Invalid Mobile No.";
            }
            else
            {
                document.getElementById("errormsg").innerHTML = "";
                //alert("Now, We have to work on PHP!!!");
            }

        }
        function rem()
        {
            document.getElementById("errormsg").innerHTML = "";
        }

</script>
<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php
        $conn = mysqli_connect("localhost", "root", "", "fms");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name =  $_POST['ename'];
        $contact =  $_POST['emob'];
        $email = $_POST['email'];
        $message = $_POST['bio'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contact_us VALUES ('$name', 
            '$contact','$email','$message')";
          
        if(mysqli_query($conn, $sql)){
            //echo "<h3>We will contact you shortly...</h3>"; 
			echo '<script type="text/javascript">
			alert("We will contact you shortly...");
           
					</script>';
  
            } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
<?php include 'footer.php';?>