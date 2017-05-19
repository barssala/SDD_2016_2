<!DOCTYPE html>
<html >
	<head>
        <meta charset="utf-8">
        <title>Assignment [Add]</title>
        <link rel="stylesheet" href="css/list.css">

		@include('includes.head')
	</head>

    <body>
	<div class="content-wrapper">
    <div class="container">
    {{ Form::open(['url' => ['updateAssignment',$assignment->id]]) }}
		<fieldset>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Assignment [Add]
                </div> 

                <div class="panel-body">
                <form role="form">
                     <div class="form-group">
						<label class="control-label" for="assignment">Assignment Name</label>
						<div class="controls">
					{{ Form::text('name', $assignment->name,  array('required', 'class'=>'input-xlarge', 'placeholder'=>'Assignment')) }}				
						<p class="help-block">Assignment name, without spaces</p>
						</div>
					</div>

			 <div class="form-group">
				<label class="control-label" for="description">Description</label>
				<div class="controls">
					{{ Form::textarea('description', $assignment->description,  array('required', 'class'=>'input-xlarge', 'placeholder'=>'Description')) }}
					<p class="help-block">Please input description</p>
				</div>
			 </div>

			 <div class="form-group">
				<label class="control-label" for="duedate">Due Date</label>
				<div class="controls">
					{{ Form::date('duedate', $assignment->duedate) }}
					<p class="help-block">Choose Due Date</p>
				 </div>
			</div>

			 <div class="form-group">
				<label class="control-label" for="status">Status</label>
				<div class="controls">
					{{ Form::radio('status', "ACTIVE", $assignment->active ? 1 : 0) }}
					{{ Form::label('open', 'ACTIVE') }}
					{{ Form::radio('status', "INACTIVE", $assignment->active ? 0: 1 ) }}
					{{ Form::label('closed', 'INACTIVE') }}
				 </div>
			</div>

			 <div class="form-group">
				<div class="controls">
					<button class="btn btn-success">Save</button>
				    <button class="btn btn-success" onclick="window.location='{{ url("getAssignments") }}'">Back</button>
				</div>
			 </div>
			 </form>
			</div>

			</div>
		</div>
		</fieldset>
    {{ Form::close()  }}				
	
	</div>
	</div>

<!--
	 <div class="container">
			<p>Table of Question</p>          
			<a href="../createQuestion/{{ $assignment->id }}" class="btn btn-success">Add New</a>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Description</th>
						<th>Guideline</th>
						<th>Score</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
				@if(!is_null($questions))
					@foreach ($questions as $no => $question)
					  <tr>
						<td>{{$no+1}}</td>
						<td>{{$question->name}}</td>
						<td>{{$question->description}}</td>
						<td>{{$question->guideline}}</td>
						<td>{{$question->score}}</td>
						<td>{{$question->active ? "ACTIVE" : "INACTIVE"}}</td>
						<td>
							<a href="../editQuestion/{{ $question->id }}"><span class="glyphicon glyphicon-cog"></span></a>						
							<a href="../deleteQuestion/{{ $question->id }}"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					@endforeach
				@endif
				</tbody>
			</table>
		</div>	
		-->
<!--	<div class="content-wrapper"> -->
    <div class="container">
         <div class="row">
                <div class="col-md-11">
                  <!-- Table of Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	Table of Question
                        	<button class="btn btn-primary btn-xs pull-right" onclick="window.location='{{ url("createQuestion/$assignment->id") }}'"> 
                        		<span class="glyphicon glyphicon-plus glyphicon"></span> 
                        		Create Question
                        	</button>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Gulideline</th>
											<th>Score</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									@if(!is_null($questions))
										@foreach ($questions as $no => $question)
										  <tr>
											<td>{{$no+1}}</td>
											<td>{{$question->name}}</td>
											<td>{{$question->description}}</td>
											<td>{{$question->guideline}}</td>
											<td>{{$question->score}}</td>
											<td>{{$question->active ? "ACTIVE" : "INACTIVE"}}</td>
											<td>
												<a href="../editQuestion/{{ $question->id }}"><span class="glyphicon glyphicon-cog"></span></a>						
												<a href="../deleteQuestion/{{ $question->id }}"><span class="glyphicon glyphicon-trash"></span></a>
											</td>
										@endforeach
									@endif
                                    </tbody>
                               </table>
                            </div>
                        </div>
                    </div>
				</div>
		 </div>
	</div>
<!--	</div> -->
		@include('includes.footer')
	</body>
	
	
</html>