<?php get_header(); ?>

<div class="container">
    <div class="error-404 not-found">
        <h1 class="page-title">Oops! Page Not Found</h1>
        <p>It looks like nothing was found at this location. You can try searching or return to the homepage.</p>
        
        <?php get_search_form(); ?>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="button">Go to Homepage</a>
    </div>
</div>

<style>
.container {
    text-align: center;
    padding: 80px 20px;
}
.button {
    background-color: #0073aa;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    margin-top: 20px;
    display: inline-block;
}
.button:hover {
    background-color: #005077;
}
</style>

<?php get_footer(); ?>
