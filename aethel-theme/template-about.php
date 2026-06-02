<?php
/**
 * Template Name: About
 */
get_header(); ?>

    <!-- ── PAGE HERO ── -->
    <section class="page-hero">
        <div class="container">
            <span class="page-hero-kicker animate-fade">Core Manifest — Who We Are</span>
            <h1 class="page-hero-title animate-fade">
                <?php single_post_title(); ?>
            </h1>
        </div>
    </section>

    <!-- ── STORY SECTION ── -->
    <section class="about-story">
        <div class="container">
            <div class="about-story-grid">
                <div class="about-story-sticky animate-up">
                    <span class="section-label">Our Origin</span>
                    <h2 class="about-story-tagline">Beyond<br>Traditional<br>Portfolios.</h2>
                </div>
                <div class="about-story-body animate-up delay-2">
                    <?php
                    // The main content of the About page goes here if entered in the dashboard
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    else :
                    ?>
                        <p>At Aethel, we believe that design is not just about making things look beautiful — it's about engineering the future. Founded by visionaries in the tech and design space, we merge cutting-edge aesthetics with robust engineering.</p>
                        <p>Our mission aligns with the core philosophy: <strong style="color: #fff;">"Designing the Future: Beyond Portfolio, Build Your Legacy."</strong> We don't just deliver projects; we build digital legacies that elevate brands into industry leaders.</p>
                        <p>We measure success not in deliverables, but in the depth of human experience we elevate. Every interface we craft carries a single purpose: to make the complex feel effortlessly simple.</p>
                    <?php endif; ?>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 4rem; padding-top: 4rem; border-top: 1px solid var(--glass-border);">
                        <div>
                            <span class="section-label" style="margin-bottom: 0.75rem;">Vision</span>
                            <p style="font-size: 0.95rem; margin: 0; color: var(--text-muted);">To pioneer the next era of digital interaction — where technology becomes an extension of human intent.</p>
                        </div>
                        <div>
                            <span class="section-label" style="margin-bottom: 0.75rem;">Mission</span>
                            <p style="font-size: 0.95rem; margin: 0; color: var(--text-muted);">Empowering brands to leave a lasting digital footprint through precision engineering and visionary design.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── MISSION STATEMENT ── -->
    <section class="mission-cin">
        <div class="container">
            <div class="animate-fade">
                <p class="mission-cin-quote">"To master complexity so thoroughly that it disappears — leaving only clear, lasting, human experiences in its place."</p>
                <p class="mission-cin-sub">We measure success not in deliverables, but in the depth of human experience we elevate.</p>
            </div>
        </div>
    </section>

    <!-- ── CINEMATIC TIMELINE ── -->
    <section class="timeline-cin">
        <div class="container">
            <div class="animate-up">
                <span class="section-label">Chronology</span>
                <h2>Our<br>Journey.</h2>
            </div>

            <div class="timeline-cin-items">
                <div class="timeline-cin-item animate-up delay-1">
                    <div class="timeline-cin-year">2023</div>
                    <div class="timeline-cin-divider"></div>
                    <div class="timeline-cin-content">
                        <h3>Protocol Initiated</h3>
                        <p>Aethel was born out of a collective urge to disrupt conventional visual paradigms. We set out to bridge the gap between creative visual architecture and spatial technology.</p>
                    </div>
                </div>
                <div class="timeline-cin-item animate-up delay-2">
                    <div class="timeline-cin-year">2024</div>
                    <div class="timeline-cin-divider"></div>
                    <div class="timeline-cin-content">
                        <h3>Decentralized Integration</h3>
                        <p>Expanding into Web3 frontends, crafting responsive dApp environments that transformed complex decentralized smart contract networks into friendly UI experiences.</p>
                    </div>
                </div>
                <div class="timeline-cin-item animate-up delay-3">
                    <div class="timeline-cin-year">2025</div>
                    <div class="timeline-cin-divider"></div>
                    <div class="timeline-cin-content">
                        <h3>Cognitive UI Integration</h3>
                        <p>Fusing generative artificial intelligence systems directly into user workflows, enabling UI screens to adapt real-time based on predictive analytics and user intent.</p>
                    </div>
                </div>
                <div class="timeline-cin-item animate-up delay-4">
                    <div class="timeline-cin-year">2026</div>
                    <div class="timeline-cin-divider"></div>
                    <div class="timeline-cin-content">
                        <h3>Immersive Legacy</h3>
                        <p>Leading the charge in spatial computing layouts and integrated tech consulting. Delivering pixel-perfect digital ecosystems that stand as permanent legacies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── STATS ── -->
    <section class="stats-cinematic">
        <div class="container">
            <div class="stats-cinematic-grid">
                <div class="stat-cin-item animate-up delay-1">
                    <div class="stat-cin-number" data-target="50">0</div>
                    <div class="stat-cin-label">Projects Delivered</div>
                </div>
                <div class="stat-cin-item animate-up delay-2">
                    <div class="stat-cin-number" data-target="12">0</div>
                    <div class="stat-cin-label">K+ Users Impacted</div>
                </div>
                <div class="stat-cin-item animate-up delay-3">
                    <div class="stat-cin-number" data-target="98">0</div>
                    <div class="stat-cin-label">% Client Satisfaction</div>
                </div>
                <div class="stat-cin-item animate-up delay-4">
                    <div class="stat-cin-number" data-target="4">0</div>
                    <div class="stat-cin-label">Countries Reached</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── MEET THE TEAM ── -->
    <section class="section-editorial">
        <div class="container">
            <div class="editorial-header">
                <div class="animate-up">
                    <span class="section-label">Crew</span>
                    <h2>Aethel<br>Commanders.</h2>
                </div>
                <div class="animate-up delay-1">
                    <p>The visionary designers, developers, and computational architects engineering tomorrow's interfaces.</p>
                </div>
            </div>

            <div class="team-grid">
                <!-- Member 1 -->
                <div class="team-card animate-up delay-1">
                    <div class="team-img-wrapper">
                        <div class="team-scanner-overlay"></div>
                        <img src="https://picsum.photos/seed/aethel-team1/600/800" alt="Aria Vance" class="team-img">
                    </div>
                    <h3 style="margin-bottom: 0.3rem;">Aria Vance</h3>
                    <p style="color: var(--accent-cyan); font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 0.8rem;">Chief Design Officer</p>
                    <p style="font-size: 0.95rem; line-height: 1.5;">Award-winning interactive spatial designer specializing in holographic UX patterns.</p>
                    <div class="team-socials">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
                <!-- Member 2 -->
                <div class="team-card animate-up delay-2">
                    <div class="team-img-wrapper">
                        <div class="team-scanner-overlay"></div>
                        <img src="https://picsum.photos/seed/aethel-team2/600/800" alt="Kaelen Sterling" class="team-img">
                    </div>
                    <h3 style="margin-bottom: 0.3rem;">Kaelen Sterling</h3>
                    <p style="color: var(--accent-purple); font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 0.8rem;">Lead Web3 Architect</p>
                    <p style="font-size: 0.95rem; line-height: 1.5;">Engineering real-time high-throughput decentralized protocols with immersive visual frameworks.</p>
                    <div class="team-socials">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <!-- Member 3 -->
                <div class="team-card animate-up delay-3">
                    <div class="team-img-wrapper">
                        <div class="team-scanner-overlay"></div>
                        <img src="https://picsum.photos/seed/aethel-team3/600/800" alt="Silas Thorne" class="team-img">
                    </div>
                    <h3 style="margin-bottom: 0.3rem;">Silas Thorne</h3>
                    <p style="color: var(--accent-cyan); font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 0.8rem;">AI Integration Lead</p>
                    <p style="font-size: 0.95rem; line-height: 1.5;">Structuring adaptive, cognitive user interfaces driven by neural networks and predictive logic.</p>
                    <div class="team-socials">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="cta-cinematic">
        <div class="container animate-up">
            <span class="cta-label">Join the Vision</span>
            <h2>Ready to build something that lasts?</h2>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Initialize Link <i class="fas fa-network-wired"></i></a>
        </div>
    </section>

<?php get_footer(); ?>
