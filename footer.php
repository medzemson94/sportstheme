<?php wp_footer(); ?>
<footer id="footer-section" class="footer-section">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
						<h4 class="footer-title">à propos de nous</h4>
                            <div class="about-widget">
                                <p>Découvrez notre plateforme de paris sportifs en ligne, offrant les meilleures cotes et une expérience de jeu sécurisée.</p>
                                <p class="margin-remove">Pariez sur vos équipes favorites et profitez de nos bonus exclusifs pour maximiser vos gains.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-title">Articles Récents</h4>
                            <div class="recent-post-widget">
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'DESC'
);

$recent_posts = new WP_Query($args);

if ($recent_posts->have_posts()):
    while ($recent_posts->have_posts()):
        $recent_posts->the_post();
        ?>
        <div class="post-item">
            <div class="post-date">
                <span><?php echo get_the_date('d'); ?></span>
                <span><?php echo get_the_date('F'); ?></span>
            </div>
            <div class="post-desc">
                <h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <span class="post-category"><?php echo get_the_category()[0]->name; ?></span>
            </div>
        </div>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-title">Liens Utiles</h4>
                            <ul class="sitemap-widget">
<?php
wp_nav_menu(array(
    'theme_location' => 'footer-menu',
    'container' => false,
    'menu_class' => 'footer-menu',
    'items_wrap' => '%3$s',
    'fallback_cb' => false,
    'walker' => new Walker_Nav_Menu()
));
?>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-title">newsletter</h4>
                            <form class="footer-subscribe">
	                            <input type="text" class="form-input" placeholder="Name">
	                            <input type="email" class="form-input" placeholder="Email">
	                            <input type="submit" class="form-input" value="Send">
	                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="copyright">
                                <p>&copy; 2018 <a href="#" target="_blank">RS Theme</a>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="text-right ft-bottom-right">
                                <div class="footer-bottom-share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
        
        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Soccer News" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
		<!-- Start scrollUp  -->
		<div id="return-to-top">
			<span>Top</span>
		</div>
</body>
</html>