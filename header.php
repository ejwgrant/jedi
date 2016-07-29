<!DOCTYPE html>
<html lang="en-GB">
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="Description" content="Home of DJ Jedi and Jedi Recordings. Old skool hardcore and Jungle mixes, plus vinyl releases."/> 
	<meta name="KeyWords" content="DJ Jedi, Jedi Recordings, old skool, hardcore, oldskool, rave, 1991, 1992, 1993, 1994, 1995, raindance, jungle"/>
    <!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="<?= get_bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41655440-2', 'auto');
  ga('send', 'pageview');

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
</head>
<body>
	<!--[if lt IE 9]><p class="chromeframe">Your browser is out-dated. Please <a href="http://browsehappy.com/">upgrade to a modern browser.</a></p><![endif]-->
	<div id="header_wrap">
        <header class="clearfix">
            <a href="/" title="DJ Jedi - Home"><img src="<?= get_bloginfo('template_directory'); ?>/images/jedi-logo.png" class="logo" alt="DJ Jedi logo" width="178" height="90" /></a>
			<a class="menu_icon" title="menu">Menu</a>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</nav>
			<div id="carousel" class="clearfix">
				<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail(array(1000,390));
					} else {
							if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();  
					}
				?>
			</div>
		</header>
	</div>