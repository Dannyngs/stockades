<?php
require_once 'init.php';


  
//                
//    $rs = $db->query("SELECT* FROM T_Project where id = ".$_GET['id']);
//    $project = $rs->fetch();   
//  

?>

<?php require_once 'header.php' ?>
  <div class="content">
   		<div class="container">
         <div class="row pt15">
          
   <img class="allw" src="/_/images/news4.jpg"/>

    <img class="allw pt15" src="/_/images/news2.jpg"/>
    <img class="allw pt15" src="/_/images/news3.jpg"/>
    
 
         </div>

          
             <div class="row pt15">
                <div class="col-md-12">
                  <h3 class="glod">移民項目介紹</h3>
                </div>

            </div>
            <div class="row" style="margin-top:-15px;">
              <hr class="yellow-lines" />
              <div class="col-md-12">
               <?php echo $system['project_pro']?>
              </div>
            </div>

   		 </div>

    </div>

 
<?php require_once 'footer.php' ?>
