<?php
require '../db/db.php';
$id=$_GET['id'];
$query="DELETE FROM comptes_in WHERE id='$id'";

$conn->query($query);

?>
<script>
        alert('Recette supprimer avec succes');
        window.location.href='../comptabilite_in';
</script>