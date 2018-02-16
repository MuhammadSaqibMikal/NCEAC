<?php

if (isset($_POST['submit'])) {
    $name = $_POST['alumninameofinstitute'];
    $evaluate = $_POST['alumnievaluate'];
    $grad1 = $_POST['graduated1'];
    $grad2 = $_POST['graduated2'];
    $grad3 = $_POST['graduated3'];
    $grad4 = $_POST['graduated4'];
    $grad5 = $_POST['graduated5'];
    $undergrad1 = $_POST['undergraduate1'];
    $undergrad2 = $_POST['undergraduate2'];
    $undergrad3 = $_POST['undergraduate3'];
    $undergrad4 = $_POST['undergraduate4'];
    $undergrad5 = $_POST['undergraduate5'];
    $place = $_POST['placement'];
    $maintain = $_POST['maintaincontact'];
    $sum = $_POST['summary'];
    $communication = $_POST['maintaincomnunication'];
    $associate = $_POST['association'];


    $InsertQuery = mysql_query("insert into alumni(alumni_InstituteName,alumni_Evaluation,alumni_institution_y1,alumni_institution_y2,alumni_institution_y3,alumni_institution_y4,alumni_institution_y5,alumni_ graduated_1,alumni_ graduated_2,alumni_ graduated_3,alumni_ graduated_4,alumni_ graduated_5,alumni_facilities,alumni_Howdoes,alumni_Summary,alumni_MSPhD,alumni_Process,alumni_Alumni) values('$name','$evaluate','$grad1','$grad2','$grad3','$grad4','$grad5','$undergrad1','$undergrad2','$undergrad3','$undergrad4','$undergrad5','$place','$maintain','$sum','$communication','$associate')") or die(mysql_error());
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
                                            <a href="accountsetting.php">Setting</a>
                                        </li>
                                        <li>
                                            <a href="logout.php">Logout</a>
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
            <div class="container-fluid">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-body text-center">Alumni Information</h2>
                    </div>
                </div>
            </div>
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
                <input type="text" name="alumninameofinstitute" value="" size="185">
            </form>
            <p>&nbsp;</p>

            <p>
                <strong>PROGRAM (S) TO BE</strong>
            </p>

            <form action="" class="text-left">
                <strong>EVALUATED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <sup></sup>&nbsp;</strong>
                <input type="text" name="alumnievaluate" value="" size="185">
            </form>
            <p class="text-center"></p>

            <p>&nbsp;</p>
            <table width="497">
                <tbody>
                <tr>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <p>
                <em>Intent: Adequate resources are set aside for student placement and maintaining
                    relationship with her alumni. There is enough history of graduates.</em>
            </p>

            <p>
                <strong>&nbsp;</strong>
            </p>
            <ol type="A">
                <li>
                    <strong>How many students has the institution graduated over the past five years?</strong>
                </li>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td width="121">
                            <p class="text-center">
                                <strong>2010-2011</strong>
                            </p>
                        </td>
                        <td width="121">
                            <p class="text-center">
                                <strong>2011-2012</strong>
                            </p>
                        </td>
                        <td width="121">
                            <p>
                                <strong>2012-2013</strong>
                            </p>
                        </td>
                        <td width="121">
                            <p class="text-center">
                                <strong>2013-2014</strong>
                            </p>
                        </td>
                        <td width="121">
                            <p class="text-center">
                                <strong>2014-2015</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="graduated1" value="" size="45">
                        </td>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="graduated2" value="" size="45">
                        </td>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="graduated3" value="" size="45">
                        </td>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="graduated4" value="" size="45">
                        </td>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="graduated5" value="" size="45">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <strong>&nbsp;</strong>
                </p>
                <li>
                    <strong>How many students have graduated under the program over the past five
                        years?</strong>
                </li>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td width="121">
                            <p class="text-center">
                                <strong>2010-2011</strong>
                            </p>
                        </td>
                        <td width="121">
                            <p class="text-center">
                                <strong>2011-2012</strong>
                            </p>
                        </td>
                        <td width="121">
                            <p>
                                <strong>2012-2013</strong>
                            </p>
                        </td>
                        <td width="121">
                            <p class="text-center">
                                <strong>2013-2014</strong>
                            </p>
                        </td>
                        <td width="121">
                            <p class="text-center">
                                <strong>2014-2015</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="undergraduate1" value="" size="45">
                        </td>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="undergraduate2" value="" size="45">
                        </td>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="undergraduate3" value="" size="45">
                        </td>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="undergraduate4" value="" size="45">
                        </td>
                        <td width="121">
                            <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                   name="undergraduate5" value="" size="45">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <strong>&nbsp;</strong>
                </p>
                <li>
                    <strong>What facilities and resources are available to students for internships
                        and placement?</strong>
                    <br>
                    <textarea name="placement" rows="6" cols="203"></textarea>
                </li>
                <table>
                    <tbody>
                    <tr>
                        <td width="607">
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
                <li>
                    <strong>How does the university maintain contact with her alumni?</strong>
                    <br>
                    <textarea name="maintaincontact" rows="6" cols="203"></textarea>
                </li>
                <table>
                    <tbody>
                    <tr>
                        <td width="607">
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <strong>&nbsp;</strong>
                </p>
                <li>
                    <strong>Summary of the record of graduate’s placement in industry for the last
                        five years</strong>
                    <br>
                    <textarea name="graduateplacement" rows="6" cols="203"></textarea>
                </li>
                <p>
                    <strong>&nbsp;</strong>
                </p>

                <p>
                    <strong>&nbsp;</strong>
                </p>
                <li>
                    <strong>Summary of the record of graduate’s placement in national and international
                        institutions for MS and PhD studies</strong>
                    <br>
                    <textarea name="summary" rows="6" cols="203"></textarea>
                </li>
                <p>
                    <strong>&nbsp;</strong>
                </p>

                <p>
                    <strong>&nbsp;</strong>
                </p>
                <li>
                    <strong>Process to maintain communication with graduates</strong>
                    <br>
                </li>
                <textarea name="maintaincomnunication" rows="6" cols="203"></textarea>

                <p>
                    <strong>&nbsp;</strong>
                </p>

                <p>
                    <strong>&nbsp;</strong>
                </p>
                <li>
                    <strong>Alumni Registered Association?</strong>
                    <br>
                    <textarea name="association" rows="6" cols="203"></textarea>
                </li>
            </ol>
            <p>
                <strong>&nbsp;</strong>
            </p>

            <p>
                <strong>&nbsp;</strong>
            </p>

            <p>
                <strong>&nbsp;</strong>
            </p>

            <p>&nbsp;</p>

            <p>________________________________________________</p>

            <p>Dean</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>Signature ____________________________________&nbsp;&nbsp; Date __________________</p>

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
<?php

if (isset($_POST['submit']))
{
    $name = $_POST['alumninameofinstitute'];
    $evaluate = $_POST['alumnievaluate'];
    $grad1  = $_POST['graduated1'];
    $grad2 = $_POST['graduated2'];
    $grad3 = $_POST['graduated3'];
    $grad4 = $_POST['graduated4'];
    $grad5 = $_POST['graduated5'];
    $undergrad1 = $_POST['undergraduate1'];
    $undergrad2 = $_POST['undergraduate2'];
    $undergrad3 = $_POST['undergraduate3'];
    $undergrad4 = $_POST['undergraduate4'];
    $undergrad5 = $_POST['undergraduate5'];
    $place = $_POST['placement'];
    $maintain = $_POST['maintaincontact'];
    $sum = $_POST['summary'];
    $communication = $_POST['maintaincomnunication'];
    $associate = $_POST['association'];



    $InsertQuery = mysql_query("insert into alumni(alumni_InstituteName,alumni_Evaluation,alumni_institution_y1,alumni_institution_y2,alumni_institution_y3,alumni_institution_y4,alumni_institution_y5,alumni_ graduated_1,alumni_ graduated_2,alumni_ graduated_3,alumni_ graduated_4,alumni_ graduated_5,alumni_facilities,alumni_Howdoes,alumni_Summary,alumni_MSPhD,alumni_Process,alumni_Alumni) values('$name','$evaluate','$grad1','$grad2','$grad3','$grad4','$grad5','$undergrad1','$undergrad2','$undergrad3','$undergrad4','$undergrad5','$place','$maintain','$sum','$communication','$associate')") or die(mysql_error());
    header("location: current.php");
}

?>
