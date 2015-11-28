<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);
$sql='select * from registrationform where id="'.$_SESSION['id'].'"';
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<div style="background-color:#FFF;height:100px;margin:0px auto;overflow:hidden;">
<img src="zoom.png"style="float:left;padding:28px;"/>


<h1 style="text-align:center;margin:0px;padding:28px;color:#088bd7;padding-right:295px;">Student Registration Edit Form</h1>
</div>

<body style="background-color:#088bd7;margin:0px auto;width:100%;">
 
<div style="margin:0px auto;">
<div style="width:410px;margin:0px auto;padding:80px;background-color:#CCC;height:750px;border-radius:25px">

<form  action="update.php" method="post" name="edit" enctype="multipart/form-data">
<table>

<tr>
<td >Student Name:</td>
<td> <input type="text" name="studentname" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['studentname']?>"</td>
</tr>

<tr>
<td >Student Father Name:</td>
<td> <input type="text" name="studentfathername" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['studentfathername']?>"/></td>
</tr>

<tr>
<td >Course Id:</td>
<td><input type="text" name="courseid" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['courseid']?>" /></td>
</tr>

<tr>
<td >Student Id:</td>
<td><input type="text" name="studentid" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['studentid']?>" /></td>
</tr>

<tr>
<td >Section Id:</td>
<td><input type="text" name="secid" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['secid']?>" /></td>
</tr>

<tr>
<td >Section:</td>
<td><input type="text" name="section" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['section']?>" /></td>
</tr>

<tr>
<td >Roll Number:</td>
<td><input type="text" name="rollno" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['rollno']?>" /></td>
</tr>

<tr>
<td >Gender:</td>
<td><input type="radio" name="gender" checked="checked"  /> Male <input type="radio" name="gender"  /> Female </td>

</tr>

<tr>
<td >Date Of Birth:</td>
<td><input type="date" name="dob" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['dob']?>" /></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><input type="date" name="doj"  style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['doj']?>"/> </td>
</tr>

<tr>
<td >Email Id</td>
<td><input type="text" name="emailid" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['emailid']?>" /></td>
</tr>

<tr>
<td >Password:</td>
<td><input type="text" name="Password" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['Password']?>" /></td>
</tr>

<tr>
<td >Student Phone:</td>
<td><input type="text" name="studentphone" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['studentphone']?>" /></td>
</tr>


<tr>
<td >Parent Phone:</td>
<td><input type="text" name="parentphone" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['parentphone']?>" /></td>
</tr>

<tr>
<td >Address:</td>
<td><textarea name="Address" rows="5" cols="21" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" >
<?php echo $fetch['Address']?>

</textarea></td>
</tr>

<tr>
<td >Current Semister:</td>
<td><input type="text" name="currentsem" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['currentsem']?>" /></td>
</tr>

<tr>
<td>Student Photo:</td>
<td><input type="file" name="studentphoto" value="<?php echo $fetch['studentphoto']?>"  /></td>
</tr>

<tr>
<td >Regulation:</td>
<td><input type="text" name="regulation" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['regulation']?>" /></td>
</tr>

<tr>
<td >Status:</td>
<td><input type="text" name="status" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['status']?>" /></td>
</tr>

<tr>
<td >Dept Id:</td>
<td >
<select name="deptid" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['deptid']?>">
<option value="IT">IT</option>
<option value="ECE">ECE</option>
<option value="DIPLOMA">DIPLOMA</option>
<option value="CSE">CSE</option>
<option value="MECHANICAL">MECHANICAL</option>
</select>
</td>
</tr>
</table>

<table style="margin:44px 0px 0px 123px;">
<tr>
<td>
<input type="submit" name="update" value="update" style="background:#088bd7;"/>
</td>
</tr>
</table>
</form>
</div>
</div>

</body>
</html>
