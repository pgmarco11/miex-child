<?php

//home page portfolio function
function Portfolio_func_new($atts, $content = null){

    extract(shortcode_atts(array(

        'title' => '',

        'number'  => '',

        'orderpost' => '',

        'orderby' => '',

        'text' => '',

    ), $atts));

    ob_start(); 

    global $redux_demo;
    global $title;
    global $post;

    ?> 



            <section class="portfolio-section section-padding" id="portfolio">

                <div class="container">

                        <div class="row">

                             <div class="col col-xs-12">

                                    <div class="section-title-s10">                                        

                                        <h2>Recent Works</h2>                                    

                                    </div>

                            </div>

                        </div>

                   <?php 
                    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                    $args = array(   
                        'post_type' => 'bws-portfolio',
                        'paged' => $paged,
                        'posts_per_page' => 6,
                        'order' => 'DESC',
                        'orderby' => 'date', 
                    );  

                    $wp_query = new WP_Query($args);

                    ?>      

                    <ul class="row portfolio-grids">

                    <?php

                            while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

                    ?>

                        <li class="grid">

                                <div class="img-details">

                                    <div class="img-holder">

                                        <?php print get_the_post_thumbnail($post->ID, 'logo'); ?>

                                    </div>

                                    <div class="details">

                                        <h3><?php the_title(); ?></h3>

                                        <span class="cat">
                                        <?php 
                                           
                                            $taxonomy = 'portfolio_technologies';
                                            $tech_terms =get_the_terms( $post->ID, $taxonomy );

                                            if ( ! empty( $tech_terms ) && ! is_wp_error( $tech_terms ) ) {
                                                
                                                $terms = array();
                                                foreach( $tech_terms as $term ) {
                                                    $terms[] = esc_html( $term->name );
                                                }
                                                echo join( ', ', $terms );
                                            }
                                        ?>
                                        </span>

                                        <a href="<?php the_permalink();?>" class="view-project"><?php echo htmlspecialchars_decode(esc_attr($text));?></a>

                                    </div>

                                </div>

                            </li> 

                        <?php

                            endwhile;

                        ?>                   

                        </ul>

                    </div>

                    </section>  




<?php  return ob_get_clean();

}

//home page education function
function new_education_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title1' => '',

        'title2' => '',

        'title3' => '',

        'subtitle' => '',

        'text' => '',

    ), $atts));

    ob_start(); 

    ?> 

        <div class="col">

            <div class="education-grid">

                <div class="title">

                    <h3><?php echo htmlspecialchars_decode(esc_attr($title1));?><span><?php echo htmlspecialchars_decode(esc_attr($title2));?></span> <?php echo htmlspecialchars_decode(esc_attr($title3));?></h3>

                    <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

                </div>

                <div class="details">

                    <p><?php echo htmlspecialchars_decode(esc_attr($text));?></p>

                </div>

            </div>

        </div>

<?php  return ob_get_clean();

}


//home page about section
function about_me_func_new($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'title1' => '',

        'title2' => '',

        'title3' => '',

        'title4' => '',

        'number1' => '',

        'number2' => '',

        'number3' => '',

        'number4' => '',

         'number5' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

        <section class="about-section-s5 section-padding" id="about">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <div class="section-title-s9">

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                        <div class="about-text">

                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                        </div>

                        <div class="signature">

                            <img src="<?php echo esc_url($images[0]);?>" alt>

                        </div>

                    </div>



                    <div class="col col-md-6">

                        <div class="skills">

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($title1));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="<?php echo htmlspecialchars_decode(esc_attr($number1));?>"></div>

                                </div>

                            </div>

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($title2));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="<?php echo htmlspecialchars_decode(esc_attr($number2));?>"></div>

                                </div>

                            </div>

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($title3));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="<?php echo htmlspecialchars_decode(esc_attr($number3));?>"></div>

                                </div>

                            </div>

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($title4));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="<?php echo htmlspecialchars_decode(esc_attr($number4));?>"></div>

                                </div>

                            </div>

                            <div class="skill">

                                <h6><?php echo !empty($title5) ? htmlspecialchars_decode(esc_attr($title5)) : 'JavaScript';?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="<?php echo htmlspecialchars_decode(esc_attr($number5));?>"></div>

                                </div>

                            </div>

                        </div>                        

                    </div>

                </div>

            </div>

        </section>

<?php  return ob_get_clean();

}

//home page blog function

function blog_1_func_new($atts, $content = null){

    extract(shortcode_atts(array(

        'title' => '',

        'subtitle' => '',

        'number' => '3',

        'orderpost' => '',

        'orderby' => '',

        'link' => '',

    ), $atts));

    ob_start(); 
    
    global $post;

    $images = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'');

    ?>



        <section class="recent-news-section section-padding" id="news">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s10">

                            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col col-xs-12">

                        <div class="blog-grids">

                          <?php 

                        $args = array(    

                            'paged' =>  get_query_var( 'paged' ),

                            'posts_per_page' => $number,

                            'order' => $orderpost,

                            'orderby' => $orderby, 

                            'post_type' => 'post',

                            );

                        $wp_query = new WP_Query($args);

                        $i=1;

                        while ($wp_query -> have_posts()): $wp_query -> the_post();

                    ?>

                            <div class="grid">

                              <?php if ( has_post_thumbnail() ) { ?>

                                <div class="entry-media">

                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>

                                </div>

                                <?php } ?>

                                <div class="entry-body">

                                    <span class="cat"><?php 

                                        // Show all category for post

                                        $i = 1; foreach((get_the_category()) as $category) { 

                                        if ($i == 1){echo ''; }else {echo ' , ';}

                                            echo '<a href="'.get_category_link($category->cat_ID).'" rel="category">'.$category->category_nicename . ' '.'</a>'; 

                                            

                                            $i++;

                                        } ?></span>



                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>



                                    <p><?php if(isset($miex_redux_demo['blog_excerpt'])){?>

                                <?php echo esc_attr(miex_excerpt($miex_redux_demo['blog_excerpt'])); ?>

                                <?php }else{?>

                                <?php echo esc_attr(miex_excerpt(20)); 

                                }

                                ?></p>

                                    <div class="read-more-date">

                                        <a href="<?php the_permalink();?>"><?php if(isset($miex_redux_demo['read_more'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($miex_redux_demo['read_more']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'read more', 'miex' );

                                    }

                                    ?></a>

                                        <span class="date"><?php the_time(get_option( 'date_format' ));?></span>

                                    </div>

                                </div>

                            </div>

                            <?php endwhile; ?>

                        </div>

                    </div>

                    

                </div>

                <div class="more-news">

                    <a href="<?php echo esc_url($link); ?>" class="theme-btn-s2"><?php echo esc_html__( 'More News', 'miex' ) ?></a>

                </div>

            </div>

        </section>

<?php  return ob_get_clean(); 

}