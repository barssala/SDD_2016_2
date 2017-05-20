<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Reset Password</title>
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

      $("#send").click(function(event) {
        if ($("#password1").val() != $("#password2").val()) {
          alert("Passwords do not match.");
          event.preventDefault();
        }
      });

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
                <h4 class="header-line">RESET PASSWORD</h4>
            </div>
        </div>

		<div class="row">
		<div class="col-md-12">
      <!-- <input type="hidden" id="user_id" name="user_id" value="{{ $user_id[0] }}"> -->
                    <!-- Advanced Tables -->
        {{ Form::open(['url' => ['updatePassword',$user_id]])}}
		 <div class="panel panel-default">
			<div class="panel-body">
			    <div class="table-responsive">

        <div class="row">
          <div class="col-md-2">
            <label for="password">Password : </label>
          </div>
          <div class="col-xs-4 ">
            {{ Form::password('password',
                              array('id'=>'password1',
                                    'required',
                                    'class'=>'form-control',
                                    'style'=>'text-align: right')) }}
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <label for="passwordConfirm">Confirm Password : </label>
          </div>
          <div class="col-xs-4 ">
            {{ Form::password('password_confirmation',
                              array('id'=>'password2',
                                    'required',
                                    'class'=>'form-control',
                                    'style'=>'text-align: right'))}}
          </div>
        </div>
				<div class="row">
					<div style="padding-left: 200px">
						<button onclick="window.location='{{ URL::to('login') }}'" id="btnBack" class="btn btn-primary btn-sm" >Back</button>
            {{ Form::submit('Reset', array('id'=>'send','class' => 'btn btn-sm btn-success')) }}
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
