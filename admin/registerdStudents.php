<?php
include("MainMenu.php");
include("../functions.php");
if (isset($_GET['id'])) {
  $Code =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM users
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
 <h1 class="page-header">Registered Students</h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  Registered Students
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="usermanagetable">
<thead>
<tr>
<th>S/No</th>
<th>UserName</th>
<th>Email</th>
<th>Course</th>
<th>StudentNo</th>
<th>RegistredDate</th>
<th>Actions</th>
</tr>
</thead>
<?php
$sql =mysqli_query($db,"select *from users where UserType='user'");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['UserName'];?></td>
                    <td><?php echo $rows['studentNo'];?></td>

        <td><?php echo $rows['Email']; ?></td>


    <td><?php echo $rows['course'];?></td>

    <td><?php echo $rows['PostingDate'];?></td>
      <td>
<a href="registerdStudents.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you want yo Delete')" <i class="fa fa-trash">Delete</i></a>



    </td>
    </tr>
 
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">
    <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-left my-auto">
            <span>All  Copyright Reserved © Kyu 2019 Developed By Asaba Julius</span>
          </div>
        </div>
      </footer>


 </a>
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
            