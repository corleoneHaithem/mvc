<!DOCTYPE HTML>
<html>

<head>
  <title><? echo $this->post['title'] ?></title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <?php $this->loadStyle('style') ?>
  <?php $this->loadStyle('colour') ?>
  <!-- modernizr enables HTML5 elements and feature detects -->
  <?php $this->loadJs('modernizr-1.5.min') ?>
</head>

<body>
  <div id="main">

    <!-- begin header -->
    <header>
      <div id="logo"><h1><?php echo $this->post['title'] ?><a href="#"><?php echo $this->post['subject'] ?>
              </a><?php echo $this->post['content'] ?></h1></div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.html">home</a></li>
          <li><a href="about.html">about me</a></li>
          <li><a href="#">my portfolio</a>
            <ul>
              <li><a href="portfolio_one.html">portfolio_one</a></li>
              <li><a href="portfolio_two.html">portfolio_two</a></li>
            </ul>
          </li>
          <li><a href="blog.html">blog</a></li>
          <li><a href="contact.php">contact</a></li>
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <ul class="slideshow">
        <li class="show"><?php $this->loadImg('home_1.jpg') ?></li>
        <li><?php $this->loadImg('home_2.jpg') ?></li>
        <li><li><?php $this->loadImg('home_3.jpg') ?></li></li>
      </ul>
    </div>
    <!-- end content -->

    <!-- begin footer -->
    <footer>
      <p>Copyright &copy; 2012 PhotoArtWork2_reverse. All Rights Reserved. <a href="http://www.css3templates.co.uk">Design from css3templates.co.uk</a>.</p>
      <p><?php $this->loadImg('twitter.png') ?>&nbsp;<?php $this->loadImg('facebook.png') ?>&nbsp;<?php $this->loadImg('rss.png') ?></p>
    </footer>
    <!-- end footer -->

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <?php $this->loadJs('jquery.min') ?>
  <?php $this->loadJs('jquery.easing-sooper') ?>
  <?php $this->loadJs('jquery.sooperfish') ?>
  <?php $this->loadJs('image_fade') ?>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
