<?php
	include 'header.php';
?>

    <div class="page-content">
      <div class="row">
       
	   <?php
		include 'sidebar.php';
	   ?>
        <div class="col-md-8">
          <ul class="nav nav-pills">
            <li>
              <a href="notification.php">Notification&nbsp;<span class="glyphicon glyphicon-bell"></span></a>
            </li>
            <li>
              <a href="noticeboard.php">Notice Board&nbsp;<span class="badge">2</span></a>
            </li>
           </ul>
          <div class="row">
		  	<div class="panel panel-primary">
              <div class="panel-heading" style="height: 30px; padding:6px">
                <h1 class="panel-title">Feedback</h1>
              </div>
              <div class="panel-body">
                <div class="container">
                  <div class="row contact-us">
                    <div class="col-md-6">
                      <form name="form1" method="post">
                        <div class="form-group">
                          <div id="errn" style="color:red; font-size:12px; display:inline "></div>
                          <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <div id="erre" style="color:red; font-size:12px; display:inline "></div>
                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <div id="errp1" style="color:red; font-size:12px; display:inline "></div>
                          <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Mobile No">
                        </div>
                        <div class="form-group">
                          <div id="errq" style="color:red; font-size:12px; display:inline "></div>
                          <textarea class="form-control" name="query" id="query" placeholder="Type your query"></textarea>
                        </div>
                        <button type="submit" name="submit" id="submit" class="btn btn-block btn-primary btn-sm" data-toggle="button">Submit</button>
                        <!--?php if(isset($success)){ echo $success; } ?-->
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual
    files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    
	<?php
		include 'footer.php';
	?>