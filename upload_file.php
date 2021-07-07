<?php include 'header.php';?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h4>Choose Your File To Upload </h4>
                    </div>
                    <!-- Data Of upload file -->
                    <fieldset style="width:450px;">
                        <form action="upload_file.php" method="post" enctype="multipart/form-data">
                            <input type='file' name="file" id="file" onchange="readURL(this);"/><br/>
                            <input type="submit" name="Submit" value="Upload" class="btn btn-link" style="border:1px solid grey;float:right;"/>
                        </form>
                    </fieldset>    
                    <br/>
                    <div style="background-color:transparent;height:500px; position:relative;width:35%;top:-200px;right:40px;float:right;">
                        <img id="prev" class="img-responsive" style="padding:30px;width:440px;height:500px;border-radius:90px;">
                    </div>
<script>   
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#prev')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}</script>
<?php error_reporting(E_ERROR | E_PARSE);?>
<?php
    $name=$_FILES["file"]["name"];
    $ext = end((explode(".", $name)));
    // $sz=number_format($_FILES["file"]["size"] / 1048576, 2);
    $sz=$_FILES["file"]["size"];
    $path='uploads/'.$_FILES["file"]["name"];
    $con=mysqli_connect("localhost","root","","fms");
    if ($_FILES["file"]["error"]> 0)
        echo "Error:".$_FILES["file"]["error"]."<br>";
    else
    {
        echo "<table border='2' cellspacing='0' cellpadding='5'>";
        echo "<tr><th>Upload:</th><td>".$_FILES["file"]["name"]."</td></tr>"; 
        echo "<tr><th>Type: </th><td>".$_FILES["file"]["type"]."</td></tr>"; 
        echo "<tr><th>Size: </th><td>".$sz." KB</td></tr>";
        // echo "<tr><th>Stored in:</th><td>".$_FILES["file"]["tmp_name"]."</td></tr>";
        echo"</tr></table>";
    }
    if (file_exists("uploads\ " . $_FILES["file"]["name"]))
        echo $_FILES["file"]["name"]." already exists. ";
    else    
    {   
        // move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);
        if(move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]))
        {
            $sql=mysqli_query($con,"INSERT INTO file_tb VALUES ('$name',$sz,'$ext','$path','rk98356@gmail.com')");
        }
        // echo "Stored in: uploads\ " . $_FILES["file"]["name"];
    }
    // echo '<br/><br/><img src="uploads/'. $_FILES["file"]["name"].'" width="500px;" height="300px;" alt="Image Not Available!"/>'
?><br/><br/><br/><br/><br/><br/><br/>
<?php include 'footer.php';?>