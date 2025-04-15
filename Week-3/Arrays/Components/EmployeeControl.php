<h1>Edit Employee data</h1>
<form action="updatedEmployee.php" method="post">


<?php 
echo "<label for ='Employees'> Choose an employee: </label>";
echo "<select name='Employees' id='employee'>
<option value='0'>$employeeName[0]</Option>
<option value='1'>$employeeName[1]</Option>
<option value='2'>$employeeName[2]</Option>
</select>
<br> "
?>

Employee Rank: <input type="text" name='empRank'><br>
Employee Email: <input type="text" name='empEmail'><br>
Employee Favorite Book: <input type="text" name='empBook'> <br>
<input type="submit" value="Append">
</form>
