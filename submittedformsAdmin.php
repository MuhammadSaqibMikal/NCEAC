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
        <div class="col-md-9 content-box-large" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12 row">
                    <h1>Submitted Forms</h1>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <strong>Assignment ID</strong>
                    </div>
                    <div class="col-md-2">
                        <strong>Form Title</strong>
                    </div>
                    <div class="col-md-3">
                        <strong>Assign Date Time</strong>
                    </div>
                    <div class="col-md-3">
                        <strong>Submission Date Time</strong>
                    </div>
                    <div class="col-md-2">
                        <strong>Action</strong>
                    </div>
                </div>
                <?php
                $status = "Submitted";
                $empforms = mysql_query("select * from assigned where Status = '$status'");
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
                    ?>
                    <div class="col-md-12">
                        <div class="col-md-1">
                            <strong><?php echo $assignmentid ?></strong>
                        </div>
                        <div class="col-md-3">
                            <strong><?php echo $formtitle ?></strong>
                        </div>
                        <div class="col-md-3">
                            <strong><?php echo $assigndt ?></strong>
                        </div>
                        <div class="col-md-3">
                            <strong><?php echo $subdt ?></strong>
                        </div>
                        <div class="col-md-2">
                            <a href="#"><strong>Verify</strong></a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
