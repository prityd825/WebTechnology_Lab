<?php
include "bd.php";
?>

<?php
$sql = "SELECT * FROM `accident`";
$result = mysqli_query($connection,$sql);
$count = mysqli_num_rows($result);
echo "Total = ",$count;


?>