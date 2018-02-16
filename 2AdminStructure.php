<?php
include 'include.php';
include 'dbConnect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['adminnameofinstitute'];
    $evaluate = $_POST['adminstructurevaluate'];
    $admin = $_POST['adminNI'];
    $address = $_POST['ASaddress'];
    $aname = $_POST['nameCAO'];
    $aadminstrative = $_POST['Administrativestructure'];
    $abog = $_POST['BOG'];
    $abmcp = $_POST['BMCP'];

    $InsertQuery = mysql_query("insert into adminstructure(AdminStructure_Instituition,AdminStructure_Evaluate,AdminStructure_Name,AdminStructure_Address,AdminStructure_Name_Of_Chief,AdminStructure_Administrative,AdminStructure_Board,AdminStructure_Bodies) values('$name','$evaluate','$admin','$address','$aname','$aadminstrative','$abog','$abmcp')") or die(mysql_error());
    header("location: current.php");


    $anodp = $_POST['NODP'];
    $enroll = $_POST['ASenrollment'];
    $dept = $_POST['FFSPDept'];
    $adept = $_POST['FSPDept'];
    $badft = $_POST['ADFT'];
    $badfte = $_POST['ADFTE'];
    $basft = $_POST['ASFT'];
    $basfte = $_POST['ASFTE'];
    $bassft = $_POST['ASSFT'];
    $bassfte = $_POST['ASSFTE'];

    $InsertQuery = mysql_query("insert into adminstructureb(Name_Degree_Program,Enrollment,Full_Time_Faculty_Size,Faculty_Strength,MathematicsFt,MathematicsFte,Natural_ScienceFt,Natural_ScienceFte,HumanitiesFt,HumanitiesFte) values('$anodp','$enroll','$dept','$adept','$badft','$badfte','$basft','$basfte','$bassft','$bassfte')") or die(mysql_error());
    header("location: current.php");

}

?>

<?php
include 'header.php';
?>
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
                            <h2 class="panel-body text-center">Admin Structure</h2>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCEAC.FORM.001A</p>
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
                <table width="497">
                    <tbody>
                    <tr>
                        <td>
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p></p>

                <form action="" method="post" class="text-left">
                    <strong>INSTITUTION:
                        <sup></sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </strong>
                    <input type="text" name="adminnameofinstitute" value="" size="115">

                    <p></p>
                    <table width="468">
                        <tbody>
                        <tr>
                            <td>
                                <p>&nbsp;</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <p>
                        <strong>&nbsp;</strong>
                    </p>

                    <p></p>
                    <strong>PROGRAM (S) TO
                        <sup></sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                    <input type="text" name="adminstructurevaluate" value="" size="115">
                    <strong>BE
                        <br>EVALUATED&nbsp;&nbsp;&nbsp;
                        <p>&nbsp;</p>

                        <p>
                            <em>Intent: Adequate administrative structure is in place for proper governance
                                of the Institution. Institution has a reasonable number of degree programs
                                and adequate faculty strength in the primary and supporting academic
                                departments.&nbsp;</em>
                        </p>

                        <p>&nbsp;</p>
                        <ol type="A">
                            <li>
                                <strong>Name, Address, and Administrative Structure of the Institution</strong>
                            </li>
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td width="210">
                                        <p>
                                            <strong>Name of the institution</strong>
                                        </p>
                                    </td>
                                    <td width="421">
                                        <input style="width:100%; height:100%; border-color:transparent;" type="text"
                                               name="adminNI" value="" size="45">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="210">
                                        <p>
                                            <strong>Address of the institution</strong>
                                        </p>
                                    </td>
                                    <td width="421">
                                        <input type="text" name="ASaddress" value="" size="45"
                                               style="width:100%; height:100%; border-color:transparent;">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="210">
                                        <p>
                                            <strong>Name of the chief
                                                <br>administrative officer (rector or
                                                <br>vice chancellor)</strong>
                                        </p>
                                    </td>
                                    <td width="421">
                                        <div class="form-group form-group-lg">
                                        <textarea name="nameCAO" cols="48" rows="10"
                                                  style="width:100%; height:100%; border-color:transparent;"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="210">
                                        <p>
                                            <strong>Administrative structure

                                            </strong>
                                        </p>
                                    </td>
                                    <td width="421">
                                        <div class="form-group form-group-lg">
                                        <textarea name="Administrativestructure" cols="48" rows="10"
                                                  style="width:100%; height:100%; border-color:transparent;"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="210">
                                        <p>
                                            <strong>Board of Governor

                                            </strong>
                                        </p>
                                    </td>
                                    <td width="421">
                                        <div class="form-group form-group-lg">
                                        <textarea name="BOG" cols="48" rows="10"
                                                  style="width:100%; height:100%; border-color:transparent;"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="210">
                                        <p>
                                            <strong>Bodies to monitor/upgrade
                                                <br>curriculum of program
                                                <br>
                                                <br>
                                                <br>
                                            </strong>
                                        </p>
                                    </td>
                                    <td width="421">
                                        <div class="form-group form-group-lg">
                                        <textarea name="BMCP" cols="48" rows="10"
                                                  style="width:100%; height:100%; border-color:transparent;"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <p>&nbsp;</p>
                            <li>
                                <strong>Degree Programs and Relevant Information</strong>
                            </li>
                        </ol>
                        <table class="table table-bordered" width="702">
                            <tbody>
                            <tr>
                                <td rowspan="3" width="125">
                                    <p class="text-center">
                                        <strong>Name of the Degree Program</strong>
                                    </p>
                                </td>
                                <td rowspan="3" width="90">
                                    <p class="text-center">
                                        <strong>Enrollment</strong>
                                    </p>
                                </td>
                                <td rowspan="3" width="98">
                                    <p class="text-center">
                                        <strong>Full-time
                                            <br>(FT) Faculty
                                            <br>Size in the
                                            <br>Primary Department</strong>
                                    </p>
                                </td>
                                <td rowspan="3" width="98">
                                    <p class="text-center">
                                        <strong>Faculty Strength (in FTE) in the Primary Department</strong>
                                    </p>
                                </td>
                                <td colspan="6" width="291">
                                    <p class="text-center">
                                        <strong>Full-time Faculty Size in the Supporting
                                            <br>Departments</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" width="95">
                                    <p class="text-center">
                                        <strong>Mathematics</strong>
                                    </p>
                                </td>
                                <td colspan="2" width="87">
                                    <p class="text-center">
                                        <strong>Natural
                                            <br>Sciences</strong>
                                    </p>
                                </td>
                                <td colspan="2" width="108">
                                    <p class="text-center">
                                        <strong>Humanities
                                            <br>and Social
                                            <br>Sciences</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="48">
                                    <p class="text-center">
                                        <strong>FT</strong>
                                    </p>
                                </td>
                                <td width="48">
                                    <p class="text-center">
                                        <strong>FTE</strong>
                                    </p>
                                </td>
                                <td width="45">
                                    <p class="text-center">
                                        <strong>FT</strong>
                                    </p>
                                </td>
                                <td width="42">
                                    <p class="text-center">
                                        <strong>FTE</strong>
                                    </p>
                                </td>
                                <td width="54">
                                    <p class="text-center">
                                        <strong>FT</strong>
                                    </p>
                                </td>
                                <td width="54">
                                    <p class="text-center">
                                        <strong>FTE</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="NODP" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="ASenrollment" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="FFSPDept" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="FSPDept" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="ADFT" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="ADFTE" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="ASFT" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="ASFTE" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="ASSFT" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="ASSFTE" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            <tr>
                                <td width="125">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="90">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="98">
                                    <input type="text" name="input" value="" size="8"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="48">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="45">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="42">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                                <td width="54">
                                    <input type="text" name="input" value="" size="2"
                                           style="width:100%; height:100%; border-color:transparent;">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p>
                            <strong>&nbsp;</strong>
                        </p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>_______________________________________________________</p>

                        <p>Dean</p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <p>Signature ____________________________________&nbsp;&nbsp; Date __________________</p>

                        <p>&nbsp;</p>

                        <p>&nbsp;</p>

                        <div class="container text-center">
                            <button type="button" class="btn btn-primary btn-md">Back</button>
                            <button type="button" class="btn btn-primary btn-md">
                                <span class="glyphicon glyphicon-save"></span>&nbsp;Save
                            </button>
                            <button type="submit" name="submit" class="btn btn-primary btn-md">Submit</button>
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
            </div>

        </div>
        <strong></strong>
    </div>
    <strong></strong>
</div>
<strong></strong>
</div>
<strong></strong>
</div>
<strong></strong>


</body></html>