<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Edit TestCase</title>
	@include('includes.head')

<style type="text/css">
   .row{
    margin-bottom: 5px !important;
   }
</style>

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
      var no = 1;
      var noout = 1;
      var json_input = $.parseJSON( $('#json_input').val() );
      var json_output = $.parseJSON( $('#json_output').val() );

      var inputNumber = json_input.length;
      for( var i=0; i < inputNumber; i++ ){
				var input_str = String.format(input_const,no);

        $('#input').append(input_str);
				$("#input_" + no).val(json_input[i].value);
				$("#input_type_" + no).val(json_input[i].type);
        no +=1;
      }

      var inputNumberOutput = json_output.length;
      for( var i=0; i < inputNumberOutput; i++ ){
				var output_str = String.format(ouput_const,noout);

				$('#output').append(output_str);
				$("#output_" + noout).val(json_output[i].value);
				$("#output_type_" + noout).val(json_output[i].type);
        noout +=1;
      }

      $("#addInput").click(function() {
				var input_str = String.format(input_const,no);
				$('#input').append(input_str);
				no +=1;
      });

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

    <div class="content-wrapper">
        <div class="container">
		<div class="row">
		<div class="col-md-12">

                    <!-- Advanced Tables -->
         {{ Form::open(['url' => ['updateTestCase',$testCase->id]]) }}
		 <div class="panel panel-default">			
			<div class="panel-body">	
			<div class="panel panel-info">
				                <div class="panel-heading">
				                   Test Case [Edit]
				                </div> 
				                <input type="hidden" id="json_input" name="json_input" value="{{$testCase->input}}">
								<input type="hidden" id="json_output" name="json_output" value="{{$testCase->output}}">
				                <div class="panel-body">
				                <div class="row">
									<div class="col-xs-4 ">
										<label >Test Case Input</label>			
									</div>
									<div class="col-xs-4 ">
										<label >Test Case Output</label>			
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4 ">
										<div id="input"></div>		
									</div>
									<div class="col-xs-4 ">
										<div id="output"></div>			
									</div>
								</div>
								 <div class="row">
									<div class="col-xs-4 ">
										<div id="addInput" class="btn btn-warning">Add new input</div>		
									</div>
									<div class="col-xs-4 ">
										<div id="addOutput" class="btn btn-warning">Add new output</div>			
									</div>
								</div>
								
		                            </br>
								<div class="row">
		                            <div class="col-xs-4 ">
		                            	<button onclick="window.location='{{ URL::to('editQuestion') }}'" id="btnBack" class="btn btn-primary">Back</button>
            							<button id="save" class="btn btn-success">Save</button>
			                        </div>
								</div>
	                            </div>
			</div>
			</br>

			</div>
	       </div>

            {{ Form::close()  }}
            
           </div>
		   <!--End Advanced Tables -->

</div>
</div>
</div>
</body>

</html>
