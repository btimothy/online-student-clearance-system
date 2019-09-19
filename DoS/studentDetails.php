<?php
include("../functions.php");
?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student  Information</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="hostel.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0">
<?php 
     $ret= mysqli_query($db,"SELECT * FROM applicants where id = '".$_GET['id']."'");
      while($row=mysqli_fetch_array($ret))
      {
      ?>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			<tr>
	<td colspan="2"  class="font"><?php echo ucfirst($row['StudentName']);?> <?php echo ucfirst($row['StudentName']);?>'S <span class="font1"> information &raquo;</span> </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <div align="right">StudentNo : <span class="comb-value"><?php echo $row['StudentNo'];?></span></div></td>
  </tr>
			<tr>
			  <!-- <td colspan="2"  class="heading" style="color: red;">Room Related Info &raquo; </td> -->
  </tr>
			<tr>
			  <td colspan="2"  class="font1"><table width="100%" border="0">
                <tr>
                  <td width="32%" valign="top" class="heading">RegNo : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['RegNo'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Course : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['CourseCode'];?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Faculty : </td>
                      <td class="comb-value1"><?php echo $fpm=$row['Faculty'];?></td>
                    </tr>
                    
                    <tr>
                    <td width="12%" valign="top" class="heading">Department: </td>
                      <td class="comb-value1"><?php echo $row['Department'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Hall: </td>
                      <td class="comb-value1"><?php echo $dr=$row['Hall'];?></td>
                    </tr>
                    
  <!-- <tr>
   <td colspan="2" align="left"  class="heading" style="color: red;">Personal Info &raquo; </td>
  </tr> -->
<tr>
<td width="12%" valign="top" class="heading">Year of Entry: </td>
<td class="comb-value1"><?php echo $row['Year_Of_Entry'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Year_Of_Study: </td>
<td class="comb-value1"><?php echo $row['Year_Of_Study'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Email: </td>
<td class="comb-value1"><?php echo $row['AppliedDate'];?></td>
</tr>
<?php } ?>


                   
                  </table></td>
                </tr>
               
					
                  </table></td>
                </tr>
              </table></td>
  </tr>
		
           
 
	 
    </table></td>
  </tr>

  
  <tr>
    <td colspan="2" align="right" ><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%">&nbsp;</td>
          <td width="35%" class="comb-value"><label>
            <input name="Submit" type="submit" class="txtbox4" value="Prints this Document " onClick="return f3();" />
          </label></td>
          <td width="3%">&nbsp;</td>
          <td width="26%"><label>
            <input name="Submit2" type="submit" class="txtbox4" value="Close this document " onClick="return f2();"  />
          </label></td>
          <td width="8%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>
