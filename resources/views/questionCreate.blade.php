<!DOCTYPE html>
<html >
	<head>
        @include('includes.head')
        <title>Question [Add]</title>		
    </head>

    <body>
		<div class="content-wrapper">
        	<div class="container">
    			{{ Form::open(['url' => ['saveQuestion',$assignment_id[0]]]) }}
					<fieldset>
						<div class="col-md-6">
				            <div class="panel panel-info">
				                <div class="panel-heading">
				                    Question [Add]
				                </div> 
				                <div class="panel-body">

					                <div class="form-group">
	                                	<label for="assignment">Question Name</label>
	                                	{{ Form::text('name', null, 
                        					array('required', 
	                                        	'class'=>'form-control', 
	                                        	'placeholder'=>'Question')) }}
	                                    <p class="help-block">Question name, without spaces</p>
	                                </div>

	                                <div class="form-group">
		                                <label for="description">Description</label>
		                                {{ Form::textarea('description', null, 
		                                      array('required', 
		                                        'class'=>'form-control', 
		                                        'placeholder'=>'Description')) }}
		                                <p class="help-block">Please input description</p>                   
		                            </div>

		                            <div class="form-group">
		                                <label for="Guideline">Guideline</label>
		                                {{ Form::textarea('guideline', null, 
		                                      array('required', 
		                                        'class'=>'form-control', 
		                                        'placeholder'=>'Guideline')) }}
		                                <p class="help-block">Please input Guideline</p>                   
		                            </div>

		                            <div class="form-group">
	                                	<label for="score">Score</label>
	                                	{{ Form::text('score', null, 
                        					array('required', 
	                                        	'class'=>'form-control', 
	                                        	'placeholder'=>'Score')) }}
	                                </div>

	                                <div class="form-group">
		                                <label for="status">Status</label>
		                                <div class="controls">
				                            {{ Form::radio('status', "ACTIVE", true) }}
											{{ Form::label('open', 'ACTIVE') }}
											{{ Form::radio('status', "INACTIVE", false) }}
											{{ Form::label('closed', 'INACTIVE') }}
			                            </div>
		                            </div>

		                            <div class="control-group">
			                            <div class="controls">
			                                <button class="btn btn-success">Save</button>
			                                <a href="../editAssignment/{{ $assignment_id }}" class="btn btn-success">Back</a>
			                            </div>
			                        </div>

	                            </div>
			               	</div>
			            </div>
					</fieldset>
			    {{ Form::close() }}	
			</div>
		</div>
	</body>
</html>