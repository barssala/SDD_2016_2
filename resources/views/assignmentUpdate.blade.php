<!DOCTYPE html>
<html >
	<head>
        <meta charset="utf-8">
        <title>Assignment [Add]</title>
        <link rel="stylesheet" href="css/list.css">

		@include('includes.head')
		</head>

    <body>
	
    {{ Form::open(['url' => 'saveAssignment']) }}
		<fieldset>
			<div id="legend">
				<legend class="">Assignment [Add]</legend>
			</div>

			<div class="control-group">
				<label class="control-label" for="assignment">Assignment Name</label>
				<div class="controls">
					{{ Form::text('name', $assignment->name, 
						  array('required', 
							'class'=>'input-xlarge')) }}
				
					<p class="help-block">Assignment name, without spaces</p>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="description">Description</label>
				<div class="controls">
					{{ Form::textarea('description', $assignment->description, 
						  array('required', 
							'class'=>'input-xlarge')) }}
					<p class="help-block">Please input description</p>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="duedate">Due Date</label>
				<div class="controls">
					{{ Form::date('duedate', $assignment->duedate) }}
					<p class="help-block">Choose Due Date</p>
				 </div>
			</div>

			<div class="control-group">
				<label class="control-label" for="status">Status</label>
				<div class="controls">
					{{ Form::radio('status', "Open", $assignment->active ? "ACTIVE" : "INACTIVE") }}
					{{ Form::label('open', 'Open') }}
					{{ Form::radio('status', "Close", $assignment->active ? "INACTIVE": "ACTIVE" ) }}
					{{ Form::label('closed', 'Closed') }}
				 </div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button class="btn btn-success">Save</button>
				</div>
			 </div>
		</fieldset>
    {{ Form::close()  }}
	
	 <div class="container">
			<p>Table of Question</p>          
			<a href="../createQuestion/{{ $assignment->id }}" class="btn btn-success">Add New</a>
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
				@if(!is_null($questions))
					@foreach ($questions as $question)
					  <tr>
						<td>{{$question->name}}</td>
						<td>{{$question->description}}</td>
						<td>{{$question->duedate}}</td>
						<td>{{$question->active ? "ACTIVE" : "INACTIVE"}}</td>
						<td>
							<button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$assignment->id}}"><span class="glyphicon glyphicon-cog"></span></button>
							<button class="btn btn-danger btn-xs btn-delete delete-post" value="{{$assignment->id}}"><span class="glyphicon glyphicon-trash"></span></button>
						</td>
					@endforeach
				@endif
				</tbody>
			</table>
		</div>	
	</body>
	
	
</html>