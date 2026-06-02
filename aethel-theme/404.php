<?php
/**
 * Template Name: 404
 */
get_header(); ?>

    <!-- 404 SECTION -->
    <section class="not-found-section">
        <div class="animate-up">
            <div class="not-found-code">404</div>
            <h1 class="not-found-title">Signal Lost in the Void.</h1>
            <p class="not-found-sub">The sector you are looking for has been archived, deleted, or never existed in our timeline.</p>
            <div class="not-found-btns">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Return Home</a>
                <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="btn btn-outline">View Portfolio</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
