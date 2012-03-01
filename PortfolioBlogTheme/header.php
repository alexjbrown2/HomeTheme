<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="The blog of Alex Brown. Web Designer and Front-End Developer. For news and tutorials about the ever-growing world of web creation." />
 	<link href='http://fonts.googleapis.com/css?family=Carter+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    
 	<link href="http://blog.alexbrownwebdesign.com/prettify/prettify.css" type="text/css" rel="stylesheet" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
 	

    
 	
  	<?php 
	function query_script(){
	
	 wp_enqueue_script('jquery');}
	 
	 add_action('wp_enqueue_scripts', 'query_script');
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js" type="text/javascript"></script>
    <?php
function my_scripts_method() {
   // register your script location, dependencies and version
   wp_register_script('script1',
       get_template_directory_uri() . '/blogindex.js',
       array('jquery'),
       ('1.0') );
   // enqueue the script
   wp_enqueue_script('script1');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');
?>
	<script src="http://blog.alexbrownwebdesign.com/prettify/prettify.js" type="text/javascript"></script>
    
<?php wp_head(); ?>

								

</head>
<body onload="prettyPrint()">
<div id="wrapper" class="hfeed">
<div id="brandingwrap">
<div id="branding">
		<div id="blog-title">
			<a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><img class="headerpic" src="http://blog.alexbrownwebdesign.com/blog-logo2.png" /></a>
		</div><!--blog-title-->
             <div id="searchbox">
			 <?php if ( is_sidebar_active('header_widget_area') ) : ?>
      		<div class="xoxo">
                <?php dynamic_sidebar('header_widget_area'); ?>
            </div><!--xoxo-->
			<?php endif; ?>
            </div>
            <!--Other header stuff-->
                <a href="http://twitter.com/#!/AlexJBrown2"><div id="twitter"></div></a>
                <a href="http://blog.alexbrownwebdesign.com/feed/"><div id="rss"></div></a>
				<img class="me" src="http://blog.alexbrownwebdesign.com/mecartoon.png" height="150px" width="150px" />
                
                
			<?php if ( is_home() || is_front_page() ) { ?>
                    <h1 id="blog-description"><?php bloginfo( 'description' ) ?></h1>
			<?php } else { ?>
                    <h2 id="blog-description"><?php bloginfo( 'description' ) ?></h2>
			<?php } ?>
            </div><!-- #branding -->
</div><!--brandingwrap-->
            <div id="access">
            <div class="skip-link">
            	<a href="#content" title="<?php _e( 'Skip to content', 'your-theme' ) ?>"><?php _e( 'Skip to content', 'your-theme' ) ?></a>
            </div><!--skiplink-->
            <?php wp_page_menu( 'sort_column=menu_order' ); ?>
            
            </div><!-- #access -->
   
 
    <div id="main">