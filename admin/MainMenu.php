
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title >Online Students Clearance System | MainMenu</title>
    <link rel="shortcut icon" type="img/png" href="img/logo.png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="DataTables/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/dataTables.bootstrap.css">
    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Online Students Clearance System</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> KYU</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Application
                                <span class="pull-right text-muted small">2 Days Ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong> See All Updates</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> My Account <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-edit fa-fw"></i> Update Account</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="Dashboard.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                                <a href="#"><i class="fa fa-users"></i> Student<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                    <a href="addStudent.php"><i class="glyphicon glyphicon-plus"></i>

                                          Register Student </a>
                                    </li>
                                    <li>
                                        <a href="registerdStudents.php"><i class="glyphicon glyphicon-th"></i>   Manage Registered Studnets</a>
                                    </li>
                                </ul>
 
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                        <a href="clearedStd.php"><i class="glyphicon glyphicon-ok"></i>  Cleared Students</a>
                    </li>
                            <li>
                            <a href="#"><i class="glyphicon glyphicon-th"></i>  Requirements <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="addrequirement.php"><i class=" glyphicon glyphicon-plus"></i>  Add Requirement</a>
                                    </li>
                                    <li>
                                        <a href="manageRequirement.php"><i class=" glyphicon glyphicon-th-list"></i>  Manage Requirements</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                    <li>
                        <a href="applystudent.php"><i class="fa fa-sitemap fa-fw"></i>  Applied Students<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="applystudent.php"> <i class=" glyphicon glyphicon-pencil"> </i>  Apply Student</a>

                            </li>
                            <li>
                                <a href="manageapplicant.php"> <i class="glyphicon glyphicon-th-large"></i>  Manage Applicants</a>
                                
                            </li>

                        </ul>
                    </li>
                    <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="AddUser.php"><i class="glyphicon glyphicon-plus" ></i> Add User</a>
                                    </li>
                                    <li>
                                        <a href="ManageUsers.php"><i class="fa fa-users fa-fw"> </i> Manage Users</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                </ul>

            </div>
        </div>
    </nav>

    
    </div>
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>
<script type="text/javascript" src="DataTables/js/dataTables.bootstrap.min.js">
</script>
<script type="text/javascript" src="DataTables/js/dataTables.bootstrap.js"></script>

<script>
          $(document).ready( function () {
    $('#table_id').DataTable();
} );
        </script>


</body>
</html>
