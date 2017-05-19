<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Edit User</title>
	@include('includes.head')
</head>
<body>

    <div class="content-wrapper">
        <div class="container">

        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">EDIT USER {{$user->user}}</h4>  
            </div>
        </div>

		<div class="row">
		<div class="col-md-12">

                    <!-- Advanced Tables -->
        <!-- {{ Form::open(['url' => ['updateUser', $user->id], 'method' => 'post']) }} -->
        {{ Form::open(['url' => ['updateUser',$user->id]]) }}
		 <div class="panel panel-default">			
			<div class="panel-body">	
			    <div class="table-responsive">

				    <!-- <div class="row">
						<div class="col-md-2">
							<label for="idUser">ID : </label>			
						</div>
						<div class="col-xs-4 ">
							<input type="text" class="form-control" id="idUser" name="idUser" readonly value="000010" style="text-align: right" style="background-color:#eee !important">
						</div>            
					</div>  -->
					<div class="row">
						<div class="col-md-2">
							<label for="userName">Username : </label>			
						</div>
						<div class="col-xs-4 ">
							<!-- <input type="text" class="form-control" id="userName" name="userName" style="text-align: right"> -->
                            {{ Form::text('username', $user->user,
                                  array('required', 
                                    'class'=>'form-control',
                                    'style'=>'text-align: left',
                                    'readonly', 
                                    'placeholder'=>'Username')) }}
						</div>            
					</div>

					<div class="row">
						<div class="col-md-2">
							<label for="userName">FirstName : </label>			
						</div>
						<div class="col-xs-4 ">
							<!-- <input type="text" class="form-control" id="Firstname" name="Firstname" > -->
                        {{ Form::text('firstname', $user->firstname, 
                                  array('required', 
                                    'class'=>'form-control')) }}
						</div>            
					</div>
					<div class="row">
						<div class="col-md-2">
							<label for="lastname">LastName : </label>			
						</div>
						<div class="col-xs-4 ">
							<!-- <input type="text" class="form-control" id="lastname" name="lastname" > -->
                            {{ Form::text('lastname', $user->lastname, 
                                  array('required', 
                                    'class'=>'form-control')) }}
						</div>            
					</div>	
					<div class="row">
						<div class="col-md-2">
							<label for="Email">E-mail : </label>			
						</div>
						<div class="col-xs-4 ">
							<!-- <input type="text" class="form-control" id="Email" name="Email" > -->
                            {{ Form::text('email', $user->email, 
                                  array('required', 
                                    'readonly',
                                    'class'=>'form-control')) }}
						</div>            
					</div>						
					<div class="row">
						<div class="col-md-2">
							<label for="role">Type : {{$role_name}}</label>			
						</div>
						<div class="col-xs-4 ">
						<!-- <div class="col-xs-4 ">
							<select class="btn dropdown-toggle btn-default" id="role" name="role" style="text-align: center">
							  <option value="admin">Administrator</option>
							  <option value="teacher">Professor</option>
							  <option value="student">Student</option>
                              <option value="ta">TA</option>
							</select> -->
                            {{ Form::select('role', [
                               'admin' => 'Administrator',
                               'teacher' => 'Professor',
                               'student' => 'Student',
                               'ta' => 'TA'],
                               $role_name,
                               ['class' => 'btn dropdown-toggle btn-default',
                                'style' => 'text-align: center']
                            ) }}
                        </div> 
						</div>            
					</div>
				</br>
				<div class="row">		
					<div style="padding-left: 200px">
						<!-- <button type="button" class="btn btn-sm btn-success" >Save</button> -->
						<button onclick="window.location='{{ URL::to('userLists') }}'" id="btnBack" class="btn btn-primary btn-sm" >Back</button>
                        {{ Form::submit('Save', array('class' => 'btn btn-sm btn-success')) }}
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
@include('includes.footer')
</body>

</html>
