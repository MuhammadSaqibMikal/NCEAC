<?php
if (isset($_POST['submit']))
{
	$name = $_POST['CRIname'];  
	$evaluate = $_POST['CRIevaluate'];
	$acriteria = $_POST['CRICCC'];
	$ccriteria = $_POST['MCC'];
	$dcriteria = $_POST['MBE'];
	$ecriteria = $_POST['SS'];
	$ageneral = $_POST['CRIgeneral']; 
	$aelective = $_POST['CRIelective'];
	$bcriteria = $_POST['CCC'];
	$fcriteria = $_POST['CRISS'];
    $acredithour = $_POST['CRIcredithour'];
	
	$InsertQuery = mysql_query("insert into curriculumrelatedinformation(CRI_InstituteName,CRI_Evaluation,CRI_Computing_Hours,CRI_Major_Core,CRI_Major_Based,CRI_Supporting,CRI_General,CRI_University,CRI_Total_Credit,CRI_Cumulative_Credit_HoursA,CRI_Cumulative_Credit_HoursB,CRI_Cumulative_Credit_HoursTotal,) values('$name','$evaluate','$acriteria','$ccriteria','$dcriteria','$ecriteria','$ageneral','$aelective','$bcriteria','$fcriteria','$acredithour')") or die(mysql_error());
    header("location: current.php");
	
	
	$acourse = $_POST['CRIcourse'];
	$acoursetitle = $_POST['CRIcoursetitle'];
	$acredithour = $_POST['CRICH'];
	$aprereq = $_POST['CRIprerequisite'];
	
	$InsertQuery = mysql_query("insert into cricorecourses (CRICoreCourses_Code,CRICoreCourses_Title,CRICoreCourses_Hours,CRICoreCourses_Prerequisite) values('$acourse','$acoursetitle','$acredithour','$aprereq')") or die(mysql_error());
    header("location: current.php");
	
	$bcoursecode = $_POST['MBECcoursecode'];
	$bcoursetitle = $_POST['MBECtitle'];
	$bcredithour = $_POST['MBECcredithour'];
	$bprereq = $_POST['MBECprerequisite'];
	
	$InsertQuery = mysql_query("insert into crimajorbased(CRIMajorBased_Code,CRIMajorBased_Title,CRIMajorBased_Hours,CRIMajorBased_Prerequisite) values('$bcourse','$bcoursetitle','$bcredithour','$bprereq')") or die(mysql_error());
    header("location: current.php");
	
	$ccoursecode = $_POST['SScoursecode'];
	$ccoursetitle = $_POST['SStitle'];
	$ccredithour = $_POST['SScredithour'];
	$cprereq = $_POST['SSprerequisite'];
	
	$InsertQuery = mysql_query("insert into crisupportingsciences(criSupportingSciences_Code,criSupportingSciences_Title,criSupportingSciences_Hours,criSupportingSciences_Prerequisite) values('$ccoursecode','$ccoursetitle','$ccredithour','$cprereq')") or die(mysql_error());
    header("location: current.php");
	
	$dcoursecode = $_POST['GECcoursecode'];
	$dcoursetitle = $_POST['GECtitle'];
	$dcredithour = $_POST['GECcredithour'];
	$dprereq = $_POST['GECprerequisite'];
	
	$InsertQuery = mysql_query("insert into crigeneral(criGeneral_Code,criGeneral_Title,criGeneral_Hours,criGeneral_Prerequisite) values('$dcoursecode','$dcoursetitle','$dcredithour','$dprereq')") or die(mysql_error());
    header("location: current.php");
	
	$ecoursecode = $_POST['UECcoursecode'];
	$ecoursetitle = $_POST['UECtitle'];
	$ecredithour = $_POST['UECcrdithour'];
	$eprereq = $_POST['UECprerequisite'];	
	
	
	
	$InsertQuery = mysql_query("insert into criuni(criuni_Code,criuni_Title,criuni_Hours,criuni_Prerequisite) values('$ecoursecode','$ecoursetitle','$ecredithour','$eprereq')") or die(mysql_error());
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
			<div class="container">
              <div class="container-fluid">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h2 class="panel-body text-center">Curriculum Related Information</h2>
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
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCEAC.DOC.001-I</p>
              <a href="#"><i class="fa fa-3x fa-mobile fa-fw"></i></a>
              <h4>
              <p class="text-center">
             
                <strong>Curriculum Related Information</strong>
              </p></h4>
             <p>&nbsp;</p><p>&nbsp;</p>
              <form action="" class="text-left">
                <strong>NAME OF INSTITUTION:
                  <sup></sup>&nbsp;</strong>
                <input type="text" name="CRIname" value="" size="100">
              </form>
              <p>&nbsp;</p>
              <p>
                <strong>PROGRAM (S) TO BE</strong>
              </p>
              <form action="" class="text-left">
                <strong>EVALUATED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <sup></sup>&nbsp;</strong>
                <input type="text" name="CRIevaluate" value="" size="100">
              </form>
              <p class="text-center"></p>
              <table width="468">
                <tbody>
                  <tr></tr>
                </tbody>
              </table>
              <p>
                <em>&nbsp;</em>
              </p>
              <p>
                <em>Intent: Curriculum has sufficient technical content to prepare students
                  for industry and graduate studies, and has adequate humanities and social
                  sciences content to help students become well-rounded individuals. Curriculum
                  meets the minimum requirements recommended in the HEC computing curriculum
                  recommendations, which have the following area-wise breakdown. Curriculum
                  coverage is well-planned over four years.</em>
              </p>
              <p>&nbsp;</p>
              <ol type="A">
                <li>
                  <strong>Summary of HEC Minimum Requirements for Computing Degree Program*</strong>
                </li>
                <p>
                  <strong>(Computing includes majors in Computer Science, Software Engineering and
                    Information Technology)</strong>
                </p>
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="283">
                        <p class="text-center">
                          <strong>Category</strong>
                        </p>
                      </td>
                      <td width="103">
                        <p class="text-center">
                          <strong>Credit Hours</strong>
                        </p>
                      </td>
                      <td width="180">
                        <p class="text-center">
                          <strong>Cumulative Credit Hours</strong>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>Computing-Core Courses</p>
                      </td>
                      <td width="103">
                        <p>37</p>
                      </td>
                      <td rowspan="3" width="180">
                        <p>76</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>Major (Computer Sciences/Software Engineering/Information Technology)-Core
                          Courses</p>
                      </td>
                      <td width="103">
                        <p>18</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>Major (Computer Sciences/Software Engineering/Information Technology)
                          Based –Electives</p>
                      </td>
                      <td width="103">
                        <p>21</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>Supporting Sciences</p>
                      </td>
                      <td width="103">
                        <p>21</p>
                      </td>
                      <td rowspan="3" width="180">
                        <p>&nbsp;54</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>General Electives</p>
                      </td>
                      <td width="103">
                        <p>15</p>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>University Electives</p>
                      </td>
                      <td width="103">
                        <p>18</p>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" width="386">
                        <p>
                          <strong>Total Credit Hours</strong>
                        </p>
                      </td>
                      <td width="180">
                        <p>
                          <strong>&nbsp;130</strong>
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>*FOR DETAIL REGARDING HEC RECOMMENDED CURRICULUM, REFER TO THE REPORT
                  ENTITLED “CURRICULUM OF COMPUTER SCIENCE, SOFTWARE ENGINEERING AND INFORMATION
                  TECHNOLOGY” AVAILABLE AT WEBSITE
                  <u>
                    <a href="http://www/">http://www</a>.nceac.org</u>
                </p>
                <li>
                  <strong>Curriculum Summary/Comparison</strong>
                </li>
                <p>
                  <strong>Provide the summary of the program (under evaluation for accreditation)
                    on the basis of comparison with the respective above mentioned HEC recommended
                    curriculum&nbsp;</strong>
                </p>
                <p>
                  <strong>&nbsp;</strong>
                </p>
                <p>&nbsp;</p>
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="283">
                        <p class="text-center">
                          <strong>Category</strong>
                        </p>
                      </td>
                      <td width="103">
                        <p class="text-center">
                          <strong>Credit Hours</strong>
                        </p>
                      </td>
                      <td width="180">
                        <p class="text-center">
                          <strong>Cumulative Credit Hours</strong>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>
                          <strong>Computing-Core Courses</strong>
                        </p>
                      </td>
                      <td width="103">
                        <p>
                       <input type="text" name="CRICCC" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td rowspan="3" width="180">
                        <p>
                          <div class="text-center">
                          <textarea name="CCC" cols="50" rows="6" style="width:100%; height:100%; border-color:transparent;"></textarea>
                        </div>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>
                          <strong>Major (Computer Sciences/Software Engineering/Information Technology)-Core
                            Courses</strong>
                        </p>
                      </td>
                      <td width="103">
                        <div class="text-center">
                          <textarea name="MCC" cols="2" rows="2" style="width:100%; height:100%; border-color:transparent;"></textarea>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>
                          <strong>Major (Computer Sciences/Software Engineering/Information Technology)
                            Based –Electives</strong>
                        </p>
                      </td>
                      <td width="103">
                        <div class="text-center">
                          <textarea name="MBE" cols="2" rows="2" style="width:100%; height:100%; border-color:transparent;"></textarea>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>
                          <strong>Supporting Sciences</strong>
                        </p>
                      </td>
                      <td width="103">
                        <p>
                         <input type="text" name="SS" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td rowspan="3" width="180">
                        <div class="text-center">
                          <textarea name="CRISS" cols="50" rows="6" style="width:100%; height:100%; border-color:transparent;"></textarea>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>
                          <strong>General Electives</strong>
                        </p>
                      </td>
                      <td width="103">
                        <p>
                       <input type="text" name="CRIgeneral" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="283">
                        <p>
                          <strong>University Electives</strong>
                        </p>
                      </td>
                      <td width="103">
                        <p>
                          <p>
                       <input type="text" name="CRIelective" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" width="386">
                        <p>
                          <strong>Total Credit Hours</strong>
                        </p>
                      </td>
                      <td width="180">
                        <p>
                       <input type="text" name="CRIcredithour" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>&nbsp;</p>
                <li>
                  <strong>PROVIDE COMPLETE SUMMARY OF THE RESPECTIVE PROGRAM OF ALL COURSES INVOLVING
                    COURSE CODE, COURSE TITLE, CREDIT HOURS, PREREQUSITE FOR THE FOLLOWING
                    CATEGORIES:</strong>
                </li>
                <p>
                  <strong>&nbsp;</strong>
                </p>
                <p>
                  <strong>Core Courses</strong>
                </p>
                
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="82">
                        <p class="text-center">
                          <strong>Course<br> Code</strong>
                        </p>
                      </td>
                      <td width="165">
                        <p class="text-center">
                          <strong>Course Title</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Credit Hours</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Prerequisite</strong>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                         <p>
                       <input type="text" name="CRIcourse" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                        <p>
                       <input type="text" name="CRIcoursetitle" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="CRICH" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="CRIprerequisite" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                        <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                        <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>
                  <strong>&nbsp;</strong>
                </p>
                <p>
                  <strong>Major Based Electives Courses</strong>
                </p>
                
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="82">
                        <p class="text-center">
                          <strong>Course<br> Code</strong>
                        </p>
                      </td>
                      <td width="165">
                        <p class="text-center">
                          <strong>Course Title</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Credit Hours</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Prerequisite</strong>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                         <p>
                       <input type="text" name="MBECcoursecode" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                         <p>
                       <input type="text" name="MBECtitle" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="MBECcredithour" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="MBECprerequisite" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>
                  <strong>&nbsp;</strong>
                </p>
                <p>
                  <strong>Supporting Sciences</strong>
                </p>
                
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="82">
                        <p class="text-center">
                          <strong>Course<br> Code</strong>
                        </p>
                      </td>
                      <td width="165">
                        <p class="text-center">
                          <strong>Course Title</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Credit Hours</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Prerequisite</strong>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                        <p>
                       <input type="text" name="SScoursecode" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                         <p>
                       <input type="text" name="SStitle" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                        <p>
                       <input type="text" name="SScredithour" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="SSprerequisite" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                         <p>
                       <input type="text" name="" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                         <p>
                       <input type="text" name="" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>
                  <strong>&nbsp;</strong>
                </p>
                <p>
                  <strong>General Education Courses</strong>
                </p>
                
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="82">
                        <p class="text-center">
                          <strong>Course<br> Code</strong>
                        </p>
                      </td>
                      <td width="165">
                        <p class="text-center">
                          <strong>Course Title</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Credit Hours</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Prerequisite</strong>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                        <p>
                       <input type="text" name="GECcoursecode" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                        <p>
                       <input type="text" name="GECtitle" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                        <p>
                       <input type="text" name="GECcredithour" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="GECprerequisite" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                       <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>
                  <strong>&nbsp;</strong>
                </p>
                <p>
                  <strong>University Elective Courses</strong>
                </p>
                
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td width="82">
                        <p class="text-center">
                          <strong>Course<br> Code</strong>
                        </p>
                      </td>
                      <td width="165">
                        <p class="text-center">
                          <strong>Course Title</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Credit Hours</strong>
                        </p>
                      </td>
                      <td width="123">
                        <p class="text-center">
                          <strong>Prerequisite</strong>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                         <p>
                       <input type="text" name="UECcoursecode" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                         <p>
                       <input type="text" name="UECtitle" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="UECcrdithour" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="UECprerequisite" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td width="82">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="165">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                         <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                      <td width="123">
                        <p>
                       <input type="text" name="input" value="" size="2" style="width:100%; height:100%; border-color:transparent;">
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>
                  <strong>&nbsp;</strong>
                </p>
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
  

</body></html>