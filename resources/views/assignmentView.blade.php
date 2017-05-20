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
                        {{$assignment->name}}
						</div>
					</div>

			 <div class="form-group">
				<label class="control-label" for="description">Description</label>
				<div class="controls">
					{{$assignment->description}}
				</div>
			 </div>

			 <div class="form-group">
				<label class="control-label" for="duedate">Due Date</label>
				<div class="controls">
					{{$assignment->duedate}}
				 </div>
			</div>

			 <div class="form-group">
				<label class="control-label" for="status">Status</label>
				<div class="controls">
                {{ $assignment->active ? "ACTIVE" : "INACTIVE" }}
				 </div>
			</div>

			 <div class="form-group">
				<div class="controls">
                <a href="{{ URL::to('getAssignments') }}" class="btn btn-success">Back</a>
				</div>
			 </div>
			 </form>
			</div>

			</div>
		</div>
		</fieldset>			
	
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
                                            <th>Action</th>
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
                                                <a href="../viewQuestion/{{ $question->id }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                                                <?php if ((session('user')->role_id != 3)): ?>
                                                    <a href="../editQuestion/{{ $question->id }}"><span class="glyphicon glyphicon-cog"></span></a>
                                                    <a href="../deleteQuestion/{{ $question->id }}"><span class="glyphicon glyphicon-trash"></span></a>
                                                <?php endif; ?>
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