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
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img class="allw" src="/_/images/news4.jpg"/></div>

    <div class="item"><img class="allw" src="/_/images/news2.jpg"/></div>
     <div class="item"><img class="allw" src="/_/images/news3.jpg"/></div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
   
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
   
    <span class="sr-only">Next</span>
  </a>
</div>
         </div>

          
             <div class="row pt15">
                <div class="col-md-12">
                  <h3 class="glod">移民項目介紹</h3>
                </div>

            </div>
            <div class="row" style="margin-top:-15px;">
              <hr class="yellow-lines" />
              <div class="col-md-12">
               <?php echo $system['ab_pro']?>
              </div>
            </div>

   		 </div>

    </div>

 
<?php require_once 'footer.php' ?>
