<?php
include "include.php";
include "header.php";
?>
    <div class="page-content">
        <div class="row">
            <?php
            include 'sidebarAdmin.php';
            include 'notification_bar.php';
            ?>
            <div class="col-md-9 content-box-large" style="margin-top: 20px;">
                <div class="class col-md-12 row" style="margin-bottom: 20px;">
                    <h3 class="text-center"><u>ASSIGNMENT TABLE</u></h3>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <strong><u>Assignment ID</u></strong>
                    </div>
                    <div class="col-md-2">
                        <strong><u>Form Title</u></strong>
                    </div>
                    <div class="col-md-2">
                        <strong><u>Employee ID</u></strong>
                    </div>
                    <div class="col-md-3">
                        <strong><u>Assign Date Time</u></strong>
                    </div>
                    <div class="col-md-3">
                        <strong><u>Submission Date Time</u></strong>
                    </div>
                </div>
            <?php
            $assignments = mysql_query("select * from assigned");
            while ($post_data = mysql_fetch_array($assignments)) {
                $assignmentid = $post_data[0];
                $assigndt = $post_data[1];
                $subdt = $post_data[2];
                $mainformid = $post_data[3];
                $formtitleque = mysql_query("select Title from forms where FormID = '$mainformid' ");
                $row = mysql_fetch_array($formtitleque);
                $formtitle = $row[0];
                $Emp_Id = $post_data[4];
                ?>
                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="col-md-2">
                        <strong><?php echo $assignmentid ?></strong>
                    </div>
                    <div class="col-md-2">
                        <strong><?php echo $formtitle ?></strong>
                    </div>
                    <div class="col-md-2">
                        <strong><?php echo $Emp_Id ?></strong>
                    </div>
                    <div class="col-md-3">
                        <strong><?php echo $assigndt ?></strong>
                    </div>
                    <div class="col-md-3">
                        <strong><?php echo $subdt ?></strong>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    </div>
<?php
include "footer.php";
?>