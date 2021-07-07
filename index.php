<?php include 'header.php';?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Storage Report</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Storage Report</a> -->
                    </div>
                    <?php      
					    $size=0;
                        $e="";
                        $query ="SELECT * FROM `file_tb` where `umail` ='rk98356@gmail.com'";
                        $con = mysqli_connect('localhost','root','','fms');
                        $result =  mysqli_query($con,$query);
                        while ($row = mysqli_fetch_array($result)) 
                        {
                            $size=$size+$row['size'];
                        }
                        if($size>8589934592)
                        {
                                $fsize=round($size / 1024 / 1024 / 1024 , 2);
                        $e=$fsize.'GB';
                                //echo $fsize.'GB';
                        }
                        else
                        {
                        $fsize=round($size / 1024 / 1024 , 1);
                        $e=$fsize.'MB';
                        //echo $fsize.'MB'; 
                        }

                        $size=0;
                        $rsize=0;
                        $ec="";
                        $query ="SELECT * FROM `file_tb` where `umail` ='rk98356@gmail.com'";
                        $con = mysqli_connect('localhost','root','','fms');
                        $result =  mysqli_query($con,$query);
                        while ($row = mysqli_fetch_array($result)) 
                        {
                            $size = $size + $row['size'];
                            $rsize = 16106127360 - $size;
                        }
                        if($rsize>8589934592)
                        {
                        $f1size=round($rsize / 1024 / 1024 / 1024 , 2);
                        $ec=$f1size.'GB';
                        //echo $f1size.'GB';
                        }
                        else
                        {
                        $f1size=round($rsize / 1024 / 1024 , 1);
                        $ec=$f1size.'MB';
                        //echo $f1size.'MB'; 
                        }

                        $con = mysqli_connect("localhost","root","","fms");
                        $query ="SELECT * FROM `file_tb` where `umail` ='rk98356@gmail.com'";
                        //echo $query;
                        $pic=0;
                        $doc=0;
                        $web=0;
                        $mp3=0;
                        $mp4=0;
                        $result= mysqli_query($con,$query);
                        if(mysqli_num_rows($result) > 0)
                        {
                        while($row = mysqli_fetch_array($result))
                        {
                            $ext = $row['ext'];
                            if($ext =="png" || $ext == "jpg"|| $ext == "jpeg" || $ext == "gif"|| $ext == "bmp"){$pic++;}
                            if($ext =="php" || $ext == "html"|| $ext == "htm" || $ext == "css"|| $ext == "js"){$web++;}
                            if($ext =='ppt' || $ext =='pptx' || $ext =='doc' || $ext =='docx' || $ext =='xls' || $ext =='xlsx'|| $ext =="pdf"){$doc++;}
                            if($ext =='mp3' || $ext == 'wav' || $ext == 'wma'){$mp3++;}
                            if ($ext == 'mp4' || $ext == '3gp' || $ext == 'ogg' || $ext == 'webm' || $ext == 'flv' || $ext  == 'avi' || $ext == 'wmv'){$mp4++;}
                        }
                        /*echo $pic.'<br/>';
                        echo $doc.'<br/>';
                        echo $pdf.'<br/>';
                        echo $web.'<br/>';
                        echo $mp3.'<br/>';
                        echo $mp4.'<br/>';*/
                        }

                ?>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                    ['File Type', 'Total Size / Count'],
                    ['Pictures',   <?php echo $pic; ?>],
                    ['Audio',<?php echo $mp3; ?>],
                    ['Video',<?php echo $mp4; ?>],
                    ['Documents',<?php echo $doc; ?>],
                    ['Webpages',<?php echo $web; ?>]
                    ]);

                    var options = 
                    {
                        title: 'File Uploaded'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
                </script>      
                    <div class="container-fluid" style="width: 1000px;">
                            <div class="col-md-12" style="background:white; min-height: 450px;">
                                <div class="row"  style="background:white; min-height: 400px; ">
                                    <div id="piechart" class="col-md-8"></div>    
                                    <div class="col-md-4"><b>Total Space: 15GB</b><br/><br/><br/><br/><br/><br/>Total Storage Used:<?php echo $e;?><br/><br/>Remaining&nbsp;Space:<?php echo $ec;?></div>    
                                </div>
                            </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            
<?php include 'footer.php';?>