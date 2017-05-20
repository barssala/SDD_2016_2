<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
