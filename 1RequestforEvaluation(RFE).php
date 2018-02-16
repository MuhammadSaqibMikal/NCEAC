<?php
include 'dbConnect.php';

if (isset($_POST['submit'])) {
    $rfename = $_POST['rfenameofinstitute'];
    $evaluate = $_POST['rfeevaluate'];
    $rfeinstitute = $_POST['institution'];
    $rfefederal = $_POST['federal'];
    $rfecheck = $_POST['check'];
    $rfebalochistan = $_POST['balochistan'];
    $rfenwfp = $_POST['NWFP'];
    $rfepunjab = $_POST['punjab'];
    $rfesindh = $_POST['sindh'];
    $date = $_POST['date'];
    $InsertQuery = mysql_query("insert into requestforevaluation(RfeInstituteName, RfeEvaluate,RfeInstituition,RfeFederal,RfeProvincial,RfeDateGranted) values('$rfename','$evaluate','$rfeinstitute','$rfefederal','$rfecheck','$date')") or die(mysql_error());
    header("location: current.php");


    $evaluation1 = $_POST['rfeevaluated1'];
    $evaluation2 = $_POST['rfeevaluated2'];
    $evaluation3 = $_POST['rfeevaluated3'];
    $evaluation4 = $_POST['rfeevaluated4'];
    $evaluation5 = $_POST['rfeevaluated5'];
    $InsertQuery = mysql_query("insert into requestforevaluationbb(Rfeb_Program_Evaluated, Rfeb_Type,Rfeb_Degree,Rfeb_years,Rfeb_Initial) values('$evaluation1','$evaluation2','$evaluation3','$evaluation4','$evaluation5')") or die(mysql_error());
    header("location: current.php");


    $authorities = $_POST['institutionauthorities'];
    $officername = $_POST['OfficerofUniversity/Institution'];
    $dept = $_POST['AllDepartments/Faculties'];
    $offer = $_POST['All Disciplines Offered'];
    $programs = $_POST['AllBachelorProgramsOffered'];
    $programoffer = $_POST['AllGraduateProgramsOffered'];
    $number = $_POST['TotalNumberofStudents'];
    $rfeinput1 = $_POST['DBSS'];
    $rfeinput2 = $_POST['PBSS'];
    $rfeinput3 = $_POST['TSFS'];
    $rfeinput4 = $_POST['DBSFS'];
    $rfeinput5 = $_POST['TSSS'];
    $rfeinput6 = $_POST['TNSGraduated'];
    $rfeinput7 = $_POST['TNLabs'];
    $rfeinput8 = $_POST['NADBLabs'];
    $rfeinput9 = $_POST['TNBooks'];
    $rfeinput10 = $_POST['TNJournals'];
    $rfeinput11 = $_POST['TNCRooms'];
    $InsertQuery = mysql_query("insert into requestforevaluationpart2(RfePartB_BOG,RfePartB_Officer,RfePartB_All_Departments,RfePartB_All_Disciplines,RfePartB_All_Bachelor,RfePartB_All_Graduate,RfePartB_Total_Students_Graduated,RfePartB_Department_Based_Strength_Faculty,RfePartB_Program_Based,RfePartB_Department_Based_Strength_Students,RfePartB_Total_Strength_Supporting,RfePartB_Total_Number_Students,RfePartB_Labs,RfePartB_Based_Labs,RfePartB_Books,RfePartB_Journals,RfePartB_Rooms,RfeForm_Total_Strength_Faculty) values('$authorities','$officername','$dept','$offer','$programs','$programoffer','$number','$rfeinput1','$rfeinput1','$rfeinput2','$rfeinput3','$rfeinput4','$rfeinput5','$rfeinput6','$rfeinput7','$rfeinput8','$rfeinput9','$rfeinput10','$rfeinput11')") or die(mysql_error());
    header("location: current.php");

    $aname = $_POST['rfeinstitute'];
    $aaddress = $_POST['rfeaddress'];
    $bcity = $_POST['rfeCity'];
    $bcode = $_POST['rfePostalcode'];
    $bgeneral = $_POST['rfegeneral'];
    $burl = $_POST['rfeurl'];
    $bname = $_POST['ceoname'];
    $btitle = $_POST['ceoTitle'];
    $bphone = $_POST['ceophone'];
    $bemail = $_POST['ceoEmail'];
    $bfax = $_POST['ceoFAX'];
    $baddress = $_POST['ceoAddress'];
    $cname = $_POST['deanname'];
    $ctitle = $_POST['deanTitle'];
    $cphone = $_POST['deanphone'];
    $cemail = $_POST['deanEmail'];
    $cfax = $_POST['deanFAX'];
    $caddress = $_POST['deanAddress'];
    $dliaison = $_POST['deanliaison'];
    $dtitle = $_POST['liaisonTitle'];
    $dphone = $_POST['liaisonphone'];
    $dfax = $_POST['liaisonFAX'];
    $daddress = $_POST['liaisonAddress'];
    $ename = $_POST['cfoname'];
    $etitle = $_POST['cfoTitle'];
    $ephone = $_POST['cfophone'];
    $eemail = $_POST['cfoEmail'];
    $efax = $_POST['cfoFAX'];
    $eaddress = $_POST['cfoAddress'];
    $InsertQuery = mysql_query("insert into requestforevaluationpartcc(aname,aaddress,bcity,bcode,bgeneral,burl,bname,btitle,bphone,bemail,bfax,baddress,cname,ctitle,cphone,cemail,cfax,caddress,dliaison,dtitle,dphone,dfax,daddress,ename,etitle,ephone,eemail,efax,eaddress) values('$aname','$aaddress','$bcity','$bcode','$bgeneral','$burl','$bname','$btitle','$bphone','$bemail','$bfax','$baddress','$cname','$ctitle','$cphone','$cemail','$cfax','$caddress','$dliaison','$dtitle','$dphone','$dfax','$daddress','$ename','$etitle','$ephone','$eemail','$efax','$eaddress')") or die(mysql_error());
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
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="user.png" class="img-circle" alt="User Image" width="30" height="30">&nbsp;
                                    <span class="caret"></span>
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
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills">
                <li class="home">
                    <a href="nceac_forms.php">Back&nbsp;</a>
                </li>
                <li class="home">
                    <a href="notification.php">Notification&nbsp;<span class="glyphicon glyphicon-bell"></span></a>
                </li>
                <li>
                    <a href="noticeboard.php">Notice Board&nbsp;<span class="badge">2</span></a>
                </li>
            </ul>
            <div class="content-box-large">
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="text-center">Request for Evaluation Form(RFE)</h2>
                        </div>
                    </div>
                    <div class="row" style="border-top: 1px solid black; border-bottom: 1px solid black">
                        <div class="col-xs-2 col-md-offset-1">
                            <img src="images/nceacheader.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-6">
                            <p class="text-center" style="font-size: 20px; padding-top: 15px;"><strong>National
                                    Computing Education Accreditation Council</strong><br>NCEAC</p></div>
                        <div class="col-md-2">
                            <img src="images/hecheader.png" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h4 class="text-center" style="color: black; font-weight: bolder; padding-top: 15px;">
                                REQUEST FOR EVALUATION<br>
                                Part 1<br>
                                CHARTER AND PROGRAM INFORMATION
                            </h4>
                        </div>
                        <div class="col-md-3"><p class="pull-right text-muted">NCEAC FORM 1</p></div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-3">
                            <p class="text-center" style="font-size: 14px;">
                                <strong>NAME OF INSTITUTION:<sup>1</sup></strong>
                            </p>
                        </div>
                        <div class="col-md-9">
                            <input name="rfenameofinstitute" type="text" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <h4 class="text-center" style="padding-top: 20px;">
                                <strong>CHARTED/AFFILIATED (Tick as appropriate)</strong>
                            </h4>
                            <h5 class="text-center" style="padding-top: 20px;">
                                <strong>
                                    Type of Charter Granted: University/Degree Granting Institute (Tick as appropriate)
                                </strong>
                            </h5>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-3">
                            <p class="" style="font-size: 16px;">
                                <strong>PROGRAMS TO BE EVALUATED</strong>
                            </p>
                        </div>
                        <div class="col-md-9">
                            <input name="rfeevaluate" type="text" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <p style="font-size: 14px;">
                                <strong>
                                    A. Charter Information (If the institution does not have a charter, write
                                    down the name of the Institution it is affiliated with and give its charter
                                    information.)
                                </strong>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td width="216">
                                    <p class="text-center">
                                        <strong>Institution</strong>
                                    </p>
                                </td>
                                <td width="67">
                                    <p class="text-center">
                                        <strong>Federal</strong>
                                    </p>
                                </td>
                                <td width="158">
                                    <p class="text-center">
                                        <strong>Provincial</strong>
                                    </p>
                                </td>
                                <td width="142">
                                    <p class="text-center">
                                        <strong>Date Granted and
                                            <br>Reference Number</strong>
                                    </p>
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="width: 50%">
                                    <textarea name="institution" cols="30" rows="10" class="form-control"></textarea>
                                </td>
                                <td width="10%">
                                    <center>
                                        <input name="federal" type="checkbox" class="text-center" id="myCheck">
                                    </center>
                                </td>
                                <td width="20%">
                                    <center>
                                        <ul class="list-unstyled">
                                            <li style="margin-top: 20px; margin-bottom: 20px;"><input type="checkbox"
                                                                                                      id="myCheck">&nbsp;Balochistan
                                            </li>
                                            <li style="margin-top: 20px; margin-bottom: 20px;"><input type="checkbox"
                                                                                                      id="myCheck">&nbsp;NWFP
                                            </li>
                                            <li style="margin-top: 20px; margin-bottom: 20px;"><input type="checkbox"
                                                                                                      id="myCheck">&nbsp;Punjab
                                            </li>
                                            <li style="margin-top: 20px; margin-bottom: 20px;"><input type="checkbox"
                                                                                                      id="myCheck">&nbsp;Sindh
                                            </li>
                                        </ul>
                                    </center>
                                </td>
                                <td width="20%">
                                    <textarea name="date" id="" cols="30" rows="10" class="form-control"></textarea>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 14px;">
                                <strong>
                                    B. Program(s) to be Evaluated
                                </strong>
                                <br>
                                (Please read the enclosed instructions (see Part 4) before completing the following
                                table.)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td style="width: 40%">
                                    <p class="text-center">
                                        <strong>Program or option to be Evaluated <sup>2</sup></strong>
                                    </p>
                                </td>
                                <td style="width: 10%">
                                    <p class="text-center">
                                        <strong>Evaluation Type <sup>3</sup></strong>
                                    </p>
                                </td>
                                <td style="width: 10%">
                                    <p class="text-center">
                                        <strong>Degree <sup>4</sup></strong>
                                    </p>
                                </td>
                                <td style="width: 10%">
                                    <p class="text-center">
                                        <strong>No. of<br>Years<sup>5</sup></strong>
                                    </p>
                                </td>
                                <td style="width: 10%">
                                    <p class="text-center">
                                        <strong>Initial <sup>6</sup></strong>
                                    </p>
                                </td>
                                <td style="width: 10%;">

                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <input name="rfeevaluated1" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="rfeevaluated2 type=" text" class="form-control">
                                </td>
                                <td>
                                    <input name="rfeevaluated3" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="rfeevaluated4" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="rfeevaluated5" type="text" class="form-control">
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p>
                            <strong>Note:</strong>&nbsp;&nbsp;&nbsp; You must fill out forms NCEAC.FORM.001.A
                            through NCEAC.FORM.001.K and send them as part of your application package
                            for requesting accreditation.&nbsp; Also send a bank draft in the amount
                            depending on your accreditation requirements (Number of programs, desk
                            audit or field audit or both) payable to NCEAC for your application to
                            be processed.
                        </p>

                        <p style="padding-top: 50px;">
                            ______________________________________________________
                        </p>

                        <p>
                            <strong>Rector / Vice Chancellor</strong>
                        </p>

                        <p style="padding-top: 50px;">
                            <strong>Signature</strong>____________________________________ Date __________________
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h4 class="text-center" style="color: black; font-weight: bolder; padding-top: 15px;">
                                REQUEST FOR EVALUATION<br>
                                Part 2<br>
                                OVERVIEW OF UNIVERSITY/INSTITUTION
                            </h4>
                        </div>
                        <div class="col-md-3"><p class="pull-right text-muted">NCEAC FORM 1</p></div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered" width="625">
                            <tbody>
                            <tr>
                                <td style="width: 10%">
                                    <p class="text-center">
                                        <strong>Sr. No.</strong>
                                    </p>
                                </td>
                                <td style="width: 50%">
                                    <p class="text-center">
                                        <strong>Information Required</strong>
                                    </p>
                                </td>
                                <td style="width: 40%">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>Institution Authorities (BoG, Academic Council)</p>
                                </td>
                                <td>
                                    <input type="text" name="institutionauthorities" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <p>Officer of University/Institution</p>
                                </td>
                                <td>
                                    <input type="text" name="OfficerofUniversity/Institution" value=""
                                           class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>All Departments/Faculties</p>
                                </td>
                                <td>
                                    <input type="text" name="AllDepartments/Faculties" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>All Disciplines Offered</p>
                                </td>
                                <td>
                                    <input type="text" name="AllDisciplinesOffered" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>5</p>
                                </td>
                                <td>
                                    <p>All Bachelor Programs Offered</p>
                                </td>
                                <td>
                                    <input type="text" name="AllBachelorProgramsOffered" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p>All Graduate Programs Offered</p>
                                </td>
                                <td>
                                    <input type="text" name="AllGraduateProgramsOffered" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>7</p>
                                </td>
                                <td>
                                    <p>Total Number of Students</p>
                                </td>
                                <td>
                                    <input type="text" name="TotalNumberofStudents" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>8</p>
                                </td>
                                <td>
                                    <p>Department Based Strength of Students</p>
                                </td>
                                <td>
                                    <input type="text" name="DBSS" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>9</p>
                                </td>
                                <td>
                                    <p>Program Based Strength of Students</p>
                                </td>
                                <td>
                                    <input type="text" name="PBSS" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>10</p>
                                </td>
                                <td>
                                    <p>Total Strength of Faculty Staff</p>

                                    <p>No. Of PhD</p>

                                    <p>No. Of MS (18 years)</p>

                                    <p>No. Of BS&nbsp; (16 years)</p>
                                </td>
                                <td>
                                    <textarea rows="5" name="TSFS" value="" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>11</p>
                                </td>
                                <td>
                                    <p>Department Based Strength of Faculty Staff</p>

                                    <p>No. Of PhD</p>

                                    <p>No. Of MS (18 years)</p>

                                    <p>No. Of BS&nbsp; (16 years)</p>
                                </td>
                                <td>
                                    <textarea rows="5" name="DBSFS" value="" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>12</p>
                                </td>
                                <td>
                                    <p>Total Strength of Supporting Staff</p>
                                </td>
                                <td>
                                    <input type="text" name="TSSS" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>13</p>
                                </td>
                                <td>
                                    <p>Total Number of Students Graduated (Department Based)</p>
                                </td>
                                <td>
                                    <input type="text" name="TNSGraduated" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>14</p>
                                </td>
                                <td>
                                    <p>Total Number of Labs</p>
                                </td>
                                <td>
                                    <input type="text" name="TNLabs" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>15</p>
                                </td>
                                <td>
                                    <p>Name of All Department Based Labs</p>
                                </td>
                                <td>
                                    <input type="text" name="NADBLabs" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>16</p>
                                </td>
                                <td>
                                    <p>Total Number of Books</p>
                                </td>
                                <td>
                                    <input type="text" name="TNBooks" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width="67">
                                    <p>17</p>
                                </td>
                                <td width="264">
                                    <p>Total Number of Journals</p>
                                </td>
                                <td width="294">
                                    <input type="text" name="TNJournals" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>18</p>
                                </td>
                                <td>
                                    <p>Total Number of Class Rooms</p>
                                </td>
                                <td>
                                    <input type="text" name="TNCRooms" value="" class="form-control">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p>
                            <strong>Note: Attach additional papers if necessary</strong>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h4 class="text-center" style="color: black; font-weight: bolder; padding-top: 15px;">
                                REQUEST FOR EVALUATION<br>
                                Part 3<br>
                                CONTACT INFORMATION
                            </h4>
                        </div>
                        <div class="col-md-3"><p class="pull-right text-muted">NCEAC FORM 1</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">Institute</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="rfeinstitute" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">Address</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="rfeaddress" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">City</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="rfeCity" class="form-control" id="">
                                    </div>
                                    <label class="control-label col-sm-2" style="text-align: left">Postal Code</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="rfePostalcode" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">General Phone
                                        #</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="rfegeneral" class="form-control" id="">
                                    </div>
                                    <label class="control-label col-sm-2" style="text-align: left">url</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="rfeurl" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-12" style="text-align: left">
                                        General correspondence will be addressed to the Dean or equivalent.<br>
                                        Official notification of accreditation actions will also be copied to the Chief
                                        Administrative Officer (Rector or Vice Chancellor).
                                    </label>
                                </div>

                                <div class="form-group" style="margin-top: 50px;">
                                    <label class="control-label col-sm-2" name="ceoname" style="text-align: left">Chief
                                        Administrative Officer</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" name="ceoTitle"
                                           style="text-align: left">Title</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <label class="control-label col-sm-2" style="text-align: left">Phone</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="ceophone" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">Email</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="ceoEmail" class="form-control" id="">
                                    </div>
                                    <label class="control-label col-sm-2" style="text-align: left">FAX</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="ceoFAX" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">Address (if different
                                        from above)</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="ceoAddress" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="form-group" style="margin-top: 50px;">
                                    <label class="control-label col-sm-2" style="text-align: left">Dean (or
                                        equivalent)</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="deanname" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">Title</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="deanTitle" class="form-control" id="">
                                    </div>
                                    <label class="control-label col-sm-2" style="text-align: left">Phone</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="deanphone" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">Email</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="deanEmail" class="form-control" id="">
                                    </div>
                                    <label class="control-label col-sm-2" style="text-align: left">FAX</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="deanFAX" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="form-group" style="margin-top: 50px;">
                                    <label class="control-label col-sm-2" style="text-align: left">NCEAC Liaison (if
                                        assigned)</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="deanliaison" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">Title</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="liaisonTitle" class="form-control" id="">
                                    </div>
                                    <label class="control-label col-sm-2" style="text-align: left">Phone</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="liaisonphone" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">Email</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="liaisonEmail" class="form-control" id="">
                                    </div>
                                    <label class="control-label col-sm-2" style="text-align: left">FAX</label>

                                    <div class="col-sm-4">
                                        <input type="text" name="liaisonFAX" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" style="text-align: left">Address (if different
                                        from above)</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="liaisonAddress" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h4 class="text-center" style="color: black; font-weight: bolder; padding-top: 15px;">
                                REQUEST FOR EVALUATION<br>
                                Part 4<br>
                                INSTRUCTIONS
                            </h4>
                        </div>
                        <div class="col-md-3"><p class="pull-right text-muted">NCEAC FORM 1</p></div>
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-12">
                            <p>
                                1. Enter the proper institution name. This is the name that will be used in lists of
                                accredited programs distributed to the public.<br>
                                2. List the exact program title (not the department name). This should be the title
                                shown consistently on student transcripts and in your institution’s catalog.<br>
                                3. Codes for evaluation types are: DA= Desk Audit or FA=Field Audit or CA=Comprehensive
                                Audit (Both DA and FA).<br>
                                4. List the abbreviation of the degree granted upon successful completion of the
                                program, e.g., BSCS, BSSE, BSIT, etc.<br>
                                5. List the number of years normally required for a full-time student to complete the
                                program.<br>
                                6. Enter an “X” if this will be an evaluation of a currently unaccredited program. Leave
                                this entry blank if the program is currently accredited.<br>
                                7. The Chief Administrative Officer must sign this form. This is the individual
                                responsible for the institution submitting the Request for Evaluation. This individual
                                typically carries the title of vice chancellor or rector.<br>
                                8. Enter the web site URL that should be shown for your institution in the list of
                                accredited programs on the NCEAC web site (www.nceac.org). Only one URL is
                                permitted.<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>