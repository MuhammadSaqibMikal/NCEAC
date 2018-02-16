<?php
include("SignUp.php");
?>
<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="signup" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-md-12">
                        <h4>Add New User</h4>
                        <form class="form-horizontal" action="" method="post" onSubmit="return check();" name="Reg">
                            <div class="form-group">
                                <label class="control-label col-sm-3">Employee ID</label>
                                <div class="col-sm-9">
                                    <input type="text" name="empid" placeholder="Enter Employee ID" class="inputbox form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Employee Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="inputbox form-control" placeholder="Enter Employee Name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Employee Designation</label>
                                <div class="col-sm-9">
                                    <input type="text" name="designation" class="inputbox form-control" placeholder="Enter Employee Designation"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Enter Employee Department</label>
                                <div class="col-sm-9">
                                    <select name="department" class="form-control">
                                        <?php
                                        $form = mysql_query("select DISTINCT Department from forms");
                                        while ($post_data = mysql_fetch_array($form)) {
                                            $department = $post_data[0];
                                            ?>
                                            <option
                                                value="<?php echo $department ?>"> <?php echo $department ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="inputbox form-control" placeholder="Enter Password"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Employee Type</label>
                                <div class="col-sm-9">
                                    <select name="admin" class="form-control">
                                        <option value="yes"> Admin</option>
                                        <option value="no"> Member</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <input type="submit" name="signup" value="Add User" id="sign_button" class="btn btn-primary btn-xs">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>