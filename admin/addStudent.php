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
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">Student</a></li>
                    <li class="active">Register Student</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Add New Student</div>
            <div class="panel-body">
                <div class="header">
                    <h2>Register Student</h2>
                </div>
                <form method="post" action="addStudent.php">

                    <?php echo display_error(); ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">StudentNo</label>
                        <input type="text" name="stdno" class="form-control">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Course</label>
                        <input type="text" name="course" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emails</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">User_Type</label>
                        <select name="user_type" id="user_type" class="form-control" readonly>
                        
                        <option value="student">Student</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password_1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" name="password_2" class="form-control">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary" name="register_btn"> + Register Student</button>
                    </div>
                </form>



            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->