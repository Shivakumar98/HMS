<?php require('connection.php');?>
<html>
 <head>
  <title>Update Doctor</title>
 </head>
<body bgcolor="#eee">
<table border="1" align=center width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=blue><td align=center style="background-color:#393f4d"><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>Update
Doctor</font></td></tr>

<?php

error_reporting(1);
$rno=trim($_POST["rno"]);
$name=trim($_POST["name"]);
$spec=trim($_POST["spec"]);
$error=0; if ($name=="") { $error=1; echo "<tr><td><font color=red size=4>Name
can't empty</font></td></tr>"; }
if ($spec=="") { $error=1; echo "<tr><td><font color=red
size=4>Specilization can't empty</font></td></tr>"; }
if ($error==0) {

 mysql_query("update doct set dname='".$name."',dspec='".$spec."'
where dno='".$rno."'");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Records Updated</font></td></tr>";
}
else {
 echo "<form name=fdadd method=post action=dupdate.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Doctor Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$name."'></td></tr>";
 echo "<tr><td>Specilization</td><td><input type=text name=spec
size=30 maxlength=30 value='".$spec."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=hidden name=rno
value=".$rno."><input type=submit value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=dlist.php>Continue...</a></td></tr>";
echo "</table>"; 
echo "</body></html>";