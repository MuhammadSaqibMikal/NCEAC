<?php

if (isset($_POST['submit']))
{
	$meet = $_POST['Meeting'];
	$meethod = $_POST['meetingHOD'];
	$goals = $_POST['presentation'];
	$meetfaculty = $_POST['facultymeeting'];
	$structure = $_POST['infrastructurevisit'];
	$audit = $_POST['courseaudit'];
	$break = $_POST['lunch'];
	$classroom = $_POST['classvisit'];
	$fillforms = $_POST['forms'];
	$finding = $_POST['procedure'];
	$end = $_POST['filedaudit'];


	$InsertQuery = mysql_query("insert into (,,,) values('$meet','$meethod','$goals','$meetfaculty','$structure','$audit','$break','$classroom','$fillforms','$finding','$end')") or die(mysql_error());
    header("location: current.php");
	}

?>


<html><head>
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
  </head><body>
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
              <img src="user.png" class="img-circle" alt="User Image" width="30" height="30">&nbsp;<span class="caret"></span>
              
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
                    <a class="btn btn- btn-block btn-link dropdown-toggle" data-toggle="button"> Notification&nbsp;<span class="glyphicon glyphicon-bell"></span> <span class="fa fa-caret-down"></span></a>
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
                    <a class="btn btn- btn-block btn-link dropdown-toggle" data-toggle="button">&nbsp;&nbsp; Notice Board&nbsp; <span class="fa fa-caret-down"></span><span class="badge">42</span></a>
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
                    <h2 class="panel-body text-center">Field Audit Schedule</h2>
                  </div>
                </div>
              </div>
              <a href="#"><i class="fa fa-3x fa-mobile fa-fw"></i></a>
              <p class="text-center">
                <strong>NCEAC Secretariat</strong>
              </p>
              <p class="text-center">
                <strong>Foundation University Institute of Management &amp; Computer Sciences</strong>
              </p>
              <p class="text-center">
                <strong>New Lalazar, Gulberg Avenue, Rawalpindi Cantt, 46000</strong>
              </p>
              <p class="text-center">
                <strong>Phone : 051- 5516094, Fax: 051-5584574, PABX: 051- 5790360-2 (Ext. 202)</strong>
              </p>
              <p class="text-center">
                <strong>http://www.nceac.org/</strong>
              </p>
              <h4>
                <p class="text-center">
                  <strong>Filed Audit Guidelines</strong>
                </p>
              </h4>
              <p></p>
              <p>&nbsp;</p>
              <h4>
                <p class="text-center">
                  <strong>Audit Schedule</strong>
                </p>
              </h4>
              <p></p>
              <p class="text-center"></p>
              <p></p>
              <p>
                <strong>&nbsp;</strong>
              </p>
              <p></p>
              <p class="text-center"></p>
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td width="133">
                      <p class="text-center">
                        <strong>Time</strong>
                      </p>
                    </td>
                    <td width="349">
                      <p class="text-center">
                        <strong>Activity</strong>
                      </p>
                    </td>
                    <td width="157">
                      <p class="text-center">
                        <strong>Items of NCEAC.FORM.005 Covered</strong>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>09:00 – 09:15</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <ul>
                        <p>Meet Dean of the Program</p>
                        <li>Explain aim of the visit</li>
                        <li>Describe the audit process</li>
                      </ul>
                    </td>
                    <td width="157">
                     <textarea name="Meeting" cols="3" rows="4" style="width:100%; height:100%; border-color:transparent;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>09:15 – 09:30</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <p>Meet HOD of the program</p>
                    </td>
                    <td width="157">
                     <input type="text" name="meetingHOD" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>09:30 – 10:15</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <ul>
                        <li>Presentation
                          <p></p>
                        </li>
                        <li>Program Goals
                          <p></p>
                        </li>
                        <li>Curricula Summary
                          <p></p>
                        </li>
                        <li>Faculty Summary
                          <p></p>
                        </li>
                        <li>Student Summary
                          <p></p>
                        </li>
                        <li>Infrastructure Summary
                          <p></p>
                        </li>
                        <li>Alumni Summary
                          <p></p>
                        </li>
                        <li>Q/A
                          <p></p>
                        </li>
                        <li>Members
                          <p></p>
                        </li>
                        <li>HOD
                          <p></p>
                        </li>
                        <li>All Faculty
                          <p></p>
                        </li>
                      </ul>
                    </td>
                    <td width="157">
                     <textarea name="presentation" cols="3" rows="16" style="width:100%; height:100%; border-color:transparent;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>10:15 – 11:30</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <ul>
                        <p>Faculty Meeting</p>
                        <li>Around 10 min per faculty
                          <p></p>
                        </li>
                        <li>Graduation
                          <p></p>
                        </li>
                        <li>Personal Background
                          <p></p>
                        </li>
                        <li>Area of Interest
                          <p></p>
                        </li>
                        <li>Perception about the program, Students and peers
                          <p></p>
                        </li>
                        <li>Opportunities for professional growth
                          <p></p>
                        </li>
                        <li>Research opportunities
                          <p></p>
                        </li>
                        <li>Salary perception
                          <p></p>
                        </li>
                        <li>Teaching Load
                          <p></p>
                        </li>
                      </ul>
                    </td>
                    <td width="157">
                     <textarea name="facultymeeting" cols="3" rows="14" style="width:100%; height:100%; border-color:transparent;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>11:30 – 12:30</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <ul>
                        <p>Infrastructure Visit</p>
                        <li>Lab Audit
                          <p></p>
                        </li>
                        <li>Library
                          <p></p>
                        </li>
                        <li>Classrooms
                          <p></p>
                        </li>
                        <li>Faculty Offices
                          <p></p>
                        </li>
                      </ul>
                    </td>
                    <td width="157">
                     <textarea name="infrastructurevisit" cols="3" rows="7" style="width:100%; height:100%; border-color:transparent;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>12:30</em>
                        </strong>
                        <strong>
                          <em>- 1:30</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <ul>
                        <p>Course Audit</p>
                        <li>Course file
                          <p></p>
                        </li>
                        <li>Attendance
                          <p></p>
                        </li>
                        <li>Teaching Log
                          <p></p>
                        </li>
                        <li>Examination Record
                          <p></p>
                        </li>
                        <li>Sessional Record
                          <p></p>
                        </li>
                        <li>Evaluation Instruments
                          <p></p>
                        </li>
                        <li>Projects
                          <p></p>
                        </li>
                      </ul>
                    </td>
                    <td width="157">
                      <textarea name="courseaudit" cols="3" rows="11" style="width:100%; height:100%; border-color:transparent;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>1:30 - 2:00</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <p>Zuhar Prayer+Lunch</p>
                    </td>
                    <td width="157">
                      <input type="text" name="lunch" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>2:00 – 3:00</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <ul>
                        <p>Classroom Visit</p>
                        <li>Two classrooms 30 min each
                          <p></p>
                        </li>
                        <li>Student Interview
                          <p></p>
                        </li>
                        <li>Student Assessment
                          <p></p>
                        </li>
                        <li>Student Perception
                          <p></p>
                        </li>
                        <li>Student Feedback
                          <p></p>
                          <p>&nbsp;</p>
                        </li>
                      </ul>
                    </td>
                    <td width="157">
                     <textarea name="classvisit" cols="3" rows="10" style="width:100%; height:100%; border-color:transparent;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>3:00 – 4:00</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <p>Forms Filling</p>
                    </td>
                    <td width="157">
                     <input type="text" name="forms" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>4:00 - 4:30</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <ul>
                        <p>Meeting with Dean / Exit Meeting</p>
                        <li>Findings
                          <p></p>
                        </li>
                        <li>Recommendations
                          <p></p>
                        </li>
                        <li>Next Procedure
                          <p></p>
                        </li>
                      </ul>
                    </td>
                    <td width="157">
                     <textarea name="procedure" cols="3" rows="5" style="width:100%; height:100%; border-color:transparent;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td width="133">
                      <p>
                        <strong>
                          <em>4:30</em>
                        </strong>
                      </p>
                    </td>
                    <td width="349">
                      <p>End of Filed Audit</p>
                    </td>
                    <td width="157">
                      <input type="text" name="filedaudit" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                    </td>
                  </tr>
                </tbody>
              </table>
              <p>
                <strong>&nbsp;</strong>
              </p>
              <p>
                <strong>&nbsp;</strong>
              </p>
              <p>&nbsp;</p>
              <div class="container text-center">
                          <button type="button" class="btn btn-primary btn-md">Back </button>
                        <button type="button" class="btn btn-primary btn-md">
                          <span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
                        <button type="button" class="btn btn-primary btn-md">Submit</button>
                        <div class="btn-group btn-group-md">
                          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Status <span class="caret"></span> </a>
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
  

</body></html>