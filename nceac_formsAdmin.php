<?php
include 'dbConnect.php';
include 'header.php';
?>
<div class="page-content">
    <div class="row">
        <?php
        include 'sidebarAdmin.php';
        include 'notification_bar.php';
        ?>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-11 panel-default text-center">
                    <u></u>

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
                                    $form = mysql_query("select * from forms");
                                    while ($post_data = mysql_fetch_array($form)) {
                                        $formid = $post_data[0];
                                        $formtitle = $post_data[1];
                                        $formdepartment = $post_data[2];
                                        ?>
                                        <li class="list-group-item">
                                            <p>
                                                <i class="glyphicon glyphicon-file"></i><?php echo $formtitle ?>
                                            </p>

                                            <div align="right">
                                                <a href="assignform.php?formid=<?php echo $formid; ?>" class="btn
                                                    btn-success btn-xs">
                                                    <span class="glyphicon glyphicon-list-alt"></span> Assign
                                                </a>
                                            </div>
                                        </li>
                                        <?php
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
<u>
    <?php include "footer.php"; ?>