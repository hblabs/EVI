<?php
require '../db/db.php';



if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));

    $extensions = ['pdf', 'doc', 'docs', 'xls', 'xlsx'];
    $maxSize = 400000000;

    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){

        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg

        move_uploaded_file($tmpName, '../../offers/'.$file);

       // $req = $db->prepare('INSERT INTO file (name) VALUES (?)');
        //  $req->execute([$file]);

        if (isset($_POST['submit'])) {

    
                $id=mysqli_real_escape_string($conn,$_POST['txt_id']);
                $title=mysqli_real_escape_string($conn,$_POST['title_article']);
                $content=mysqli_real_escape_string($conn,$_POST['article_content']);
                $author=$_POST['deadline'];
                $file_img=$file;
        
          $query="UPDATE offres SET title='$title', description='$content', expired='$author', joined_file='$file' WHERE id='$id'";
          $conn->query($query);}
        
          header('Location:../offers.php');
    }
    else{
        echo "Une erreur est survenue";
        header('Location:../offers.php');
    }
}

?>
       
       <script>
        alert('Offre supprimer avec succes');
        window.location.href='../offers.php';
</script>


