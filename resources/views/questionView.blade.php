OCTYPE html>
<html >
	<head>
        @include('includes.head')
        <title>Question [View]</title>

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
				for (var i = 0; i < tcNo; i++) {
					
					var json_input = $.parseJSON( tcInput_arr[i] );
				    var json_output = $.parseJSON( tcOutput_arr[i] );
				    var maxLen = json_input.length > json_output.length ? json_input.length:json_output.length;	
					var mergeNo = '<tr>'+'<th rowspan=\"'+maxLen+'\">'+ (i+1) +'</th>';
					var mergeEdit = '<th rowspan=\"'+maxLen+'\">'+'<a href="../editTestCase/' + tcId_arr[i] + '"><span class="glyphicon glyphicon-cog"></span></a>'+
								'<a href="../deleteTestCase/'+tcId_arr[i]+'"><span class="glyphicon glyphicon-trash"></span></a></th>'
					var endTr =	'</tr>';
					var contentBody = '';
				    for( var j=0; j < maxLen; j++ ){
						var input = '';
						var output = '';
						if (typeof json_input[j] !== 'undefined') input = json_input[j].value + '(' + json_input[j].type +')';
						if (typeof json_output[j] !== 'undefined') output = json_output[j].value + '(' + json_output[j].type +')';
						if( j == 0) {
							if(role != 3){
								contentBody = mergeNo+'<td>'+ input +'</td>'+'<td>'+ output +'</td>'+mergeEdit+''+endTr
							}else{
								contentBody = mergeNo+'<td>'+ input +'</td>'+'<td>'+ output +'</td>'+endTr
								
							}
								
													
						}else{
							contentBody = contentBody+ '<tr><td>'+ input +'</td>'+'<td>'+ output +'</td></tr>'
						}					
																
					}
					$('#testCase-table tbody').append(							
								contentBody
								
						);

		
				}
			});
		</script>

    </head>

    <body>
	<div class="content-wrapper">
	<div class="container">
	    <div class="row">
	        <div class="col-md-4 col-sm-4 col-xs-12">
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

			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="panel panel-success">
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
									<th>Action</th>
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
	</div>
			@include('includes.footer')
	</body>
</html>
