<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>
		<!-- Slider Section Start Here -->
		<div class="slider-main">
			<div id="main-slider" class="owl-carousel">
				<div class="item active">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/full-slider/2.jpg" alt="Slider image">
                    <div class="dsc">
					   <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-xs-8">
                                    <div class="slider-text">
                                        <h1 data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">Metro Soccer Kafa FC</h1>
                                        <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="btm-date">
                                            There are many variations of passages of Lorem Ipsum available but the majority have <br class="hidden-xs hidden-sm"/>suffered alteration in some form
                                        </div>
                                        <div class="btn-slider"> 
                                        <a href="#" class="btn1" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">Read More</a>
                                        <a href="#" class="btn2" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">Book a Ticket</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4 hidden-420">
                                    <div class="slider-image">
                                        <img data-animation-in="bounceInRight" data-animation-out="animate-out fadeOut" src="<?php echo get_template_directory_uri(); ?>/assets/images/full-slider/image-layer.png" alt="layer image">
                                    </div>
                                </div>
                            </div>                
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/full-slider/1.jpg" alt="Slider image">
                    <div class="dsc">
					   <div class="container text-right">
							<h1 data-animation-in="slideInLeft" data-animation-out="animate-out slideOutUp">Mirpur FC wake up</h1>
							<div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="btm-date">
								There are many variations of passages of Lorem Ipsum available but the majority have <br/>suffered alteration in some form
							</div>
							<div class="btn-slider"> 
							<a href="#" class="btn1" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">Read More</a>
							<a href="#" class="btn2" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">Book a Ticket</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/full-slider/3.jpg" alt="Slider image">
                    <div class="dsc">
					   <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-xs-8">
                                    <div class="slider-text">
                                        <h1 data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">Netro FC denied victory</h1>
                                        <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="btm-date">
                                            There are many variations of passages of Lorem Ipsum available but the majority have <br class="hidden-xs hidden-sm"/>suffered alteration in some form
                                        </div>
                                        <div class="btn-slider"> 
                                        <a href="#" class="btn1" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">Read More</a>
                                        <a href="#" class="btn2" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">Book a Ticket</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4 hidden-420">
                                    <div class="slider-image">
                                        <img data-animation-in="bounceInRight" data-animation-out="animate-out fadeOut" src="<?php echo get_template_directory_uri(); ?>/assets/images/full-slider/image-layer2.png" alt="layer image">
                                    </div>
                                </div>
                            </div>                
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Slider Section end Here -->
		
		<!-- Upcoming Match Section Start Here-->
		<div class="upcoming-section">
			<div class="container">
                <h2>Upcoming Match</h2>
                <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="item">
                        <div class="col-md-4 col-sm-4 col-xs-12 first">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/upcoming/4.png" alt="">
                            <h4>Mirpur Club</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <span class="date">JUNE 16, 17:00</span>
                            <span class="vs">VS</span>
                            <span>Central Olympic Stadium</span>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 last">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/upcoming/3.png" alt="">
                            <h4>Trisal Club</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-4 col-xs-12 first">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/upcoming/7.png" alt="">
                            <h4>Kapa Club</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <span class="date">JUNE 16, 17:00</span>
                            <span class="vs">VS</span>
                            <span>Central Olympic Stadium</span>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 last">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/upcoming/6.png" alt="">
                            <h4>Dhoar Club</h4>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<!-- Upcoming Match Section end Here-->
		
		<!-- All news area Start Here-->
		<div class="all-news-area sec-spacer">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
                        <h3 class="title-bg">Latest News</h3>
                        <div class="row">
			        		<div class="col-sm-9">
					        	<div class="latest-news-slider">
					        		<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
);
$latest_news = new WP_Query($args);

if ($latest_news->have_posts()) :
    while ($latest_news->have_posts()) : $latest_news->the_post(); ?>
        <div>
            <div class="news-normal-block">
                <div class="news-img">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                </div>
                <h4 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="news-desc">
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                </div>
                <div class="news-btn">
                    <a class="primary-btn" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata();
endif;
?>

					        	</div>			        			
			        		</div>
			        		<div class="col-sm-3">			        			
					        	<div class="latest-news-nav">
								<?php
// Query the latest 3 posts
$latest_posts = new WP_Query(array(
    'posts_per_page' => 3,
    'post_status'    => 'publish'
));

if ($latest_posts->have_posts()) :
    while ($latest_posts->have_posts()) : $latest_posts->the_post();
        if (has_post_thumbnail()) :
            ?>
            <div>
                <div>
                    <?php the_post_thumbnail('medium'); // or 'thumbnail', 'large', 'full' ?>
        </div>
            </div>
            <?php
        endif;
    endwhile;
    wp_reset_postdata();
endif;
?>

								</div>
			        		</div>
			        	</div>
                    </div>
					<div class="col-md-4">
						<div class="sidebar-area right-side-area">
							<h3 class="title-bg">Recent Results</h3>
                            <div class="today-match-teams text-center">
                                <div class="overly-bg"></div>
                                <div class="title-head">
                                    <h4>Last Match Result</h4>
                                    <span class="date">Sunday, March 20th,2017</span>
                                </div>
                                <div class="today-score">
                                    <div class="today-match-team">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/1.png" alt="" />
                                        <h4>Trisal King</h4>
                                        <span>SKFC</span>
                                    </div>
                                    <div class="today-final-score">
                                        07 <span>-</span> 02
                                        <h4>final score</h4>
                                    </div>
                                    <div class="today-match-team">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/2.png" alt="" />
                                        <h4>Mirpur King</h4>
                                        <span>SWFC</span>
                                    </div>
                                </div>
                                <div class="title-head">
                                    <h4>Previous Results</h4>
                                </div>
                                <div class="recent-match-results">
                                    <div class="single-result">
                                        <div class="team-result clearfix">
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/1.png">Badda FC</div>
                                            <div class="text-center match-score single-part">
                                                <span class="score">3</span> - <span class="score">2</span>
                                            </div>
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/2.png" alt="Spain">Trisal FC</div>
                                        </div>
                                    </div>
                                    <div class="single-result">
                                        <div class="team-result clearfix">
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/1.png">Banani FC</div>
                                            <div class="text-center match-score single-part">
                                                <span class="score">4</span> - <span class="score">3</span>
                                            </div>
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/2.png" alt="Spain">Mirpur FC</div>
                                        </div>
                                    </div>
                                    <div class="single-result">
                                        <div class="team-result clearfix">
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/1.png">Jpypur FC</div>
                                            <div class="text-center match-score single-part">
                                                <span class="score">2</span> - <span class="score">4</span>
                                            </div>
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/2.png" alt="Spain">Dhoar FC</div>
                                        </div>
                                    </div>
                                    <div class="single-result">
                                        <div class="team-result clearfix">
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/1.png">Trisal FC</div>
                                            <div class="text-center match-score single-part">
                                                <span class="score">6</span> - <span class="score">1</span>
                                            </div>
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/today-match/2.png" alt="Spain">Romna FC</div>
                                        </div>
                                    </div>
                                    <div class="view-all-result">
                                        <a href="result.html">View All <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
                <div class="separator-100"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
							<div class="col-sm-8 col-xs-8 match-view-tite">
								<h3 class="title-bg">Match fixture</h3>
							</div>
							<div class="col-sm-4 col-xs-4 text-right match-view-more">
								<a class="view-more" href="#">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
						</div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="match-list mmb-45">
                                    <div class="overly-bg"></div>
                                    <table class="match-table">
                                        <tbody>
                                            <tr>
                                                 <td class="medium-font">Nettrok FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Bramma FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Netro Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Bogro FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Joypur FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Bramma Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Mirpur FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">men utd</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Golshan Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Kapa FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Dhoar FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Mirpur Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Trishal FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Banani FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Badda Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Badda FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Nattrok Fc</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Mirpur Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Bramma FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Bogro FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Netro Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Joypur FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Mirpur FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Bramma Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title-bg">Point table</h3>
                        <div class="point-list text-center">
                            <table class="point-table">
                                <tbody>
                                    <tr>
                                         <td></td>
                                         <td class="country-name">Team</td>
                                         <td>W</td>
                                         <td>L</td>
                                         <td>P</td>
                                    </tr>
                                    <tr>
                                         <td>01</td>
                                         <td>Badda FC</td>
                                         <td>16</td>
                                         <td>6</td>
                                         <td>32</td>
                                    </tr>
                                    <tr>
                                         <td>02</td>
                                         <td class="country-name">Banani FC</td>
                                         <td>14</td>
                                         <td>7</td>
                                         <td>28</td>
                                    </tr>
                                    <tr>
                                         <td>03</td>
                                         <td class="country-name">Trishal FC</td>
                                         <td>18</td>
                                         <td>8</td>
                                         <td>26</td>
                                    </tr>
                                    <tr>
                                         <td>04</td>
                                         <td>Dhoar FC</td>
                                         <td>15</td>
                                         <td>6</td>
                                         <td>32</td>
                                    </tr>
                                    <tr>
                                         <td>05</td>
                                         <td class="country-name">Kapa FC</td>
                                         <td>22</td>
                                         <td>4</td>
                                         <td>25</td>
                                    </tr>
                                    <tr>
                                         <td>06</td>
                                         <td class="country-name">Mirpur FC</td>
                                         <td>18</td>
                                         <td>6</td>
                                         <td>27</td>
                                    </tr>
                                    <tr>
                                         <td>07</td>
                                         <td class="country-name">Joypur FC</td>
                                         <td>14</td>
                                         <td>7</td>
                                         <td>29</td>
                                    </tr>
                                    <tr>
                                         <td>08</td>
                                         <td class="country-name">Bogro FC</td>
                                         <td>17</td>
                                         <td>6</td>
                                         <td>30</td>
                                    </tr>
                                    <tr>
                                         <td>09</td>
                                         <td class="country-name">Bramma FC</td>
                                         <td>16</td>
                                         <td>8</td>
                                         <td>29</td>
                                    </tr>
                                    <tr>
                                         <td>10</td>
                                         <td class="country-name">Nattrok FC</td>
                                         <td>18</td>
                                         <td>6</td>
                                         <td>24</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="view-more text-left" href="point-table.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- All news area end Here-->
		
		<!-- Latest Video Start Here-->
		<div class="latest-video-section sec-spacer">
			<div class="overly-bg"></div>
			<div class="container">
				<h3 class="title-bg">Latest video</h3>
				<div class="row">
					<div class="col-md-8">
						<div class="video-area mmb-40">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/latest-video/video.jpg" alt="Video"/>
							<div class="videos-icon">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=t17O6JoU2Ew">
                                <i class="fa fa-play" aria-hidden="true"></i>
                                </a>
                            </div>
						</div>
					</div>
					<div class="col-md-4 latest-news">
						<div class="inner-news small-news">
							<div class="news-img">
								<a href="blog-single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/latest-video/1.jpg" alt="News" /></a>
							</div>
							<div class="news-text">
								<h5><a href="blog-single.html">Badda FC vs Banni FC Highlights 1-1</a></h5>
								<span class="date">May 30, 2017</span>
								<ul class="rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
						<div class="inner-news small-news">
							<div class="news-img">
								<a href="blog-single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/latest-video/2.jpg" alt="News" /></a>
							</div>
							<div class="news-text">
								<h5><a href="blog-single.html">Badda FC vs Banni FC Highlights 1-1</a></h5>
								<span class="date">May 30, 2017</span>
								<ul class="rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
						<div class="inner-news small-news">
							<div class="news-img">
								<a href="blog-single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/latest-video/3.jpg" alt="News" /></a>
							</div>
							<div class="news-text">
								<h5><a href="blog-single.html">Badda FC vs Banni FC Highlights 1-1</a></h5>
								<span class="date">May 30, 2017</span>
								<ul class="rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Latest Video end Here-->
		
		<!-- Our Team Start Here-->
	
        <!-- Gallery Section End Here-->
        
		<!-- Champion Awards Start Here-->
		
		<!-- Our Products end Here-->
		
		<!-- Client Logo Section Start Here-->
		<div class="clicent-logo-section sec-spacer">
			<div class="overly-bg"></div>
			<div class="container">
                <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="20" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/2.png" alt=""></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/3.png" alt=""></a>
                        </div>
                    </div> 
                    <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/4.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
		</div>


<?php get_footer(); ?>