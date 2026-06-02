<?php
/**
 * Template Name: Services
 */
get_header(); ?>

    <!-- ── PAGE HERO ── -->
    <section class="page-hero">
        <div class="container">
            <span class="page-hero-kicker animate-fade">Core Architecture</span>
            <h1 class="page-hero-title animate-fade">
                <?php single_post_title(); ?>
            </h1>
        </div>
    </section>

    <!-- ── DETAILED CAPABILITIES ── -->
    <!-- Service 01 -->
    <section class="service-block">
        <div class="container">
            <div class="service-block-grid">
                <div class="animate-up">
                    <span class="service-block-tag">01 // Web3 Architecture</span>
                    <h2>Decentralized<br>Ecosystems.</h2>
                    <p style="font-size: 1.05rem; color: var(--text-muted); line-height: 1.8; margin: 1.5rem 0;">We translate complex blockchain protocols into intuitive, frictionless user interfaces. By removing the cognitive load of interacting with smart contracts, we make Web3 accessible to the masses while maintaining cryptographic integrity.</p>
                    <ul class="service-block-list">
                        <li>DeFi Interface Engineering</li>
                        <li>NFT Marketplace Systems</li>
                        <li>Wallet Integration UI/UX</li>
                        <li>Smart Contract Visualization</li>
                    </ul>
                    <div class="service-tech-tags">
                        <span class="service-tech-tag">React</span>
                        <span class="service-tech-tag">Ethers.js</span>
                        <span class="service-tech-tag">Solidity</span>
                        <span class="service-tech-tag">WebGL</span>
                    </div>
                </div>
                <div class="animate-up delay-2">
                    <img src="https://picsum.photos/seed/aethel-web3/1200/800" alt="Web3 Design" class="service-block-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 02 -->
    <section class="service-block" style="background: rgba(255,255,255,0.01);">
        <div class="container">
            <div class="service-block-grid reverse">
                <div class="animate-up delay-1">
                    <span class="service-block-tag">02 // Cognitive AI Design</span>
                    <h2>Interfaces<br>That Adapt.</h2>
                    <p style="font-size: 1.05rem; color: var(--text-muted); line-height: 1.8; margin: 1.5rem 0;">We design interfaces that predict user intent. By integrating generative AI and predictive analytics directly into the UI layer, our systems adapt to human behavior in real-time, reducing friction to near zero.</p>
                    <ul class="service-block-list">
                        <li>Generative UI Components</li>
                        <li>Predictive Search Architecture</li>
                        <li>AI Agent Integration</li>
                        <li>Context-Aware Dashboards</li>
                    </ul>
                    <div class="service-tech-tags">
                        <span class="service-tech-tag">OpenAI</span>
                        <span class="service-tech-tag">TensorFlow</span>
                        <span class="service-tech-tag">Next.js</span>
                        <span class="service-tech-tag">Python</span>
                    </div>
                </div>
                <div class="animate-up">
                    <img src="https://picsum.photos/seed/aethel-ai/1200/800" alt="Cognitive AI" class="service-block-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 03 -->
    <section class="service-block">
        <div class="container">
            <div class="service-block-grid">
                <div class="animate-up">
                    <span class="service-block-tag">03 // Spatial Computing</span>
                    <h2>Beyond<br>The Screen.</h2>
                    <p style="font-size: 1.05rem; color: var(--text-muted); line-height: 1.8; margin: 1.5rem 0;">We are pioneering the transition from 2D screens to spatial environments. We engineer WebXR interfaces that feel native to human perception, bridging the gap between physical reality and digital data.</p>
                    <ul class="service-block-list">
                        <li>WebXR Architecture</li>
                        <li>3D Data Visualization</li>
                        <li>Spatial Interaction Design</li>
                        <li>Immersive E-Commerce</li>
                    </ul>
                    <div class="service-tech-tags">
                        <span class="service-tech-tag">Three.js</span>
                        <span class="service-tech-tag">WebXR</span>
                        <span class="service-tech-tag">Unity</span>
                        <span class="service-tech-tag">WebGL</span>
                    </div>
                </div>
                <div class="animate-up delay-2">
                    <img src="https://picsum.photos/seed/aethel-spatial/1200/800" alt="Spatial Computing" class="service-block-img">
                </div>
            </div>
        </div>
    </section>

    <!-- ── HORIZONTAL PROCESS TIMELINE ── -->
    <section class="process-horizontal">
        <div class="container">
            <div class="animate-up">
                <span class="section-label">Methodology</span>
                <h2>The Protocol.</h2>
            </div>
            
            <div class="process-h-steps">
                <div class="process-h-step animate-up delay-1">
                    <div class="process-h-num">01</div>
                    <div class="process-h-name">Discovery & Architecture</div>
                    <p class="process-h-desc">Mapping the complex parameters of your system and defining a rigid architectural foundation.</p>
                </div>
                <div class="process-h-step animate-up delay-2">
                    <div class="process-h-num">02</div>
                    <div class="process-h-name">Cognitive Prototyping</div>
                    <p class="process-h-desc">Building wireframes centered solely on human intent, removing all unnecessary friction.</p>
                </div>
                <div class="process-h-step animate-up delay-3">
                    <div class="process-h-num">03</div>
                    <div class="process-h-name">Visual Engineering</div>
                    <p class="process-h-desc">Applying our premium monochrome aesthetic logic to breathe life into the underlying structures.</p>
                </div>
                <div class="process-h-step animate-up delay-4">
                    <div class="process-h-num">04</div>
                    <div class="process-h-name">Deployment Protocol</div>
                    <p class="process-h-desc">Rigorous testing, optimization, and a seamless launch into the production environment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="cta-cinematic">
        <div class="container animate-up">
            <span class="cta-label">System Readiness</span>
            <h2>Initiate your legacy.</h2>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Establish Connection <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>

<?php get_footer(); ?>
