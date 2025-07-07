<?php get_header(); ?>

<div id="rs-blog" class="rs-blog sec-spacer">
    <div class="container">
        <div class="row">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-blog-slide">
                        <div class="images">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium', ['alt' => get_the_title()] ); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-details/1.jpg" alt="Default Image">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="blog-details">
                            <span class="date"><i class="fa fa-calendar-check-o"></i> <?php echo get_the_date(); ?></span>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                            <div class="read-more">
                                <a href="<?php the_permalink(); ?>">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts were found.', 'your-theme-textdomain' ); ?></p>
            <?php endif; ?>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="default-pagination text-center">
                    <?php
                    the_posts_pagination( [
                        'mid_size'  => 2,
                        'prev_text' => __( '<i class="fa fa-angle-left"></i> Previous', 'your-theme-textdomain' ),
                        'next_text' => __( 'Next <i class="fa fa-angle-right"></i>', 'your-theme-textdomain' ),
                        'type'      => 'list',
                    ] );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
