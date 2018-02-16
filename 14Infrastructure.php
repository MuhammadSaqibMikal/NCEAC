<?
if (isset($_POST['submit']))
{
	
	$name = $_POST['ISnameofinstitute'];
	$evaluate = $_POST['ISevaluate'];
	$size = $_POST['sizecampus'];
	$cover = $_POST['coverarea'];
	$lecture1 = $_POST['SLR1'];
	$lecture2 = $_POST['SLR2'];
	$lecture3 = $_POST['SLR3'];
	$instruction1 = $_POST['instructionalfacilitites1'];
	$instruction2 = $_POST['instructionalfacilitites2'];
	$hour = $_POST['labhour'];
	$level = $_POST['naturelevel'];
	$facility1 = $_POST['labfacilitites1'];
	$facility2 = $_POST['labfacilitites2'];
	$ratio1 = $_POST['ISperiod1'];
	$ratio2 = $_POST['ISperiod2'];
	$ratio3 = $_POST['ISperiod3'];
	$ratio4 = $_POST['ISperiod4'];
	$ratio5 = $_POST['ISperiod5'];
	$computing = $_POST['computinglab'];
	$place = $_POST['area'];
	$auto = $_POST['automate'];
	$count1 = $_POST['totalbook'];
	$count2 = $_POST['totalcompbook'];
	$count3 = $_POST['totaljournal'];
	$count4 = $_POST['IEEE'];
	$count5 = $_POST['ACM'];
	
	$InsertQuery = mysql_query("insert into infrastructure(INFRA_InstituteName,INFRA_Evaluation,INFRA_Size_Campus,INFRA_Covered_Area,INFRA_Sizes_Lecture,INFRA_Sizes_LectureB,INFRA_Sizes_LectureC,INFRA_Instructional,INFRA_InstructionalB,INFRA_General,INFRA_Nature,INFRA_Specialized,INFRA_SpecializedB,INFRA_Studentyear1,INFRA_Studentyear2,INFRA_Studentyear3,INFRA_Studentyear4,INFRA_Studentyear5,INFRA_Average,INFRA_Library_Area,INFRA_Library_Automated,INFRA_Total_Books,INFRA_Total_Computer,INFRA_Total_Journals,INFRA_IEEE,INFRA_ACM)values('$name','$evaluate','$size','$cover','$lecture1','$lecture2','$lecture3','$instruction1','$instruction2','$hour','$level','$facility1','$facility2','$ratio1','$ratio2','$ratio3','$ratio4','$ratio5','$computing','$place','$auto','$count1','$count2','$count3','$count4','$count5')") or die(mysql_error());
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
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="user.png" class="img-circle" alt="User Image" width="30" height="30">&nbsp;<span class="caret"></span>
              
            </a>
                    <ul class="dropdown-menu animated fadeInUp">
                      <li>
                        <a href="profile.php">Name</a>
                      </li>
                      <li>
                        <a href="logout.php">Logout</a>
                      </li>
                      <li>
                        <a href="accountsetting.php">Setting</a>
                      </li>
                    </ul>
                  </li>
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
                    <h2 class="panel-body text-center">INFRASTRUCTURE AND SUPPORT INFORMATION</h2>
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
                <input type="text" name="ISnameofinstitute" value="" size="100">
              </form>
              <p>&nbsp;</p>
              <p>
                <strong>PROGRAM (S) TO BE</strong>
              </p>
              <form action="" class="text-left">
                <strong>EVALUATED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <sup></sup>&nbsp;</strong>
                <input type="text" name="ISevaluate" value="" size="100">
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
              <table width="468">
                <tbody>
                  <tr>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <p>
                <em>Intent: Adequate infrastructure and support facilities are available to
                  facilitate high quality teaching and learning.&nbsp;</em>
              </p>
              <p>
                <strong>&nbsp;</strong>
              </p>
              <table width="648" class="table table-bordered">
                <tbody>
                  <tr>
                    <td width="169">
                      <p>
                        <strong>Size of campus (in kanals)</strong>
                      </p>
                    </td>
                    <td colspan="13" width="479">
                      <input type="text" name="sizecampus" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                    </td>
                  </tr>
                  <tr>
                    <td width="169">
                      <p>
                        <strong>Covered area (sq ft)</strong>
                      </p>
                    </td>
                    <td colspan="13" width="479">
                      <input type="text" name="coverarea" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                    </td>
                  </tr>
                  <tr>
                    <td width="169">
                      <p>
                        <strong>Sizes of lecture rooms</strong>
                      </p>
                    </td>
                    <td colspan="5" width="162">
                    <div class="form-group form-group-lg">
					<textarea name="SLR1" cols="5" rows="5" style="width:100%; height:100%; border-color:transparent;"></textarea>
					</div>
                    </td>
                    <td colspan="4" width="153">
                      <div class="form-group form-group-lg">
					<textarea name="SLR2" cols="5" rows="5" style="width:100%; height:100%; border-color:transparent;"></textarea>
					</div>
                    
                    </td>
                    <td colspan="4" width="164">
                      <div class="form-group form-group-lg">
					<textarea name="SLR3" cols="5" rows="5" style="width:100%; height:100%; border-color:transparent;"></textarea>
					</div>
                    
                    </td>
                  </tr>
                  <tr>
                    <td width="169">
                      <p>
                        <strong>Instructional facilities provided in lecture rooms</strong>
                      </p>
                    </td>
                    <td colspan="7" width="239">
                       <div class="form-group form-group-lg">
					<textarea name="instructionalfacilitites1" cols="5" rows="3" style="width:100%; height:100%; border-color:transparent;"></textarea>
					</div>
                    </td>
                    <td colspan="6" width="239">
                      <div class="form-group form-group-lg">
					<textarea name="instructionalfacilitites2" cols="5" rows="3" style="width:100%; height:100%; border-color:transparent;"></textarea>
					</div>
                    </td>
                  </tr>
                  <tr>
                    <td width="169">
                      <p>
                        <strong>General computing lab facilities: total number of PCs and lab hours</strong>
                      </p>
                    </td>
                    <td colspan="13" width="479">
                     <div class="form-group form-group-lg">
					<textarea name="labhour" cols="5" rows="3" style="width:100%; height:100%; border-color:transparent;"></textarea>
					</div>
                    </td>
                  </tr>
                  <tr>
                    <td width="169">
                      <p>
                        <strong>Nature and level of networking</strong>
                      </p>
                    </td>
                    <td colspan="13" width="479">
                        <input type="text" name="naturelevel" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                    </td>
                  </tr>
                  <tr>
                    <td width="169">
                      <p>
                        <strong>Specialized lab facilities and hours of their availability</strong>
                      </p>
                    </td>
                    <td colspan="7" width="239">
                      <div class="form-group form-group-lg">
					<textarea name="labfacilitites1" cols="5" rows="3" style="width:100%; height:100%; border-color:transparent;"></textarea>
					</div>
                    </td>
                    <td colspan="6" width="239">
                     <div class="form-group form-group-lg">
					<textarea name="labfacilitites2" cols="5" rows="3" style="width:100%; height:100%; border-color:transparent;"></textarea>
					</div>
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2" width="169">
                      <p>
                        <strong>Student-to-computer ratio</strong>
                      </p>
                    </td>
                    <td colspan="2" width="72">
                      <p class="text-center">
                        <strong>2010-11</strong>
                      </p>
                    </td>
                    <td colspan="3" width="117">
                      <p class="text-center">
                        <strong>2011-12</strong>
                      </p>
                    </td>
                    <td colspan="3" width="97">
                      <p class="text-center">
                        <strong>2012-13</strong>
                      </p>
                    </td>
                    <td colspan="3" width="87">
                      <p class="text-center">
                        <strong>2013-14</strong>
                      </p>
                    </td>
                    <td colspan="2" width="106">
                      <p class="text-center">
                        <strong>2014-15</strong>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" width="72">
                      <p>
                       <input type="text" name="ISperiod1" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td colspan="3" width="117">
                      <p>
                       <input type="text" name="ISperiod2" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td colspan="3" width="97">
                      <p>
                       <input type="text" name="ISperiod3" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td colspan="3" width="87">
                      <p>
                        <input type="text" name="ISperiod4" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td colspan="2" width="106">
                      <p>
                        <input type="text" name="ISperiod5" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td width="169">
                      <p>
                        <strong>Average lifetime of a PC in computing labs</strong>
                      </p>
                    </td>
                    <td colspan="13" width="479">
                       <input type="text" name="computinglab" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2" width="169">
                      <p>
                        <strong>Library information</strong>
                      </p>
                    </td>
                    <td width="59">
                      <p class="text-center">
                        <strong>Area (sq ft)</strong>
                      </p>
                    </td>
                    <td colspan="2" width="84">
                      <p class="text-center">
                        <strong>Automated</strong>
                      </p>
                    </td>
                    <td colspan="3" width="59">
                      <p class="text-center">
                        <strong>Total Books</strong>
                      </p>
                    </td>
                    <td colspan="2" width="83">
                      <p class="text-center">
                        <strong>Total Computer Books</strong>
                      </p>
                    </td>
                    <td colspan="2" width="70">
                      <p class="text-center">
                        <strong>Total Journals</strong>
                      </p>
                      <p class="text-center">
                        <strong>(Give full details)</strong>
                      </p>
                    </td>
                    <td colspan="2" width="62">
                      <p class="text-center">
                        <strong>IEEE</strong>
                      </p>
                      <p class="text-center">
                        <strong>(Give full details)</strong>
                      </p>
                    </td>
                    <td width="61">
                      <p class="text-center">
                        <strong>ACM</strong>
                      </p>
                      <p class="text-center">
                        <strong>(Give full details)</strong>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td width="59">
                      <p>
                         <input type="text" name="area" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td colspan="2" width="84">
                      <p>
                         <input type="text" name="automate" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td colspan="3" width="59">
                      <p>
                        <input type="text" name="totalbook" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td colspan="2" width="83">
                      <p>
                         <input type="text" name="totalcompbook" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td colspan="2" width="70">
                      <p>
                        <input type="text" name="totaljournal" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td colspan="2" width="62">
                      <p>
                         <input type="text" name="IEEE" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
                    </td>
                    <td width="61">
                      <p>
                         <input type="text" name="ACM" value="" size="45" style="width:100%; height:100%; border-color:transparent;">
                      </p>
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
              <p>_______________________________________</p>
              <p>Dean</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>Signature ____________________________________ Date __________________</p>
              <p>&nbsp;</p>
             <div class="container text-center">
                        <button type="button" class="btn btn-primary btn-md">Back</button>
                      <button type="button" class="btn btn-primary btn-md">
                        <span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
                      <button type="button" class="btn btn-primary btn-md">Submit</button>
					  <div class="btn-group btn-group-md">
                          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Status <span class="caret"></span> </a>
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