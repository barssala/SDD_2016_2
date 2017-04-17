<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dash</title>

<link rel="stylesheet" href="css/list.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
			<th class="col-md-1">Edit</th>
			<th class="col-md-1">Delete</th>
		  </tr>
		</thead>
		<tbody>

		@foreach ($assignments as $assignment)
		  <tr>
			<td>{{$assignment->name}}</td>
			<td>{{$assignment->description}}</td>
			<td>{{$assignment->duedate}}</td>
			<td>{{$assignment->active ? "ACTIVE" : "INACTIVE"}}</td>
			<td></td>
			<td></td>
		@endforeach
		</tbody>
		</table>
	</div>
</body>