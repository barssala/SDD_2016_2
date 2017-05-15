<!DOCTYPE html>
<html >
	<head>
        @include('includes.head')
        <title>Question [Add]</title>

				<script>
				$( document ).ready(function() {
		      var json_input = $.parseJSON( $('#json_input').val() );
		      var json_output = $.parseJSON( $('#json_output').val() );
		      var inputNumber = json_input.length;
		      for( var i=0; i < inputNumber; i++ ){
		        $('#testCase-table tbody').append(
							'<tr>'+
								'<td>'+ (i+1) +'</td>'+
								'<td>'+ json_input[i].value +'</td>'+
								'<td>'+ json_output[i].value +'</td>'+
							'</tr>'
						);
		      }
				});
				</script>

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
			<input type="hidden" id="json_input" name="json_input" value="{{$testCase->input}}">
			<input type="hidden" id="json_output" name="json_output" value="{{$testCase->output}}">
		@if(count($testCase) == 0)
			<a href="../createTestCase/{{ $question->id }}" class="btn btn-success">Add New</a>
		@else
			<a href="../editTestCase/{{ $testCase->id }}"><span class="glyphicon glyphicon-cog"></span></a>
			<a href="../deleteTestCase/{{ $testCase->id }}"><span class="glyphicon glyphicon-trash"></span></a>
		@endif
		<table id = "testCase-table" class="table table-hover">
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
				{{-- @if(!is_null($testCases))
					@foreach ($testCases as $no => $testCase)
					  <tr>
						<td>{{$no+1}}</td>
						<td>{{$testCase->input}}</td>
						<td>{{$testCase->output}}</td>
						<td>
							<a href="../editTestCase/{{ $testCase->id }}"><span class="glyphicon glyphicon-cog"></span></a>
							<a href="../deleteTestCase/{{ $testCase->id }}"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					@endforeach
				@endif --}}
			</tbody>
		</table>
	</div>

	</body>
</html>
