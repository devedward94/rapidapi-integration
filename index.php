<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Dashborad</title>
    <!-- App CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body class="light">

<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">

    <!-- Top Header -->
    <div class="main-header text-white">        
        <h4>
            <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle"><i></i></a>
            <span><a href="index.html"><b>BACKTHEWINNER</b></a></span>
        </h4>
        <div class="right-top">
            <ul class="top-nav">
                <li><a href="contact-us.html" type="button" class="btn btn-primary btn-sm">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <!-- /.Top Header -->

    <!-- Left SideBar -->
    <aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
        <section class="sidebar">
            <!-- SideBar Headers -->
            <div class="dateBar">Pre Made Filters</div>
            <div class="sidebadges">
                <a class="badge r-3 badge-success pull-right" href="#">Win</a>
                <a href="#" class="badge r-3 badge-primary pull-right">BTTS</a>
                <a href="#" class="badge badge-danger">Cards</a>
            </div>
            <div class="asideDate">
                <div class="card-title">Date Picker</div>
                <div class="input-group">
                    <div class="date-items">
                        <input type="text" class="date-time-picker form-control" data-options='{"timepicker":false, "format":"d-m-Y"}' value="2018/06/01"/>
                        <img src="assets/img/arrow.png" alt="">
                        <input type="text" class="date-time-picker form-control" data-options='{"timepicker":false, "format":"d-m-Y"}' value="2018/06/01"/>
                    </div>
                    <span class="input-group-append">
                        <span class="input-group-text add-on white">
                            <i class="icon-calendar"></i>
                        </span>
                    </span>
                </div>
            </div>
            <!-- /.SideBar Headers -->


            <!-- Ranges -->
            <div class="ranges-outer">
                <!-- Range 1 -->
                <div class="ranges">
                    <div class="ranges-head">
                        <span class="rng-head">Home Team Filters</span>
                    </div>
                    <!-- Range Row Repeat -->
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>                
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>                
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>                
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>                
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>                
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>                
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>                
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>                
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>
                    </form>
                    <!-- /.Range Row Repeat -->
                </div>
                <!-- /.Range 1 -->

                <!-- Range 2 -->
                <div class="ranges">
                    <div class="ranges-head">
                        <span class="rng-head">Home Team Filters</span>
                    </div>
                    <!-- Range Row Repeat -->
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>                
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <form class="form-inline range-row">
                        <div class="rng-item">
                            <input type="text" class="range-slider form-control" />
                        </div>          
                        <div class="rng-item">
                            <div class="range-text">wins at home</div>
                        </div>      
                    </form>
                    <!-- /.Range Row Repeat -->
                </div>
                <!-- /.Range 2 -->
            </div>
            <!-- /.Ranges -->

        </section>
    </aside>
    <!-- /.Left SideBar -->

    <!-- Content Main -->
    <div class="page has-sidebar-left height-full">
     
        <div class="container-fluid relative animatedParent animateOnce">

            <div class="dateBar">Tuesday 14 January 2020</div>

            <div class="chart-row">
                <?php
				$filedata 		= 	file_get_contents("response.txt");
				$decodedata 	= 	json_decode($filedata);
				$myArray 		= 	json_decode(json_encode($decodedata), true);
				$fixtures 		= 	$myArray["api"]["fixtures"];
				foreach($fixtures as $key=>$data){
				?>
                <!-- Charts -->
                <div class="col-carts">
                    <div class="card">
                        <div class="card-header white">

                            <h6><img width="100px" src="<?php echo $data['league']['logo']; ?>" alt=""><?php echo $data['league']['name']; ?></h6>
                            <a href="#modalCreateMessage" data-toggle="modal" data-target="#modalCreateMessage" class="badge r-3 badge-primary pull-right">Detail</a>

                        </div>
                        <div class="card-body">
                            <div class="title-board">
                                <div class="club-img">
                                    <img src="assets/img/clubs/club-img1-lg.png" alt="">
                                </div>
                                <div class="name-club">
                                    <span><b>Arsenal</b></span>
                                    <span class="v"><b>V</b></span>
                                    <span><b>Chelsea</b></span>
                                    <div class="timeboard">
                                        <b>19th January 15:00</b>
                                    </div>
                                </div>
                                <div class="club-img">
                                    <img src="assets/img/clubs/club-img2-lg.png" alt="">
                                </div>
                            </div>
                            <div class="list-main-chart">

                                <div class="listDeatil">
                                    <div class="colorhead">Home Team</div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Wins</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="33">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>33%</td>
                                            </tr>
                                            <tr>
                                                <td>Score</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1.5%</td>
                                            </tr>
                                            <tr>
                                                <td>BTTS</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>75%</td>
                                            </tr>
                                            <tr>
                                                <td>Cards</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1.7</td>
                                            </tr>
                                            <tr>
                                                <td>Corners</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>8.8</td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="listDeatil">
                                    <div class="colorhead">Home Team</div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Wins</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="33">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>33%</td>
                                            </tr>
                                            <tr>
                                                <td>Score</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1.5%</td>
                                            </tr>
                                            <tr>
                                                <td>BTTS</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>75%</td>
                                            </tr>
                                            <tr>
                                                <td>Cards</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1.7</td>
                                            </tr>
                                            <tr>
                                                <td>Corners</td>
                                                <td>
                                                    <div class="progress mb-4 r-30">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>8.8</td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
				
				<?php } ?>

                <!-- /.Charts -->

            </div>

        </div>
    </div>
    <!-- /.Content Main -->    

    <!--Message Modal-->
<div class="modal modal-center fade" id="modalCreateMessage" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-primary">
                <img src="assets/img/flags/flag-lg.png" alt="">
                <h6 class="modal-title text-white" id="exampleModalLabel">Premier League</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                   class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>

            <div class="modal-mid-row">
                <div class="title-board">
                    <div class="modal-club">
                        <img src="assets/img/clubs/club-img1-lg.png" alt="">
                        <span>Arsenal</span>
                    </div>
                    <div class="name-club">
                        <div class="timeboard">January 19th 15:00</div>
                    </div>
                    <div class="modal-club">
                        <span>Chelsea</span>
                        <img src="assets/img/clubs/club-img2-lg.png" alt="">
                    </div>
                </div>
            </div>

            <div class="modal-body no-p no-b">
               <div class="list-main-chart">
                    
                    <div class="listDeatil">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Home League Table</th>
                                    <th>P</th>
                                    <th>W</th>
                                    <th>D</th>
                                    <th>L</th>
                                    <th>GF</th>
                                    <th>GA</th>
                                    <th>GD</th>
                                    <th>Pts</th>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr class="higlight">
                                    <td>Arsenal</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    
                    <div class="listDeatil">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Home League Table</th>
                                    <th>P</th>
                                    <th>W</th>
                                    <th>D</th>
                                    <th>L</th>
                                    <th>GF</th>
                                    <th>GA</th>
                                    <th>GD</th>
                                    <th>Pts</th>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr class="higlight">
                                    <td>Arsenal</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>Liverpool</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>20</td>
                                    <td>30</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
            </div>

            <div class="modal-footer">
                
            </div>

        </div>
    </div>
</div>

</div>
<!--/#app -->

<script src="assets/js/app.js"></script>
</body>
</html>