<?php
/*
* Template - Portfolio post
* Version: 1.4.6
*/
 $miex_redux_demo = get_option('redux_demo');
 get_header(); ?>
	<section class="wrap section-padding">
		<div id="primary" class="content-area">
			<div id="container" class="<?php if ( 'twentyfourteen' == get_stylesheet() || 'twentytwelve' == get_stylesheet() ) echo 'site-content'; ?> site-main">

				<div id="content" class="row hentry">
					<div class="breadcrumbs home_page_title entry-header">
						<?php prtfl_post_template_title(); ?>
					</div>
					<div class="col">
					<?php do_action( 'bwsplgns_display_pdf_print_buttons', 'top' );
					/* Display template content */
					echo prtfl_post_get_content_new();

					do_action( 'bwsplgns_display_pdf_print_buttons', 'bottom' ); ?>
					</div>

				</div><!-- #content -->
				
			</div><!-- #container -->
		</div><!-- .content-area -->
	</section><!-- .wrap -->
<?php get_footer(); ?>