<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Register</title>
    @include('includes.head')
</head>
<body>
    <div class="content-wrapper">
        <div class="container">

        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">CREATE NEW USER</h4>  
            </div>
        </div>

		<div class="row">
		<div class="col-md-12">

        <!-- Advanced Tables -->
        {{ Form::open(['url' => 'createNewUser']) }}
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
                            {{ Form::text('username', null, 
                                  array('required', 
                                    'class'=>'form-control',
                                    'style'=>'text-align: left', 
                                    'placeholder'=>'Username')) }}
						</div>            
					</div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="userName">Password : </label>           
                        </div>
                        <div class="col-xs-4 ">
                            <!-- <input type="text" class="form-control" id="userName" name="userName" style="text-align: right"> -->
                            {{ Form::password('password', null, 
                                  array('required', 
                                    'class'=>'form-control',
                                    'style'=>'text-align: right', 
                                    'placeholder'=>'Username')) }}
                        </div>            
                    </div>

					<div class="row">
						<div class="col-md-2">
							<label for="userName">FirstName : </label>			
						</div>
						<div class="col-xs-4 ">
							<!-- <input type="text" class="form-control" id="Firstname" name="Firstname" > -->
                        {{ Form::text('firstname', null, 
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
                            {{ Form::text('lastname', null, 
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
                            {{ Form::text('email', null, 
                                  array('required', 
                                    'class'=>'form-control')) }}
						</div>            
					</div>						
					<div class="row">
						<div class="col-md-2">
							<label for="role">Type : </label>			
						</div>
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
                               null,
                               ['class' => 'btn dropdown-toggle btn-default',
                                'style' => 'text-align: center']
                            ) }}
						</div>            
					</div> 	
					<!-- <div class="row">
						<div class="col-md-2">
							<label for="faculty">Faculty : </label>			
						</div>
						<div class="col-xs-4 ">
							<select class="btn dropdown-toggle btn-default" id="faculty" name="faculty" style="text-align: center"">
							<option value="">-----Select Faculty-----</option>
							  <option value="en">Engineering</option>
							  <option value="sc">Science</option>
							  <option value="ed">Education</option>
							</select>
						</div>            
					</div> -->
				</br>
				<div class="row">		
					<div style="padding-left: 200px">
						<button onclick="window.location='{{ URL::to('userLists') }}'" id="btnBack" class="btn btn-primary btn-sm" >Back</button>
						<!-- <button type="button" class="btn btn-sm btn-success" >Save</button> -->
                        {{ Form::submit('Save', array('class' => 'btn btn-sm btn-success')) }}
						<button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ URL::to('createUser') }}'">Cancel</button>    					
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
