<!DOCTYPE html>
<html >
	<head>
        <meta charset="utf-8">
        <title>Assignment [Add]</title>
        <link rel="stylesheet" href="css/list.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>

    <body>

    	<!-- {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
    	{!! Form::close()  !!} -->

		<!-- <form class="form-horizontal" action='{{ action('AssignmentController@saveAssignment') }}' method="POST"> -->
    {{ Form::open(['url' => 'saveAssignment']) }}
 			<fieldset>
 				<div id="legend">
				 	<legend class="">Assignment [Add]</legend>
 				</div>

 				<div class="control-group">
 <!-- Assignment -->
 					<label class="control-label" for="assignment">Assignment Name</label>
 					<div class="controls">
 						<!-- <input type="text" id="Assignment" name="assignment" placeholder="Assignment" class="input-xlarge"> -->
            {{ Form::text('name', null, 
                  array('required', 
                    'class'=>'input-xlarge', 
                    'placeholder'=>'Assignment')) }}
 						<p class="help-block">Assignment name, without spaces</p>
 					</div>
 				</div>
 
 				<div class="control-group">
 <!-- Description -->
 					<label class="control-label" for="description">Description</label>
					<div class="controls">
 						<!-- <textarea rows="5" id="description" placeholder="Description" class="input-xlarge"></textarea> -->
            {{ Form::textarea('description', null, 
                  array('required', 
                    'class'=>'input-xlarge', 
                    'placeholder'=>'Description')) }}
 						<p class="help-block">Please input description</p>
 					</div>
 				</div>
 
 				<div class="control-group">
 <!-- Due Date-->
 					<label class="control-label" for="duedate">Due Date</label>
 					<div class="controls">
 						<!-- <input id="meeting" type="date"/> -->
            {{ Form::date('duedate', null) }}
 						<p class="help-block">Choose Due Date</p>
					 </div>
 				</div>
 
 				<div class="control-group">
 <!-- Status -->
 					<label class="control-label" for="status">Status</label>
 					<div class="controls">
 					  <!-- <label class="radio-inline"><input type="radio" name="optradio">Open</label>
  					<label class="radio-inline"><input type="radio" name="optradio">Close</label> -->
            {{ Form::radio('status', "Open", true) }}
            {{ Form::label('open', 'Open') }}
            {{ Form::radio('status', "Close", false) }}
            {{ Form::label('closed', 'Closed') }}
					 </div>
 				</div>
 
 				<div class="control-group">
 <!-- Save -->
 					<div class="controls">
 						<button class="btn btn-success">Save</button>
				 	</div>
				 </div>

				 <br><br>

				 <div class="container">
  					<h2>Question List</h2>
  					<p>Table of Question</p>          
  					<button class="btn btn-success">Add New</button>
  					<table class="table table-hover">
    					<thead>
      						<tr>
        						<th>No.</th>
        						<th>Question Name</th>
       							<th>Create Date</th>
       							<th></th>
       							<th></th>
      						</tr>
    					</thead>
    					<tbody>
<!--List data -->
    					</tbody>
  					</table>
				</div>


 			</fieldset>
		<!-- </form> -->
    {{ Form::close()  }}
	</body>
</html>