<?php
require '../db/db.php';

$query="SELECT COUNT(*)AS art_count from articles ";
$conn->query($query);
$result=mysqli_query($conn, $query);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
if ($row<>0) {
    $art_count=$row['art_count'];
}
else{
    $count=0;
}



$offers="SELECT COUNT(*)AS off_count from offres ";
$conn->query($offers);
$offer_result=mysqli_query($conn, $offers);
$offer_count=mysqli_num_rows($offer_result);
$offer_row=mysqli_fetch_array($offer_result, MYSQLI_ASSOC);
if ($offer_row<>0) {
    $offer_row_count=$offer_row['off_count'];
}
else{
    $offer_row_count=0;
}


$caisse_in="SELECT SUM(montant)AS off_count from comptes_in ";
$conn->query($caisse_in);
$caisse_in_result=mysqli_query($conn, $caisse_in);
$caisse_in_count=mysqli_num_rows($caisse_in_result);
$caisse_in_row=mysqli_fetch_array($caisse_in_result, MYSQLI_ASSOC);
if ($caisse_in_row<>0) {
    $caisse_in_row_count=$caisse_in_row['off_count'];
}
else{
    $caisse_in_row_count=0;
}




$newsl="SELECT count(*)AS off_count from newsletter ";
$conn->query($newsl);
$newsl_result=mysqli_query($conn, $newsl);
$newsl_count=mysqli_num_rows($newsl_result);
$newsl_row=mysqli_fetch_array($newsl_result, MYSQLI_ASSOC);
if ($newsl_row<>0) {
    $newsl_row_count=$newsl_row['off_count'];
}
else{
    $newsl_row_count=0;
}


$caisse_out="SELECT SUM(montant)AS off_count from comptes_out ";
$conn->query($caisse_out);
$caisse_out_result=mysqli_query($conn, $caisse_out);
$caisse_out_count=mysqli_num_rows($caisse_out_result);
$caisse_out_row=mysqli_fetch_array($caisse_out_result, MYSQLI_ASSOC);
if ($caisse_out_row<>0) {
    $caisse_out_row_count=$caisse_out_row['off_count'];
}
else{
    $caisse_out_row_count=0;
}





$partenaires="SELECT COUNT(*)AS part_count from partenaires ";
$conn->query($partenaires);
$partenaires_result=mysqli_query($conn, $partenaires);
$partenaires_count=mysqli_num_rows($partenaires_result);
$partenaires_row=mysqli_fetch_array($partenaires_result, MYSQLI_ASSOC);
if ($partenaires_row<>0) {
    $partenaires_row_count=$partenaires_row['part_count'];
}
else{
    $partenaires_row_count=0;
}


?>