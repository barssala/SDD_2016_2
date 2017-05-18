<!DOCTYPE html>
<html >
	<head>
        <title>Assignment [Add]</title>
         <link rel="stylesheet" href="<?php echo asset('css/list.css') ?>">
		
		@include('includes.head')
    </head>

    <body>
        <div class="content-wrapper">
        <div class="container">
    {{ Form::open(['url' => 'saveAssignment']) }}
            <fieldset>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Assignment [Add]
                </div> 
                        <div class="panel-body">
                            <form role="form">
                            <div class="form-group">
                                <label for="assignment">Assignment Name</label>
                                <input class="form-control" type="text" placeholder="Assignment" required/>
                        <p class="help-block">Assignment name, without spaces</p>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" rows="10" id="description" required placeholder="Description"></textarea>
                                <p class="help-block">Please input description</p>                   
                            </div>
<!--
                            <div class="form-group">
                                <label for="duedate">Due Date</label> 
                                <input class="form-control">
                                    {{ Form::date('duedate', null) }}
                                <p class="help-block">Choose Due Date</p>
                            
                            </div>
 -->
                            <div class="form-group">
                                <label for="duedate" class="col-2 col-form-label">Due Date<label>
                                <input class="form-control" type="date" id="example-date-input" required>
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
                                <button type="button" class="btn btn-success" onclick="window.location='{{ url("getAssignments") }}'">Back</button>
                            </div>
                         </div>
                         </form>
                    </div>

            </div>
            </fieldset>
        
                    
<!--
	    <div class="content-wrapper">
        <div class="container">
    {{ Form::open(['url' => 'saveAssignment']) }}
 			<fieldset>
 				<div id="legend">
				 	<legend class="">Assignment [Add]</legend>
 				</div>

 				<div class="control-group">
 					<label class="control-label" for="assignment">Assignment Name</label>
 					<div class="controls">
            {{ Form::text('name', null, 
                  array('required', 
                    'class'=>'input-xlarge', 
                    'placeholder'=>'Assignment')) }}
 						<p class="help-block">Assignment name, without spaces</p>
 					</div>
 				</div>
 
 				<div class="control-group">
 					<label class="control-label" for="description">Description</label>
					<div class="controls">
            {{ Form::textarea('description', null, 
                  array('required', 
                    'class'=>'input-xlarge', 
                    'placeholder'=>'Description')) }}
 						<p class="help-block">Please input description</p>
 					</div>
 				</div>
 
 				<div class="control-group">
 					<label class="control-label" for="duedate">Due Date</label>
 					<div class="controls">
            {{ Form::date('duedate', null) }}
 						<p class="help-block">Choose Due Date</p>
					 </div>
 				</div>
 
 				<div class="control-group">
 					<label class="control-label" for="status">Status</label>
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
                        <button class="btn btn-success" onclick="window.location='{{ url("getAssignments") }}'">Back</button>
				 	</div>
				 </div>
 			</fieldset> -->
    {{ Form::close()  }}
    </div>
    </div>
 <!--   </div>
    </div> -->
    @include('includes.footer')
    </body>

</html>