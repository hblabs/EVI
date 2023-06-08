<?php
require 'db/db.php';
if (isset($_POST['submit_mail'])) {
    $mailreg=$_POST['mail'];
   $query="INSERT INTO newsletter(mail) VALUES('$mailreg')";
   
 $conn->query($query);
  
}
?>
<script>alert('Succcessfully added to news letter');
window.location.href='index';
</script>;
