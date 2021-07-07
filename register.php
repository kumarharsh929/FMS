<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <style>
    body{ 
        background-color:#4e83df;  /* For browsers that do not support gradients */
 //     background-image: linear-gradient(45deg,rgb(128, 128, 255) , rgb(0,0,128)); /* Standard syntax (must be last) */
	}

	p{
	   text-align:justify;
        color:#37,37,37;
	}
	#ss{
		text-align: right;
	}
	h1{
	   text-align:center;
	   color:white;
	   font-family: 'Lobster', cursive;
	}
	input{
		text-align:left;
	}
	.p1{
	   text-align:justify;
	}

	#a{
		display:block;
	}
	#b{
		display:none;
	}
	#c{
		display:none;
	}

  h4{ text-align: center; 

   font-family: 'Bree Serif', serif;

  margin-top: 5px;

  background-color:#fff;  

  padding: 7px;

  font-size: 30px;

  position:absolute;

  top:-30px;

  border-radius:10px;

  border:2px solid rgb(0,0,102);

  padding-left: 20px;

  padding-right: 20px; 

  }
  </style>
   </head>
   <body>
     <div class="container-fluid">
	    <div class="row" style="margin-top:50px;">
		   <div class="col-sm-2"></div>
		   <div class="col-md-8">
		      <div class="row" style="margin-top:2%;  ">
			     <div class="col-sm-5" style="background:#4e83df; color:#fff; min-height: 470px; padding:20px; ">
					<div>
						<p style="text-align: center;"><img src="img/clo.gif" style="height:150px;width:150px; ;background: white;padding:2px; " class="img-circle" ></p>
					</div>
					  <p style="text-align:justify;font-family:sans-serif; font-size: 15px;" > File Management System has a variety of applications, including data backup, data sharing, and resource service.
                         It can also provide standardized interfaces for other services. You can upload any type of files and folders and you can also download it. The demand for professionals 
                         with knowledge of file storage is expect to rise exponentially because more and more companies are implementing this technology.</p>
					  <u style="font-size: 15px;">Advantages of File Management System </u>
						<ul style="font-size: 15px;">	
							<li>Easy to use</li>
							<li>Access data from any where</li>
							<li>Large data capacity</li>
							<li>Inexpensive</li>
						</ul>
						<br/><br/>
				 </div>
				 <div class="col-md-1"></div>
			     <div class="col-sm-6" style="background:white; min-height: 470px; border:2px solid green; border-radius:0px 10px 10px 0">
			     	<form method="post" action="register_db.php">
				     	 <h4>Sign Up</h4>
						<a href="login.php">
							<input type="button" class="btn pull-right" name="log" value="Login" style="background:#4e83df; margin-top:5px;padding:2px; font-size:20px; color:white; width:25%;"/><br/>
						</a>
				     	 <br/><br/>
					     <label style="margin-top:10px; margin-bottom:0px; font-size: 20px;" >Name</label><br/>
					     <br/>
					    <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						    <input type="text" name="name" class="form-control" required="true"placeholder="Allu Arjun"style="border:0px; border-bottom: 2px solid green;" >
						</div><br/>
						<label style="margin-top:10px; margin-bottom:0px; font-size: 20px;" >DOB</label><br/>
					     <br/>
					    <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						    <input type="date_date_set" name="dob" class="form-control" required="true" placeholder="1983-04-08" style="border:0px; border-bottom: 2px solid green;" >
						</div><br/>
						<label style="margin-top:10px; margin-bottom:0px; font-size: 20px;" >Mobile Number</label><br/>
					     <br/>
					    <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						    <input type="number_format" name="mobile" class="form-control" required="true" placeholder="9856985745" style="border:0px; border-bottom: 2px solid green;" >
						</div><br/>
						<label style="margin-top:10px; margin-bottom:0px; font-size: 20px;" >Email</label><br/>
					     <br/>
					    <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						    <input type="email" name="email" class="form-control" required="true" placeholder="alluarjun@gmail.com" style="border:0px; border-bottom: 2px solid green;" >
						</div><br/>
						<label style="margin-top:10px; margin-bottom:0px; font-size: 20px;" >Address</label><br/>
					     <br/>
					    <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						    <input type="text" name="address" class="form-control" required="true" placeholder="Street/City" style="border:0px; border-bottom: 2px solid green;" >
						</div><br/>						
					    <!-- <label style="margin-top:10px; margin-bottom:0px; font-size: 20px;">Password</label><br/><br/>
					    <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						    <input type="password" id="password" name="password" class="form-control" required="true" placeholder="AlluArjun" style="border:0px; border-bottom: 2px solid green;">
						</div><br/>
                        <label style="margin-top:10px; margin-bottom:0px; font-size: 20px;">Confirm Password</label><br/><br/>
					    <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						    <input type="password" name="cpassword" id="cpassword" class="form-control" required="true" placeholder="AlluArjun" style="border:0px; border-bottom: 2px solid green;">
						</div><br/><br/>
						<tr><td colspan="2"><span id="error" style="color:red;"></span></td></tr> -->
						<!-- <p style="float: left;"><input type="checkbox">&ensp; Keep me logged in</p><br/><br/> -->
						<input type="submit" name="submit" value="Register" class="btn" onclick="valid()" style="background:#4e83df; color:#fff; width:25%;"/><br/>
                       <br/><br/>
						<!--<p id="ss">
					    	<span><a href="vtr_resetpassword.php"><u>Forgot Password?</u></a></span></p>-->
					</form>
				 </div>
			  </div> 
		   </div>
		   <div class="col-sm-2"></div>
		</div>
	 </div>
   </body>
</html>