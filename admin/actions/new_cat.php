<?php
require '../db/db.php';




        if (isset($_POST['submit'])) {
            $cat=$_POST['category'];
          $query="INSERT INTO categories (category) VALUES ('$cat')";
        if($conn->query($query)){
           
            header('Location:../categories.php');
        };
         
          
        }
    else{
      header('Location:../categories.php');
        echo "Une erreur est survenue";
    }


?>
       


       <script>
        alert('Catgeorie Ajoutee');
        window.location.href='../categories.php';
</script>
