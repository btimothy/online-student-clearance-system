<?php
 include("MainMenu.php");
 include('../functions.php');
 if (isset($_POST['send'])) {
     
     $user=$_POST['stdname'];
     $stdno =$_POST['stdno'];
     $sub=$_POST['subject'];
     $comment=$_POST['comment'];
     $sendby=$_POST['uname'];
     $sql=mysqli_query($db,"INSERT INTO feedback(StudentName,StudentNo,Subject,Message,SendBy)values('$user','$stdno','$sub','$comment','$sendby')");
 
 if ($sql) {
    echo "<script>alert('Message has been sent successfully!')</script>;";

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
                <h1 class="page-header"> FeedBack</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Bursar</a></li>
                    <li><a href="#">Send  a Message</a></li>
                    <li class="active">Feedback</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Talk To Student</div>
            <div class="panel-body">
<form method="post" >
<div class="form-group">
<label >Student Name </label>
<select name="stdname"  class="form-control" required> 
<option value="">Select Student Name</option>
<?php $query ="SELECT * FROM clearance";
$stmt2 = $db->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->StudentName;?>"><?php echo $row->StudentName;?>&nbsp;&nbsp;(<?php echo $row->Comment_Reason;?>)</option>
<?php } ?>
</select> 
</div>
<div class="form-group">
<label for="exampleInptEmail1">StudentNO</label>
<select name="stdno"  class="form-control" required> 
<option value="">Select Student No</option>
<?php $query ="SELECT * FROM applicants";
$stmt2 = $db->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->StudentNo;?>"><?php echo $row->StudentNo;?>&nbsp;&nbsp;:<?php echo $row->StudentName;?></option>
<?php } ?>
</select>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Subject</label>
<input type="text" name="subject" class="form-control">
</div>
<label>Message to send</label>
<textarea name="comment" class="form-control" rows="4" cols="40" required autofocus></textarea><BR>
<div class="form-group">
<label for="exampleInputEmail1">Send By</label>
<input type="text" name="uname" class="form-control" required="">
</div>
<div class="input-group">
<button type="submit" class="btn btn-primary" name="send"> Send</button>
</div>
</form>
 </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->
<?php echo display_error(); ?>
