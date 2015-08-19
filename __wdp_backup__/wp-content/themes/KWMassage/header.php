<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

 

<link href="<?php bloginfo( 'template_url' ); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo( 'template_url' ); ?>/css/form.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo( 'template_url' ); ?>/css/colorbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/custom-form-elements.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/colorbox.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$(".video").colorbox({iframe:true, innerWidth:425, innerHeight:344});
		});
	</script>
<script type="text/javascript">
jQuery( document ).ready( function ( $ ) {

$('ul.menu li:last').addClass( 'last' );
$('ul.menu1 li:first').addClass( 'first' );
});



</script>
<script type="text/javascript">

  $(document).ready(function() {

 /* $('#txt1').focus(function() {

   if(this.value=='Name')
    this.value='';
  });

  $('#txt1').blur(function() {

   if(this.value=='')
    this.value='Name';
  });

  $('#txt2').focus(function() {

   if(this.value=='Email')
    this.value='';
  });

  $('#txt2').blur(function() {

   if(this.value=='')
    this.value='Email';
  });

  $('#txt3').focus(function() {

   if(this.value=='Contact Number')
    this.value='';
  });

  $('#txt3').blur(function() {

   if(this.value=='')
    this.value='Contact Number';
  });

   $('#txt4').focus(function() {

   if(this.value=='Your message')
    this.value='';
  });

  $('#txt4').blur(function() {

   if(this.value=='')
    this.value='Your message';
  });
  */

  $('#clear').click(function() {

  document.getElementById('txt1').value='';
  document.getElementById('txt2').value='';
  document.getElementById('txt3').value='';
  document.getElementById('txt4').value='';
  

  });



  });

</script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/iepngfix_tilebg.js"></script>
<style type="text/css">
img, div, input { behavior: url("<?php bloginfo( 'template_url' ); ?>/iepngfix.htc") }
</style>

</head>

<body>

<!-- start header -->
<div id="header">
<!-- header top -->
<div class="header_wrap">
<!-- logo -->
<div id="logo"><a href="<?php bloginfo( 'url' ); ?>" title="Welcome To KW: Kitchener / Waterloo Massage Therapy"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="KW: Kitchener / Waterloo Massage Therapy" /></a></div>
<!-- logo -->
<!-- tagline -->
<div id="tagline"><span>Kitchener / Waterloo Massage Therapy</span></div>
<!-- tagline -->
<!-- contact bar -->
<div id="contactbar">
<span>Telephone: <strong>519-745-4112</strong></span>
<span>Email:<strong><a href="#">jeremy@kwmassage.com</a></strong></span>

</div>
<!-- contact bar -->

<div class="clear">&nbsp;</div>
</div>
<!-- header top -->
<!-- navigation -->
<div id="navigation">
<div class="header_wrap">
<?php //wp_nav_menu( array('menu' => 'Main Menu' )); ?>
<?php wp_nav_menu( array('menu' => 'Main Menu','menu_class'=> 'main-navigation')); ?>
</div>
</div>
<!-- navigation -->
</div>
<!-- end header -->
