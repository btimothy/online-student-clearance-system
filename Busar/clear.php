<?php
 include("MainMenu.php");
 include('../functions.php');
 if (isset($_POST['Submit'])) {
     
     $dept=$_POST['dept'];
     $stdname =$_POST['stdname'];
     $regno=$_POST['regno'];
     $clstautus=$_POST['clstautus'];
     $Comment=$_POST['comment'];
     $clearedby=$_POST['clearedby'];

     $sql=mysqli_query($db,"INSERT INTO clearance(Department_Section,StudentName,regno,ClearanceStatus,Comment_Reason,Cleared_By)values('$dept','$stdname','$regno','$clstautus','$Comment','$clearedby')");
 
 if ($sql) {
    echo "<script>alert('student clearance Status has been Updated!')</script>;";

 }
 else {
echo "<script>alert('failed')</script;"; 
}}
 ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Student Clearance </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Bursar</a></li>
                    <li><a href="#">Clear</a></li>
                    <li class="active">Clear Student</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
    <div class="panel-heading">Confirmation clearance form for clearing student
</div>
    <div class="panel-body">
    <form action="" method="POST">
      <label>Clearing Section/Deparment</label>
      <select name="dept" class="form-control" required>
        <option>Choose your Department</option>
        <option value="Science_Book_Store"  >Science Book Store</option>
          <option value="Science_workshop"  >Science workshop</option>
          <option value="Chemisrty_Laboratory">Chemisrty Laboratory</option>
          <option value="Physics_Laboratory">Physics Laboratory</option>
          <option value="computer_science_labs"  >Computer Labs</option>
          <option value="Mathematics_department">Math department</option>
          <option value="Biogologic_Labs"  >Biology Labs</option>
          <option value="food_processing_Technology">food_processing_Technology</option>
          <option value="Sport_Science Department">Sport_Science Department</option>
          <option value="HoD"> Head of Department </option>
          <option value="hall_warden"> Hall warden</option>
          <option value="dean_of_faculty"> Dean of Faculty</option>
          <option value="Librarian_west">librarin west</option> 
          <option value="Librarian_east">librarin east</option>
          <option value="dean_of_student">Dean of students</option>
          <option value="bursar">Bursar</option>
        </select>
        <br>

  <label> Confirm Student </label>
     
<select name="stdname"  class="form-control" required> 
<option value="">Select Student Name</option>
<?php $query ="SELECT * FROM applicants";
$stmt2 = $db->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->StudentName;?>"><?php echo $row->StudentName;?>&nbsp;&nbsp;(StudentNo:<?php echo $row->StudentNo;?>)</option>
<?php } ?>
</select> 
  <label> Confirm Student RegNo </label>
     
<select name="regno"  class="form-control" required> 
<option value="">Select RegNo</option>
<?php $query ="SELECT * FROM applicants";
$stmt2 = $db->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->RegNo;?>"><?php echo $row->RegNo;?>&nbsp;&nbsp;(StudentName:<?php echo $row->StudentName;?>)</option>
<?php } ?>
</select> 
<br>
      <label>Student Clearance</label>
      <select name="clstautus" class="form-control" required  onautocomplete="">
        <option>--------------------------</option>
        <option value="cleared"> Cleared</option>
         <option value="Pending">Pending </option>
</select>
<br>
      <label>Reason / Comment</label>
      <textarea name="comment" class="form-control" rows="4" cols="40" required autofocus></textarea><BR>
      <label>Your Name</label>
      <input type="text" name="clearedby" class="form-control" placeholder="e.g Kizito Musisi (Lab Attendant)"><br>
     
      <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
  </form>
            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->
<?php echo display_error(); ?>
