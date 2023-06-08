<?php
require '../db/db.php';


session_start();
if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));

    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
    $maxSize = 400000000;

    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){

        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg

        move_uploaded_file($tmpName, './../../img/articles/'.$file);

       // $req = $db->prepare('INSERT INTO file (name) VALUES (?)');
        //  $req->execute([$file]);

        if (isset($_POST['submit'])) {

            $id=mysqli_real_escape_string($conn,$_POST['txt_id']);
            $cat=mysqli_real_escape_string($conn,$_POST['cat']);
            $title=mysqli_real_escape_string($conn,$_POST['title_article']);
            $content=mysqli_real_escape_string($conn,$_POST['article_content']);
            $file_img=$file;
            $author=$_SESSION['name'];
          $query="UPDATE articles SET category='$cat',title='$title',content='$content',posted_by='$author',img='$file' WHERE id='$id'";
          $conn->query($query);}?>
         <?php ?> <script>alert('Modifications Reussies');</script>
         <?php
          header('Location:../all_articles.php');
    }
    else{
        echo "<div align='center'>Une erreur est survenue<div>";
        echo "<a style='text-align:center' href='../all_articles.php'>Revenir en Arrière</a>";
    }
}

?>
       
       <script>
        alert('Offre supprimer avec succes');
        window.location.href='../all_articles.php';
</script>


