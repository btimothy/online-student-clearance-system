<?php
include("MainMenu.php");
include("../functions.php");


?>
<div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header"> Check Requirement for Clearance </h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  List of Requirements for Each Office 
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="usermanagetable">
<thead>
<tr>
<th>S/No</th>
<th>Student Category</th>
<th>Description</th>
<th>Added_By</th>
<th>Added_On</th>
</tr>
</thead>
<!-- where  StudentCategory LIKE 'F%';"
 --><?php
$sql=mysqli_query($db,"SELECT *from requirements ");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['StudentCategory'];?></td>
    <td><?php echo $rows['Description']; ?></td>
    <td><?php echo $rows['AddedBy']?></td>
    <td><?php echo $rows['AddedOn'];?></td>
    </tr>
 
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">Vie</a>
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
            