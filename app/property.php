<?php
require_once 'init.php';


  
                
    $rs = $db->query("SELECT* FROM T_Property where id = ".$_GET['id']);
    $property = $rs->fetch();   
  print_r($property)

?>

<?php require_once 'header.php' ?>

 
<?php require_once 'footer.php' ?>
