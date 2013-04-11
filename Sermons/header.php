<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/ie.css" type="text/css" />
<![endif]-->
<!--[if lte IE 6]>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/ie6.css" type="text/css" />
<script type="text/javascript">
  blankImg = "<?php bloginfo('template_directory') ?>/images/blank.gif";
</script>
<style type="text/css">
  .png {
      behavior: url(<?php bloginfo('template_directory') ?>/iepngfix.htc);
  }
</style>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<div id="page">



<div id="header" class="png" >
  <div id="headerchurchofchrist">
    <h1><a href="http://www.mvchurchofchrist.org/">
	<img class="png" src="<?php bloginfo('template_directory')?>/images/MAIN_LOGO_ICON.png" alt="<?php bloginfo('name'); ?>" />
    </a></h1>
  </div>
<div id="headersermons">
    <h1><a href="<?php echo get_option('home'); ?>/">
	<img class="png" src="<?php bloginfo('template_directory')?>/images/SERMONS_ICON.png" alt="<?php bloginfo('name'); ?>" />
    </a></h1>
  </div>
</div>





<hr />
<div id="outer_body">
   <?php include (TEMPLATEPATH . '/menubar.php'); ?>
