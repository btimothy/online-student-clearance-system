<?php
 include("MainMenu.php");
 include('../functions.php');
 ?>
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                	  <ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Library</a></li>
					  <li class="active">Data</li>
					</ol>
                </div>
            </div>
            <div class="panel panel-default">
		  <div class="panel-heading">Add New User</div>
		  <div class="panel-body">
		  	<div class="header">
		<h2>Admin -  user</h2>
	</div>
	
	<form method="post" action="AddUser.php">

		<?php echo display_error(); ?>
		<div class="form-group">
    <label for="exampleInputEmail1">Username</label>
			<input type="text" name="username"   class="form-control">
		</div>
       <div class="form-group">
    <label for="exampleInputEmail1">Emails</label>
			<input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
		</div>
<div class="form-group">
    <label for="exampleInputEmail1">User_Type</label>			
			<select name="user_type" id="user_type" class="form-control" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="lab">Lab attendant</option>
			   <option value="hod">Head</option>
				<option value="lib">Librarian</option>
				<option value="busar">Busar</option>
				<option value="student">Student</option>
			</select>
		</div>
		   <div class="form-group">
           <label for="exampleInputEmail1">Password</label>
			<input type="password" name="password_1" class="form-control">
		</div>
		<div class="form-group">
			<label   >Confirm password</label>
			<input type="password" name="password_2" class="form-control">
		</div>
		<div class="input-group">
			<button type="submit" class="btn btn-primary" name="register_btn" > + Add user</button>
		</div>
	</form>



		  </div>
		</div>
        </div> <!-- end of container -->
    </div><!--     end of page warp -->