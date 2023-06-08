<?php
require '../db/db.php';
$id=$_GET['id'];
$query="DELETE FROM categories WHERE id='$id'";

$conn->query($query);

?>
<script>
        alert('Categorie supprimer avec succes');
        window.location.href='../categories';
</script>