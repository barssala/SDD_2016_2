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

    <body style="background: url(http://wallpapershome.com/images/wallpapers/sky-5120x2880-stars-mountains-night-5708.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover; background-size: cover;" >
         <div class="container">

		           <div class="row">
                    <!-- Advanced Tables -->


        <div class="col-md-12">
		<div class="">
			<div class="panel-body">
			    <div class="table-responsive">

            <div style="width:280px; padding-top: 50px; padding-bottom: 50px; margin: 0px auto">
                {{ Form::open(array('url' => 'login')) }}
                    <div style="padding-bottom: 20px; color: #FFFFFF;">
                        <h2 style="font-weight: lighter;">GRADER LOGIN</h2>
                    </div>
                    <div class="form-group" style="color: #FFFFFF">
                        <label for="exampleInputEmail1" style="font-weight: lighter;">Email</label>
                        <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Student id"> -->
                        {{ Form::email('email', null, 
                              array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Email',
                                'style' => 'border-radius: 25px; height: 40px; opacity: 0.7;')) }}
                    </div>
                    <div class="form-group" style="color: #FFFFFF; ">
                        <label for="exampleInputPassword1" style="font-weight: lighter;">Password</label>
                        <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                        {{ Form::password('password',
                              array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Password',
                                'style' => 'border-radius: 25px; height: 40px; opacity: 0.7; ')) }}
                    </div>
                    <button type="submit" class="btn" style="width: 100%; height: 40px; background-color:#339999; border-radius: 25px; color: #FFFFFF; font-weight: lighter;">Log In</button>
                    <div class="col-md-12" style="text-align: left; padding: 0px; margin-top: 5px;">
                        <div class="col-md-4" style="padding: 0px;">
                            <a href="{{ URL::to('register') }}" style="color: #FFFFFF; font-weight: lighter;">Register</a>
                        </div>
                        <div class="col-md-8" style="padding: 0px;text-align: right;">
                            <a href="{{ URL::to('forgotPassword') }}" style="color: #FFFFFF; font-weight: lighter;">Forgot password</a>
                        </div>
                    </div>
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
