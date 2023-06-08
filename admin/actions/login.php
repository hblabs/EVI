<?php


require '../db/db.php';
if (isset($_POST['submit'])) {

    $mail=mysqli_real_escape_string($conn,$_POST['mail']);
    $pass=mysqli_real_escape_string($conn,$_POST['password']);


    $search="SELECT * FROM admin WHERE username='$mail' and password='$pass'";
    $result=mysqli_query($conn, $search);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count <> 0){
       
        session_start();
        $_SESSION['admin']=$mail;
        $_SESSION['name']=$row['name'];
        header('Location:../index.php');
     
        
    }else{
        header('Location:../login.php?error=1');
    }  
}
  ?>