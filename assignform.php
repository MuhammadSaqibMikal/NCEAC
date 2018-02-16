<?php
include 'include.php';
include 'header.php';

$currentid = $_GET['formid'];
$que1 = mysql_query("select * from forms where FormID = $currentid");
$rec = mysql_fetch_array($que1);
$formid = $rec[0];
$formtitle = $rec[1];
$department = $rec[2];
$link = $rec[3];
$dbname = $rec[4];
if ($_POST['assign']) {
    $assigndt = $_POST['assdt'];
    $submissiondt = $_POST['subdt'];
    $assigntoempid = $_POST['empid'];
    $status = "Assigned";
    mysql_query("insert into $dbname (AssignmentDateTime,SubmissionDateTime,MainFormID,Emp_Id,Status) values ('$assigndt','$submissiondt','$formid','$assigntoempid','$status')") or die(mysql_error());
    $maxque = mysql_query("select max(Form_Id) from $dbname");
    $maxrow = mysql_fetch_array($maxque);
    $max = $maxrow[0];
    mysql_query("insert into assigned (SubmissionDateTime,MainFormID,Emp_Id,FormID) values ('$submissiondt','$formid','$assigntoempid','$max')");
    echo "<script>alert ('Assigned Successfully');</script>";
}
?>
<div class="page-content">
    <div class="row">
        <?php
        include 'sidebarAdmin.php';
        include 'notification_bar.php';
        ?>
        <div class="col-md-9 content-box-large" style="margin-top: 20px;">
            <div class="col-md-12">
                <h3><?php echo strtoupper($formtitle) ?> ASSIGNMENT FORM</h3>
            </div>
            <div class="col-md-12">
                <form class="form-horizontal" action="" method="post" onSubmit="return check();" name="Reg">
                    <div class="form-group">
                        <label class="control-label col-sm-2">Select Employee</label>
                        <div class="col-sm-10">
                            <select name="empid" class="form-control">
                                <?php
                                $emp = mysql_query("select Emp_Id from emp where Emp_Department = '$department'") or die(mysql_error());
                                while ($post_data = mysql_fetch_array($emp)) {
                                    $empid = $post_data[0];
                                    ?>
                                    <option
                                        value="<?php echo $empid ?>"> <?php echo $empid ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-2">Enter Assign Date</label>
                        <div class="col-sm-10">
                            <input type="datetime-local" name="assdt" size="25" class="inputbox form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-2">Enter Submission Date</label>
                        <div class="col-sm-10">
                            <input type="datetime-local" name="subdt" size="25" class="inputbox form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" name="assign" value="Assign" id="sign_button" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>