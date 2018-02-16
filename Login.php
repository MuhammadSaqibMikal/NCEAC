<?php
include 'dbConnect.php';
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $que1 = mysql_query("select * from emp where Emp_Id='$user' and Emp_Password='$pass'");
    $count1 = mysql_num_rows($que1);

    if ($count1 > 0) {
        session_start();
        $_SESSION['fbuser'] = $user;
        $que = mysql_query("select * from emp where Emp_Id='$user'");
        $rec = mysql_fetch_array($que);
        $userid = $rec[0];
        $username = $rec[1];
        $password = $rec[2];
        $designation = $rec[3];
        $department = $rec[4];
        $user_type = $rec[5];
        if ($user_type == "yes") {
            header("location:HomeAdmin.php");
        } else {
            header("location:home.php");
        }
    } else {
        $que5 = mysql_query("select * from emp where Emp_Id='$user'");
        $count5 = mysql_num_rows($que5);

        if ($count5 > 0) {
            echo "<script>
				alert('Invalid Password');
			</script>";
        } else {
            echo "<script>
				alert('Invalid Username');
			</script>";
        }
    }
}
?>