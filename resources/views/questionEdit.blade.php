<!DOCTYPE html>
<html >
	<head>
        @include('includes.head')
        <title>Question [Add]</title>		
    </head>

    <body>
	
    {{ Form::open(['url' => ['updateQuestion',$question->id]]) }}
		<fieldset>
			<div id="legend">
				<legend class="">Question [Edit]</legend>
			</div>
			
			<div class="control-group">
			
				<label class="control-label" for="question">Question Name</label>
				<div class="controls">
					{{ Form::text('name', $question->name, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Question')) }}						
					<p class="help-block">Question name, without spaces</p>
				</div>
			</div>
			
			<div class="control-group">				
				<label class="control-label" for="description">Description</label>
				<div class="controls">
					{{ Form::textarea('description', $question->description, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Description')) }}
					<p class="help-block">Please input description</p>
				</div>
			</div>
			
			<div class="control-group">				
				<label class="control-label" for="Guideline">Guideline</label>
				<div class="controls">
					{{ Form::textarea('guideline', $question->guideline, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Guideline')) }}
					<p class="help-block">Please input Guideline</p>
				</div>
			</div>

			<div class="control-group">				 
			  <label class="control-label" for="score">Score</label>
			  <div class="controls">
				{{ Form::text('score', $question->score, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Score')) }}
			  </div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="status">Status</label>
				<div class="controls">
				{{ Form::radio('status', "ACTIVE", $question->active ? 1 : 0) }}
				{{ Form::label('open', 'ACTIVE') }}
				{{ Form::radio('status', "INACTIVE", $question->active ? 0 : 1) }}
				{{ Form::label('closed', 'INACTIVE') }}
				 </div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button class="btn btn-success">Save</button>
				</div>
			 </div>

			 <br><br>				 
		</fieldset>
    {{ Form::close()  }}	
	
	
	<div class="container">
		<h2>Table Of Test Case</h2>
		{{--<a href="../createTestCase/{{ $question->id }}" class="btn btn-success">Add New</a>--}}
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No.</th>
					<th>Input</th>
					<th>Outpput</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
				
	</body>
</html>