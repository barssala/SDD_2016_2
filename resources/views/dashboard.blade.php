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
    <div class="content-wrapper">
	    <div >
		   <div style="float: left; width: 100%;black;" class="height-default">
				<!--left side-->
				<div style="float: left; width: 20%;black;" class="height-default">
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
				
				<!--right side-->
				<div style="float: right; width: 80%;" class="height-default">
					<div style="text-align:right;" class="height-default">
						<div class="row styleAssign">
							<div class="col-md-4">ASSIGNMENT 1</div>
							<div class="col-md-4">ASSIGNMENT 2</div>
							<div class="col-md-4">ASSIGNMENT 3</div>
						</div>
						<div class="row styleAssign">
							<div class="col-md-4">ASSIGNMENT 1</div>
							<div class="col-md-4">ASSIGNMENT 2</div>
							<div class="col-md-4">ASSIGNMENT 3</div>
						</div>


								

					</div> 
					
				</div>
		</div>		
		<div style="clear: both;"></div>
		</div>
    </div>
        @include('includes.footer') 
</body>
