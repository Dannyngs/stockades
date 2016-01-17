<?php
require_once 'init.php';


  
                
    $rs = $db->query("SELECT* FROM T_Property");
    $properties = $rs->fetchAll();   
  // print_r($properties)

?>

<?php require_once 'header.php' ?>

 
<?php require_once 'footer.php' ?>
