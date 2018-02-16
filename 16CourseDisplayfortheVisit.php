<?php

if (isset($_POST['submit']))
{
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	
	
	
	$InsertQuery = mysql_query("insert into (,,,) values('','')") or die(mysql_error());
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
                    <h2 class="panel-body text-center">Course Display for the Visit</h2>
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
              <p class="text-center"></p>
              <ol type="A">
                <li>
                  <h4>
                    <strong>Course Display for the Visit</strong>
                  </h4>
                </li>
              </ol>
              <p>Three samples for each computer science course must be available in a
                room for study by the evaluation team at all times during the evaluation
                visit. The course outline for each course in the computer science curriculum
                should also be available in the same room. It will be very helpful if the
                display room contains at least two computers with Internet connection.
                The course material display for a course must include at least the following
                items.&nbsp;</p>
              <ul>
                <li>Course name and number, number of credit hours, meeting times, etc.</li>
                <li>Textbook and other required material (e.g. manuals, reference booklets,
                  standards and documents)</li>
                <li>Instructor’s name and contacts</li>
                <li>Syllabus/schedule
                  <em>(provide hardcopy and URL if only available on-line)</em>
                </li>
                <li>Introductory pages that include course objectives, pedagogical approach,
                  assessment methods (and how these relate to the program objectives if appropriate)</li>
                <li>Course policies</li>
                <li>Introductory sheet that indicates course locations or sites that show
                  evidence of writing, presentations, ethics etc. as appropriate</li>
                <li>Assignments and projects, tests, exams and important handouts</li>
                <li>Student work (examples of graded high/medium/low quality work as well
                  as tests/exams etc.)</li>
                <li>Any feedback mechanisms/examples to students that might be on-line</li>
                <li>Any substantive electronically posted communication, threaded discussion,
                  or teamwork etc.</li>
                <li>Course evaluations (measures of success that include, for example, the
                  results of student surveys and the achievements of students in current
                  or subsequent courses)</li>
                <li>Proposed or changes as a result of formative surveys</li>
              </ul>
              <p>&nbsp;</p>
              <p>___________________________________________</p>
              <p>Vice Chancellor or Rector</p>
              <p>&nbsp;</p>
              <p>Signature ____________________________________&nbsp;&nbsp; Date_____________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
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