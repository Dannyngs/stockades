<?php
require_once 'init.php';



              
    $rs = $db->query("SELECT* FROM T_Page where id = ".$_GET['id']);
    $page = $rs->fetch();   
  print_r($page)

?>

<?php require_once 'header.php' ?>

 
<?php require_once 'footer.php' ?>
