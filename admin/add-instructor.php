<?php
include '../vendor/autoload.php';
include "../init.php";
use App\Auto\Mems\Redirect;
use App\Auto\Mems\Session;
if (!Session::exists('admin')){
    Redirect::to('login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Add Student- AutoGrade</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications
    <link href="assets/css/animate.min.css" rel="stylesheet"/>-->

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project
    <link href="assets/css/demo.css" rel="stylesheet" />-->

    <!--  Fonts and icons 
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>-->
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    AutoGrade
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#submenu">
                    <a href="#" style="margin: 0;
    line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase"><i class="ti-user"></i>Student Management</a>
                    <ul id="submenu" class="collapse">
                        <li class="hide-dot"><a href="add-student.php">Add Student</a></li>
                        <li class="hide-dot"><a href="view-class.php">View Result</a></li>
                    </ul>

                </li>
                <li data-toggle="collapse" data-target="#subcourse">
                    <a href="#" style="margin: 0;
    line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase"><i class="ti-book"></i>Course Management</a>
                    <ul id="subcourse" class="collapse">
                        <li class="hide-dot"><a href="instructionUpload.php">Upload Instruction</a></li>
                        <li class="hide-dot"><a href="questions.php">Add Question</a></li>
                    </ul>

                </li>
                <li class="active">
                    <a href="add-instructor.php">
                        <i class="ti-blackboard"></i>
                        <p>Add Instructor</p>
                    </a>
                </li>
                <li><a href="logout.php" class="btn btn--round">logout</a></li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Add Instuctor</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-book"></i>
								<p>Java Class</p>
                            </a>
                        </li>
                        <!--<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>-->
						<li>
                            <a href="#">
								<i class="ti-book"></i>
								<p>Python</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Instructor detail</h4>
                            </div>
                            <div class="content">
                                <form action="backend/add-instructor-backend.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Instructor ID</label>
                                                <input style="font-weight: 600; color: #000; background-color: #fff" type="text" name="instructor_id" class="form-control border-input" placeholder="INS-2012" value="INS-2012">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Instructor Name</label>
                                                <input type="text" name="name" class="form-control border-input" placeholder="Emmanuel Adio">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Instructor Password</label>
                                                <input type="text" name="password" class="form-control border-input" placeholder="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-left">
                                        <input type="submit" class="btn btn-info btn-fill btn-wd" name="submit" value="Add Instructor">
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Important information</h4>
                            </div>
                            <div class="content">
                                The Instructor ID is automatically generated by the system. As such, the Admin should remember to give the
                                new instructor his/her ID.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Click the button below for more information on instructors</h4>
                            </div>
                            <div class="content text-center">
                                <a role="button" href="all-instructors.php" class="btn btn-info btn-wd">All Instructors</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
