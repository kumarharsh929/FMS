<?php include 'header.php';?>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">My Files</h1>
                    </div>
                    <!-- Data Of view file -->
                        <div style="width:60%;min-height: 500px; float:left;">
                        <?php
                            $con=mysqli_connect("localhost","root","","FMS");
                            $sql=mysqli_query($con,"SELECT * FROM file_tb");
                            while($row = mysqli_fetch_array($sql)) 
                            {
                                $ext=$row['ext'];
                                // echo $row['path']."<br/>".$row['ext']."<br/>";
                                $fname = (strlen($row['name']) > 8) ? substr($row['name'], 0, 8) . '...' : $row['name'];
                                if($ext =="png" || $ext == "jpg"|| $ext == "jpeg" || $ext == "gif"|| $ext == "bmp")
                                echo '
                                    <div class="innam">
                                        <a href="#" id="'.$row['path'].'" name="pict" onclick="shw(id,name)"><i class="fas fa-file-image show" style="float:left;"></i>
                                        </a>
                                        <p style="height:40px;width:200px;margin-top:-50px;float:left;text-align:center;">'.$fname.'</p>
                                    </div>
                                    ';
                                else if($ext == 'mp4' || $ext == '3gp' || $ext == 'ogg' || $ext == 'webm' || $ext == 'flv' || $ext  == 'avi' || $ext == 'wmv')
                                    echo '
                                    <div class="innam">
                                        <a href="#" id="'.$row['path'].'" name="vido" onclick="shw(id,name)"><i class="fas fa-file-video show" style="float:left;"></i>
                                        </a>
                                        <p style="height:40px;width:200px;margin-top:-50px;float:left;text-align:center;">'.$fname.'</p>
                                    </div>
                                    ';
                                else if($ext =='mp3' || $ext == 'wav' || $ext == 'wma' || $ext == 'wemp')
                                    echo '
                                    <div class="innam">
                                        <a href="#" id="'.$row['path'].'" name="audo" onclick="shw(id,name)"><i class="fas fa-file-audio show" style="float:left;"></i>
                                        </a>
                                        <p style="height:40px;width:200px;margin-top:-50px;float:left;text-align:center;">'.$fname.'</p>
                                    </div>
                                    ';
                            }
                        ?>
                            <!-- <a href="#" id="one"  onclick="shw(id)" target="#prev" ><i class="fas fa-file show"></i> </a>
                            <a href="#" id="two"  onclick="shw(id)" target="#prev" ><i class="fas fa-file-image show"></i></a>
                            <a href="#" id="three"onclick="shw(id)" target="#prev"><i class="fas fa-file-pdf show"  ></i></a> 
                            <a href="#" id="one"  onclick="shw(id)" target="#prev" ><i class="fas fa-file show"></i> </a>
                            <a href="#" id="two"  onclick="shw(id)" target="#prev" ><i class="fas fa-file-image show"></i></a>
                            <a href="#" id="three"onclick="shw(id)" target="#prev"><i class="fas fa-file-pdf show"  ></i></a> 
                            <a href="#" id="one"  onclick="shw(id)" target="#prev" ><i class="fas fa-file show"></i> </a>
                            <a href="#" id="two"  onclick="shw(id)" target="#prev" ><i class="fas fa-file-image show"></i></a>
                            <a href="#" id="three"onclick="shw(id)" target="#prev"><i class="fas fa-file-pdf show"  ></i></a> 
                            <a href="#" id="one"  onclick="shw(id)" target="#prev" ><i class="fas fa-file show"></i> </a>
                            <a href="#" id="two"  onclick="shw(id)" target="#prev" ><i class="fas fa-file-image show"></i></a>
                            <a href="#" id="three"onclick="shw(id)" target="#prev"><i class="fas fa-file-pdf show"  ></i></a>                                                -->
                        </div>
                            <div id="show_itm" style="height:450px;position:absolute;width:360px;left:950px;border:8px solid #4E73DF;display:none;">
                                <img id="pic" style="width:100%;height:100%;position:absolute;" >
                                <video id="vid1" style="width:100%;height:100%;background:white;position:absolute;" controls></video> 
                                <audio id="aud" style="width:100%;height:100%;position:relative;left:0px;" controls></audio>
                            </div>
                            <div class="roundrr" id="roundrr" style="margin-left:675px;margin-top:-80px;display:none;">
                                <div class="divi1" id="done"></div>
                                <div class="divi1" id="dtwo"></div>
                                <div class="divi2" id="dthree"></div>
                                <div class="divi2" id="dfour"></div>
                            </div>
                    </div>
<script>
    function shw(id,name)
    { 
        document.getElementById('show_itm').style.display="block";
        document.getElementById('roundrr').style.display="block";
        document.getElementById('vid1').style.zIndex='-1';
        document.getElementById('pic').style.zIndex="-1";
        document.getElementById('aud').style.zIndex="-1";
        document.getElementById('vid1').src='NULL';
        document.getElementById('aud').src='NULL';
        // document.getElementById('pict').src='NULL';
        if(name=='pict')
        {
            document.getElementById('pic').src=id;
            document.getElementById('pic').style.zIndex="1";
        }
        else if(name=='vido')
        {
            // alert(id);
            document.getElementById('vid1').src=id;
            document.getElementById('vid1').style.zIndex='1';
        }
        else if(name=='audo')
        {
            // alert(id);
            document.getElementById('aud').src=id;
            document.getElementById('aud').style.zIndex='1';
        }
        /*else if(id=='two')
        document.getElementById('prev').src='ab.jpg';
        else
        document.getElementById('prev').src='abc.png';*/
    }
</script>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php include 'footer.php';?>