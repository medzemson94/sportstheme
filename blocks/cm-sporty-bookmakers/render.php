<div class="cm-sporty-bookmaker-block <?php echo esc_attr($block['className'] ?? ''); ?>" <?php echo isset($block['anchor']) ? 'id="' . esc_attr($block['anchor']) . '"' : ''; ?>>
    <?php
    $block_title = get_field('block_title') ?: 'Meilleurs bookmakers';
    $disclaimer_text = get_field('disclaimer_text') ?: '18+ | Annonce publicitaire | Jouer comporte des risques';
    ?>
    
    

    <?php if (have_rows('bookmaker_rows')): ?>
        <?php while (have_rows('bookmaker_rows')): the_row(); ?>
            <?php 
            $row_title = get_sub_field('row_title');
            ?>
            
            <div class="cm-sporty-bookmaker-row">
                <?php if ($row_title): ?>
                    <h3 class="cm-sporty-row-title"><?php echo esc_html($row_title); ?></h3>
                <?php endif; ?>
                
                <?php if (have_rows('bookmakers')): ?>
                    <?php 
                    $counter = 1;
                    while (have_rows('bookmakers')): the_row();
                        $bookmaker_name = get_sub_field('bookmaker_name');
                        $logo = get_sub_field('logo');
                        $rating_score = get_sub_field('rating_score');
                        $bonus_amount = get_sub_field('bonus_amount');
                        $features = get_sub_field('features');
                        $promo_code = get_sub_field('promo_code');
                        $cta_link = get_sub_field('cta_link');
                        $is_featured = get_sub_field('is_featured');
                        $review_link = get_sub_field('review_link');
                        
                        $featured_class = $is_featured ? 'cm-sporty-featured' : '';
                        $unique_id = 'cm-sporty-' . $counter . '-' . uniqid();
                        ?>
                        
                        <div class="cm-sporty-bookmaker-card <?php echo $featured_class; ?>">
                            <?php if ($is_featured): ?>
                                <div class="cm-sporty-rank-badge">Bookmaker n°<?php echo $counter; ?></div>
                            <?php endif; ?>
                            
                            <div class="cm-sporty-rank-number"><?php echo $counter; ?></div>
                            
                            <div class="cm-sporty-bookmaker-info">
                                <div class="cm-sporty-bookmaker-header">
                                    <?php if ($logo): ?>
                                        <div class="cm-sporty-bookmaker-logo">
                                            <img src="<?php echo esc_url($logo['url']); ?>" 
                                                 alt="<?php echo esc_attr($logo['alt'] ?: $bookmaker_name); ?>" 
                                                 width="<?php echo esc_attr($logo['width']); ?>" 
                                                 height="<?php echo esc_attr($logo['height']); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="cm-sporty-bookmaker-name"><?php echo esc_html($bookmaker_name); ?></div>
                                </div>
                                
                                <div class="cm-sporty-rating">
                                    <span class="cm-sporty-rating-score"><?php echo esc_html($rating_score); ?></span>
                                    <span class="cm-sporty-rating-total">/10</span>
                                </div>
                                
                                <?php if ($review_link): ?>
                                    <a href="<?php echo esc_url($review_link); ?>" class="cm-sporty-rating-link">
                                        Avis <?php echo esc_html($bookmaker_name); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            
                            <div class="cm-sporty-bonus-section">
                                <div class="cm-sporty-bonus-label">Bonus :</div>
                                <div class="cm-sporty-bonus-amount"><?php echo esc_html($bonus_amount); ?></div>
                                
                                <?php if ($features): ?>
                                    <ul class="cm-sporty-features">
                                        <?php 
                                        $feature_lines = explode("\n", $features);
                                        foreach ($feature_lines as $feature): 
                                            if (trim($feature)): ?>
                                                <li><?php echo esc_html(trim($feature)); ?></li>
                                            <?php endif;
                                        endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                
                                <div class="cm-sporty-promo-section">
                                    <?php if ($promo_code): ?>
                                        <div class="cm-sporty-promo-code">
                                            <div class="cm-sporty-promo-label">Code Promo</div>
                                            <div class="cm-sporty-promo-code-text">
                                                <?php echo esc_html($promo_code); ?>
                                                <button class="cm-sporty-copy-btn" onclick="cmSportyCopyCode('<?php echo esc_js($promo_code); ?>', this)">📋</button>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="cm-sporty-no-promo">Pas besoin de code promo</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="cm-sporty-cta-section">
                                <?php if ($cta_link): ?>
                                    <a href="<?php echo esc_url($cta_link); ?>" class="cm-sporty-cta-button" target="_blank" rel="noopener">
                                        INSCRIVEZ-VOUS!
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <?php $counter++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="cm-sporty-empty-state">
            <p>Aucun bookmaker configuré. Veuillez ajouter des bookmakers dans les paramètres du bloc.</p>
        </div>
    <?php endif; ?>
</div>