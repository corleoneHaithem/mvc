<!DOCTYPE HTML>
<html>

<head>
  <title>CSS3_B&W</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <?php $this->loadStyle('style') ?>
  <!-- modernizr enables HTML5 elements and feature detects -->
 <?php $this->loadJs('modernizr-1.5.min') ?>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo"><h1>CSS3_<a href="#">B&amp;W</a></h1></div>
      <nav>
        <ul class="lavaLampWithImage" id="lava_menu">
          <li class="current"><a href="index.html">home</a></li>
          <li><a href="examples.html">examples</a></li>
          <li><a href="page.html">a page</a></li>
          <li><a href="another_page.html">another page</a></li>
          <li><a href="contact.php">contact</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <ul id="images">
        <li><?php $this->loadImg('1') ?></li>
        <li><?php $this->loadImg('2') ?></li>
        <li><?php $this->loadImg('3') ?></li>
        <li><?php $this->loadImg('4') ?></li>
        <li><?php $this->loadImg('5') ?></li>
        <li><?php $this->loadImg('6') ?></li>
      </ul>
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New Website Launched</h4>
          <h5>January 1st, 2012</h5>
          <p>2012 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        </div>
        <div class="sidebar">
          <h3>Useful Links</h3>
          <ul>
            <li><a href="#">First Link</a></li>
            <li><a href="#">Another Link</a></li>
            <li><a href="#">And Another</a></li>
            <li><a href="#">Last One</a></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>Welcome to CSS3_B&W</h1>
        <p>This standards compliant, fixed width website template is released as an 'open source' design (under a <a href="http://creativecommons.org/licenses/by/3.0">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to use it for anything you want (including modifying and amending it). All I ask is that you leave the 'design from css3templates.co.uk' link in the footer of the template.</p>
        <p>The template uses a lavalamp menu (based on jQuery) from <a href="http://www.gmarwaha.com/blog/2007/08/23/lavalamp-for-jquery-lovers/">here</a>. All of the images were shot by me - use as you wish.</p>
        <h2>Browser Compatibility</h2>
        <p>This template has been tested in the following browsers:</p>
        <ul>
          <li>Internet Explorer 8</li>
          <li>Internet Explorer 7</li>
          <li>FireFox 10</li>
          <li>Google Chrome 17</li>
        </ul>
      </div>
    </div>
    <footer>
      <p><a href="index.html">home</a> | <a href="about.html">about me</a> | <a href="portfolio.html">my portfolio</a> | <a href="blog.html">blog</a> | <a href="contact.php">contact</a></p>
      <p>&copy; 2012 CSS3_B&W. All Rights Reserved. | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <?php $this->loadJs('jquery.min');?>
  <?php $this->loadJs('jquery.easing.min')?>
  <?php $this->loadJs('jquery.lavalamp.min') ?>
  <?php $this->loadJs('jquery.kwicks-1.5.1')?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
</body>
</html>