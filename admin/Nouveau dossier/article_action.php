<?php
require 'db/db.php';



if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));

    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
    $maxSize = 400000;

    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){

        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg

        move_uploaded_file($tmpName, './../img/articles/'.$file);

       // $req = $db->prepare('INSERT INTO file (name) VALUES (?)');
        //  $req->execute([$file]);

        if (isset($_POST['submit'])) {

    
            $cat=$_POST['cat'];
                $title=$_POST['title_article'];
                $content=$_POST['article_content'];
                $author=$_POST['txt_author'];
                $file_img=$file;
        
          $query="INSERT INTO articles(category, title, content,posted_by,img) VALUES('$cat','$title','$content','$author','$file')";
          $conn->query($query);}
    }
    else{
        echo "Une erreur est survenue";
    }
}

?>
       



