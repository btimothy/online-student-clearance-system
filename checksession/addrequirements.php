<?php
 include("MainMenu.php");
 include('../functions.php');
 if (isset($_POST['add'])) {
     
     $user=$_POST['user'];
     $req =$_POST['req'];
     $uname=$_POST['uname'];
     $sql=mysqli_query($db,"INSERT INTO requirements(StudentCategory,Description,AddedBy)values('$user','$req','$uname')");
 
 if ($sql) {
    echo "<script>alert('New Requirements has been successfully!')</script>;";

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
                <h1 class="page-header"> Requirements</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">Requirement</a></li>
                    <li class="active">Add Requirement</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Requirement for CLearance</div>
            <div class="panel-body">
                <form method="post" >
<div class="form-group">
<label >Student Category </label>
<select name="user"  class="form-control" required> 
<option value="">Select category</option>
<option value="For All Students"> For All Students </option>
<option value="For Only Goverment Supported Students"> For Only Goverment Supported Students</option>
<option value="For Only Private Supposered Students"> For Only Private Supposered Students </option>
<option value="For Residence Students"> For Residence Students</option>
<option value="For Non Residence Students"> For Non Residence Students</option>
</select> 
</div>
<div class="form-group">
 <label for="exampleInptEmail1">Requirement Description</label>
 <textarea class="form-control" name="req" rows="6"></textarea>
</div>
   <div class="form-group">
    <label for="exampleInputEmail1">Your Name</label>
    <input type="text" name="uname" class="form-control">
     </div>
<div class="input-group">
 <button type="submit" class="btn btn-primary" name="add"> + Add  Requirement</button>
</div></form>



            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->
<?php echo display_error(); ?>
