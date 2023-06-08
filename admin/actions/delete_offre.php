<?php
require '../db/db.php';
$id=$_GET['id'];
$query="DELETE FROM offres WHERE id='$id'";

$conn->query($query);

?>
<script>
        alert('Offre supprimer avec succes');
        window.location.href='../offers.php';
</script>