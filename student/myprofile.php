<?php
 include("MainMenu.php");
 include('../functions.php');
 include('../checkLogin.php');
check_login();
$aid=$_SESSION['id'];
 if(isset($_POST['update']))
{


$fname=$_POST['stname'];

$query="update  applicants set StudentName=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('s',$fname,$aid);
$stmt->execute();
echo"<script>alert('Profile updated Succssfully');</script>";
}
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> My Account </h1>
                <ol class="breadcrumb">
                    
                    <li class="active">My Profile </li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">View Account Details</div>
            <div class="panel-body">
                <?php   
$aid=$_SESSION['id'];
    $ret="select * from applicants where id=?";
        $stmt= $db->prepare($ret) ;
     $stmt->bind_param('i',$aid);
     $stmt->execute() ;//ok
     $res=$stmt->get_result();
     //$cnt=1;
       while($row=$res->fetch_object())
      {
        ?>
<form method="post" >

<div class="form-group">
 <label for="exampleInptEmail1">Student Name</label>
 <input type="text" name="stname" class="form-control" value="<?php echo $row->StudentName;?>" >
</div> 
  
<div class="input-group">
 <button type="submit" class="btn btn-primary" name="update"> update</button>
</div></form>



            </div>
        </div>
    </div> <!-- end of container -->
</div><!--     end of page warp -->
