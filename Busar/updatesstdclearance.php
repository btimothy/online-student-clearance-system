<?php
 include("MainMenu.php");
 include('../functions.php');
if (isset($_POST['Submit'])) {
$clstautus=$_POST['clstautus'];
$Comment=$_POST['comment'];
$sql = mysqli_query($db, "UPDATE clearance SET ClearanceStatus='$clstautus', Comment_Reason='$Comment' WHERE id='".$_GET['id']."'");
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
    <div class="panel-heading">student Clearance Update
</div>
    <div class="panel-body">
    <form action="" method="POST">
     
      <label>Student Clearance</label>
      <select name="clstautus" class="form-control" required  onautocomplete="">
        <option>--------------------------</option>
        <option value="cleared"> Cleared</option>
         <option value="Pending">Pending </option>
</select>
<br>
      <label>Reason / Comment</label>
      <textarea name="comment" class="form-control" rows="4" cols="40" required autofocus></textarea><BR>    
      <input type="submit" name="Submit" class="btn btn-primary" value="Update">
  </form>
            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->
<?php echo display_error(); ?>
