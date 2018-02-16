<?php
include 'include.php';
?>
<?php
$formID = $_GET['formid'];
$query1 = mysql_query("select * from admission where Form_Id='$formID'");
$rec1 = mysql_fetch_array($query1);
$name = $rec1[1];
$evaluate = $rec1[2];
$frequency = $rec1[3];
$admitted = $rec1[4];
$instrument = $rec1[5];
$admission = $rec1[6];
$merit = $rec1[7];
$compiled = $rec1[8];
$inducted = $_rec1[9];
$process = $rec1[10];
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
                            <input type="text" name="search" class="form-control" placeholder="Search...">
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
        <div class="container">
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-body text-center">Admission</h2>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCEAC.FORM.001B</p>
                <a href="#">
                    <i class="fa fa-3x fa-mobile fa-fw"></i>
                </a>
                <h4>
                    <p class="text-center">
                        <strong>ADMISSION PROCEDURES AND THEIR IMPLEMENTATION</strong>
                    </p>
                </h4>
                <p></p>

                <p class="text-center"></p>

                <p></p>

                <p>
                    <strong>&nbsp;</strong>
                </p>

                <p></p>

                <form action="" method="post" class="text-left">
                    <strong>NAME OF INSTITUTION:
                        <sup></sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                    <input type="text" name="nameofinstitute" value="<?php echo $rec1[1]; ?>" size="105">

                    <p>&nbsp;</p>

                    <p>
                        <strong>PROGRAM (S) TO</strong>
                    </p>
                    <strong>BE EVALUATED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <sup></sup>&nbsp;</strong>
                    <input type="text" name="programstobeevaluated" value="<?php echo $rec1[2]; ?>" size="105">
                    <table width="497">
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <table width="468">
                        <tbody>
                        <tr></tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>

                    <p>
                        <em>Intent: Admission policies and procedures are in place and executed properly.
                            Admitted students meet the HEC minimum criteria for admission into a computing
                            program.</em>
                    </p>

                    <p>&nbsp;</p>
                    <ol type="A">
                        <li>
                            <strong>Admission Policies and Procedures</strong>
                        </li>
                    </ol>
                    <ul>
                        <li>
                            <strong>Frequency of admission per academic year. Give detail.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <sup></sup>&nbsp;</strong>
                            <br>
                            <textarea name="frequency" rows="6" cols="163"><?php echo $rec1[3]; ?></textarea>
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul>
                        <li>
                            <em>When are new students admitted in the program?</em>
                            <br>
                            <textarea name="studentsadmittedinprogram" rows="6"
                                      cols="163"><?php echo $rec1[4]; ?></textarea>
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
                            <em>What instruments (scores in Matriculation and FSc exams, admission test,
                                interview, etc.) are used for admission into the program?</em>
                            <br>
                            <textarea name="instruments" rows="6" cols="163"><?php echo $rec1[5]; ?></textarea>
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
                            <em>What is the minimum requirement for admission in your program?</em>
                            <br>
                            <textarea name="requirementforadmission" rows="6"
                                      cols="163"><?php echo $rec1[6]; ?></textarea>
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
                            <em>Is admission is open merit?</em>
                            <br>
                            <textarea name="merit" rows="6" cols="163"><?php echo $rec1[7]; ?></textarea>
                        </li>
                    </ul>
                    <p>
                        <em>&nbsp;</em>
                    </p>
                    <ul>
                        <li>
                            <em>How merit list is complied?</em>
                            <br>
                            <textarea name="meritcomplied" rows="6"
                                      cols="163"><?php echo $rec1[8]; ?></textarea>
                        </li>
                    </ul>
                    <p>
                        <em>&nbsp;</em>
                    </p>
                    <ul>
                        <li>
                            <em>How many students are inducted per admission</em>
                            <br>
                            <textarea name="studentsinductedperadmission" rows="6"
                                      cols="163"><?php echo $rec1[9]; ?></textarea>
                        </li>
                    </ul>
                    <p>
                        <em>&nbsp;</em>
                    </p>
                    <ul>
                        <li>
                            <em>How do you ensure that the admission policies and procedures are followed
                                properly and that transparency is maintained in the admission process?</em>
                            <br>
                            <textarea name="transparencyadmissionprocess" rows="6"
                                      cols="163"><?php echo $rec1[10]; ?></textarea>
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

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>______________________________________________</p>

                    <p>Dean</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>Signature ____________________________________&nbsp;&nbsp; Date __________________</p>

                    <p class="text-center"></p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <div class="container text-center">
                        <button type="submit" name="save" class="btn btn-primary btn-md">
                            <span class="glyphicon glyphicon-save"></span>&nbsp;Save
                        </button>
                        <button type="submit" name="submit" class="btn btn-primary btn-md">Submit</button>
                        <?php
                        if ($emptype == "yes") {
                            ?>
                            <div class="btn-group btn-group-md">
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Status <span
                                        class="caret"></span> </a>
                                <ul class="dropdown-menu" role="menu">

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
                            <?php
                        }
                        ?>
                    </div>
                </form>
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

<script>

</script>

</body>
</html>

<?php
if (isset($_POST['submit']) || isset($_POST['save'])) {

    $name = $_POST['nameofinstitute'];
    $evaluate = $_POST['programstobeevaluated'];
    $frequency = $_POST['frequency'];
    $admitted = $_POST['studentsadmittedinprogram'];
    $instrument = $_POST['instruments'];
    $admission = $_POST['requirementforadmission'];
    $merit = $_POST['merit'];
    $compiled = $_POST['meritcomplied'];
    $inducted = $_POST["studentsinductedperadmission"];
    $process = $_POST['transparencyadmissionprocess'];
    $status = "Submitted";
    $InsertQuery = mysql_query("update admission set AdmissionInstituteName='$name', ProgramEvalute = '$evaluate', FrequencyAdmission = '$frequency', NewStdAdmission = '$admitted', NewInstruments = '$instrument', AdmissionRqm = '$admission', IsOpenMerit = '$merit', HowMerit = '$compiled', StdPerAdmission = '$inducted', How_Do_You = '$process', Status = '$status' where Form_Id='$formID'") or die(mysql_error());
    header("location: current.php");
}

?>
