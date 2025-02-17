<?php
include 'connex_bdd.php';

$sql = "SELECT logement, date_entre AS dateEntree, date_depart AS dateSortie FROM reservation";
$result = $pdo->query($sql);

$reservations = array();
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $reservations[] = $row;
    }
}

echo json_encode($reservations);
?>