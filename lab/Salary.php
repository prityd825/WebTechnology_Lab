<?php
    include('DatabaseConnect.php');

    if(isset($_POST['sal_scale']) && isset($_POST['sal_amount'])) {
        $sal_scale = $_POST['sal_scale'];
        $sal_amount = $_POST['sal_amount'];

        $sql = "INSERT INTO salary VALUES ('$sal_scale', '$sal_amount')";

        if ($connection->query($sql)){
            echo "Insertion Successfull<br>";
        } else {
            echo "Insertion Unsuccessfull<br>";
        }
    }
?>