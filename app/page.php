<?php
require_once 'init.php';



              
    $rs = $db->query("SELECT* FROM T_Page where id = ".$_GET['id']);
    $page = $rs->fetch();   
 

?>

<?php require_once 'header.php' ?>

 <div class="content">
   		<div class="container">

            <div class="row pt15">
            
            	<img class="allw" src="<?php echo $imgurl.$page['banner'];?>">
            			


            			<div class="col-md-12 pt20">
                            <?php echo $page['content'];?>
<!--
            				<h3 class="glod text-center">基盛移民顧問有限公司</h3>
                    <h4 class="glod text-center">Stockades Immigration Consultant Company Limited</h4>
                    <p>基盛移民顾问有限公司由大盛集团与其他股东创办。集团旗下包括证券投资、保险、财务、地产、财富管理、投资移民等业务；拥有丰富经验和完善市场脉络，加上信誉良好与忠诚作风，以及多元化项目，在证券融资、地产物业投资、按揭贷款、投资移民，以及人寿及投资相连保险皆表现杰出。</p>
                    <p>豐盛的生活除了讓自己和家人舒適，同時亦應回饋社會，協助有需要的人士和推動社會的和諧發展。大盛集團一向傾其力，把這種精神推廣至社會各界。曾經被大盛捐助的團體有包括樂施會、無國界醫生、智樂兒童遊樂協會及宣明會等；更連續五年榮獲社聯頒發的「商界展關懷」標誌。</p>
                    <p>2008年四川受大地震影響，令無數災民流離失所。集團除了即時捐款外，亦鼓勵員工、親友與客戶積極參與支持救援工作。公司員工與親友踴躍參加樂施會的「樂施米義賣大行動」，更曾經舉辦「一加一添愛心四川大地震」募捐行動，為災區兒童提供康樂及心靈治療的服務行動。</p>
-->
            			</div>
            		</div>

   		</div>

    </div>


 
<?php require_once 'footer.php' ?>
