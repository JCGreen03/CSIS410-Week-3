<?php 
$selectedOption = $_POST['Employees'];

$rankValue = $_POST['empRank'];
$emailValue = $_POST['empEmail'];
$bookValue = $_POST['empBook'];

$employeeRank[$selectedOption] = $employeeRank[$selectedOption] . ", " . $rankValue;
$employeeEmail[$selectedOption] = $employeeEmail[$selectedOption] . ", " . $emailValue;
$employeeFavoriteBook[$selectedOption] = $employeeFavoriteBook[$selectedOption] . ", " . $bookValue;
?>



<?php
if ($selectedOption == '0') {
    echo "<img class=employeebio src='./Media/Vincent.jpg' alt='Vincent'><br>";
    echo "
    Name: $employeeName[0] <br>
    Rank: $employeeRank[0] <br>
    Emails: $employeeEmail[0] <br>
    Favorite Books: $employeeFavoriteBook[0]";
} 
else if ($selectedOption == '1') {
    echo "<img class=employeebio src='./Media/Guy.jpg' alt='Guy'> <br>";
    echo "
    Name: $employeeName[1] <br>
    Ranks: $employeeRank[1] <br>
    Emails: $employeeEmail[1] <br>
    Favorite Books: $employeeFavoriteBook[1]";
}
else if ($selectedOption == '2') {
    echo "<img class=employeebio src='./Media/Reggie.jpg' alt='Reggie'> <br>";
    echo "
    Name: $employeeName[2] <br>
    Ranks: $employeeRank[2] <br>
    Emails: $employeeEmail[2] <br>
    Favorite Books: $employeeFavoriteBook[2]";
}
?>