<?php include('MainMenu.php'); ?>
?>
<div id="page-wrapper">
 <div class="container-fluid">
 <!-- <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header">Registered Students</h1>
</div>
</div> -->
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  Registered Students
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">




<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Submit">
</form>






</div>  
<a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">Vie</a>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                      
                   

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
<?php
// Always start this first
session_start();

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        // Getting submitted user data from database
        $con = new mysqli($db_host, $db_user, $db_pass, $db_name);
        $stmt = $con->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
    	// Verify user password and set $_SESSION
    	if ( password_verify( $_POST['password'], $user->password ) ) {
    		$_SESSION['user_id'] = $user->ID;
    	}
    }
}
?>



Page
Any pages you want to “protect”, you’d want to check for the required $_SESSION variable. This is a simple example of how to do that.

PHP14 lines

<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: http://www.yourdomain.com/login.php");
}

?>
Logout
Logout is pretty straight-forward. We just destroy the session, so now the $_SESSION variable won’t exist and users will be directed to log in again. Keep in mind, this also happens whenever the browser is closed because we’re using sessions.
<?php
// Always start this first
session_start();

// Destroying the session clears the $_SESSION variable, thus "logging" the user
// out. This also happens automatically when the browser is closed
session_destroy();
?>