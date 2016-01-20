<?php
require_once 'init.php';

?>


<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title><?php echo $system['site_title'];?></title>

    <!-- Bootstrap -->
    <link href="/_/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/_/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="index-header">
       <nav class="navbar navbar-default">
          <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <a class="navbar-brand" href="#"><img src="/_/images/logo.png"></a>
            </div>

          </div><!-- /.container -->
       </nav>
    </div>

    <div class="index-content">
   		<div class="container">
            <div class="row pt15">
            	<div class="col-md-6">
            		<a href="project.php"><img class="allw hidden-sm hidden-xs" src="/_/images/index1.jpg">
                           <img class="allw visible-sm visible-xs" src="/_/images/index1s.jpg">
                </a>

            	</div>
            	
            			<div class="col-md-3 spt20">
            				<a href="propertylist.php"><img class="allw" src="/_/images/index2.jpg"></a>
            			</div>

            			<div class="col-md-3 spt20">
            				<a href="page.php?id=3"><img class="allw" src="/_/images/index3.jpg"></a>
            			</div>

            			<div class="col-md-3 pt20">
            				<a href="page.php?id=2"><img class="allw" src="/_/images/index4.jpg"></a>
            			</div>

            			<div class="col-md-3 pt20">
            				<a href="page.php?id=1"><img class="allw" src="/_/images/index5.jpg"></a>
            			</div>
            		</div>

   		</div>

    </div>
    <div class="index-footer pt15">
        <div class="container">
          <div class="row">
            <div class="col-md-8"><p>Copyright © 2015 年 基盛移民顾问有限公司 版权所有，不得转载</p></div>
            <div class="col-md-4 text-right hidden-sm hidden-xs"><p>Design by <a href="http://www.c-m.hk">Creation Media</a></p></div>
          </div>
        </div>
    </div>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>



