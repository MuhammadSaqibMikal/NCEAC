<?php
include 'dbConnect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['SInameofinstitute'];
    $evaluate = $_POST['SIevaluate'];
    $aavmsp = $_POST['AVMSP1'];
    $bavmsp = $_POST['AVMSP2'];
    $cavmsp = $_POST['AVMSP3'];
    $aafsp = $_POST['AFSP1'];
    $bafsp = $_POST['AFSP2'];
    $cafsp = $_POST['AFSP3'];
    $ainput = $_POST['Bperiod1'];
    $binput = $_POST['Bperiod2'];
    $cinput = $_POST['Bperiod3'];
    $dinput = $_POST['Bperiod4'];
    $einput = $_POST['Bperiod5'];
    $finput = $_POST['Cperiod1'];
    $ginput = $_POST['Cperiod2'];
    $hinput = $_POST['Cperiod3'];
    $iinput = $_POST['Cperiod4'];
    $jinput = $_POST['Cperiod5'];
    $kinput = $_POST['OPPD'];

    $InsertQuery = mysql_query("insert into studentinformation(StudentInformation_Instituition,StudentInformation_Evaluation,Average_Matriculationyear1,Average_Matriculationyear2,Average_Matriculation3,Average_Fscyear1,Average_Fscyear2,Average_Fscyear3,Byear1,Byear2,Byear3,Byear4,Byear15,Cyear1,Cyear2,Cyear3,Cyear4,Cyear5,DOutOfClass) values('$name','$evaluate','$aavmsp','$bavmsp','$cavmsp','$aafsp','$bafsp','$cafsp','$ainput','$binput','$cinput','$dinput','$einput','$finput','$ginput','$hinput','$iinput','$jinput','$kinput')") or die(mysql_error());
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
                            <h2 class="panel-body text-center">STUDENT INFORMATION</h2>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCEAC.FORM.001C</p>
                <a href="#">
                    <i class="fa fa-3x fa-mobile fa-fw"></i>
                </a>
                <h4>
                    <p class="text-center">
                        <strong>ADMINISTRATIVE STRUCTURE OF THE INSTITUTION AND INFORMATION ABOUT</strong>
                    </p>
                </h4>
                <p></p>
                <h4 class="text-center">
                    <strong>ALL ACADEMIC PROGRAMS</strong>
                </h4>

                <p class="text-center"></p>
                <h4 class="text-center">
                    <strong>CHARTER AND PROGRAM INFORMATION</strong>
                </h4>

                <p></p>

                <p>
                    <strong>&nbsp;</strong>
                </p>

                <p></p>

                <form action="" class="text-left">
                    <strong>INSTITUTION:
                        <sup></sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                    <input type="text" name="SInameofinstitute" value="" size="115">
                </form>
                <p>&nbsp;</p>

                <p>
                    <strong>PROGRAM (S) TO</strong>
                </p>

                <form action="" class="text-left">
                    <strong>BE EVALUATED&nbsp;&nbsp;
                        <sup></sup>&nbsp;</strong>
                    <input type="text" name="SIevaluate" value="" size="115">
                </form>
                <table width="468">
                    <tbody>
                    <tr></tr>
                    </tbody>
                </table>
                <table width="468">
                    <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <em>Intent: Quality of intake is significant for the successful implementation
                        of the program. Student-to-teacher ratio is reasonable. Students are provided
                        out-of-class professional development opportunities.</em>
                </p>

                <p>&nbsp;</p>
                <ol type="A">
                    <li>
                        <strong>Quality of intake over the past three years:</strong>
                    </li>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td width="372">
                                <p>&nbsp;</p>
                            </td>
                            <td width="78">
                                <p>
                                    <strong>2012-13</strong>
                                </p>
                            </td>
                            <td width="78">
                                <p>
                                    <strong>2013-14</strong>
                                </p>
                            </td>
                            <td width="78">
                                <p>
                                    <strong>2014-15</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="372">
                                <p>Average Matriculation (or equivalent) Scores in Percentage</p>
                            </td>
                            <td width="78">
                                <input type="text" name="AVMSP1" value="" size="2"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="78">
                                <input type="text" name="AVMSP2" value="" size="2"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="78">
                                <input type="text" name="AVMSP3" value="" size="2"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                        </tr>
                        <tr>
                            <td width="372">
                                <p>Average F.Sc. (or equivalent) Scores in Percentage</p>
                            </td>
                            <td width="78">
                                <input type="text" name="AFSP1" value="" size="2"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="78">
                                <input type="text" name="AFSP2" value="" size="2"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="78">
                                <input type="text" name="AFSP3" value="" size="2"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <li>
                        <strong>What has been the intake in the program for the past five years?</strong>
                    </li>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td width="120">
                                <p>
                                    <strong>2010-11</strong>
                                </p>
                            </td>
                            <td width="126">
                                <p>
                                    <strong>2011-12</strong>
                                </p>
                            </td>
                            <td width="120">
                                <p>
                                    <strong>2012-13</strong>
                                </p>
                            </td>
                            <td width="120">
                                <p>
                                    <strong>2013-14</strong>
                                </p>
                            </td>
                            <td width="120">
                                <p>
                                    <strong>2014-15</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="120">
                                <input type="text" name="Bperiod1" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="126">
                                <input type="text" name="Bperiod2" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="120">
                                <input type="text" name="Bperiod3" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="120">
                                <input type="text" name="Bperiod4" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="120">
                                <input type="text" name="Bperiod5" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <li>
                        <strong>What has been the student-to-teacher ratio for the program for the past
                            five years?</strong>
                    </li>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td width="120">
                                <p>
                                    <strong>2010-11</strong>
                                </p>
                            </td>
                            <td width="126">
                                <p>
                                    <strong>2011-12</strong>
                                </p>
                            </td>
                            <td width="120">
                                <p>
                                    <strong>2012-13</strong>
                                </p>
                            </td>
                            <td width="120">
                                <p>
                                    <strong>2013-14</strong>
                                </p>
                            </td>
                            <td width="120">
                                <p>
                                    <strong>2014-15</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="120">
                                <input type="text" name="Cperiod1" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="126">
                                <input type="text" name="Cperiod2" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="120">
                                <input type="text" name="Cperiod3" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="120">
                                <input type="text" name="Cperiod4" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                            <td width="120">
                                <input type="text" name="Cperiod5" value="" size="8"
                                       style="width:100%; height:100%; border-color:transparent;">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <li>
                        <strong>What are out-of-class opportunities provided to students for their professional
                            development?</strong>
                        <br>
                        <textarea name="OPPD" rows="6" cols="180"></textarea>
                    </li>
                    <p>
                        <strong>&nbsp;</strong>
                    </p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>______________________________________________</p>

                    <p>Dean</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>Signature ____________________________________ Date __________________</p>

                    <p class="text-center"></p>

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
                            <ul class="dropdown-menu animated fadeInUp" role="menu">
                                <li>
                                    <a href="#"> Verify </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">Reject</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">Comment</a>
                                </li>
                            </ul>
                        </div>
                    </div>
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