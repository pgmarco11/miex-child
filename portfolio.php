<?php
/*
Template Name: Portfolio template
* Version: 1.4.6
*/
 $miex_redux_demo = get_option('redux_demo');

get_header(); ?>

<div class="bg-overlay"></div>
<div class="blog-banar" style ="background: transparent url(<?php the_post_thumbnail_url( '1536x1536' )?>) center center/cover no-repeat local;"><h1><?php the_title(); ?></h1></div>
        <section class="wrap full-main-content section-padding">
            <div id="primary" class="container content-area">
            	
			<div id="container" class="<?php if ( 'twentyfourteen' == get_stylesheet() || 'twentytwelve' == get_stylesheet() ) echo 'site-content'; ?> site-main">
				<div id="content" class="hentry">
					<?php
					/* Get arguments for WP Query */
					$args = prtfl_get_query_args();

					do_action( 'bwsplgns_display_pdf_print_buttons', 'top' );

					$second_query = new WP_Query( $args );

					/* Display template content */
					echo prtfl_get_content_new( $second_query );

					wp_reset_query();

					do_action( 'bwsplgns_display_pdf_print_buttons', 'bottom' ); ?>
				</div><!-- #content -->

				<!-- Portfolio tmplate pagination -->
				<?php prtfl_pro_pagination( $second_query, $args ); ?>

				<?php comments_template(); ?>
			</div><!-- #container -->
		</div><!-- .content-area -->
	</section><!-- .wrap -->
<?php get_footer(); ?>