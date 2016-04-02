<!DOCTYPE HTML>
<html>
<head>
<title><?php echo get_bloginfo('name');?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
<?php wp_head(); ?>
</head>

<body>
<div id="wrap">
<div id="container" class="group">
<!--Header - Name of Item Here-->
<header class="group">
  <h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Director" /></h1>
  <div class="searchbar">
    <form name="search" method="get" action"/">
      <input type="text" name="s" value="Search…" />
      <input type="submit" name="submit" value="Search!" />
    </form>
  </div>
  <nav>
<?php /*?>    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Directory</a></li>
      <li><a href="#">Blog</a></li>
    </ul><?php */?>
    <?php wp_nav_menu(array('theme_locations'=>'menu_header'));?>
  </nav>
</header>

<!-- End Header --> 