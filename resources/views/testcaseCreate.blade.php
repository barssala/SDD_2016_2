<!DOCTYPE html>
<html >
	<head>
    @include('includes.head')
    <title>Test Case [Add]</title>
		<script>

				String.format = function() {
			    var theString = arguments[0];
			    for (var i = 1; i < arguments.length; i++) {
			        var regEx = new RegExp("\\{" + (i - 1) + "\\}", "gm");
			        theString = theString.replace(regEx, arguments[i]);
			    }
					return theString;
				}

				var input_const = '<div id="input_div">'
													+'<input required="required" class="input-xlarge" placeholder="Input" id="input_{0}" type="text"></input>'
													+'<select class="btn dropdown-toggle btn-default" style="text-align: center" id="input_type_{0}""><option value="integer">integer</option><option value="double">double</option><option value="string">string</option><option value="list">list</option></select>'
													+'<span class="glyphicon glyphicon-trash" style="cursor:pointer"></span>'
													+'</div>';
				var ouput_const = '<div id="output_div">'
													+'<input required="required" class="input-xlarge" placeholder="Output" id="output_{0}" type="text"></input>'
													+'<select class="btn dropdown-toggle btn-default" style="text-align: center"  id="output_type_{0}"><option value="integer">integer</option><option value="double">double</option><option value="string">string</option><option value="list">list</option></select>'
													+'<span class="glyphicon glyphicon-trash" style="cursor:pointer"></span>'
													+'</div>';

			$( document ).ready(function() {
				var no = 2;
				$("#addInput").click(function() {
					var input_str = String.format(input_const,no);
					$('#input').append(input_str);
					no +=1;
				});

				var noout = 2;
				$("#addOutput").click(function() {
					var output_str = String.format(ouput_const,noout);
					$('#output').append(output_str);
					noout +=1;
				});
				//remove input output
				$('#input').on('click', 'span', function(){
					$(this).parent("div").remove();
				});

				$('#output').on('click', 'span', function(){
					$(this).parent("div").remove();
				});
				//

				$("#save").click(function() {
					var stringInput = "[";

					$("#input div").each(function(){
						var value = $(this).children("input").val();
						var type = $(this).children("select").val();
						var json = '{"value":"' + value + '","type":"' + type + '"},';
						stringInput = stringInput + json;
					});
					stringInput = stringInput.substring(0, stringInput.length - 1) + ']';

					var stringOutput = "[";

					$('#output div').each(function(){
						var value = $(this).children("input").val();
						var type = $(this).children("select").val();
						var json = '{"value":"' + value + '","type":"' + type + '"},';
						stringOutput = stringOutput + json;
					});
					stringOutput = stringOutput.substring(0, stringOutput.length - 1) + ']';

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
			<div class="control-group" style="display:inline-block; vertical-align: top;" >
				<label class="control-label" for="testcase">Test Case Input</label>
				<div id="input">
					<div id="input_div">
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
					<span class="glyphicon glyphicon-trash" style="cursor:pointer"></span>
					</div>
				</div>
			</div>

			<div class="control-group" style="display:inline-block; vertical-align: top;" >
				<label class="control-label" for="description">Test Case Output</label>
				<div id="output">
					<div id="output_div">
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
					<span class="glyphicon glyphicon-trash" style="cursor:pointer"></span>
					</div>
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
