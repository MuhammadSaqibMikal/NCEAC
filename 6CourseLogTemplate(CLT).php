<?php
include 'dbConnect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['CLTnameofinstitute'];
    $evaluate = $_POST['CLTevaluate'];
    $coursename = $_POST['CLTcoursename'];
    $CatalogNumber = $_POST['CLTCatalogNumber'];
    $InstructorName = $_POST['CLTInstructorName'];
    $Date = $_POST['CLTDate'];
    $Duration = $_POST['CLTDuration'];
    $topic = $_POST['CLTtopic'];
    $EvaluationInstruments = $_POST['CLTEvaluationInstruments'];

    $InsertQuery = mysql_query("insert into courselog(CourseLog_InstituteName, CourseLog_Evaluation, CourseLog_Course_Name, CourseLog_Catalog_Number, CourseLog_Instructor_Name, CourseLog_Date, CourseLog_Duration, CourseLog_Topics_Covered, CourseLog_Evaluation_Instruments) values('$name','$evaluate','$coursename','$CatalogNumber','$InstructorName','$Date','$Duration','$topic','$EvaluationInstruments')") or die(mysql_error());
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
                            <h2 class="panel-body text-center">Course Log Template</h2>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCEAC.DOC.001-E</p>
                <a href="#"><i class="fa fa-3x fa-mobile fa-fw"></i></a>
                <h4>
                    <p class="text-center">
                        <strong>Course Log Template</strong>
                    </p>
                </h4>
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
                    <input type="text" name="CLTnameofinstitute" value="" size="100">
                </form>
                <p>&nbsp;</p>

                <p>
                    <strong>PROGRAM (S) TO</strong>
                </p>

                <form action="" class="text-left">
                    <strong>BE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <sup></sup>&nbsp;</strong>
                    <input type="text" name="CLTevaluate" value="" size="100">

                    <p>
                        <strong>EVALUATED</strong>
                    </p>
                </form>
                <p class="text-center"></p>

                <p>
                    <strong>&nbsp;</strong>
                </p>

                <form action="" class="text-left">
                    <strong>Course Name
                        <sup></sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </strong>
                    <input type="CLTcoursename" name="CourseName" value="" size="80">
                </form>
                <form action="" class="text-left">
                    <strong>Catalog Number
                        <sup></sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </strong>
                    <input type="text" name="CLTCatalogNumber" value="" size="80">
                </form>
                <form action="" class="text-left">
                    <strong>Instructor Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <sup></sup>&nbsp;</strong>
                    <input type="text" name="CLTInstructorName" value="" size="80">
                </form>
                <p>&nbsp;</p>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td width="45">
                            <p class="text-center">
                                <strong>Date</strong>
                            </p>
                        </td>
                        <td width="73">
                            <p class="text-center">
                                <strong>Duration</strong>
                            </p>
                        </td>
                        <td width="326">
                            <p class="text-center">
                                <strong>Topics Covered</strong>
                            </p>
                        </td>
                        <td width="91">
                            <p class="text-center">
                                <strong>Evaluation Instruments
                                    <br>used</strong>
                            </p>
                        </td>
                        <td width="103">
                            <p class="text-center">
                                <strong>Signature</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">
                            <input type="text" name="CLTDate" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">
                        </td>
                        <td width="73">
                            <input type="text" name="CLTDuration" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">
                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea name="CLTtopic" cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="CLTEvaluationInstruments" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">


                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">


                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">


                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">


                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">


                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">
                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">
                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">
                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">
                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">
                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">
                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="45">

                            <input type="text" name="Input" value="" size="2"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="73">

                            <input type="text" name="Input" value="" size="5"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="326">
                            <div class="text-center">
                                <textarea cols="50" rows="1"
                                          style="width:100%; height:100%; border-color:transparent;"></textarea>
                            </div>
                        </td>
                        <td width="91">

                            <input type="text" name="Input" value="" size="6"
                                   style="width:100%; height:100%; border-color:transparent;">

                        </td>
                        <td width="103">
                            <p>
                                <strong>&nbsp;</strong>
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>
                    <strong>Instructor Signature ____________________________</strong>
                </p>

                <p>
                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;Date ____________________________</strong>
                </p>

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
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</body>
</html>