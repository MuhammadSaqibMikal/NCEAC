<?php
include 'include.php';
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
                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="btn-group"></div>
                    <div class="content-box-large">
                        <h2 contenteditable="true" class="text-left text-primary">Archive Folder</h2>
                        <hr>
                        <div class="text-center well">
                            <blockquote>
                                <p class="text-left"></p>
                                <footer>Members</footer>
                            </blockquote>
                            <hr>
                            <ul class="media-list text-left">
                                <?php
                                $emp = mysql_query("select * from emp") or die(mysql_error());
                                while ($post_data = mysql_fetch_array($emp)) {
                                    $empid = $post_data[0];
                                    $empname = $post_data[1];
                                    $des = $post_data[3];
                                    $dep = $post_data[4];
                                    ?>
                                    <li class="media">
                                        <a class="pull-left" href="arforms.php?empid=<?php echo $empid; ?>"><img
                                                class="img-thumbnail media-object" height="64" width="64"
                                                src="download.jpg"></a>

                                        <div class="media-body">
                                            <a href="arforms.php?empid=<?php echo $empid; ?>"><h4
                                                class="media-heading"><?php echo $empname ?></h4></a>

                                            <p><?php echo $des ?> - <?php echo $dep ?>
                                                <br>
                                                <br>
                                            </p>
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
<?php include "footer.php"; ?>