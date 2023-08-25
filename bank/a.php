<?php 
include "db.php";
?>

<?php 
$query = "SELECT E.person_name FROM employee as E , works as W , company as C  WHERE E.person_name= W.person_name AND E.city = C.city and W.company_name = C.company_name";
$result = mysqli_query($connection, $query);
$rows = mysqli_fetch_all($result, MYSQLI_NUM);

foreach($result as $i =>$rows):
 echo "Who live in the same city as the company ", $rows['person_name'],"<br>";
endforeach;
?>








