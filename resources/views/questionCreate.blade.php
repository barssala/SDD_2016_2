<!DOCTYPE html>
<html >
	<head>
        @include('includes.head')
        <title>Question [Add]</title>		
    </head>

    <body>
	
    {{ Form::open(['url' => 'saveQuestion']) }}
		<fieldset>
			<div id="legend">
				<legend class="">Question [Add]</legend>
			</div>
			<input type="hidden" id="assignment_id" name="assignment_id" value="{{ $assignment_id[0] }}">
			<div class="control-group">
			
				<label class="control-label" for="question">Question Name</label>
				<div class="controls">
					{{ Form::text('name', null, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Question')) }}						
					<p class="help-block">Question name, without spaces</p>
				</div>
			</div>
			
			<div class="control-group">				
				<label class="control-label" for="description">Description</label>
				<div class="controls">
					{{ Form::textarea('description', null, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Description')) }}
					<p class="help-block">Please input description</p>
				</div>
			</div>
			
			<div class="control-group">				
				<label class="control-label" for="Guideline">Guideline</label>
				<div class="controls">
					{{ Form::textarea('guideline', null, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Guideline')) }}
					<p class="help-block">Please input Guideline</p>
				</div>
			</div>

			<div class="control-group">				 
			  <label class="control-label" for="score">Score</label>
			  <div class="controls">
				{{ Form::text('score', null, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Score')) }}
			  </div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="status">Status</label>
				<div class="controls">
				{{ Form::radio('status', "ACTIVE", true) }}
				{{ Form::label('open', 'ACTIVE') }}
				{{ Form::radio('status', "INACTIVE", false) }}
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
				
	</body>
</html>