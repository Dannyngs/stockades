<?php
require_once 'init.php';


  
                
    $rs = $db->query("SELECT* FROM T_Property where id = ".$_GET['id']);
    $property = $rs->fetch();   
?>

<?php require_once 'header.php' ?>

   <div class="content">
   		<div class="container">

            <div class="row pt15">
               <a class="contry1" href="">
                 <img src="<?php echo $imgurl.$property['banner'];?>">
                 <p>德國Berlin</p>
               </a>
             
                <div class="col-md-12 pt20">
                  <?php echo $property['content']?>
                </div>

         
            </div>
              

   		</div>

    </div>
<?php require_once 'footer.php' ?>
