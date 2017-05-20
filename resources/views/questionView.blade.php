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
				var role = '<?php echo session("user")->role_id ?>';
				console.log(role);
				for (var i = 0; i < tcNo; i++) {
					var action = '';
					if (role !== 3) {
						action = '<td><a href="../editTestCase/' + tcId_arr[i] + '"><span class="glyphicon glyphicon-cog"></span></a>'+
								'<a href="../deleteTestCase/'+tcId_arr[i]+'"><span class="glyphicon glyphicon-trash"></span></a></td>';
					}
					$('#testCase-table tbody').append(
						'<tr>'+
							'<td>'+ (i+1) +'</td>'+
							'<td></td>'+
							'<td></td>'+
							'<td><a href="../editTestCase/' + tcId_arr[i] + '"><span class="glyphicon glyphicon-cog"></span></a>'+
								'<a href="../deleteTestCase/'+tcId_arr[i]+'"><span class="glyphicon glyphicon-trash"></span></a></td>' 
								//: '' )
								+
						'</tr>');

					var json_input = $.parseJSON( tcInput_arr[i] );
				    var json_output = $.parseJSON( tcOutput_arr[i] );
				    var maxLen = json_input.length > json_output.length ? json_input.length:json_output.length;
				    for( var j=0; j < maxLen; j++ ){
						var input = '';
						var output = '';

						if (typeof json_input[j] !== 'undefined') input = json_input[j].value + '(' + json_input[j].type +')';
						if (typeof json_output[j] !== 'undefined') output = json_output[j].value + '(' + json_output[j].type +')';
						var column = '';
						if (role === 3) {
							column = '<td></td>';
						}
				        $('#testCase-table tbody').append(
							'<tr>'+
								'<td></td>'+
								'<td>'+ input +'</td>'+
								'<td>'+ output +'</td>' +
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
					<fieldset>
						<div class="col-md-6">
				            <div class="panel panel-info">
				                <div class="panel-heading">
				                    Question [Edit]
				                </div> 
				                <div class="panel-body">

					                <div class="form-group">
	                                	<label for="assignment">Question Name</label>
	                                	<div class="controls">
	                                		{{$question->name}}
	                                	</div>
	                                </div>

	                                <div class="form-group">
		                                <label for="description">Description</label>
		                                <div class="controls">
		                                	{{$question->description}}
		                                </div>
		                            </div>

		                            <div class="form-group">
		                                <label for="Guideline">Guideline</label>
		                                <div class="controls">
		                                	{{$question->guideline}}
		                                </div>
		                            </div>

		                            <div class="form-group">
	                                	<label for="score">Score</label>
	                                	<div class="controls">
	                                		{{$question->score}}
	                                	</div>
	                                </div>

	                                <div class="form-group">
		                                <label for="status">Status</label>
		                                <div class="controls">
		                                	{{ $question->active ? "ACTIVE" : "INACTIVE" }}
			                            </div>
		                            </div>

		                            <div class="control-group">
			                            <div class="controls">
			                            <a href="../viewAssignment/{{ $question->assignment_id }}" class="btn btn-success">Back</a>
			                            </div>
			                        </div>

	                            </div>
			               	</div>
			            </div>
					</fieldset>
			</div>
		</div>

<?php if ((session('user')->role_id != 3)): ?>
		<div class="container">
	        <div class="row">
	                <div class="col-md-11">
	                  <!-- Table of Question -->
	                    <div class="panel panel-default">
	                        <div class="panel-heading">
	                        	Table of Test case
	                        </div>
	                        <div class="panel-body">
	                            <div class="table-responsive">
	                                <table id = "testCase-table" class="table table-striped table-bordered table-hover">
	                                    <thead>
	                                        <tr>
	                                            <th>No.</th>
	                                            <th>Input</th>
	                                            <th>Output</th>
	                                            <?php if ((session('user')->role_id != 3)): ?>
	                                            	<th></th>
	                                            <?php endif; ?>
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
		<?php endif; ?>
	</body>
</html>
