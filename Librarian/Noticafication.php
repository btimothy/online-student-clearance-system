<?php
include("MainMenu.php");
include("../functions.php");

if (isset($_GET['id'])) {
  $Code =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM feedback 
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
 <h1 class="page-header">Message Sent Center </h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
 FeedBack  Management 
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="usermanagetable" border="1">
<thead>
<tr>
<th>S/No</th>
<th>Subject</th>
<th>Message Sent</th>
<th>Sent To</th>
<th>Sent On</th>
<th>Action</th>
</tr>
</thead>
<?php
$sql=mysqli_query($db,"SELECT *from feedback ");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['Subject'];?></td>
    <td><?php echo $rows['Message']; ?></td>
    <td><?php echo $rows['StudentName']?></td>
    <td><?php echo $rows['PostingDate'];?></td>
   <td>
<a href="Noticafication.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you want yo delete')" <i class="fa fa-trash">Delete</i></a>



</td>
                            

    </tr>
 
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
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
            