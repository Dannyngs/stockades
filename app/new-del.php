<?php
require_once 'init.php';



              
    $rs = $db->query("SELECT* FROM articles where id = ".$_GET['id']);
    $artl = $rs->fetch();   
 

?>

<?php require_once 'header.php' ?>

   <div class="content">
   		<div class="container">

           
            <div class="row pt15">
                 <div class="col-md-12">
                      <h4 class="glod text-center"><?php echo $artl['article_title']?></h4>
                </div>
                <div class="col-md-12">
                    <hr class="yellow-lines">
                  <?php echo $artl['article_content']?>
                  
<!--
                <p class="imma-tit">項目介紹</p>
                <p class="plr15">近年来，中国经济体量迅速增长，居民财富也快速积累。在此背景下，中国内地富裕人群出于投资、移民、教育等目的，在海外购房置业的人数和投资总量持续增多，中国有实力房地产企业也纷纷进军海外，谋求企业发展全球化战略布局。</p>
                 <p class="plr15">近年来，中国经济体量迅速增长，居民财富也快速积累。在此背景下，中国内地富裕人群出于投资、移民、教育等目的，在海外购房置业的人数和投资总量持续增多，中国有实力房地产企业也纷纷进军海外，谋求企业发展全球化战略布局。</p>
-->

               
              
              </div>
            </div>
   		 </div>

    </div>

 
<?php require_once 'footer.php' ?>
