<?php
require '../db/db.php';




        if (isset($_POST['submit'])) {
            
            $nat=$_POST['nature'];
            $origin=$_POST['origine'];
            $amount=$_POST['amount'];
            $motif=$_POST['motif'];
            $descr=$_POST['description'];
    
      $query="INSERT INTO comptes_in(nature, origine, montant, motif, description) VALUE('$nat','$origin','$amount','$motif','$descr')";
     if($conn->query($query))

     header('Location:../comptabilite_in');
     ;?>
         
         <?php
         // 
    }
    else{
        header('Location:../comptabilite_in');
        echo "<div align='center'>Une erreur est survenue<div>";
        echo "<a style='text-align:center' href='../comptabilite_in'>Revenir en Arrière</a>";
    }

?>
         <script>
        alert('Offre supprimer avec succes');
        window.location.href='../comptabilite_in.php';
</script>
     



