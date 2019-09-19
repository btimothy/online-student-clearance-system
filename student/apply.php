<?php
 include("MainMenu.php");
 include('../functions.php');
 if (isset($_POST['apply'])) {
     $stdname=$_POST['stdname'];
     $stdno=$_POST['stdno'];    
     $regno=$_POST['regno'];
     $course=$_POST['course'];
     $coursecode=$_POST['coursecode'];
     $program=$_POST['program'];
     $faculty=$_POST['faculty'];
     $department=$_POST['dept'];
     $hall=$_POST['hall'];
     $yoe=$_POST['yoe'];
     $yos=$_POST['yos'];
     $gender=$_POST['gender'];
     $email=$_POST['email'];
     $sql=mysqli_query($db,"INSERT INTO applicants(StudentName,StudentNo,RegNo,Course,CourseCode,Program,Faculty,Department,Hall,Year_Of_Entry,Year_Of_Study,Gender,Email)values('$stdname','$stdno','$regno','$course','$coursecode','$program','$faculty','$department','$hall','$yoe','$yos','$gender','$email')");
 
 if ($sql) {
    echo "<script>alert('Student has Applied Successfully')</script>;";

 }
 else{
    echo "<script>alert('Something went wrong  Retry to apply Again!')";
 }
}
 
 ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
                <ol class="breadcrumb">
                    <li><a href="#">Student</a></li>
                    <li><a href="#">Student Portal</a></li>
                    <li class="active">Apply For Clearance</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Student Clearance Application Form</div>
            <div class="panel-body">
                <div class="header">
                    
                </div>
                <div class="jumbotron">
                <form method="post" action="">

                    <?php echo display_error(); ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name:</label>
                        <input type="text" name="stdname" class="form-control" required="">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">StudentNo:</label>
                        <input type="text" name="stdno" class="form-control" maxlength="12" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputamouont">Regno:</label>
                        <input class="form-control"  name="regno" type="text" required="" maxlength="16">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Course:</label>
                        <input type="text" name="course" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputcourse">Course Code:</label>
                        <input type="text" name="coursecode" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Program:</label>
                        <select name="program"  class="form-control" required="">
                        <option>----------------------------------</option>    
                        <option value="Day">Day</option>
                        <option value="Evening">Evening</option>
                    </select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Faculty:</label>
                        <input type="text" name="faculty" class="form-control" required="">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Department:</label>
                        <input type="text" name="dept" class="form-control" required="">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Hall:</label>
                        <input type="text" name="hall" class="form-control" required="">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Year of Entry:</label>
                        <input type="text" name="yoe" class="form-control" required="">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputcourse">Year of Study:</label>
                        <input type="text" name="yos" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender:</label>
                        <select name="gender"  class="form-control" required="">
                        <option>----------------------------------------------</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emails:</label>
                        <input type="email" name="email"  class="form-control" required="">
                    </div> 
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary" name="apply">Apply</button>
                    </div>
                </form></div>



            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->