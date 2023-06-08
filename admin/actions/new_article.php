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

    
            $cat=$_POST['cat'];
                $title=mysqli_real_escape_string($conn,$_POST['title_article']);
                $dateto=date('d-m-Y');
                $id= str_replace(' ', '-', $title).'-'.$dateto;
                $content=mysqli_real_escape_string($conn,$_POST['article_content']);
                $author=$_SESSION['name'];
                $file_img=$file;
        
          $query="INSERT INTO articles(id,category, title, content,posted_by,img) VALUES('$id','$cat','$title','$content','$author','$file')";
          $conn->query($query);}
       
          header('Location:../all_articles.php');
    }
    else{
        echo "Une erreur est survenue";
    }
}

?>
       


       
       <script>
        alert('Offre supprimer avec succes');
        window.location.href='../all_articles.php';
</script>


