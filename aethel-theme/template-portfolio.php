<?php
/**
 * Template Name: Portfolio
 */
get_header(); ?>

    <!-- ── PAGE HERO ── -->
    <section class="page-hero">
        <div class="container">
            <span class="page-hero-kicker animate-fade">Selected Works</span>
            <h1 class="page-hero-title animate-fade">
                <?php single_post_title(); ?>
            </h1>
        </div>
    </section>

    <!-- ── PORTFOLIO CONTENT ── -->
    <section class="portfolio-featured">
        <div class="container">
            <!-- Filter Nav (Minimalist) -->
            <div class="filter-container animate-up delay-1" style="margin-bottom: 4rem;">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web3">Web3</button>
                <button class="filter-btn" data-filter="ai">AI UI</button>
                <button class="filter-btn" data-filter="spatial">Spatial</button>
                <button class="filter-btn" data-filter="enterprise">Enterprise</button>
            </div>

            <!-- Featured Large Project -->
            <div class="project-featured-card animate-up delay-2" data-category="web3">
                <img src="https://picsum.photos/seed/aethel-nexus/1200/800" alt="Nexus Protocol" class="project-featured-img">
                <div class="project-featured-overlay">
                    <div class="project-featured-meta">
                        <span class="project-featured-tag">Web3 Architecture / DeFi Dashboard</span>
                        <h3 class="project-featured-title">Nexus Protocol</h3>
                    </div>
                </div>
            </div>

            <!-- 2-Column Grid for rest -->
            <div class="portfolio-grid" id="portfolioGrid" style="grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); gap: 3rem; margin-top: 3rem;">
                <!-- Project 2 -->
                <div class="project-card animate-up delay-1" data-category="ai">
                    <div class="project-img-wrapper" style="aspect-ratio: 4/3;">
                        <img src="https://picsum.photos/seed/aethel-synapse/800/600" alt="Synapse Cognitive" class="project-img">
                        <div class="project-hover-overlay">
                            <button class="btn btn-primary" onclick="openModal('https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80', 'Synapse Cognitive UI')">View Details</button>
                        </div>
                    </div>
                    <div class="project-info" style="padding: 1.5rem 0;">
                        <div class="project-tags" style="margin-bottom: 0.5rem;">
                            <span class="tag" style="background: transparent; border: none; padding: 0; font-size: 0.72rem; letter-spacing: 0.15em; color: var(--text-muted);">AI Interface</span>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 0;">Synapse System</h3>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card animate-up delay-2" data-category="enterprise">
                    <div class="project-img-wrapper" style="aspect-ratio: 4/3;">
                        <img src="https://picsum.photos/seed/aethel-delta/800/600" alt="DeltaFi Exchange" class="project-img">
                        <div class="project-hover-overlay">
                            <button class="btn btn-primary" onclick="openModal('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80', 'DeltaFi Dashboard')">View Details</button>
                        </div>
                    </div>
                    <div class="project-info" style="padding: 1.5rem 0;">
                        <div class="project-tags" style="margin-bottom: 0.5rem;">
                            <span class="tag" style="background: transparent; border: none; padding: 0; font-size: 0.72rem; letter-spacing: 0.15em; color: var(--text-muted);">Fintech System</span>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 0;">DeltaFi Exchange</h3>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card animate-up delay-3" data-category="spatial">
                    <div class="project-img-wrapper" style="aspect-ratio: 4/3;">
                        <img src="https://picsum.photos/seed/aethel-lumina/800/600" alt="Lumina VR" class="project-img">
                        <div class="project-hover-overlay">
                            <button class="btn btn-primary" onclick="openModal('https://images.unsplash.com/photo-1622616238682-15f2066f3661?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80', 'Lumina Virtual Room')">View Details</button>
                        </div>
                    </div>
                    <div class="project-info" style="padding: 1.5rem 0;">
                        <div class="project-tags" style="margin-bottom: 0.5rem;">
                            <span class="tag" style="background: transparent; border: none; padding: 0; font-size: 0.72rem; letter-spacing: 0.15em; color: var(--text-muted);">Spatial Design</span>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 0;">Lumina Environments</h3>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card animate-up delay-1" data-category="web3">
                    <div class="project-img-wrapper" style="aspect-ratio: 4/3;">
                        <img src="https://picsum.photos/seed/aethel-zenith/800/600" alt="Zenith NFT" class="project-img">
                        <div class="project-hover-overlay">
                            <button class="btn btn-primary" onclick="openModal('https://images.unsplash.com/photo-1614064641913-6b71a21411ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80', 'Zenith Marketplace')">View Details</button>
                        </div>
                    </div>
                    <div class="project-info" style="padding: 1.5rem 0;">
                        <div class="project-tags" style="margin-bottom: 0.5rem;">
                            <span class="tag" style="background: transparent; border: none; padding: 0; font-size: 0.72rem; letter-spacing: 0.15em; color: var(--text-muted);">Web3 Ecosystem</span>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 0;">Zenith Marketplace</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="cta-cinematic">
        <div class="container animate-up">
            <span class="cta-label">Initiate Protocol</span>
            <h2>Ready to build something that lasts?</h2>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Start Your Project <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>

    <!-- MODAL -->
    <div class="modal-overlay" id="projectModal">
        <div class="modal-content">
            <button class="modal-close" id="modalClose"><i class="fas fa-times"></i></button>
            <img src="" alt="Project Image" class="modal-img" id="modalImage">
            <h3 id="modalTitle" style="font-size: 1.8rem; margin-bottom: 1rem;"></h3>
            <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 2rem;">
                Detailed architectural analysis and implementation statistics for this legacy project. Built with precision for long-term scalability and cognitive ease.
            </p>
            <div style="display: flex; gap: 1rem;">
                <button class="btn btn-primary" onclick="window.location.href='<?php echo esc_url( home_url( '/contact' ) ); ?>'">Inquire Similar</button>
                <button class="btn btn-outline" id="modalCloseAction">Close Detail</button>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
