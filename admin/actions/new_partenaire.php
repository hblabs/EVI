<?php
require '../db/db.php';



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

        move_uploaded_file($tmpName, './../../img/partenaires/'.$file);

       // $req = $db->prepare('INSERT INTO file (name) VALUES (?)');
        //  $req->execute([$file]);

        if (isset($_POST['submit'])) {

                $title=$_POST['title_article'];
                $content=$_POST['article_content'];
                $file_img=$file;
        
          $query="INSERT INTO partenaires(nom, description, logo) VALUES('$title','$content','$file')";
          $conn->query($query);}
          
          header('Location:../partenaires');
    }
    else{
        echo "Une erreur est survenue";
    }
}

?>
       


       
       <script>
        alert('Offre supprimer avec succes');
        window.location.href='../partenaires.php';
</script>

