<?php

/**
 * Display template content
 * @return void
 */
if ( function_exists( 'prtfl_get_content' ) ) {
    function prtfl_get_content_new( $second_query ) {
        global $post, $prtfl_options;

        $request = $second_query->request;
        $count_portfolio_row_block = 0;
        $prtfl_widht = 99 / $prtfl_options['custom_portfolio_row_count'];

        if( 1 < $prtfl_options['custom_portfolio_row_count']  ){
            $prtfl_read_more = 'style="float:left"';
        }else{
            $prtfl_read_more = "";
        }

        if ( ! empty( $post ) && ! empty( $post->post_content ) ) {
            $page_content = $post->post_content;
            if ( function_exists( 'mltlngg_the_content_filter' ) ) $page_content = mltlngg_the_content_filter( $page_content );
            /* dublicate filter 'the_content' - as we couldnt use it */
            if ( function_exists( 'wptexturize' ) ) {
                $page_content = wptexturize( $page_content );
            }
            if ( function_exists( 'convert_smilies' ) ) {
                $page_content = convert_smilies( $page_content );
            }
            if ( function_exists( 'wpautop' ) ) {
                $page_content = wpautop( $page_content );
            }
            if ( function_exists( 'shortcode_unautop' ) ) {
                $page_content = shortcode_unautop( $page_content );
            }
            if ( function_exists( 'prepend_attachment' ) ) {
                $page_content = prepend_attachment( $page_content );
            }
            if ( function_exists( 'wp_make_content_images_responsive' ) ) {
                $page_content = wp_make_content_images_responsive( $page_content );
            }
            if ( function_exists( 'do_shortcode' ) ) {
                $page_content = do_shortcode( $page_content ); 
            } ?>
            <div class="portfolio_content entry-content">
                <div class="entry"><?php echo $page_content; ?></div>
            </div>
        <?php }


        if ( $second_query->have_posts() ) {
            while ( $second_query->have_posts() ) {
                $second_query->the_post();
                if ( $count_portfolio_row_block % $prtfl_options['custom_portfolio_row_count'] == 0 ) {?>
                    <div class="portfolio_row_count"><?php
                }?>
                <div id="portfolio_row_count_block" class="portfolio_row_count_block" style="width: <?php echo $prtfl_widht ?>%">
                <div class="portfolio_content <?php if ( 'twentyfourteen' == get_stylesheet() || 'twentythirteen' == get_stylesheet() || 'twentytwelve' == get_stylesheet() ) echo 'entry-content'; ?>">
                    <div class="entry">
                        <?php $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                        $image          = wp_get_attachment_image_src( $post_thumbnail_id, 'logo-small' );
                        $post_meta      = get_post_meta( $post->ID, 'prtfl_information', true );

                        $short_descr = isset( $post_meta['_prtfl_short_descr'] ) ? $post_meta['_prtfl_short_descr'] : '';
                        if ( empty( $short_descr ) ) {
                            $short_descr = get_the_excerpt();
                        }
                        $title = get_the_title();
                        if ( empty( $title ) ) {
                            $title = '(' . __( 'No title', 'portfolio' ) . ')';
                        }
                        $permalink = get_permalink();
                        ?>
                        <!--<div class="item_title">
                                    <h2>
                                        <a href="<?php echo $permalink; ?>" rel="bookmark"><?php echo $title; ?></a>
                                    </h2>
                        </div>
                        -->
                        <?php if ( ! empty( $image[0] ) ) {
                            /* get width and height for image_size_album */
                                $width  = absint( get_option( 'medium_large' . '_size_w' ) );
                                $height = absint( get_option( 'medium_large' . '_size_h' ) );

                            $image_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true ); ?>
                            <div class="portfolio_thumb">
                                <a rel="bookmark" href="<?php echo $permalink; ?>" title="<?php echo $title; ?>">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" <?php if ( $width ) echo 'width="' . $width . '"'; if ( $height ) echo 'height="' . $height . '"'; ?> style="<?php if ( $width ) echo 'width:' . $width . 'px;'; if ( $height ) echo 'height:' . $height . 'px;'; ?>" />
                                </a>
                            </div><!-- .portfolio_thumb -->
                        <?php } ?>
                        <div class="portfolio_short_content">
                            <ul>
                                
                                <?php
                                $user_id = get_current_user_id();

                                $date_compl = isset( $post_meta['_prtfl_date_compl'] ) ? $post_meta['_prtfl_date_compl'] : '';
                                if ( 1 == $prtfl_options['date_additional_field'] && ! empty( $date_compl ) ) { ?>
                                    <li>
                                    <p>
                                        <span class="lable"><?php echo '<b>' . $prtfl_options['date_text_field'] . '</b>'; ?></span> <?php echo $date_compl; ?>
                                    </p>
                                    </li>
                                <?php } 
                                $terms = wp_get_object_terms( $post->ID, 'portfolio_technologies' );
                                if ( 1 == $prtfl_options['technologies_additional_field'] && ! is_wp_error( $terms ) ) {
                                    if ( is_array( $terms ) && 0 < count( $terms ) ) { ?>
                                        <li>
                                            <div class="portfolio_terms">
                                                <?php if ( isset( $prtfl_options['technologies_text_field'] ) ) echo '<b>' . $prtfl_options['technologies_text_field'] . '&nbsp;</b>';
                                                $links = array();
                                                foreach ( $terms as $term ) {
                                                    $links[] = '<a href="' . get_term_link( $term->slug, 'portfolio_technologies' ) . '" title="' . sprintf( __( "View all projects in %s" ), $term->name ) . '" ' . '>' . $term->name . '</a>';
                                                }
                                                echo implode( ', ', $links ); ?>
                                            </div><!-- .portfolio_terms -->
                                        </li>
                                        <?php
                                    }
                                } ?>
                                </li>
                            </ul>

                                <?php                       

                                if ( 1 == $prtfl_options['shrdescription_additional_field'] ) { ?>
                                    <p> <?php echo $short_descr; ?></p>
                                <?php } 
                                $link = isset( $post_meta['_prtfl_link'] ) ? $post_meta['_prtfl_link'] : '';
                                if ( 1 == $prtfl_options['link_additional_field'] && ! empty( $link ) ) {

                                    if ( false !== parse_url( $link ) ) {
                                        if ( ( 0 == $user_id && 0 == $prtfl_options['link_additional_field_for_non_registered'] ) || 0 != $user_id ) { ?>
                                            <p><span class="lable"><?php echo '<b>' . $prtfl_options['link_text_field'] . '</b>'; ?></span> <a href="<?php echo $link; ?>"><?php echo $link; ?></a></p>
                                        <?php } else { ?>
                                            <p><span class="lable"><?php echo '<b>' . $prtfl_options['link_text_field'] . '</b>'; ?></span> <?php echo $link; ?></p>
                                        <?php }
                                    } else { ?>prtfl_options
                                        <p><span class="lable"><?php echo '<b>' . $prtfl_options['link_text_field'] . '</b>'; ?></span> <?php echo $link; ?></p>
                                    <?php }
                                }
                           ?>
                        </div><!-- .portfolio_short_content -->
                    </div><!-- .entry -->
                    <div class="entry_footer">
                        <div class="read_more" <?php echo $prtfl_read_more ?>>
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php _e( 'Read more', 'portfolio' ); ?></a>
                        </div><!-- .read_more -->
                        <?php ?>
                    </div><!-- .entry_footer -->
                </div><!-- .portfolio_content -->
                </div>
                <?php if ( ( $count_portfolio_row_block % $prtfl_options['custom_portfolio_row_count'] ) == ( $prtfl_options['custom_portfolio_row_count'] - 1 ) ) {?>
                    <div class="clear"></div>
                    </div><!-- .portfolio_row_count --><?php
                }
                $count_portfolio_row_block = $count_portfolio_row_block + 1;
            }
        }
        if ( 0 != $count_portfolio_row_block % $prtfl_options['custom_portfolio_row_count'] )  {
            ?></div><?php
        }
        ?>
       <div class="clear"></div><?php
    }
}

/**
 * Display post template content
 * @return void
 */
if ( function_exists( 'prtfl_post_get_content' ) ) {
    function prtfl_post_get_content_new() {
        global $post, $prtfl_options;

        while ( have_posts() ) : the_post(); ?>
            <article class="portfolio_content entry-content">
                <div class="entry">
                    <?php global $post;
                    $portfolio_options = get_option( 'prtfl_options' );
                    $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                    $image          = wp_get_attachment_image_src( $post_thumbnail_id, 'logo-small' );
                    $post_meta      = get_post_meta( $post->ID, 'prtfl_information', true );

                    if ( ! empty( $image[0] ) ) {
                        $image_large = wp_get_attachment_image_src( $post_thumbnail_id, 'logo' );
                        $image_desc = get_post( $post_thumbnail_id );
                        $image_desc = $image_desc->post_content;
                        /* get width and height for image_size_album */
                        if ( 'portfolio-thumb' != $prtfl_options['image_size_album'] ) {
                            $width  = absint( get_option( $prtfl_options['image_size_album'] . '_size_w' ) );
                            $height = absint( get_option( $prtfl_options['image_size_album'] . '_size_h' ) );
                        } else {
                            $width  = $prtfl_options['custom_size_px']['portfolio-thumb'][0];
                            $height = $prtfl_options['custom_size_px']['portfolio-thumb'][1];
                        }
                        $image_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true ); ?>
                        <div class="portfolio_thumb">
                            <a class="lightbox" data-fancybox="portfolio_fancybox" href="<?php echo $image_large[0]; ?>" title="<?php echo $image_desc; ?>">
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" <?php if ( $width ) echo 'width="' . $width . '"'; if ( $height ) echo 'height="' . $height . '"'; ?> />
                            </a>
                        </div><!-- .portfolio_thumb -->
                    <?php } ?>
                    <div class="portfolio_short_content">
                        <?php $date_compl   = isset( $post_meta['_prtfl_date_compl'] ) ? $post_meta['_prtfl_date_compl'] : '';
                        if ( 1 == $portfolio_options['date_additional_field'] && ! empty( $date_compl ) ) { ?>
                            <p>
                                <span class="lable"><?php echo '<b>' . $portfolio_options['date_text_field'] . '</b>'; ?></span> <?php echo $date_compl; ?>
                            </p>
                        <?php } 
                         
                         $terms = wp_get_object_terms( $post->ID, 'portfolio_technologies' );
                        if ( 1 == $portfolio_options['technologies_additional_field'] && ! ( empty( $terms ) || is_wp_error( $terms ) ) ) {
                                if ( is_array( $terms ) && 0 < count( $terms ) ) { ?>
                                    <div class="portfolio_terms">
                                    <ul>
                                        <?php if ( isset( $portfolio_options['technologies_text_field'] ) ) echo '<b>'. $portfolio_options['technologies_text_field'] . '&nbsp;</b>';
                                        $links = array();
                                        foreach ( $terms as $term ) {
                                            $links[] = '<li><a href="' . get_term_link( $term->slug, 'portfolio_technologies' ) . '" title="' . sprintf( __( "View all projects in %s" ), $term->name ) . '" ' . '>' . $term->name . '</a></li>';
                                        }
                                        echo implode( ', ', $links ); ?>
                                    </ul>
                                    </div><!-- .portfolio_terms -->
                                <?php }
                        }

                        $user_id = get_current_user_id();

                        if ( 0 != $user_id && $portfolio_options ) {
                        $executors_profile = wp_get_object_terms( $post->ID, 'portfolio_executor_profile' );
                            
                            if ( 1 == $portfolio_options['executor_additional_field'] && ! empty( $executors_profile ) ) { ?>
                                <p><span class="lable"><?php echo '<b>' . $portfolio_options['executor_text_field'] . '</b>'; ?></span>
                                <?php $count = 0;
                                foreach ( $executors_profile as $profile ) {
                                    if ( $count > 0 ) {
                                        echo ', ';
                                    } ?>
                                    <a href="<?php echo get_term_link( $profile->slug, 'portfolio_executor_profile' ); ?>" title="<?php echo $profile->name; ?> profile" target="_blank"><?php echo $profile->name; ?></a>
                                    <?php $count++;
                                } ?>
                                </p>
                            <?php }
                        }                        

                        $link = isset( $post_meta['_prtfl_link'] ) ? $post_meta['_prtfl_link'] : '';
                        if ( 1 == $portfolio_options['link_additional_field'] && ! empty( $link ) ) {

                            if ( false !== parse_url( $link ) ) { ?>
                                <?php if ( ( 0 == $user_id && 0 == $portfolio_options['link_additional_field_for_non_registered'] ) || 0 != $user_id ) { ?>
                                    <p><span class="lable"><?php echo '<b>'.  $portfolio_options['link_text_field'] . '</b>'; ?></span> <a href="<?php echo $link; ?>"><?php echo $link; ?></a></p>
                                <?php } else { ?>
                                    <p><span class="lable"><?php echo '<b>' . $portfolio_options['link_text_field'] . '</b>'; ?></span> <?php echo $link; ?></p>
                                <?php }
                            } else { ?>
                                <p><span class="lable"><?php echo '<b>' . $portfolio_options['link_text_field'] . '</b>'; ?></span> <?php echo $link; ?></p>
                            <?php }
                        }
                        if ( 1 == $portfolio_options['description_additional_field'] ) {
                            $full_descr = $post->post_content != "" ? $post->post_content : '';
                            if ( empty( $full_descr ) ){
                                $full_descr = isset( $post_meta['_prtfl_short_descr'] ) ? $post_meta['_prtfl_short_descr'] : '';
                            } else {
                                if ( function_exists( 'mltlngg_the_content_filter' ) ) {
                                    $full_descr = mltlngg_the_content_filter( $full_descr );
                                }
                                /* dublicate filter 'the_content' - as we couldnt use it */
                                if ( function_exists( 'wptexturize' ) ) {
                                    $full_descr = wptexturize( $full_descr );
                                }
                                if ( function_exists( 'convert_smilies' ) ) {
                                    $full_descr = convert_smilies( $full_descr );
                                }
                                if ( function_exists( 'wpautop' ) ) {
                                    $full_descr = wpautop( $full_descr );
                                }
                                if ( function_exists( 'shortcode_unautop' ) ) {
                                    $full_descr = shortcode_unautop( $full_descr );
                                }
                                if ( function_exists( 'prepend_attachment' ) ) {
                                    $full_descr = prepend_attachment( $full_descr );
                                }
                                if ( function_exists( 'wp_make_content_images_responsive' ) ) {
                                    $full_descr = wp_make_content_images_responsive( $full_descr );
                                }
                                if ( function_exists( 'do_shortcode' ) ) {
                                    $full_descr = do_shortcode( $full_descr );
                                }
                            }
                            if ( ! empty( $full_descr ) ) { ?>
                                <div style = "clear: both;" class="description"><p><?php echo $full_descr; ?></p></div>
                            <?php }
                        }

                        if ( 0 != $user_id && $portfolio_options ) {
                            $svn = isset( $post_meta['_prtfl_svn'] ) ? $post_meta['_prtfl_svn'] : '';
                            if ( 1 == $portfolio_options['svn_additional_field'] && ! empty( $svn ) ) { ?>
                                <p><span class="lable"><?php echo '<b>' . $portfolio_options['svn_text_field'] . '</b>'; ?></span> <?php echo $svn; ?></p>
                            <?php }

                         } ?>
                    </div><!-- .portfolio_short_content -->
                    <div class="portfolio_images_block" data-columns="<?php echo $portfolio_options['custom_image_row_count'] ?>">
                        <?php if ( metadata_exists( 'post', $post->ID, '_prtfl_images' ) ) {
                            $array_post_thumbnail_id = array_filter( explode( ',', get_post_meta( $post->ID, '_prtfl_images', true ) ) );
                        } else {
                            /* Compatibility with old plugin version 2.37 */
                            $args = array(
                                'post_parent'       => $post->ID,
                                'post_type'         => 'attachment',
                                'post_mime_type'    => 'image',
                                'numberposts'       => -1,
                                'orderby'           => 'menu_order',
                                'order'             => 'ASC',
                                'exclude'           => $post_thumbnail_id,
                                'fields'            => 'ids'
                            );
                            $array_post_thumbnail_id = get_children( $args );
                        }
                        $count_element = count( $array_post_thumbnail_id );

                        foreach ( $array_post_thumbnail_id as $key => $value ) {
                            $image          =   wp_get_attachment_image_src( $value, $prtfl_options['image_size_photo'] );
                            $image_large    =   wp_get_attachment_image_src( $value, 'large' );
                            $image_alt      =   get_post_meta( $value, '_wp_attachment_image_alt', true );
                            $image_title    =   get_post_meta( $value, '_wp_attachment_image_title', true );
                            $image_desc     =   get_post( $value );
                            $image_desc     =   $image_desc->post_content;

                            /* get width and height for image_size_photo */
                            if ( 'portfolio-photo-thumb' != $prtfl_options['image_size_photo'] ) {
                                $width  = absint( get_option( $prtfl_options['image_size_photo'] . '_size_w' ) );
                                $height = absint( get_option( $prtfl_options['image_size_photo'] . '_size_h' ) );
                            } else {
                                $width  = $prtfl_options['custom_size_px']['portfolio-photo-thumb'][0];
                                $height = $prtfl_options['custom_size_px']['portfolio-photo-thumb'][1];
                            }

                            if ( 0 == $key ) { ?>
                                <span class="lable"><?php echo '<b>' . $portfolio_options['screenshot_text_field'] . '</b>'; ?></span>
                                <div class="portfolio_images_rows">
                            <?php } ?>
                            <div class="portfolio_images_gallery">
                                <a class="lightbox" data-fancybox="portfolio_fancybox" href="<?php echo $image_large[0]; ?>" title="<?php echo $image_desc; ?>">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" <?php if ( $width ) echo 'width="' . $width . '"'; if ( $height ) echo 'height="' . $height . '"'; ?> style="<?php if ( $width ) echo 'width:' . $width . 'px;'; if ( $height ) echo 'height:' . $height . 'px;'; ?>" />
                                </a>
                                <br /><?php echo $image_title;?>
                            </div>
                            <?php if ( 0 == ( $key + 1 ) % $portfolio_options['custom_image_row_count'] && 0 != $key && $key + 1 != $count_element ) { ?>
                                </div><!-- .portfolio_images_rows -->
                                <div class="portfolio_images_rows">
                            <?php }
                        }
                        if ( 0 < $count_element ) { ?>
                            </div><!-- .portfolio_images_rows -->
                        <?php } ?>
                    </div><!-- .portfolio_images_block -->
                </div><!-- .entry -->
            </article><!-- .portfolio_content -->
        <?php endwhile;
    }
}

?>