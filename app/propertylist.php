<?php
require_once 'init.php';


  
                
    $rs = $db->query("SELECT* FROM T_Property");
    $properties = $rs->fetchAll();   
  // print_r($properties)

?>

<?php require_once 'header.php' ?>


    <div class="content">
   		<div class="container">

            <div class="row">
                
                   
           <?php  foreach($properties as $prop)          
{?>   
                    
              <div class="col-sm-6 pt15">
               <a class="contry" href="property.php?id=<?php echo $prop['id']?>">
                 <img src="<?php echo $imgurl.$prop['image'];?>">
                 <p><?php echo $prop['title'];?></p>
               </a>
              </div>

		
<?php
    }
   
    ?>
            
          
            </div>
              

   		</div>

    </div>


 
<?php require_once 'footer.php' ?>
