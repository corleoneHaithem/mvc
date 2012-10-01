<!doctype html>  
   <head>
   <meta charset="UTF-8">
   <title><?php echo $this->title ?></title>
   <link rel="icon" href="/var/www/mini-mvc/views/layout/freshideas/images/favicon.gif" type="image/x-icon"/>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->

   <link rel="shortcut icon" href="images/favicon.gif" type="image/x-icon"/> 
   <?php $this->loadStyle('styles') ?>
   </head>
   <body>

   <!--start container-->
   <div id="container">

   <!--start header-->
   <header>

   <!--start logo-->
   <a href="#" id="logo"><?php $this->loadImg('logo.png') ?></a>    
   <!--end logo-->

   <!--start menu-->

   <nav>
   <ul>
   <li><a href="#" class="current">Home</a></li>
   <li><a href="#">About us</a></li>
   <li><a href="#">Services</a></li>
   <li><a href="#">Portfolio</a></li>
   <li><a href="#">News</a></li>
   <li><a href="#">Contact</a></li>
   </ul>
   </nav>
   <!--end menu-->

   <!--end header-->
   </header>

