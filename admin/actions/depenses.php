<?php
require '../db/db.php';




        if (isset($_POST['submit'])) {
            
            $nat=$_POST['nature'];
            $origin=$_POST['origine'];
            $amount=$_POST['amount'];
            $motif=$_POST['motif'];
            $descr=$_POST['description'];
    
      $query="INSERT INTO comptes_out(nature, origine, montant, motif, description) VALUE('$nat','$origin','$amount','$motif','$descr')";
     if($conn->query($query))
   
     header('Location:../comptabilite_out');
     ;?>
         
         <?php
         // 
    }
    else{
        echo "<div align='center'>Une erreur est survenue<div>";
        echo "<a style='text-align:center' href='../comptabilite_out'>Revenir en Arrière</a>";
    }

?>
       

       <script>
        alert('Offre supprimer avec succes');
        window.location.href='../index.php';
</script>

