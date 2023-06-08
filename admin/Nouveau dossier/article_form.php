<?php

session_start();
if(isset($_SESSION['users'])){
    header("location: ../index.php");
}
?>
    <html>

    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="icon" href="../logo.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="style/views.css">


        <body>

            <div align="center">

                <div class="subcontainer" style="margin-top:5% ;">
                    <div align="center" class="title">
                        <img src="logo.png " style="width: 100px;background: #ffff; margin-top: -60px; border-radius: 50%; box-shadow: 0px 0px 5px 0px black; text-align: left; ; ">
                        <h1>Inserer un Article</h1>
                    </div>
                    <form method="POST" action="article_action.php" enctype="multipart/form-data">
                        <label>Categorie</label><br>
                        <select name="cat">
                            <option value="Social">Social</option>
                            <option value="Politiaue">politique</option>
                            <option value="Securitaire">Securitaire</option>
                        </select>
                        <p></p>
                        <label>Titre de l'Article</label><br>
                        <input type="text" required="" name="title_article" placeholder="Entrez le Titre de l'Article">
                        <p></p>
                       <textarea style="max-width: 100%; width: 100%;" name="article_content"></textarea>
                        <p></p>

                        <label>Nom de l'Auteur</label><br>
                        <input type="text" name="txt_author" placeholder="Entrez le nom de l'auteur"><p>
                            <label>Image de l'Artcile</label><br>                     
                            <input type="file" name="file">
                        <p></p>

                        <input type="submit" value="S'Inscrire" name="submit" style="background-color: skyblue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; cursor: pointer; color: azure;">
                        <div class="conditions" style="text-align: center">


                           

                    </form>
                </div>

            </div>


        </body>

    </html>