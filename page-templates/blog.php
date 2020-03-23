<?php

/*

 * Template Name: Blog Template

 * Description: A Page Template with a Page Builder design.

 */

 $miex_redux_demo = get_option('redux_demo');

get_header(); ?>

<div class="bg-overlay"></div>
<div class="blog-banar" style ="background: transparent url(<?php the_post_thumbnail_url( '1536x1536' )?>) center center/cover no-repeat local;"><h1><?php the_title(); ?></h1></div>

        <!-- start blog-main-content -->

        <section class="blog-main-content section-padding">
`
            <div class="container">

                <div class="row">

                    <div class="col col-md-8">

                        <div class="blog-grids">

                         <?php $args = array(    
                            'paged' => $paged,
                            'post_type' => 'post',
                            'order_post' => 'ASC'
                            );
                        $wp_query = new WP_Query($args);
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

                                <div class="entry-media">

                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>

                                </div>

                              <?php } ?>

                                <div class="entry-title-meta">

                                    <ul class="entry-meta">

                                        <li><a href="#"><?php the_time(get_option( 'date_format' ));?></a></li>

                                        <li><a href="#"><i class="fa fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'miex'), 

                              esc_html__('1 Comment', 'miex'), esc_html__('% Comments', 'miex') ); ?></a></li>

                                        <li><i class="fa fa-tag"></i> <?php echo get_the_tag_list($before = '', $sep = ', ', $after = '', $id = 0 ); ?></li>

                                    </ul>

                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                                </div>

                                <div class="entry-body">

                                    <p><?php if(isset($miex_redux_demo['blog_excerpt'])){?>

                                <?php echo esc_attr(miex_excerpt($miex_redux_demo['blog_excerpt'])); ?>

                                <?php }else{?>

                                <?php echo esc_attr(miex_excerpt(50)); 

                                }

                                ?></p>

                                    <a href="<?php the_permalink();?>" class="read-more"><?php if(isset($miex_redux_demo['read_more'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($miex_redux_demo['read_more']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'read more', 'miex' );

                                    }

                                    ?></a>

                                </div>

                            </div>

                          <?php endwhile; ?>

                            

                          <div class="pagination-wrapper">

                              <?php miex_pagination();?>

                          </div>                        

                        </div>

                      </div>

                    <div class="col col-md-4">

                        <div class="blog-sidebar">

                            <?php get_sidebar();?>

                        </div>                        

                    </div>

              </div>

          </div> <!-- end container -->

      </section>

        <!-- end blog-main-content -->       





<?php

get_footer();

?>