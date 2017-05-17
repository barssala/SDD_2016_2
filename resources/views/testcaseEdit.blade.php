<!DOCTYPE html>
<html >
	<head>
    @include('includes.head')
    <title>Test Case [Edit]</title>
		<script>
		$( document ).ready(function() {
      var no = 1;
      var noout = 1;
      var json_input = $.parseJSON( $('#json_input').val() );
      var json_output = $.parseJSON( $('#json_output').val() );

      var inputNumber = json_input.length;
      for( var i=0; i < inputNumber; i++ ){
        $('#input').append('<input required="required" class="input-xlarge" placeholder="Input" name="'+json_input[i].name
            +'" id="input_' + (i+1) + '" value="'+json_input[i].value+'" type="text">');

        $('#input').append('<select required="required" class="input-xlarge" name="input_type_'+no+'"" id="input_type_'+no+'""><option value="integer">integer</option><option value="double">double</option><option value="string">string</option><option value="list">list</option></select></br>');
        no +=1;
      }

      var inputNumberOutput = json_output.length;
      for( var i=0; i < inputNumberOutput; i++ ){
                $('#output').append('<input required="required" class="input-xlarge" placeholder="Output" name="'+json_output[i].name+'" value="'+json_output[i].value+'" type="text">');

                $('#output').append('<select required="required" class="input-xlarge" name="output_type_'+no+'"" id="output_type_'+no+'""><option value="integer">integer</option><option value="double">double</option><option value="string">string</option><option value="list">list</option></select>' +
                            '<span id="'+(i+1)+'" class="glyphicon glyphicon-trash" style="cursor:pointer"></span>');
                noout +=1;
      }

      $("#addInput").click(function() {
                $('#input').append('</br><input required="required" class="input-xlarge" placeholder="Input" name="input_'+no+'"" id="input_'+no+'"" type="text">');
                $('#input').append('<select required="required" class="input-xlarge" name="output_type_'+no+'"" id="input_type_'+no+'""><option value="integer">integer</option><option value="double">double</option><option value="string">string</option><option value="list">list</option></select>');
                no +=1;
            });

            $("#addOutput").click(function() {
                $('#output').append('</br><input required="required" class="input-xlarge" placeholder="Output" name="output_'+no+'"" id="output_'+no+'"" type="text">');
                $('#output').append('<select required="required" class="input-xlarge" name="input_type_'+no+'"" id="output_'+no+'""><option value="integer">integer</option><option value="double">double</option><option value="string">string</option><option value="list">list</option></select>');
                noout +=1;
            });

      //remove input output
      $('#output').on('click', 'span', function(){
        $( 'input[name=input_' + $(this).attr('id') +']' ).next().remove();
        $( 'input[name=input_' + $(this).attr('id') +']' ).remove();
        $( 'input[name=output_' + $(this).attr('id') +']' ).remove();
        $(this).next().remove();
        $(this).remove();
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

    {{ Form::open(['url' => ['updateTestCase',$testCase->id]]) }}
		<fieldset>
			<div id="legend">
				<legend class="">Test Case [Edit]</legend>
			</div>
			<input type="hidden" id="json_input" name="json_input" value="{{$testCase->input}}">
			<input type="hidden" id="json_output" name="json_output" value="{{$testCase->output}}">

			<div class="io-box">
			<div class="control-group" style="display:inline-block;" >
				<label class="control-label" for="testcase">Test Case Input</label>
				<div id="input">
				</div>
			</div>

			<div class="control-group" style="display:inline-block;" >
				<label class="control-label" for="description">Test Case Output</label>
				<div id="output">
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
