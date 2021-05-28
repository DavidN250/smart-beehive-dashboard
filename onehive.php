<?php require_once 'header.php'; ?>
<?php 
      require_once 'class/Hive.php';
      if (!isset($_GET['h'])) {
          # code...
        header("Location:all-beehive.php");
        exit();
      }
      $h=$_GET['h'];
      $hive=new Hive($con,$h);



 ?>
            <!-- Mobile Menu end -->
            
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                          <h2>B001</h2> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////// -->
           <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Temperature</h5>
                                <span class="text-success"><span class="counter"><?=$hive->getCurrentTemp()?></span><span><sup>0</sup>c</span></span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?=$hive->getCurrentTemp()?>%;"> <span class="sr-only">20% Complete</span> </div>
                                </div><br>
                                <div><span style="font-weight: 800">Notice:</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Humidity</h5>
                                <span class="text-danger counter"><?=$hive->getCurrentHumidity()?></span><span>%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?=$hive->getCurrentHumidity()?>%;"> <span class="sr-only">230% Complete</span> </div>
                                </div>
                                 <div><span style="font-weight: 800">Notice:</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Sounding</h5>
                                <span class="text-info"><?=$hive->getCurrentSound()?></span>
                            </div>
                             <div><span style="font-weight: 800">Notice:</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Weight</h5>
                                <span class="counter text-primary"><?=$hive->getCurrentWeight()?></span> <span>KG</span>
                               
                            </div>
                             <div><span style="font-weight: 800">Notice:</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <!-- Small chart Start-->
   <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                      <!--     <h2>B001</h2>  --><div class="form-group data-custon-pick data-custom-mg" id="data_5">
                                        <label style="font-weight: 900">Select Day</label>
                                        <div class="input-daterange input-group" id="datepicker">
                                            <input type="text" class="form-control" name="start" value="" placeholder="Select Date" />
                                       <!--      <span class="input-group-addon">to</span>
                                            <input type="text" class="form-control" name="end" value="05/22/2014" /> -->
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="sparkline-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-sparkline responsive-mg-b-30">
                            <div class="sparkline-hd">
                                <div class="main-spark-hd">
                                    <h1>Average Temperature Today</h1>
                                </div>
                            </div>
                            <div class="smart-sparkline-list">
                                <div id="lineChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline-list">
                            <div class="smart-sparkline-hd">
                                <div class="smart-main-spark-hd">
                                   <h1>Average Humidity Today</h1>

                                </div>
                            </div>
                            <div class="smart-sparkline-list">
                                <div id="lineCharts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Small chart end-->
        <!-- custom chart start-->
        <div class="pie-bar-line-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline7-list responsive-mg-b-30">
                            <div class="sparkline7-hd">
                                <div class="main-spark7-hd">
                                   <h1>Average sound Today</h1>
                                </div>
                            </div>
                            <div class="sparkline7-graph">
                                <div id="slineChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Weight in mouth</span></h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div id="scatter"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- custom chart end-->

        <?php $now= date("Y-m-d "); 
$d=strtotime("2020-12-26 17:08:26");
 $d2=date("Y-m-d ", $d);
 echo $now."<br>";
 echo $d2;
if ($d2==$now) {
     # code...
    echo "yes";
 }  
 else{
    echo "no";
 }
 ///////////
 $serialnuber="B001";
       $query = $con->prepare("SELECT * FROM tempandhum WHERE serial_number = :un ");
        $query->bindParam(":un", $serialnuber);
        $query->execute();
       foreach ($query as $row) {

        echo  $d2=date("Y-m-d " ,strtotime( $row['timeoccur']));
       // echo "<br>".count($query);
       }
 
        ?>
        <!-- custom chart start-->

        <!-- custom chart end-->
        <!-- custom chart start-->

        <!-- custom chart end-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020-<?=date('Y')?>. All rights reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
     <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- c3 JS
		============================================ -->
    <script src="js/c3-charts/d3.min.js"></script>
    <script src="js/c3-charts/c3.min.js"></script>
    <script src="js/c3-charts/c3-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
            <!-- ============================================ --> 
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
</body>

</html>
<script type="text/javascript">
    

    // $(function(){

    //     $.post("buildgraph.php",
    //     {
    //       avgtemp: 'avgtemp'
    //     },
    //     function(data,status){

    //         alert(data);
    //      }
    //         );
    // });
</script>