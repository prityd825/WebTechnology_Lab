
<?php 
include "db.php";
?>

<?php 
$query = "SELECT person_name from works where salary > (Select max(salary) from works where company_name = 'Small Bank Corporation')";
$result = mysqli_query($connection, $query);
$rows = mysqli_fetch_all($result, MYSQLI_NUM);

foreach($result as $i =>$rows):
 echo "Employees who eran more than every employee of Small Bank Corporation:   ", $rows['person_name'],"<br>";
endforeach;
?>