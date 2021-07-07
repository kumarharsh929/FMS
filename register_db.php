<!DOCTYPE html>
<html> 
<head>
    <title>User Details</title>
</head>
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "fms");  
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }     
        // Taking all 6 values from the form data(input)
        $name =  $_POST['name'];
        $dob =  $_POST['dob'];
        $mobileno = $_POST['mobile'];
        $email = $_POST['email'];
		$address=$_POST['address'];
        $DOB=date("Y-m-d",strtotime($dob));
		$password=$name.rand(100,9999);
        $enpass=md5($password);
        // Performing insert query execution
        // here our table name is profile
        // $sql = "INSERT INTO register VALUES ('$name','$dob','$mobileno','$email','$address','$enpass')";
        $sql="INSERT INTO `register`(`name` ,`dob`,`mobileno`,`email`, `address`,`password`) VALUES ('".$name."','".$DOB."','".$mobileno."','".$email."','".$address."','".$enpass."')";
        $result = mysqli_query($conn, $sql); 
        if($result) {
            require 'PHPMailerAutoload.php';
            $mail = new PHPMailer;
    //		$mail->SMTPDebug = 4;                               // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'rohitrk1607@gmail.com';                 // SMTP username
            $mail->Password = 'JavaC++C';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->setFrom('rohitrk1607@gmail.com', 'FMS');
            $mail->addAddress($email);     // Add a recipient
            $mail->addReplyTo('rohitrk1607@gmail.com');
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Login Password!';
            $mail->Body    = '<!DOCTYPE html>
    <html>
    <head>
        <title>Your Password</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Economica|IM+Fell+English+SC&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" align="center">
                <div class="col-sm-12" style="height: 50vh; background-color: #fff; color: rgb(0,0,51); ">
                    <div class="card" style="color: rgb(0,0,51);text-align: center; height: 70vh; z-index: 1; width: 70vw; background-color: #fff; margin-top:  10vh; border:2px solid rgb(0,0,51); padding:5px;">
                        <h2 style="font-family: "IM Fell English SC", serif; padding-top: 20px;">Welcome to FMS</h2>
                        <h2 style="font-family: "IM Fell English SC", serif; padding-top: 20px;">FMS ku Veravekirum</h2>
                    <h4 style="font-family: "Economica", sans-serif;"><br/>This is your password confirmation mail.<br/><br/><b>Your Email ID is : '.$email.'<br/>Your Password is : '.$password.'<br/><br/></b>Please Login and Enjoy the Services.</h4>
                    <div style="vertical-align: bottom;"><br/><b>Designed by FMS Team!!!</b></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" style="height: 1vh; background-color: rgb(0,0,51); ">
                    
                </div>
            </div>
        </div>
    </body>
    </html>';
            if(!$mail->send()) {
                echo 'Message could not be sent.';
            //    echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'You Registered Successfully. Check your email for Greetings';
            }
        }
        // else {
        //     echo mysqli_error($conn);
        // }
        /*if($result){             
			echo '<script type="text/javascript">			
           window.location = "login.php"
					</script>';
            } 
			else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);*/
        ?>
    </center>
</body> 
</html>