<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment</title>

@include('includes.head')

<link rel="stylesheet" href="css/list.css">

</head>

<body>
	<div id="container" class="col-md-8 col-md-offset-2">		
		<h2>Assignment List</h2>
		<div class="space"></div>				
		<button type="button" class="btn pull-right" onclick="window.location='{{ url("createAssignment") }}'">New Assignment</button>
		<div class="clearfix"></div>
		<div class="space"></div>		
		<table class="table table-hover">
		<thead>
		  <tr>
			<th class="col-md-3">Name</th>
			<th class="col-md-3">Description</th>
			<th class="col-md-2">Due Date</th>
			<th class="col-md-2">Status</th>			
			<th class="col-md-2"></th>
		  </tr>
		</thead>
		<tbody>

		@foreach ($assignments as $assignment)
		  <tr>
			<td>{{$assignment->name}}</td>
			<td>{{$assignment->description}}</td>
			<td>{{$assignment->duedate}}</td>
			<td>{{$assignment->active ? "ACTIVE" : "INACTIVE"}}</td>
			<td>
				<a href="updateAssignment/{{ $assignment->id }}"><span class="glyphicon glyphicon-cog"></span></a>						
				<a href="deleteAssignment/{{ $assignment->id }}"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		@endforeach
		</tbody>
		</table>
	</div>
</body>