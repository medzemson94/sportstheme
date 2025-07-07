<?php get_header(); ?>

<div class="single-blog-details sec-spacer">
    <div class="container">
        <div class="row">
            <!-- Post Content -->
            <div class="col-md-8 col-sm-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="single-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-details/1.jpg" alt="Default image">
                        <?php endif; ?>
                    </div>

                    <h3><?php the_title(); ?></h3>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                    <div class="share-section">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 life-style">
                                <span class="author">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    <?php the_author_posts_link(); ?>
                                </span>
                                <span class="comment">
                                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                    <?php comments_number('0', '1', '%'); ?>
                                </span>
                                <span class="date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span class="cat">
                                    <i class="fa fa-folder-o" aria-hidden="true"></i>
                                    <?php the_category(', '); ?>
                                </span>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <ul class="share-link1">
                                    <li><strong>Tags:</strong></li>
                                    <?php the_tags('<li>', '</li><li>', '</li>'); ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="share-section2">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <span>You Can Share It :</span>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <li><a href="#"><i class="fa fa-google"></i> Google</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <ul class="next-pre-section">
                                <li class="left-arrow"><?php previous_post_link('%link', '<i class="fa fa-angle-left"></i> Previous Post'); ?></li>
                                <li class="right-arrow"><?php next_post_link('%link', 'Next Post <i class="fa fa-angle-right"></i>'); ?></li>
                            </ul>
                        </div>
                    </div>

                    <div class="like-section">
                        <h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
                        <div class="row">
                            <?php
                            $related = new WP_Query([
                                'category__in'   => wp_get_post_categories(get_the_ID()),
                                'post__not_in'   => [get_the_ID()],
                                'posts_per_page' => 3
                            ]);
                            if ($related->have_posts()) :
                                while ($related->have_posts()) : $related->the_post(); ?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="popular-post-img">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('medium'); ?>
                                            </a>
                                        </div>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <span class="date"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></span>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>

                    <div class="author-comment">
                        <h3 class="title-bg">Recent Comments</h3>
                        <?php
                        $comments = get_comments([
                            'post_id' => get_the_ID(),
                            'number'  => 3,
                            'status'  => 'approve'
                        ]);
                        if ($comments) :
                            echo '<ul>';
                            foreach ($comments as $comment) : ?>
                                <li>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="image-comments"><?php echo get_avatar($comment, 60); ?></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <span class="reply"><span class="date"><i class="fa fa-calendar"></i> <?php echo get_comment_date('', $comment); ?></span></span>
                                            <div class="dsc-comments">
                                                <h4><?php echo $comment->comment_author; ?></h4>
                                                <p><?php echo $comment->comment_content; ?></p>
                                                <a href="#comment-<?php echo $comment->comment_ID; ?>">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach;
                            echo '</ul>';
                        else :
                            echo '<p>No recent comments.</p>';
                        endif;
                        ?>
                    </div>

                    <div class="leave-comments-area">
                        <?php comment_form(); ?>
                    </div>
                <?php endwhile; endif; ?>
            </div>

            <!-- Sidebar -->
            <div class="col-md-3 col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
