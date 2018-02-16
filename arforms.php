<?php
include 'include.php';
include 'header.php';
$emp_id = $_GET['empid'];
$que = mysql_query("select * from emp where Emp_Id = '$emp_id'");
$row = mysql_fetch_array($que);
$name = $row[1];
?>
    <div class="page-content">
        <div class="row">
            <?php
            include 'sidebarAdmin.php';
            include 'notification_bar.php';
            ?>
            <div class="col-md-9" style="margin-top: 20px;">
                <div class="col-md-12 content-box-large">
                    <div class="col-md-12" style="margin-bottom: 20px;">
                        <h1 class="text-center"><u><?php echo $name ?></u></h1>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 20px;">
                        <div class="col-md-2">
                            <strong><u>Assignment ID</u></strong>
                        </div>
                        <div class="col-md-2">
                            <strong><u>Form Title</u></strong>
                        </div>
                        <div class="col-md-3">
                            <strong><u>Assign Date Time</u></strong>
                        </div>
                        <div class="col-md-3">
                            <strong><u>Submission Date Time</u></strong>
                        </div>
                        <div class="col-md-2">
                            <strong><u>Status</u></strong>
                        </div>
                    </div>
                    <?php
                    $empforms = mysql_query("select * from assigned where Emp_Id = '$emp_id'");
                    while ($post_data = mysql_fetch_array($empforms)) {
                        $assignmentid = $post_data[0];
                        $assigndt = $post_data[1];
                        $subdt = $post_data[2];
                        $mainformid = $post_data[3];
                        $formtitleque = mysql_query("select * from forms where FormID = '$mainformid' ") or die(mysql_error());
                        $row = mysql_fetch_array($formtitleque);
                        $formtitle = $row[1];
                        $dbname = $row[4];
                        $formid = $post_data[5];
                        $formque = mysql_query("select * from $dbname where Form_Id = '$formid'") or die(mysql_error());
                        $formrow = mysql_fetch_array($formque);
                        $status = $formrow[14];
                        ?>
                        <div class="col-md-12" style="margin-bottom: 10px;">
                            <div class="col-md-2">
                                <strong><?php echo $assignmentid ?></strong>
                            </div>
                            <div class="col-md-2">
                                <strong><?php echo $formtitle ?></strong>
                            </div>
                            <div class="col-md-3">
                                <strong><?php echo $assigndt ?></strong>
                            </div>
                            <div class="col-md-3">
                                <strong><?php echo $subdt ?></strong>
                            </div>
                            <div class="col-md-2">
                                <strong><?php echo $status ?></strong>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>