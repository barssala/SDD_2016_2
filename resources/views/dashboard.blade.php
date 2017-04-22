<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<link rel="stylesheet"  href="css/dashboard.css">
</head>
<body>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
 <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('userLists') }}">User Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('logout') }}">Log out</a>
      </li>
    </ul>	
  </div>
</nav>

<div id="dashboard_container" class="row">

	<div id="assignment"  class="card dashboard_child col-md-3 offset-md-2">
	  <img class="card-img-top" 
			src="http://previews.123rf.com/images/pockygallery/pockygallery1509/pockygallery150900253/45096866-ASSIGNMENT-red-stamp-text-on-white-Stock-Photo.jpg" 
			alt="Card image cap">
	  <div class="card-block">
		<h4 class="card-title">Assignment</h4>
		
		<ul>
		  <li> <a href="#">Home</a> </li>
		  <li> <a href="#">Home</a> </li>
		  <li> <a href="#">Home</a> </li>
		  <li> <a href="#">Home</a> </li>
		</ul>	
	
		<a href="#" class="btn btn-primary btn-viewall" onclick="window.location='{{ url("getAssignments") }}'">View All Assignment</a>
	  </div>
	</div>
	
	<div id="review"  class="card dashboard_child col-md-3 offset-md-2">
	  <img class="card-img-top" 
			src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQOyM5jRoKqSyGoXZFveYZp45d_lo5yekA4SDdV20SC0VsNIjzN" 
			alt="Card image cap">
	  <div class="card-block">
		<h4 class="card-title">Review</h4>
		
		<ul>
		  <li> <a href="#">Home</a> </li>
		  <li> <a href="#">Home</a> </li>
		  <li> <a href="#">Home</a> </li>
		  <li> <a href="#">Home</a> </li>
		</ul>	
	
		<a href="#" class="btn btn-primary btn-viewall">View All review</a>
	  </div>
	</div>
</div>

</body>
