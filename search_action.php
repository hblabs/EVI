<?php
include 'db/db.php';
if (isset($_POST['submit'])) {


    $request='lorem'
    //$_POST['mail'];
   $query="SELECT * FROM articles WHERE title LIKE ' .%'$request'%.  '";
   $result=mysqli_query($conn, $query);
    $count=mysqli_num_rows($result);
    while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $id=$row['id'];
        $cat=$row['category'];
        $title=$row['title'];
        $content=$row['content'];
        $posted=$row['posted_on'];
        $author=$row['posted_by'];
        $edit=$row['edit_on'];

        echo '<h1>Salut</h1>';
}
}
?>