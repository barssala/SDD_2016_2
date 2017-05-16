<!DOCTYPE html>
<html >
	<head>
    @include('includes.head')
    <title>Test Case [Add]</title>
		<script>
		$( document ).ready(function() {
			var no = 2;
			$("#addInput").click(function() {
				$('#input').append('</br><input required="required" class="input-xlarge" placeholder="Input" name="input_'+no+'"" id="input_'+no+'"" type="text">');
				$('#input').append('<select required="required" class="input-xlarge" name="input_type_'+no+'"" id="input_type_'+no+'""><option value="integer">integer</option><option value="double">double</option><option value="string">string</option><option value="list">list</option></select>');
				no +=1;
			});

			var noout = 2;
			$("#addOutput").click(function() {
				$('#output').append('</br><input required="required" class="input-xlarge" placeholder="Output" name="output_'+no+'"" id="output_'+no+'"" type="text">');
				$('#output').append('<select required="required" class="input-xlarge" name="output_type_'+no+'"" id="output_'+no+'""><option value="integer">integer</option><option value="double">double</option><option value="string">string</option><option value="list">list</option></select>');
				noout +=1;
			});

			$("#save").click(function() {

				var stringInput = "["
				for (i = 0; i < no - 1; i++) {
					var value = document.getElementById("input_" + (i+1)).value;
					var type = document.getElementById("input_type_" + (i+1)).value;
					var json = '{"value":"' + value + '","type":"' + type + '"},';
					stringInput = stringInput + json;
				}
				stringInput = stringInput.substring(0, stringInput.length - 1) + ']';

				var stringOutput = "["
				for (i = 0; i < noout - 1; i++) {
					var value = document.getElementById("output_" + (i+1)).value;
					var type = document.getElementById("output_type_" + (i+1)).value;
					var json = '{"value":"' + value + '","type":"' + type + '"},';
					stringOutput = stringOutput + json;
				}
				stringOutput = stringOutput.substring(0, stringOutput.length - 1) + ']';

				//console.log(stringInput);
				//console.log(stringOutput);

				var inputJson = JSON.stringify( $("#input :input").serializeArray() );
				var outputJson = JSON.stringify( $("#output :input").serializeArray() );


				//console.log("inputJson:" + inputJson);

				$("#json_input").val(stringInput);
				$("#json_output").val(stringOutput);
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
					{{ Form::text('input_1', null, array('required', 'id'=>'input_1','class'=>'input-xlarge', 'placeholder'=>'Input')) }}
					{{ Form::select('input_type_1', [
                               'integer' => 'integer',
                               'double' => 'double',
                               'string' => 'string',
                               'list' => 'list'],
                               null,
                               ['class' => 'btn dropdown-toggle btn-default',
                                'style' => 'text-align: center', 'id'=>'input_type_1']
                            ) }}
				</div>
			</div>

			<div class="control-group" style="display:inline-block;" >
				<label class="control-label" for="description">Test Case Output</label>
				<div id="output">
					{{ Form::text('output_1', null, array('required', 'class'=>'input-xlarge', 'id'=>'output_1', 'placeholder'=>'Output')) }}
					{{ Form::select('output_type_1', [
                               'integer' => 'integer',
                               'double' => 'double',
                               'string' => 'string',
                               'list' => 'list'],
                               null,
                               ['class' => 'btn dropdown-toggle btn-default',
                                'style' => 'text-align: center', 'id'=>'output_type_1']
                            ) }}
				</div>
			</div>
			</br>
			<div id="addInput" class="btn btn-success">Add new input</div>
			<div id="addOutput" class="btn btn-success">Add new output</div>
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
