<?php
require '../db/db.php';
$id=$_GET['id'];
$query="DELETE FROM partenaires WHERE id='$id'";

$conn->query($query);

?>
<script>
        alert('Partensire supprimer avec succes');
        window.location.href='../partenaires';
</script>