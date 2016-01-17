<?php
require_once 'init.php';


  
                
    $rs = $db->query("SELECT* FROM T_Project where id = ".$_GET['id']);
    $project = $rs->fetch();   
  print_r($project)

?>

<?php require_once 'header.php' ?>

 
<?php require_once 'footer.php' ?>
