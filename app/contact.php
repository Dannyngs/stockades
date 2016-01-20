<?php
require_once 'init.php';

?>
<?php require_once 'header.php' ?>

<div class="content">
   		<div class="container">

            <div class="row pt15">
            
            	<img class="allw" src="images/about1.jpg">
            	
            			<div class="col-md-12 pt20">
            				<h4 class="glod">免費評估</h4>
                   
            			</div>
            		</div>
                <div class="row pt15">
                 <form class="form-horizontal">
                  <div class="col-md-4">
                     <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-3"><span class="glod">*</span>姓名</label>

                       <div class="col-md-8">
                       <input type="text" class="form-control" id=""></div>
                     </div>

                     <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-3"><span class="glod">*</span>手機</label>
                       <div class="col-md-8">
                       <input type="text" class="form-control" id=""></div>
                     </div>

                     <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-3">微信</label>
                       <div class="col-md-8">
                       <input type="text" class="form-control" id=""></div>
                     </div>

                     <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-3">郵箱</label>
                       <div class="col-md-8">
                       <input type="text" class="form-control" id=""></div>
                     </div>

                     <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-3">QQ</label>
                       <div class="col-md-8">
                       <input type="text" class="form-control" id=""></div>
                     </div>

                  </div>

                  <div class="col-md-4">
                     <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-4">稱謂</label>
                       <div class="col-md-8">

                        <select class="form-control selectpicker">
                           <option>先生</option>
                           <option>小姐</option>
                           
                         </select>
                     </div>
                   </div>

                    <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-4">意向國家</label>
                       <div class="col-md-8">
                         <select class="form-control selectpicker">
                           <option>先生</option>
                           <option>小姐</option>
                           
                         </select>
                     </div>
                   </div>

                    <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-4">英語能力</label>
                       <div class="col-md-8">
                         <select class="form-control selectpicker">
                           <option>先生</option>
                           <option>小姐</option>
                           
                         </select>
                     </div>
                   </div>

                    <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-4">移民意向</label>
                       <div class="col-md-8">
                         <select class="form-control selectpicker">
                           <option>先生</option>
                           <option>小姐</option>
                           
                         </select>
                     </div>
                   </div>

                    <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-4">所在地區</label>
                       <div class="col-md-8">
                         <select class="form-control selectpicker">
                           <option>先生</option>
                           <option>小姐</option>
                           
                         </select>
                     </div>
                   </div>

                  </div>

                  <div class="col-md-4">
                   <div class="form-group">
                       <label for="exampleInputName2" class="control-label col-md-3">備註</label>
                       <div class="col-md-9">
                        <textarea class="form-control" rows="3"></textarea>
                     </div>
                   
                  </div>
                  <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-default">Submit</button>
                     </div>
                   </div>
 
                  </div>

                 </form>
                </div>

                 <div class="row pt15">
                  <div class="col-md-12 pt20">
                    <h4 class="glod">聯絡我們</h4>
                    <p class="mb0"><span class="add" aria-hidden="true"></span><b>Address：</b><?php echo $system['address'] ?></p>

                    <p class="mb0"><span class="tel" aria-hidden="true"></span><b>Office:</b> <?php echo $system['office'] ?></p>

                    <p class="mb0"><span class="zo" aria-hidden="true"></span><b>Cell:</b> <?php echo $system['cell'] ?></p>

                    <p class="mb0"><span class="zo" aria-hidden="true"></span><b>Fax:</b> <?php echo $system['fax'] ?></p>
                    <p class="mb0"><span class="mail" aria-hidden="true"></span><b>e-mail:</b><a class="black" href="mailto:<?php echo $system['emai'] ?>"> <?php echo $system['emai'] ?></a> </p>

                    <p><a class="fb" href="<?php echo $system['facebook'] ?>"></a></p>
                  </div>

                </div>


   		</div>

    </div>
   
<?php require_once 'footer.php' ?>