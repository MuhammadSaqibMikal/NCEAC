<?php
include 'dbConnect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['CRname'];
    $evaluate = $_POST['CRevaluate'];
    $reg = $_POST['CRregistration'];
    $prereg = $_POST['CRpreregistration'];
    $latereg = $_POST['CRlateregistration'];
    $penaltyreg = $_POST['CRpenaltyregistration'];
    $policy = $_POST['CRpolicy'];
    $withdrawl = $_POST['withdrawalpolicy'];
    $semswithdrawl = $_POST['semesterwithdrawal'];
    $credithour = $_POST['credithourpolicy'];
    $implement = $_POST['policiesimplement'];

    $InsertQuery = mysql_query("insert into courseregistration(CR_InstituteName,CR_Evaluation,CR_When_is_pre,CR_How_is_pre,CR_When_is_late,CR_What_is_panelty,CR_When_is_Allowed,CR_What_is_policy,CR_What_policy_regarding,CR_E_Minimum_Maximum,CR_Process_Ensure) values('$name','$evaluate','$reg','$prereg','$latereg','$penaltyreg','$policy','$withdrawl','$semswithdrawl','$credithour','$implement')") or die(mysql_error());
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
                            <h2 class="panel-body text-center">Course Registration</h2>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCEAC.FORM.001.H</p>
                <a href="#"><i class="fa fa-3x fa-mobile fa-fw"></i></a>
                <h4>
                    <p class="text-center">
                        <strong>Course Registration</strong>
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
                    <input type="text" name="CRname" value="" size="100">
                </form>
                <p>&nbsp;</p>

                <p>
                    <strong>PROGRAM (S) TO <br> BE</strong>
                </p>

                <form action="" class="text-left">
                    <strong>EVALUATED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <sup></sup>&nbsp;</strong>
                    <input type="text" name="CRevaluate" value="" size="100">
                </form>
                <p class="text-center"></p>

                <p>
                    <em>&nbsp;</em>
                </p>

                <p>
                    <em>Intent: Generally it is expected that the Academic Calendar and course
                        schedules are planned well in advance. Students are given ample time to
                        pre-register for their required courses. Students are given the opportunity
                        to add or drop course as well. Students have the choice to withdraw from
                        a course.</em>
                </p>

                <p>&nbsp;</p>
                <ol type="A">
                    <li>
                        <strong>Pre-Registration Policy</strong>
                    </li>
                    <ul>
                        <li>
                            <em>When is pre-registration done?</em>
                            <br>
                            <textarea name="CRregistration" rows="4" cols="175"></textarea>
                        </li>
                    </ul>
                    <table>
                        <tbody>
                        <tr>
                            <td width="583">
                                <p>&nbsp;</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <ul>
                        <li>
                            <em>How is pre-registration done?</em>
                            <br>
                            <textarea name="CRpreregistration" rows="4" cols="175"></textarea>
                        </li>
                    </ul>
                    <table>
                        <tbody>
                        <tr>
                            <td width="583">
                                <p>&nbsp;</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <li>
                        <strong>Late Registration Policy</strong>
                    </li>
                    <ul>
                        <li>
                            <em>When is late registration allowed?</em>
                            <br>
                            <textarea name="CRlateregistration" rows="4" cols="175"></textarea>
                        </li>
                    </ul>
                    <table>
                        <tbody>
                        <tr>
                            <td width="583">
                                <p>&nbsp;</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <ul>
                        <li>
                            <em>What is the penalty for late registration?</em>
                            <br>
                            <textarea name="CRpenaltyregistration" rows="4" cols="175"></textarea>
                        </li>
                    </ul>
                    <table>
                        <tbody>
                        <tr>
                            <td width="583">
                                <p>&nbsp;</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <p>
                        <strong>&nbsp;</strong>
                    </p>
                    <li>
                        <strong>Add/Drop Policy and Procedure</strong>
                    </li>
                    <ul>
                        <li>When is it allowed? How is it ensured that students are not allowed to
                            add or drop a course after the add/drop deadline has passed?
                            <br>
                            <textarea name="CRpolicy" rows="4" cols="175"></textarea>
                        </li>
                    </ul>
                    <p>
                        <strong>&nbsp;</strong>
                    </p>
                    <li>
                        <strong>Withdrawal Policy and Procedure</strong>
                    </li>
                    <ul>
                        <li>
                            <em>What is the policy for withdrawal from a course? What is the penalty for
                                withdrawal? How is this policy implemented?</em>
                            <br>
                            <textarea name="withdrawalpolicy" rows="4" cols="175"></textarea>
                        </li>
                    </ul>
                    <table>
                        <tbody>
                        <tr>
                            <td width="583"></td>
                        </tr>
                        </tbody>
                    </table>
                    <p>
                        <strong>&nbsp;</strong>
                    </p>
                    <ul>
                        <li>
                            <em>What is policy regarding drop/withdrawal of semester?</em>
                            <br>
                            <textarea name="semesterwithdrawal" rows="4" cols="175"></textarea>
                        </li>
                    </ul>
                    <p>
                        <strong>&nbsp;</strong>
                    </p>
                    <li>
                        <strong>Policy regarding minimum and maximum credit hours to be registered?</strong>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <textarea name="credithourpolicy" rows="4" cols="175"></textarea>
                    </li>
                    <p>
                        <strong>&nbsp;</strong>
                    </p>

                    <p>
                        <strong>&nbsp;</strong>
                    </p>
                    <li>
                        <strong>Process to ensure that the above Policies and Procedures are implemented?</strong>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <textarea name="policiesimplement" rows="4" cols="175"></textarea>
                    </li>
                </ol>
                <table>
                    <tbody>
                    <tr></tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>______________________________________________</p>

                <p>Dean</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>Signature ____________________________________&nbsp;&nbsp; Date __________________</p>

                <p>
                    <strong>&nbsp;</strong>
                </p>

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


</body>
</html>