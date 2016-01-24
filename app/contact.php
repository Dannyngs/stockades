<?php
require_once 'init.php';

?>
<?php require_once 'header.php' ?>

<div class="content">
   		<div class="container">

            <div class="row pt15">
            
<iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d230.65015610799287!2d114.19869399536584!3d22.338426122567938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340406da0d03fdf1%3A0x839ee544302c0379!2z6aaZ5riv5paw6JKy5bSX5aSn5pyJ6KGXMTTomZ_kuIfmmJ_lt6XkuJrlpKfljqY3MDU!5e0!3m2!1szh-CN!2scn!4v1453391062300" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                
            			<div class="col-md-12 pt20">
            				<h4 class="glod">免費評估</h4>
                   
            			</div>
            		</div>
                <div class="row pt15">
                 <form class="form-horizontal">
                  <div class="col-md-4">
                     <div class="form-group">
                       <label class="control-label col-md-3"><span class="glod">*</span>姓名</label>

                       <div class="col-md-8">
                       <input id="name" type="text" class="form-control" ></div>
                     </div>

                     <div class="form-group">
                       <label class="control-label col-md-3"><span class="glod">*</span>手機</label>
                       <div class="col-md-8">
                       <input id="phone" type="text" class="form-control" id=""></div>
                     </div>

                     <div class="form-group">
                       <label class="control-label col-md-3">微信</label>
                       <div class="col-md-8">
                       <input type="text" class="form-control" id="weico"></div>
                     </div>

                     <div class="form-group">
                       <label class="control-label col-md-3">郵箱</label>
                       <div class="col-md-8">
                       <input type="text" class="form-control" id="email"></div>
                     </div>

                     <div class="form-group">
                       <label class="control-label col-md-3">QQ</label>
                       <div class="col-md-8">
                       <input type="text" class="form-control" id="qq"></div>
                     </div>

                  </div>

                  <div class="col-md-4">
                     <div class="form-group">
                       <label class="control-label col-md-4">稱謂</label>
                       <div class="col-md-8">

                        <select id="sex" class="form-control selectpicker">
                           <option value="0">先生</option>
                           <option value="1">小姐</option>
                           
                         </select>
                     </div>
                   </div>

                    <div class="form-group">
                       <label class="control-label col-md-4">意向國家</label>
                       <div class="col-md-8">
                         <select id="contry" class="form-control selectpicker">
                           <option >香港</option>
                           <option>美國</option>
                             <option>澳大利亞</option>
                           
                         </select>
                     </div>
                   </div>

                    <div class="form-group">
                       <label class="control-label col-md-4">英語能力</label>
                       <div class="col-md-8">
                         <select class="form-control selectpicker">
                           <option>先生</option>
                           <option>小姐</option>
                           
                         </select>
                     </div>
                   </div>

                    <div class="form-group">
                       <label class="control-label col-md-4">移民意向</label>
                       <div class="col-md-8">
                         <select class="form-control selectpicker">
                           <option>先生</option>
                           <option>小姐</option>
                           
                         </select>
                     </div>
                   </div>

                    <div class="form-group">
                       <label class="control-label col-md-4">所在地區</label>
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
                       <label class="control-label col-md-3">備註</label>
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