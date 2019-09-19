<?php
include("MainMenu.php");
include("../functions.php");

?>
 <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                    <ol class="breadcrumb">
					  <li><a href="#">Admin</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Overview</li>
					</ol>
                </div>
            </div>
            <div class="panel panel-default">
		  <div class="panel-heading">Admin Dashboard Analysis OverView</div>
		  <div class="panel-body">
		   
<div class="row">
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color:  #ff80aa; color: #ffffff;">
    	<center>
               <?php
$result ="SELECT count(*) FROM clearance  where ClearanceStatus='cleared' ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?>
  
</p> 
      </center>
      <div class="caption">
        <h3 style="color: white;">Cleared Students</h3>
        
        <p> <a href="clearedStd.php" style="color: white; ">View Details</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color: #b8b894; color: #ffffff;">
    	<center>
        <?php
$result ="SELECT count(*) FROM applicants ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?>
  
</p>      </center>
      <div class="caption">
        <h3 style="color: white;">Applied Students</h3>
        
        <p> <a href="manageapplicant.php" style="color: white; ">View Details</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color: #85adad; color: #ffffff;">
    	<center>
         <?php
$result ="SELECT count(*) 
FROM clearance  where ClearanceStatus='Pending' ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?>
  
</p>

            </center>
      <div class="caption">
        <h3 style="color: #ffffff;">Pending Students</h3>
        
        <p> <a href="pendingstudents.php" style="color: white; ">View Details</a></p>
      </div>
    </div>
  </div>
 
</div>
<div class="row">
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color:  #aa80ff; color: #ffffff;">
    	<center>
 <?php
$result ="SELECT count(*) 
FROM users  where NOT UserType='student' AND  NOT UserType='user'";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?>
  
</p>      </center>
      <div class="caption">
        <h3 style="color: white;">Clearance Staffs</h3>
        
        <p> <a href="ManageUsers.php" style="color: white; ">View Details</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color: #b3e6ff; color: #ffffff;">
    	<center>
   <?php
$result ="SELECT count(*) 
FROM requirements ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?>
  
</p>
      </center>
      <div class="caption">
        <h3 style="color: #ffffff;">Requirements</h3>
        
        <p> <a href="#" style="color: white; ">View Details</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" style="background-color:#c68c53; color: #ffffff;">
    	<center>
 <?php
$result ="SELECT count(*) 
FROM users  where  UserType='student' or  UserType='user'";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>
<p class="stat-panel-number h1 "><?php echo $count;?>
  
</p>          </span></center>
      <div class="caption">
        <h3 style="color: white;">Registered Students</h3>
        
        <p> <a href="#" style="color: white; ">View Details</a></p>
      </div>
    </div>
  </div>

</div>





		  </div>
		    <div class="panel-footer">Admin OverView </div>
		</div>  
	   </div>
        <!-- end of container -->
    </div>


<!-- 

    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                    <ol class="breadcrumb">
					  <li><a href="#">Admin</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Overview</li>
					</ol>
                </div>
            </div>
            <div class="panel panel-default">
		  <div class="panel-heading">Panel heading without title</div>
		  <div class="panel-body">
		    Panel content
		  </div>
		    <div class="panel-footer">Admin OverView </div>
		</div>  
	   </div>
    </div>

 -->