<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('includes.head')

    <script>
    $( document ).ready(function() {

      @if(Session::has('message'))
        <?php echo 'alert("'. Session::get('message') .'");'  ?>
      @endif

    });
    </script>
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
			    <div class="table-responsive">

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
