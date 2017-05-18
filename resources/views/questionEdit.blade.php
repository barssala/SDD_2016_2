<!DOCTYPE html>
<html >
	<head>
        @include('includes.head')
        <title>Question [Add]</title>

				<script>
				$( document ).ready(function() {

					var tcId_arr = [@foreach ($testCases as $no => $testCase)
											   	'{!! $testCase->id !!}',
												 @endforeach ];

					var tcInput_arr = [@foreach ($testCases as $no => $testCase)
													   	'{!! $testCase->input !!}',
														 @endforeach ];

				 var tcOutput_arr = [@foreach ($testCases as $no => $testCase)
													   	'{!! $testCase->output !!}',
														 @endforeach ];

					var tcNo = tcId_arr.length;
					for (var i = 0; i < tcNo; i++) {
						$('#testCase-table tbody').append(
							'<tr>'+
								'<td>'+ (i+1) +'</td>'+
								'<td></td>'+
								'<td></td>'+
								'<td><a href="../editTestCase/'+tcId_arr[i]+'"><span class="glyphicon glyphicon-cog"></span></a>'+
										'<a href="../deleteTestCase/'+tcId_arr[i]+'"><span class="glyphicon glyphicon-trash"></span></a></td>'+
							'</tr>');

						var json_input = $.parseJSON( tcInput_arr[i] );
 	 		      var json_output = $.parseJSON( tcOutput_arr[i] );
 	 		      var maxLen = json_input.length > json_output.length ? json_input.length:json_output.length;
 	 		      for( var j=0; j < maxLen; j++ ){
							var input = '';
							var output = '';
							if (typeof json_input[j] !== 'undefined') input = json_input[j].value + '(' + json_input[j].type +')';
							if (typeof json_output[j] !== 'undefined') output = json_output[j].value + '(' + json_output[j].type +')';

 	 		        $('#testCase-table tbody').append(
 	 							'<tr>'+
 	 								'<td></td>'+
 	 								'<td>'+ input +'</td>'+
 	 								'<td>'+ output +'</td>'+
									'<td></td>'+
 	 							'</tr>'
 	 						);
						}
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
		<a href="../createTestCase/{{ $question->id }}" class="btn btn-success">Add New</a>
		<table id = "testCase-table" class="table table-hover">
			<thead>
				<tr>
					<th>No.</th>
					<th>Input</th>
					<th>Outpput</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>

	</body>
</html>
