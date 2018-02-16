<?php
include 'dbConnect.php';
if (isset($_POST['submit'])) {
    $aname = $_POST['CDnameofinstitute'];
    $evaluate = $_POST['CDevaluated'];
    $acoursecode = $_POST['coursecode'];
    $title = $_POST['CourseTitle'];
    $credithour = $_POST['Credit Hours'];
    $prerequistes = $_POST['PrerequisitesCT'];
    $field = $_POST['assessment'];
    $coordinator = $_POST['coursecoordinator'];
    $url = $_POST['CDurl'];
    $afeild = $_POST['CCD'];
    $bfeild = $_POST['TLM'];
    $reference = $_POST['ReferenceMaterial'];
    $goal = $_POST['Course Goals'];
    $dfeild = $_POST['TCCNLET'];
    $efeild = $_POST['LPDC'];
    $ffeild = $_POST['PADC'];
    $theory = $_POST['CDtheory'];
    $analysis = $_POST['CDproblemanalysis'];
    $design = $_POST['CDsolutiondesign'];
    $gfeild = $_POST['CDSEI'];
    $hfeild = $_POST['owc1'];
    $ifeild = $_POST['owc2'];
    $jfeild = $_POST['owc3'];
    $kfeild = $_POST['owc4'];


    $InsertQuery = mysql_query("insert into coursedescription(CourseDescription_InstituteName,CourseDescription_Evalute,Course_Code,Course_Title,Credit_Hours,Prerequisites,Assessments,Course_Coordinator,Url,Current_Catalog,Textbook,Reference_Material,Course_Goals,Topics_Covered,Laboratory_Projects,Programming_Assignments,Class_Theory,Class_Problem,Class_Solution,Class_Social,Oral1,Oral2,Oral3,Oral4) values('$aname','$evaluate','$acoursecode','$title','$credithour','$prerequistes','$field','$coordinator','$url','$afeild','$bfeild','$reference','$goal','$dfeild','$efeild','$ffeild','$theory','$analysis','$design','$gfeild','$hfeild','$ifeild','$jfeild','$kfeild')") or die(mysql_error());
    header("location: current.php");

}

?>


<html>
<head>
    <title>NCEAC Document Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/calendar.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
    queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://
    -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body {
            background-image: url("background2.jpg");
        }
    </style>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-6" draggable="true">
                <!-- Logo -->
                <div class="logo">
                    <h1>
                        <a href="home.php">NCEAC Document Management System</a>
                    </h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group form">
                            <input type="text" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Search</button>
                  </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <ul class="nav navbar-nav">
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="user.png" class="img-circle" alt="User Image" width="30" height="30">&nbsp;<span
                                            class="caret"></span>

                                    </a>
                                    <ul class="dropdown-menu animated fadeInUp">
                                        <li>
                                            <a href="profile.php">Name</a>
                                        </li>
                                        <li>
                                            <a href="logout.php">Logout</a>
                                        </li>
                                        <li>
                                            <a href="setting.php">Setting</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-justified nav-pills">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li>
                                <div class="btn-group btn-group-md">
                                    <a class="btn btn- btn-block btn-link dropdown-toggle" data-toggle="button">
                                        Notification&nbsp;<span class="glyphicon glyphicon-bell"></span> <span
                                            class="fa fa-caret-down"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#">Action 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Action 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group btn-group-md">
                                    <a class="btn btn- btn-block btn-link dropdown-toggle" data-toggle="button">&nbsp;&nbsp;
                                        Notice Board&nbsp; <span class="fa fa-caret-down"></span><span
                                            class="badge">42</span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#">Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
        <div class="content-box-large">
            <hr>
            <div class="panel-body">
                <div class="container">
                    <div class="container-fluid">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-body text-center">Course Description</h2>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">
                        <strong>National Computing Education Accreditation Council</strong>
                    </p>

                    <p class="text-center">NCEAC</p>&nbsp;
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                    <p class="text-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCEAC.FORM.001-D</p>
                    <a href="#"><i class="fa fa-3x fa-mobile fa-fw"></i></a>
                    <h4></h4>

                    <p></p>

                    <p class="text-center"></p>

                    <p></p>

                    <p>
                        <strong>&nbsp;</strong>
                    </p>

                    <p></p>

                    <form action="" class="text-left">
                        <strong>NAME OF INSTITUTION:
                            <sup></sup>&nbsp;</strong>
                        <input type="text" name="CDnameofinstitute" value="" size="105">
                    </form>
                    <p>&nbsp;</p>

                    <p>
                        <strong>PROGRAM (S) TO BE</strong>
                    </p>

                    <form action="" class="text-left">
                        <strong>BE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <sup></sup>&nbsp;</strong>
                        <input type="text" name="CDevaluated" value="" size="105">

                        <p>
                            <strong>EVALUATED</strong>
                        </p>
                    </form>
                    <p class="text-center"></p>

                    <p>&nbsp;</p>

                    <p>
                        <strong>&nbsp;</strong>
                    </p>
                    <ol type="A">
                        <li>
                            <strong>Course Description
                                <br>
                            </strong>
                        </li>
                        <p>(Fill out the following table for each course in your computer science
                            curriculum. A filled out form should
                            <br>not be more than 2-3 pages.)</p>

                        <p>&nbsp;</p>
                        <table class="table table-bordered " width="660">
                            <tbody>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Course Code</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <input type="text" name="coursecode" value="" size="50"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Course Title</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <input type="text" name="CourseTitle" value="" size="50"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Credit Hours</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <input type="text" name="CreditHours" value="" size="50"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Prerequisites by Course(s) and
                                            <br>Topics</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <input type="text" name="PrerequisitesCT" value="" size="50"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Assessment Instruments with Weights</strong>(homework, quizzes,
                                        midterms,
                                        final, programming <br>assignments, lab work, etc.)</p>
                                </td>
                                <td colspan="4" width="429">
                                    <div class="form-group form-group-lg">
                                        <textarea name="assessment" rows="3" cols="48"
                                                  style="width:100%; height:100%; border-color:transparent;"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Course Coordinator</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <input type="text" name="coursecoordinator" value="" size="50"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>URL (if any)</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <input type="text" name="CDurl" value="" size="50"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Current Catalog Description</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <input type="text" name="CCD" value="" size="50"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Textbook</strong>(or
                                        <strong>Laboratory Manual</strong>
                                        <br>for Laboratory Courses)</p>
                                </td>
                                <td colspan="4" width="429">
                                    <div class="form-group form-group-lg">
                                        <textarea name="TLM" cols="48" rows="2"
                                                  style="width:100%; height:100%; border-color:transparent;"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Reference Material</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <input type="text" name="ReferenceMaterial" value="" size="50"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Course Goals</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <input type="text" name="CourseGoals" value="" size="50"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Topics Covered in the Course,
                                            <br>with Number of Lectures on Each
                                            <br>Topic</strong>(assume 15-week instruction
                                        <br>and one-hour lectures)</p>
                                </td>
                                <td colspan="4" width="429">
                                    <div class="form-group form-group-lg">
                                        <textarea name="TCCNLET" cols="48" rows="3"
                                                  style="width:100%; height:100%; border-color:transparent;"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Laboratory Projects/Experiments Done in the Course</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <div class="form-group form-group-lg">
                                        <textarea name="LPDC" cols="48" rows="2"
                                                  style="width:100%; height:100%; border-color:transparent;"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Programming Assignments Done in the Course</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <div class="form-group form-group-lg">
                                        <textarea name="PADC" cols="48" rows="2"
                                                  style="width:100%; height:100%; border-color:transparent;"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" width="231">
                                    <p>
                                        <strong>Class Time Spent on</strong>(in credit hours)</p>
                                </td>
                                <td width="68">
                                    <p class="text-center">
                                        <strong>Theory</strong>
                                    </p>
                                </td>
                                <td width="99">
                                    <p class="text-center">
                                        <strong>Problem
                                            <br>Analysis</strong>
                                    </p>
                                </td>
                                <td width="102">
                                    <p class="text-center">
                                        <strong>Solution Design</strong>
                                    </p>
                                </td>
                                <td width="161">
                                    <p class="text-center">
                                        <strong>Social and Ethical
                                            <br>Issues</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="68">
                                    <input type="text" name="CDtheory" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="99">
                                    <input type="text" name="CDproblemanalysis" value="" size="5"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="102">
                                    <input type="text" name="CDsolutiondesign" value="" size="5"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="161">
                                    <input type="text" name="CDSEI" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="231">
                                    <p>
                                        <strong>Oral and Written Communications</strong>
                                    </p>
                                </td>
                                <td colspan="4" width="429">
                                    <p class="text-justify">Every student is required to submit at least
                                        <input type="text" name="owc1" value="" size="2"> written reports
                                        <br>of typically
                                        <input type="text" name="owc2" value="" size="2"> pages and to make
                                        <input type="text" name="owc3" value="" size="2"> oral presentations of
                                        <br>typically
                                        <input type="text" name="owc4" value="" size="2">minutes duration.&nbsp; Include
                                        only material that is graded
                                        <br>for grammar, spelling, style, and so forth, as well as for technical
                                        <br>content, completeness, and accuracy.</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>
                            <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Instructor Name
                                ____________________________</strong>
                        </p>

                        <p>
                            <strong>Instructor Signature ____________________________</strong>
                        </p>

                        <p>
                            <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Date ____________________________</strong>
                        </p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <div class="container text-center">
                            <button type="button" class="btn btn-primary btn-md">Back</button>
                            <button type="button" class="btn btn-primary btn-md">
                                <span class="glyphicon glyphicon-save"></span>&nbsp;Save
                            </button>
                            <button type="button" class="btn btn-primary btn-md">Submit</button>
                            <div class="btn-group btn-group-md">
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Status <span
                                        class="caret"></span> </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#"> Accept </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Reject</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Comment</a>
                                    </li>
                            </div>
                            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                            <script src="https://code.jquery.com/jquery.js"></script>
                            <!-- jQuery UI -->
                            <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                            <!-- Include all compiled plugins (below), or include individual
                            files as needed -->
                            <script src="bootstrap/js/bootstrap.min.js"></script>
                            <script src="vendors/fullcalendar/fullcalendar.js"></script>
                            <script src="vendors/fullcalendar/gcal.js"></script>
                            <script src="js/custom.js"></script>
                            <script src="js/calendar.js"></script>
                            <br>

                            <div class="row">
                                <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                    <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                    <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                    <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                    <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                                </div>
                            </div>
                            <p></p>

                            <p></p>

                            <p></p>

                            <p></p>

                            <p></p>

                            <p></p>

                            <p></p>

                            <p></p>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</body>
</html>