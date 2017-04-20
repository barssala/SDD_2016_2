<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<html >
    <head>
        <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>User Management</title>
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

	</head>

    <body>
        @include('includes.head')
         <div class="container">

		           <div class="row">
                    <!-- Advanced Tables -->


        <div class="col-md-12">
		<div class="panel panel-default">			
			<div class="panel-body">	
			    <div class="table-responsive">

            <div style="width:280px; padding-top: 50px; padding-bottom: 50px; margin: 0px auto">
                {{ Form::open(array('url' => 'login')) }}
                    <div style="padding-bottom: 20px;">
                        <h2>Login to Grader </h2>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Student id"> -->
                        {{ Form::text('email', null, 
                              array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Email')) }}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                        {{ Form::password('password', null, 
                              array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Password')) }}
                    </div>
                    <div>
                        <a href="https://www.google.co.th"><p style="text-align: right">Forgot password</p></a>
                        <a href="{{ URL::to('register') }}"><p style="text-align: right">Register</p></a>
                    </div>
                    <button type="submit" class="btn btn-default">Log In</button>
                {{ Form::close() }}
            </div>
        </div> 

		</div>
		</div>
		</div>
		</div>
		</div>
    </body>
</html>