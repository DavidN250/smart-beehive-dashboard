<?php require_once 'header.php';
      require_once 'class/Hive.php';


 ?>
            <!-- Mobile Menu end -->
<?php 

$userhives=$user->getHives();


 ?>
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
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Beehive Id..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                      <!--   <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">C3 Charts</span>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////// -->
           
 
        <!-- custom chart end-->

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                         <h2>All Beehives</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                       <div class="form-group data-custon-pick data-custom-mg" id="data_5">
                                        <label>Select From -To</label>
                                        <div class="input-daterange input-group">
                                            <input type="text" class="form-control" name="start" value="B001" />
                                            <span class="input-group-addon">to</span>
                                            <input type="text" class="form-control" name="end" value="B008" />
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <?php 
                   for ($i=0; $i <count($userhives); $i++) { 

                    $hive=new Hive($con,$userhives[$i]);
                        # code... ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                         <a href="onehive.php?h=<?=$userhives[$i]?>">   <div class="analytics-content">
                                <h5><?=$userhives[$i] ?></h5>
                                <h2>Temperature: </h2>
                                <span class="text-success  counter"><?=$hive->getCurrentTemp()?></span><span class="text-danger"><sup>o</sup>C</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?=$hive->getCurrentTemp()?>%;"> <!-- <span class="sr-only">230% Complete</span> --> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter"><?=$hive->getCurrentHumidity()?></span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?=$hive->getCurrentHumidity()?>%;"> </div>
                                </div><br>
                                 <h2>Sound: <span class="text-primary"><?=$hive->getCurrentSound()?> </span> </h2>
                                  <h2>Weight: <span class="counter"><?=$hive->getCurrentWeight()?></span> <span>Kg</span></h2>
                            </div></a>
                        </div>
                    </div><?php } ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>H002</h5>
                              <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger"><sup>o</sup>C</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>H003</h5>
                                  <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger"><sup>o</sup>C</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>H004</h5>
                                  <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger"><sup>o</sup>C</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
         <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>H005</h5>
                                      <h2>Temperature: </h2>
                                <span class="text-danger  counter">37</span><span class="text-danger"><sup>o</sup>C</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:37%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>H006</h5>
                                    <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger"><sup>o</sup>C</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>H007</h5>
                               <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger"><sup>o</sup>C</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>H008</h5>
                              <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger"><sup>o</sup>C</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>H005</h5>
                                      <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>H006</h5>
                                    <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>H007</h5>
                               <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>H008</h5>
                              <h2>Temperature: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                <h2>Humidity: </h2>
                                <span class="text-danger  counter">30</span><span class="text-danger">%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                                </div><br>
                                 <h2>Sound:<span class="text-primary">Normal</span> </h2>
                                  <h2>Weight: <span class="counter">20</span> <span>Kg</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
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
</body>

</html>