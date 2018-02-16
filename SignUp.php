<?php
include 'dbConnect.php';
if (isset($_POST['signup'])) {
    $empid = $_POST['empid'];

    $que1 = mysql_query("select * from emp where Emp_Id = '$empid'");
    $count1 = mysql_num_rows($que1);

    if ($count1 > 0) {
        echo "<script>
				alert('There is an existing account associated with this empid.');
			</script>";
    } else {
        $empname = $_POST['name'];
        $password = $_POST['password'];
        $designation = $_POST['designation'];
        $department = $_POST['department'];
        $admin = $_POST['admin'];
        $que2 = mysql_query("insert into emp(Emp_Id,Emp_Name,Emp_Password,Emp_Designation,Emp_Department,Admin) values('$empid','$empname','$password','$designation','$department','$admin')");
        echo "<script>
				alert('User Successfully Added');
			</script>";
    }
}
?>
