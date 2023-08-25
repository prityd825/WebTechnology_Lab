<?php 
include "db.php";
?>

<?php 
$query = "SELECT person_name from works where company_name != 'Sonali Bank LTD'";
$result = mysqli_query($connection, $query);
$rows = mysqli_fetch_all($result, MYSQLI_NUM);

foreach($result as $i =>$rows):
 echo "Employee name who do not work for Sonali Bank LTD:   ", $rows['person_name'],"<br>";
endforeach;
?>