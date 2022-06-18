<?php
include("../control/process.php");
?>

<html>
    <body>
   
<form action ="" method="POST" enctype ="multipart/form-data">
<h1>Registration Form</h1>
<hr size="2" width="100%">
<table>
    <tr>
<td> First name </td>
<td> <input type="text" name="fname" placeholder="First name"><td>
</tr>
<tr>
<td>Last name </td>
<td> <input type="text" name="lname" placeholder="Last name"></td>
</tr>
<tr>
<td>Age </td>
    <td><input type="text" name="age" placeholder="Age"></td>
</tr>
<tr>
<td>Designation</td>
<td><input type="radio" name="des" value="Junior programmer">Junior programmer  
<input type="radio" name="des" value="Senior programmer">Senior programmer  
<input type="radio" name="des" value="Project lead">Project lead</td>
</tr>
    
<tr>
<td>Preferred language</td>
<td><input type="checkbox" id="l1" name="l1" value="java" >JAVA 
<input type="checkbox" id="l2" name="l2" value="php" >PHP 
<input type="checkbox" id="l3" name="l3" value="cplus" >C++ </td>
</tr>
<tr>
<td> Email </td>
<td> <input type="email" name="email" placeholder="enter your email here"><td>
</tr>
<tr>

<tr>
<td> Password </td>
<td> <input type="password" name="pass" placeholder="Enter your password here"><td>
</tr>
<tr>

<tr>
<td> Please choose a file </td>
<td> <input type="file" name="file" ><td>
</tr>
<tr>

<tr> 
     <td> <input type="submit" name="Submit"  value ="Register">
     <input type="reset" name="Reset"  value ="Reset"></td>
</tr>


</table>
</form>
</body>
    </html>