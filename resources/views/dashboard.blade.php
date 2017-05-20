<!doctype html>
<html>
<head>
<title>Dashboard</title>
@include('includes.dashboard_head')

	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Dashboard</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->
    <link href="<?php echo asset('css/bootstrap.css') ?>" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <!-- <link href="assets/css/font-awesome.css" rel="stylesheet" /> -->
    <link href="<?php echo asset('css/font-awesome.css') ?>" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <!-- <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> -->
    <link href="<?php echo asset('js/dataTables/dataTables.bootstrap.css') ?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <!-- <link href="assets/css/style.css" rel="stylesheet" /> -->
    <link href="<?php echo asset('css/style.css') ?>" rel="stylesheet" />
        <link href="<?php echo asset('./vendor/swiper/css/swiper.min.css') ?>" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="<?php echo asset('favicon.ico') ?>">
<link rel="stylesheet" href="<?php echo asset('css/animate.css') ?>" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style type="text/css">
       .row{
        margin-bottom: 5px !important;
       }
       .content-wrapper{

       	 margin:0px !important;
       	 padding-bottom: 0 !important;
       }
       .height-default{
       	min-height:800px !important;
       }
       .styleAssign{
       	text-align: center !important;
       	height: 150px;
       	width: auto;
       	border: 2px;
       	vertical-align: middle;
       }
       .col-md-4{
       	height: 150px;
       	vertical-align: middle;
       	border: 2px;
       	border-color: glay;
       }
       
    </style>
</head>

<body>
<!--    <div class="content-wrapper">
	    <div >
		   <div style="float: left; width: 100%;black;" class="height-default"> -->
				<!--left side-->
	<!--			<div style="float: left; width: 20%;black;" class="height-default">
					<div style="text-align:right;background-color: #000e1b;" class="height-default">
						<div class="row" style="margin-right: 10px;text-align: center;margin-left: 10px;">
							<h2 style="color: #FFFFFF">DASHBOARD</h2>
							<img src="img/person.png" alt="No Image" style="margin-top:10px;" width="70" height="70">
							
						</div>
						<div class="row" style="margin-right: 10px;text-align: center;margin-left: 10px;">
							<label style="color: #FFFFFF; ">FirstName Lastname</label>
						</div>
						<div class="row" style="margin-right: 10px;text-align: center;margin-left: 10px;">
							<label style="color: #FFFFFF; ">Show calendar ,.. etc</label>
						</div>
						<div class="row" style="margin-right: 10px;text-align: center;margin-left: 10px;">
							<label style="color: #FFFFFF; ">Detail 1.....</label>
						</div>
						<div class="row" style="margin-right: 10px;text-align: center;margin-left: 10px;">
							<label style="color: #FFFFFF; ">Detail 2.....</label>
						</div>
						<div class="row" style="margin-right: 10px;text-align: center;margin-left: 10px;">
							<label style="color: #FFFFFF; ">Detail 3.....</label>
						</div>
						
 
								

					</div> 
				</div>
-->
               		<!-- Products -->



		<div class="fh5co-bg-section" style="background-image: url(img/slide_2.jpg); background-attachment: fixed;">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="fh5co-hero-wrap">
							<div class="fh5co-hero-intro text-center">
								<h1 class="fh5co-lead"><span class="quo">&ldquo;</span>Design is not just what it looks like and feels like. Design is how it works. <span class="quo">&rdquo;</span></h1>
								<p class="author">&mdash; <cite>Steve Jobs</cite></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  
	</div>

  
        <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                         <?php if ((session('user')->role_id == 1)) { ?>
								<h3 class="header-line">ADMIN DASHBOARD</h3>
								<h4>Name: admin</h4>
						<?php } else {?>
								<h4 class="header-line">USER DASHBOARD</h4>
                         <?php } ?>
            </div>
        </div>
					<div class="row">
					@for ($i = 0; $i < 4; $i++)		              
  						<div class="col-md-3 col-sm-3 col-xs-6">		                   
							<div class="alert alert-info back-widget-set text-center">
		                    	<a href="viewAssignment/{{ $i+1 }}">
		                    		<i class="fa fa-book fa-5x"></i>
                                         <h3>Assignment {{ $i+1 }}</h3>
                                </a>
										<!--จะวนfor loop 6 ครั้ง แสดงassignmentล่าุสด  -->
							</div>
		                    
		                </div>
					@endfor
                    </div>


       

	</div>			
		<div id="fh5co-clients">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="img/Python.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="img/github.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
					
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="img/laravel.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="img/PHP.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
				</div>
			</div>
		</div>
   
        @include('includes.footer') 
</body>
</html>