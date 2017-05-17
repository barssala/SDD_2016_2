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
    <title>User Management</title>

@include('includes.head')
</head>
<body>

     <!-- MENU SECTION END-->
    <div class="content-wrapper">   
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             User Management
                        <button type="button" class="btn btn-warning btn-xs pull-right" onclick="window.location='{{ url("home") }}'">Back</button>
                             <button type="button" class="btn btn-primary btn-xs pull-right" onclick="window.location='{{ url("createUser") }}'">New Users</button>                       
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>Role</th>
                                            <!-- <th>Remark</th> -->
                                            <th><center>Email</center></th>
											<th><center>Edit</center></th>
											<th><center>Delete</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key=>$user)
                                        @if($key % 2 === 0)
                                            <tr class="odd gradeX">
                                        @endif
                                        @if($key % 2 === 1)
                                            <tr class="odd gradeC">
                                        @endif
                                            <td>{{$key + 1}}</td>
                                            <td>{{$user->firstname}}</td>
                                            <td>{{$user->lastname}}</td>
                                            <td class="center">
                                                @if($user->role_id === 1)
                                                    Administrator
                                                @endif
                                                @if($user->role_id === 2)
                                                    Professor
                                                @endif
                                                @if($user->role_id === 3)
                                                    Student
                                                @endif
                                                @if($user->role_id === 4)
                                                    TA
                                                @endif
                                            </td>
                                            <!-- <td class="center">SE</td> -->
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <center>
                                                    <a href="editUser/{{$user->id}}">
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
                                                        <a href="deleteUser/{{$user->id}}">
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
