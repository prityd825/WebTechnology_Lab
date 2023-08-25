<?php 
include "bd.php";
?>

<?php 
$sql = "SELECT damage_amount FROM participated JOIN owns ON participated.driver_id = owns.driver_id JOIN car ON owns.license = car.license  WHERE car.year ='2013'";
$result = mysqli_query($connection, $sql);
$rows = mysqli_fetch_all($result,MYSQLI_NUM);

$sum =0;
foreach($result as $i=>$rows):
    echo "damage amount: ".($i+1). "= " .$rows['damage_amount'],"<br>";
    $sum += $rows['damage_amount'];
endforeach;
echo "Total amount in 2013 : ", $sum;    


?>