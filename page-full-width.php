<?php

/*

 * Template Name: Full Width Template

 * Description: A Full Page Template with a Page Builder design.

 */

 $miex_redux_demo = get_option('redux_demo');

get_header(); ?>

<div class="bg-overlay"></div>
<div class="blog-banar" style ="background: transparent url(<?php the_post_thumbnail_url( '1536x1536' )?>) center center/cover no-repeat local;"><h1><?php the_title(); ?></h1></div>

        <!-- start blog-main-content -->

        <section class="full-main-content section-padding">
`
            <div class="container-fluid">

                <div class="row">

                    <div class="col">

                        <div class="blog-grids">

                    <?php
                        while (have_posts()): the_post(); 
                    ?>

                          <?php $single_video = get_post_meta(get_the_ID(),'_cmb_single_video', true); ?>

                          <?php if ( has_post_format('video') ) { ?>

                            <div class="grid video-post">

                                <div class="entry-media">

                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>

                                    <div class="video-holder">

                                        <a href="<?php echo esc_url($single_video);?>" class="video-btn" data-type="iframe">

                                            <i class="fa fa-play"></i>

                                        </a>

                                    </div>                                    

                                </div>

                              <?php } else { ?>

                            <div class="grid">

                              <?php } ?>

                                <div class="entry-body">

                                    <?php the_content(); ?>


                                </div>

                            </div>

                          <?php endwhile; ?>
                            
                    

                        </div>

                      </div>



              </div>

          </div> <!-- end container -->

      </section>

        <!-- end main-content -->       





<?php

get_footer();

?>