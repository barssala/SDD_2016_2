<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Assignment List</title>
@include('includes.head')
</head>
<body>

     <!-- MENU SECTION END-->
    <div class="content-wrapper">   
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
           <h4 class="header-line">Admin</h4>  
       
            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Assignment List
                         <button type="button" class="btn btn-warning btn-xs pull-right" onclick="window.location='{{ url("home") }}'">Back</button> 
                        <button type="button" class="btn btn-primary btn-xs pull-right" style="margin-right: 5px !important" onclick="window.location='{{ url("createAssignment") }}'">New Assignment</button>
 						
                      
                                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>No.</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
											<th><center>Edit</center></th>
											<th><center>Delete</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($assignments as $key=>$assignment)
                                        @if($key % 2 === 0)
                                            <tr class="odd gradeX">
                                        @endif
                                        @if($key % 2 === 1)
                                            <tr class="odd gradeC">
                                        @endif
                                            <td>{{$key + 1}}</td>
                                            <td>{{$assignment->name}}</td>
                                            <td>{{$assignment->description}}</td>
                                            <td>{{$assignment->duedate}}</td>
                                            <td>{{$assignment->active ? "ACTIVE" : "INACTIVE"}}</td>
                                            <td>
                                                <center>
                                                    <a href="editAssignment/{{ $assignment->id }}">
                                                        <button class="btn btn btn-primary btn-xs">
                                                            <i class="fa fa-edit ">
                                                                
                                                            </i>
                                                            Edit
                                                        </button>
                                                    </a>
                                                </center>
                                            </td>
                                                <td>
                                                    <center>
                                                        <a href="deleteAssignment/{{ $assignment->id }}">
                                                            <button class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i>Delete</button>
                                                        </a>
                                                    </center>
                                            </td>
                                        </tr>
                                            <!-- { { ++$key } } -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
    </div>
    </div>
       @include('includes.footer')
</body> 
</html>
