<?php 
include "bd.php";
?>

<?php 
$sql = "SELECT * FROM participated p,person per WHERE p.driver_id = per.driver_id AND name ='Mr.saiful'";
$result = mysqli_query($connection, $sql);
$count = mysqli_num_rows($result);
echo "Total aceident: ", $count;


?>
