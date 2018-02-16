<?php
include 'Login.php';
?>
<html>
<head>
    <title>NCEAC Document Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style type="text/css">


        body {
            background-image: url("background2.jpg");
        }
    </style>

</head>
<body>


<div class="jumbotron">
    <h1 class="text-center">NCEAC Document Management System</h1>
</div>
<div class="modal-dialog">
    <div class="modal-content">
        <h1 class="text-center">Sign In</h1>
    </div>
    <div class="modal-body">


        <form class="center-block col-md-12 text-justify" method="post">

            <div class="form-group">
                <input type="text" name="username" class="form-control input-lg" placeholder="username">
            </div>


            <div class="form-group">
                <input type="password" name="password" class="form-control input-lg" placeholder="password">
            </div>


            <div class="form-group">
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-block btn-lg btn-primary" value="Login">
                </div>
            </div>
        </form>
    </div>
</div>


</body>
</html>



