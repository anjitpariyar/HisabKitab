<?php
$currentpage = 'Dashboard';
include './template/header.php';
// include './template/nav.php';
?>

<main class="main">
        


<body class="font-montserrat">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    
    <?php
        include './template/sidebar.php'
    ?>
    <div class="page">
        <?php  include './template/topHeader.php'?>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h4>Welcome Manager Chanda!</h4>
                            <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                        </div>                        
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Today Sales</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 ">NRS <span class="counter">31000</span></h5>
                                <!-- <span class="font-12">Measure How Fast... <a href="#">More</a></span> -->
                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Yesterday Sales</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 ">NRS <span class="counter">24500</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Last 7 Day Sales </h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 ">NRS <span class="counter">170000</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Time Sales</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 ">NRS <span class="counter">1200000</span></h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row clearfix row-deck">
                    
               
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Live Table Status</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-4 col-xl-2 border-right pb-4 pt-4 bg-green text-white ">
                                        <label class="mb-0 font-13">Booked</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 1</h4>
                                    </div>
                                    <div class="col-4 col-xl-2 border-right pb-4 pt-4">
                                        <label class="mb-0 font-13">Empty</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 2</h4>
                                    </div>
                                    <div class="col-4 col-xl-2 border-right pb-4 pt-4">
                                        <label class="mb-0 font-13">Empty</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 3</h4>
                                    </div>
                                    <div class="col-4 bg-light-green col-xl-2 border-right pb-4 pt-4">
                                        <label class="mb-0 font-13 ">On Going</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 4</h4>
                                    </div>
                                    <div class="col-4 col-xl-2 border-right pb-4 pt-4">
                                        <label class="mb-0 font-13">Empty</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 5</h4>
                                    </div>
                                    <div class="col-4 bg-light-green col-xl-2  pb-4 pt-4">
                                        <label class="mb-0 font-13 ">On Going</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 6</h4>
                                    </div>
                                    <div class="col-4 col-xl-2 border-right border-top pb-4 pt-4">
                                        <label class="mb-0 font-13">Empty</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 7</h4>
                                    </div>
                                    <div class="col-4 bg-light-green col-xl-2 border-right border-top pb-4 pt-4">
                                        <label class="mb-0 font-13 ">On Going</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 8</h4>
                                    </div>
                                    <div class="col-4 col-xl-2 border-right border-top pb-4 pt-4">
                                        <label class="mb-0 font-13">Empty</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 9</h4>
                                    </div>
                                    <div class="col-4 bg-light-green col-xl-2 border-right border-top pb-4 pt-4">
                                        <label class="mb-0 font-13 ">On Going</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 10</h4>
                                    </div><div class="col-4 col-xl-2 border-right border-top pb-4 pt-4">
                                        <label class="mb-0 font-13">Empty</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 11</h4>
                                    </div>
                                    <div class="col-4 bg-light-green col-xl-2  border-top pb-4 pt-4">
                                        <label class="mb-0 font-13 ">On Going</label>
                                        <h4 class="font-30 font-weight-bold text-col-blue ">Table 12</h4>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="clearfix">
                                                    <div class="float-left"><strong>35%</strong></div>
                                                    <div class="float-right"><small class="text-muted">Today booking</small></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
       <?php include './template/bottomFooter.php' ?>
    </div>    
</div>




</main>


<?php

include './template/footer.php';
?>




