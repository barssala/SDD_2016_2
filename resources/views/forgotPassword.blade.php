<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Register</title>
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
    
    <script>
    $( document ).ready(function() {

      @if(Session::has('message'))
        <?php echo 'alert("'. Session::get('message') .'");'  ?>
      @endif

    });
    </script>
    <style type="text/css">
       .row{
        margin-bottom: 5px !important;
       }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <div class="container">

        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">FORGOT PASSWORD</h4>
            </div>
        </div>

		<div class="row">
		<div class="col-md-12">

                    <!-- Advanced Tables -->
        {{ Form::open(['url' => 'resetPassword']) }}
		 <div class="panel panel-default">
			<div class="panel-body">
			    <div>

            <div class="row">
  						<div class="col-md-2">
  							<label for="userName">Username : </label>
  						</div>
  						<div class="col-xs-4 ">
                {{ Form::text('username', null,
                      array('required',
                        'class'=>'form-control',
                        'style'=>'text-align: left',
                        'placeholder'=>'Username')) }}
  						</div>
  					</div>
        <div class="row">
          <div class="col-md-2">
            <label for="Email">E-mail : </label></div>
          <div class="col-xs-4 ">
            {{ Form::email('email', null,
                          array('required',
                            'class'=>'form-control')) }}</div>
        </div>
        </br>
				<div class="row">
					<div style="padding-left: 200px">
						<button onclick="window.location='{{ URL::to('login') }}'" id="btnBack" class="btn btn-primary btn-sm" >Back</button>
            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-success')) }}
					</div>
				</div>
			</div>
	       </div>

            {{ Form::close()  }}
           </div>
		   <!--End Advanced Tables -->

</div>
</div>
</div>

</body>

</html>
