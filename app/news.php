<?php
require_once 'init.php';



              
    $rs = $db->query("SELECT* FROM articles");
    $arts = $rs->fetchAll();   
 

?>

<?php require_once 'header.php' ?>

   <div class="content">
   		<div class="container">

            <div class="row pt15">
            
            	<img class="allw" src="/_/images/news1.jpg" />
               <h3 class="glod">最新資訊</h3>
               
            	 <hr class="yellow-line" />
            		


            </div>

            <div class="row pt15">
               <div class="col-md-12">
                   
                <ul class="list-unstyled">
                    
                    
                    
                     
           <?php  foreach($arts as $art)          
{?>     
                    
       <li><a href="new-del.php?id=<?php echo $art['id']?>">
           <?php echo $art['article_title']?>--------<?php echo $art['article_date']?>
        </a></li>
                    
		
<?php
    }
   
    ?>

                </ul>

               </div>
            </div>
   		 </div>

    </div>

 
<?php require_once 'footer.php' ?>
