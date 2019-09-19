<?php
include("MainMenu.php");
include("../functions.php");
if (isset($_GET['id'])) {
  $Code =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM clearance
    WHERE id='$Code'");
  if ($sql) {
   echo "<script>alter('data deleted');</script>"; 
 }
 }

?>
<div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header"> List of Cleared Students </h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  Students Clearance Management 
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="usermanagetable">
<thead>
<tr>
<th>S/No</th>
<th>StudentName</th>
<th>Regno</th>
<th>Clearance Status</th>
<th>Comment/Reason</th>
<th>Cleared On</th>

<th>Action</th>
</tr>
</thead>
<?php
$sql=mysqli_query($db,"SELECT *from clearance where  ClearanceStatus ='cleared';");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['StudentName'];?></td>
    <td><?php echo $rows['regno'];?></td>
    <td><?php echo $rows['ClearanceStatus']; ?></td>
    <td><?php echo $rows['Comment_Reason']?></td>
    <td><?php echo $rows['Posting_Date'];?></td>
    <!-- <td><a href="updatesstdclearance.php"><span class="fa fa-edit">Update Student</span></a>
    </td> -->
    <td>
<!-- <a href="updatesstdclearance.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp; -->
<a href="studentDetails.php?id=<?php echo $rows->id;?>"><i class="fa fa-eye"></i></a>&nbsp;
   <a href="clearedStd.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you want yo Delete')" <i class="fa fa-trash">Delete</i></a>
    </td>

    </tr>
 
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<!-- <button onclick="window.Print()">print</button>
 -->
<a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">All right Reserved @ KYU Developed By Asaba Julius</a>
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
            