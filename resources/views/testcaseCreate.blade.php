<!DOCTYPE html>
<html >
	<head>
    @include('includes.head')
    <title>Test Case [Add]</title>
		<script>
		$( document ).ready(function() {
			var no = 2;
			$("#addInputOutput").click(function() {
				$('#input').append('</br><input required="required" class="input-xlarge" placeholder="Input" name="input_'+no+'"" type="text">');
				$('#output').append('</br><input required="required" class="input-xlarge" placeholder="Output" name="output_'+no+'"" type="text">');
				no +=1;
			});

			$("#save").click(function() {
				var inputJson = JSON.stringify( $("#input :input").serializeArray() );
				var outputJson = JSON.stringify( $("#output :input").serializeArray() );

				$("#json_input").val(inputJson);
				$("#json_output").val(outputJson);
			});
		});
		</script>
  </head>

    <body>

    {{ Form::open(['url' => ['saveTestCase',$question_id[0]]]) }}
		<fieldset>
			<div id="legend">
				<legend class="">Test Case [Add]</legend>
			</div>
			<input type="hidden" id="question_id" name="question_id" value="{{ $question_id[0] }}">
			<input type="hidden" id="json_input" name="json_input" value="">
			<input type="hidden" id="json_output" name="json_output" value="">

			<div class="io-box">
			<div class="control-group" style="display:inline-block;" >
				<label class="control-label" for="testcase">Test Case Input</label>
				<div id="input">
					{{ Form::text('input_1', null, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Input')) }}
				</div>
			</div>

			<div class="control-group" style="display:inline-block;" >
				<label class="control-label" for="description">Test Case Output</label>
				<div id="output">
					{{ Form::text('output_1', null, array('required', 'class'=>'input-xlarge', 'placeholder'=>'Output')) }}
				</div>
			</div>
			</br>
			<div id="addInputOutput" class="btn btn-success">Add new input/output</div>
		</div>
			<div class="control-group">
				<div class="controls">
					<button id="save" class="btn btn-success">Save</button>
				</div>
			 </div>
		</fieldset>
    {{ Form::close()  }}

	</body>
</html>
