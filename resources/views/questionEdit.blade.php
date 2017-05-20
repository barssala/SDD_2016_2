<!DOCTYPE html>
<html >
	<head>
        @include('includes.head')
        <title>Question [Edit]</title>

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
							'<td><a href="../editTestCase/' + tcId_arr[i] + '"><span class="glyphicon glyphicon-cog"></span></a>'+
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
    	<div class="content-wrapper">
        	<div class="container">
			    {{ Form::open(['url' => ['updateQuestion',$question->id]]) }}
					<fieldset>
						<div class="col-md-6">
				            <div class="panel panel-info">
				                <div class="panel-heading">
				                    Question [Edit]
				                </div> 
				                <div class="panel-body">

					                <div class="form-group">
	                                	<label for="assignment">Question Name</label>
	                                	{{ Form::text('name', $question->name, 
                        					array('required', 
	                                        	'class'=>'form-control', 
	                                        	'placeholder'=>'Question')) }}
	                                    <p class="help-block">Question name, without spaces</p>
	                                </div>

	                                <div class="form-group">
		                                <label for="description">Description</label>
		                                {{ Form::textarea('description', $question->description, 
		                                      array('required', 
		                                        'class'=>'form-control', 
		                                        'placeholder'=>'Description')) }}
		                                <p class="help-block">Please input description</p>                   
		                            </div>

		                            <div class="form-group">
		                                <label for="Guideline">Guideline</label>
		                                {{ Form::textarea('guideline', $question->guideline, 
		                                      array('required', 
		                                        'class'=>'form-control', 
		                                        'placeholder'=>'Guideline')) }}
		                                <p class="help-block">Please input Guideline</p>                   
		                            </div>

		                            <div class="form-group">
	                                	<label for="score">Score</label>
	                                	{{ Form::text('score', $question->score, 
                        					array('required', 
	                                        	'class'=>'form-control', 
	                                        	'placeholder'=>'Score')) }}
	                                </div>

	                                <div class="form-group">
		                                <label for="status">Status</label>
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
			                                <button type="button" class="btn btn-success" onclick="">Back</button>
			                            </div>
			                        </div>

	                            </div>
			               	</div>
			            </div>
					</fieldset>
			    {{ Form::close()  }}
			</div>
		</div>

		<div class="container">
	        <div class="row">
	                <div class="col-md-11">
	                  <!-- Table of Question -->
	                    <div class="panel panel-default">
	                        <div class="panel-heading">
	                        	Table of Test case
	                        	<button class="btn btn-primary btn-xs pull-right" onclick="window.location='{{ url("createTestCase/$question->id") }}'"> 
	                        		<span class="glyphicon glyphicon-plus glyphicon"></span> 
	                        		Add New
	                        	</button>
	                        </div>
	                        <div class="panel-body">
	                            <div class="table-responsive">
	                                <table id = "testCase-table" class="table table-striped table-bordered table-hover">
	                                    <thead>
	                                        <tr>
	                                            <th>No.</th>
	                                            <th>Input</th>
	                                            <th>Output</th>
	                                            <th></th>
	                                        </tr>
	                                    </thead>
	                                    <tbody></tbody>
	                               </table>
	                            </div>
	                        </div>
	                    </div>
					</div>
			 </div>
		</div>
	</body>
</html>
