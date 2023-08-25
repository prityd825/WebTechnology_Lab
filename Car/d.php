<?php 
include "bd.php";
?>

<?php 
$sql = "UPDATE accident 
        JOIN participated ON participated.report_number = accident.report_number 
        JOIN owns ON participated.driver_id = owns.driver_id 
        JOIN car ON owns.license = car.license 
        SET damage_amount = '3000' 
        WHERE car.license = 'AABB2000' AND accident.report_number = 'AR2197'";

$result = mysqli_query($connection, $sql);

if ($result == TRUE) {
    echo "Record updated successfully";
    $sql = "SELECT damage_amount FROM participated WHERE report_number = 'AR2197'";
    $result = mysqli_query($connection, $sql);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<br> Updated damage amount: ", $row[0];
} else {
    echo "Error updating record: " . mysqli_error($connection);
}
?>
