<?php
include 'include.php';
include 'header.php';
?>
    <div class="page-content">
        <div class="row">
            <?php
            include 'sidebar.php';
            include 'notification_bar.php';
            ?>
            <div class="col-md-9" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-md-11 panel-default text-center">
                        <div class="panel panel-primary">
                            <div class="container-fluid">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-body">NCEAC Form</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group text-left">
                                    <?php
                                    $form = mysql_query("select * from forms where Department = '$empdepartment'");
                                    while ($post_data = mysql_fetch_array($form)) {
                                        $mainformId = $post_data[0];
                                        $formtitle = $post_data[1];
                                        $link = $post_data[3];
                                        $dbName = $post_data[4];
                                        $status = "Verified";
                                        $quer = mysql_query("select * from $dbName where Emp_Id = '$empid' AND Status = '$status'");
                                        while ($data = mysql_fetch_array($quer)) {
                                            $formid = $data[0];
                                            ?>
                                            <li class="list-group-item">
                                                <p>
                                                    <a href="<?php echo $link ?>?formid=<?php echo $formid; ?>">
                                                        <i class="glyphicon glyphicon-file"></i><?php echo $formtitle ?>
                                                    </a>
                                                </p>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>