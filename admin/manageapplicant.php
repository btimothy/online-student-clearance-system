<?php
include("MainMenu.php");
include("../functions.php");
if (isset($_GET['id'])) {
  $Code =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM applicants
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
 <h1 class="page-header">Applied Students</h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  Applied Students
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="table_id" >
<thead>
<tr>
<th>S/No</th>
<th>Student Name</th>
<th>Student No</th>
<th>RegNo</th>
<th>Course</th>
<th>Course Code</th>
<th>Program</th>
<th>Faculty</th>
<th>Department</th>
<th>Hall</th>
<th>Year Of Entry</th>
<th>Year Of Study</th>
<th>Gender</th>
<th>Email</th>
<th>AppliedDate</th>
</tr>
</thead>
<?php
$sql =mysqli_query($db,"select *from applicants");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['StudentName'];?></td>
    <td><?php echo $rows['StudentNo'];?></td>
    <td><?php echo $rows['RegNo']; ?></td>
    <td><?php echo $rows['Course'];?></td>
    <td><?php echo $rows['CourseCode'];?></td>
    <td><?php echo $rows['Program'];?></td>
    <td><?php echo $rows['Faculty'];?></td>
    <td><?php echo $rows['Department'];?></td>
    <td><?php echo $rows['Hall'];?></td>
    <td><?php echo $rows['Year_Of_Entry'];?></td>
    <td><?php echo $rows['Year_Of_Study'];?></td>
    <td><?php echo $rows['Gender'];?></td>
    <td><?php echo $rows['Email'];?></td>
    <td><?php echo $rows['AppliedOn'];?></td>
    <td><a href="manageapplicant.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you want yo Delete')" <i class="fa fa-trash">Delete</i></a>

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



            <!-- mega account -->
            <!-- prqyH_V7lEHIEcpEa8BsrA -->