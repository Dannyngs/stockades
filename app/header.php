<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page title -->
    <title><?php echo $system['site_title'] ?></title>

     <!-- build:css({.tmp,app}) /_/css/lib/html5bp.css -->
   <link href="/_/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="/_/css/bootstrap-select.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- endbuild -->
    
   <!-- build:css({.tmp,app}) /_/css/site-styles.css -->
        
     <link href="/_/css/style.css" rel="stylesheet">
       

        <!-- endbuild -->
     
    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    
     <!-- build:js /_/js/lib/modernizr/modernizr.js -->
        <!-- endbuild -->
    <!--[if lt IE 9 ]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <![endif]-->

    <!-- IE Fix for HTML5 Tags -->
    
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

   
</head>
<body>
 <div class="header">
       <nav class="navbar navbar-default">
          <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
               <a class="navbar-brand hidden-xs " href="index.php"><img class="allw" src="/_/images/logo.png"></a>
               <a class="navbar-brand visible-xs" href="index.php"><img width="220" src="/_/images/logo.png"></a>
            </div>
            <div class="navbar-right pt15 hidden-xs">
              <div class="phone">
                <div><p><span></span><?php echo $system['office'] ?></p></div>
                
              </div>
              <div class="whatsapp">
                <div><p><span></span><?php echo $system['whatsapp'] ?></p></div>
              </div>
            </div>

          </div><!-- /.container -->

           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="container">
              <?php require_once 'nav.php' ?>
        </div>
    </div>

       </nav>
       <div class="container">
         <div class="row">
             
          
           <?php  foreach($projects as $flag)          
{?>     
	 <div class="col-md-14-1 col-xs-14-2"><a href="project-del.php?id=<?php echo $flag['id']?>"><img class="allw" src="<?php echo $imgurl.$flag['flag'];?>"><p class="text-center"><?php echo $flag['title'];?></p></a></div>
		
<?php
    }
   
    ?>
  
           
         </div>
       </div>

    </div>


   

