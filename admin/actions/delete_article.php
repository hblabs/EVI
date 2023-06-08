<?php
require '../db/db.php';
$id=mysqli_real_escape_string($conn,$_GET['id']);
$query="DELETE FROM articles WHERE id='$id'";

$conn->query($query);

?>
<script>
        alert('Article supprimer avec succes');
        window.location.href='../all_articles';
</script>