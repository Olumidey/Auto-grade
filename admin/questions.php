<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AutoGrade</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Custom css file stores here -->
    <link rel ="stylsheet" href ="custom/custom.css">

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
    <!-- Custom css file stores here -->
    <link rel ="stylsheet" href ="custom/custom.css">

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
                <li data-toggle ="collapse" data-target ="#manageStudent">
                    <a href="#">
                        <i class="ti-user"></i>
                        <p>Student Management</p>
                    </a>

                    <ul id ="manageStudent" class ="collapse">

                        <li><a href ="add-student.php">Add Student</a></li>
                        <li><a href ="view-class.php">View Result</a></li>
                    </ul>
                </li>
                <li class ="active" data-toggle ="collapse" data-target ="#subCourse">
                    <a href="#">
                        <i class="ti-book"></i>
                        <p>Course Management</p>
                    </a>

                    <ul id ="subCourse" class ="collapse">
                        <li><a href ="instructionUpload.php">Upload Instruction</a></li>
                        <li><a href ="">Add Questions</a></li>
                    </ul>
                </li>
                <li>
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
                    <a class="navbar-brand" href="#">Upload Question(s)</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-book"></i>
                                <p>Java Class</p>
                            </a>
                        </li>

                        <!--<li>
                            <a href="#">
                                <i class="ti-book"></i>
                                <p>Python</p>
                            </a>
                        </li>-->
                    </ul>

                </div>
            </div>
        </nav> <!-- head navigation bar end -->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Upload CSC  Question(s)</h4>
                            </div>
                            <div class="content">
                                <form action ="backend/questions.php" method ="post">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label>Question 1</label>
                                                <textarea name="question" class="form-control border-input" rows ="4" type ="text" placeholder ="Type course questions here" required></textarea>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label>Select Course</label>
                                                <select name="course" class="form-control border-input">
                                                    <option>-Select Course-</option>
                                                    <option value ="csc101">CSC 101 </option>
                                                    <option value ="csc102">CSC 102</option>>
                                                    <option value="csc201">CSC 201</option>
                                                    <option value="csc202">CSC 202</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label>Select Semester</label>
                                                <select name="semester" class="form-control border-input">
                                                    <option value="1">First Semester</option>
                                                    <option value="2">Second Semester</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <div class ="row">
                                                <div class ="col-sm-4 col-md-4">
                                                    <div class ="form-group">
                                                        <label for ="hour">Enter Hour</label>
                                                        <input name ="duration" id ="hour" class ="form-control border-input">
                                                    </div>
                                                </div>
                                                <div class ="col-sm-4 col-md-4">
                                                    <div class ="form-group">
                                                        <label for ="mins">Enter Minutes</label>
                                                        <input name ="duration" id ="mins" class ="form-control border-input">
                                                    </div>
                                                </div>
                                                <div class ="col-sm-4 col-md-4">
                                                    <div class ="form-group">
                                                        <label for ="sec">Enter Second</label>
                                                        <input name ="duration" id ="sec" class ="form-control border-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label>Course Type</label>
                                                <select name="q_type" class="form-control border-input">
                                                    <option value="java">java</option>
                                                    <option value="python">python</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div><!-- End Row -->
                                    
                                
                                    <div class ="clearfix"></div>
                            </div>
                        </div>
                    </div> <!-- First column of 5spans end -->
                    <!--<div class ="col-lg-12 col-md-7">
                        <div class ="card">
                            <div class ="header">
                                <h4 class ="title"><b>Question Preview</b></h4>
                                <p class ="category">Preview the question before final upload.</p>
                            </div>
                            <div class ="content">
                                <div><b>Course:</b> CSC 201</div>
                                <div><b>Instruction</b></div>
                                <div>
                                    An instructor or admin can <strong>preview the question</strong> to check if there is any error in the question. He/She can then click edit button to make adjust before final upload or click submit button for final upload. If it happens that he or she is going to amend the question, the edit button would return him or her to where he or she initially type the question.
                                </div>
                                <div class ="text-right"><button class ="btn btn-success">Edit</button>
                                    <button class ="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div><!-- 1st Ends -->
                <!--<div class="row">-->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Upload CSC 201 Model Answer</h4>
                            </div>
                            <div class="content">

                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Answer</label>
                                            <textarea  name="answer" class ="form-control border-input" rows ="4" type ="text" placeholder ="Write the model answer here" required></textarea>
                                        </div>
                                        <input type="submit" name="submit" value="submit" class="btn btn-success"/>
                                    </div>
                                    </div>
                                    <div class ="clearfix"></div>

                            </div>
                        </div>
                    </div> <!-- First column of 5spans end -->
                    <!--<div class ="col-lg-12 col-md-7">
                        <div class ="card">
                            <div class ="header">
                                <h4 class ="title"><b>Answer Preview</b></h4>
                                <p class ="category">Preview the answer before final upload.</p>
                            </div>
                            <div class ="content">
                                <div><b>Course:</b> CSC 201</div>
                                <div><b>Answer Format</b></div>
                                <div>
                                    An instructor or admin can <strong>preview the model answer</strong> to check if there is any error in the model. He/She can then click edit button to make adjust before final upload or click submit button for final upload. If it happens that he or she is going to amend the model, the edit button would return him or her to where he or she initially type the model answer.
                                </div>
                                <div class ="text-right"><button class ="btn btn-success">Edit</button>
                                    <button class ="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>-->
                <!--</div>--><!-- 2nd Ends -->
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
