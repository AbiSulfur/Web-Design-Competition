<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

    <section class="page-hero">
        <div class="container">
            <h1 class="page-hero-title animate-fade">
                <?php 
                if ( is_home() && ! is_front_page() ) {
                    single_post_title();
                } else {
                    echo 'Aethel.';
                }
                ?>
            </h1>
        </div>
    </section>

    <section class="section-editorial">
        <div class="container">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('animate-up'); ?> style="margin-bottom: 4rem;">
                        <header class="entry-header" style="margin-bottom: 1.5rem;">
                            <?php
                            if ( is_singular() ) :
                                the_title( '<h2 class="entry-title" style="font-size: 2.5rem; font-weight: 800; letter-spacing: -0.03em;">', '</h2>' );
                            else :
                                the_title( '<h2 class="entry-title" style="font-size: 2.5rem; font-weight: 800; letter-spacing: -0.03em;"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" style="color: white; text-decoration: none;">', '</a></h2>' );
                            endif;
                            ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content" style="color: var(--text-muted); line-height: 1.8; font-size: 1.1rem;">
                            <?php
                            the_content(
                                sprintf(
                                    wp_kses(
                                        /* translators: %s: Name of current post. Only visible to screen readers */
                                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'aethel' ),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    wp_kses_post( get_the_title() )
                                )
                            );
                            ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-<?php the_ID(); ?> -->
                    <?php
                endwhile;

                the_posts_navigation( array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'aethel' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'aethel' ) . '</span> <span class="nav-title">%title</span>',
                ) );

            else :
                ?>
                <div class="animate-up">
                    <p style="color: var(--text-muted); font-size: 1.2rem;">It seems we can&rsquo;t find what you&rsquo;re looking for.</p>
                </div>
                <?php
            endif;
            ?>
        </div>
    </section>

<?php
get_footer();
