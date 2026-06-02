<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

    <!-- ── PAGE HERO ── -->
    <section class="page-hero">
        <div class="container">
            <span class="page-hero-kicker animate-fade">Secure Comms</span>
            <h1 class="page-hero-title animate-fade">
                <?php single_post_title(); ?>
            </h1>
        </div>
    </section>

    <!-- ── CONTACT GRID (Right side form) ── -->
    <section class="contact-section" style="padding: clamp(5rem, 10vw, 8rem) 0;">
        <div class="container">
            <div class="contact-grid">
                
                <!-- LEFT COL: Status & Info -->
                <div class="contact-info-col animate-up">
                    <div class="status-dashboard">
                        <div class="status-indicator">
                            <div class="status-dot"></div>
                            Systems Online & Ready
                        </div>
                        <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; letter-spacing: -0.03em; margin-bottom: 2rem; color: #fff;">Let's engineer your legacy.</h2>
                        
                        <div class="info-blocks" style="display: flex; flex-direction: column; gap: 2.5rem; margin-top: 3rem;">
                            <div class="info-block" style="display: flex; gap: 1.5rem; align-items: flex-start;">
                                <div class="info-icon" style="font-size: 1.5rem; color: var(--text-muted);"><i class="fas fa-map-marker-alt"></i></div>
                                <div>
                                    <h4 style="font-size: 0.9rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; color: #fff; margin-bottom: 0.5rem;">Headquarters</h4>
                                    <p style="color: var(--text-muted); margin: 0; line-height: 1.6;">Level 42, Nexus Tower<br>101 Cyber Avenue<br>Neo-Tokyo, 100-0001</p>
                                </div>
                            </div>
                            <div class="info-block" style="display: flex; gap: 1.5rem; align-items: flex-start;">
                                <div class="info-icon" style="font-size: 1.5rem; color: var(--text-muted);"><i class="fas fa-envelope"></i></div>
                                <div>
                                    <h4 style="font-size: 0.9rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; color: #fff; margin-bottom: 0.5rem;">Direct Link</h4>
                                    <p style="color: var(--text-muted); margin: 0; line-height: 1.6;">hello@aethel.design<br>careers@aethel.design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COL: Terminal Form -->
                <div class="console-form-container animate-up delay-1">
                    <div class="terminal-header">
                        <div class="terminal-dots">
                            <div class="terminal-dot dot-red"></div>
                            <div class="terminal-dot dot-yellow"></div>
                            <div class="terminal-dot dot-green"></div>
                        </div>
                        <div class="terminal-title">contact_protocol.exe</div>
                    </div>
                    
                    <form class="cyber-form" id="contactForm">
                        <div class="form-group">
                            <label for="name">Identifier (Name)</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Comm-Link (Email)</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Protocol Type (Subject)</label>
                            <select id="subject" class="form-control" required style="appearance: none; -webkit-appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23ffffff%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 1.5rem top 50%; background-size: 0.65rem auto;">
                                <option value="" disabled selected>Select an option</option>
                                <option value="web3">Web3 Architecture</option>
                                <option value="ai">Cognitive AI Interface</option>
                                <option value="spatial">Spatial Computing</option>
                                <option value="other">Other Inquiry</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Data Payload (Message)</label>
                            <textarea id="message" class="form-control" placeholder="Describe your project requirements..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center; margin-top: 1rem;">Transmit Data <i class="fas fa-paper-plane"></i></button>
                    </form>

                    <div class="success-terminal" id="successTerminal">
> Initializing connection...
> Handshake successful.
> Data payload encrypted.
> Transmitting...
> [SUCCESS] Transmission received.
> Aethel Core will respond shortly.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── FAQ SECTION ── -->
    <section class="section-editorial" style="padding: clamp(6rem, 12vw, 10rem) 0;">
        <div class="container">
            <div class="editorial-header" style="margin-bottom: 5rem;">
                <div class="animate-up">
                    <span class="section-label">Knowledge Base</span>
                    <h2>Frequently Asked<br>Questions.</h2>
                </div>
            </div>

            <div class="faq-container" style="max-width: 800px; margin: 0 auto;">
                <!-- Original 5 FAQs -->
                <div class="faq-item animate-up delay-1" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        What is your typical project timeline?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">Our standard timeline ranges from 8 to 12 weeks for comprehensive platform architecture. However, timelines scale dynamically based on the technical complexity and scope of the requested deliverables.</p>
                    </div>
                </div>

                <div class="faq-item animate-up delay-2" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        Do you offer post-launch support?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">Yes. Every deployed system comes with a 90-day technical assurance period. For continuous evolution, we offer retainer-based "Evolution Protocols" to ensure your platform adapts to future technologies.</p>
                    </div>
                </div>

                <div class="faq-item animate-up delay-3" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        Can you integrate with existing legacy systems?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">Absolutely. Our engineers specialize in creating seamless bridges between legacy infrastructure and next-generation frontends, ensuring data integrity without sacrificing the user experience.</p>
                    </div>
                </div>

                <div class="faq-item animate-up delay-4" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        What technologies do you specialize in?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">We leverage a modern stack including React, Next.js, and WebGL for interfaces, paired with robust backend technologies (Node.js, Python for AI) and blockchain protocols (Solidity, Ethers.js) when required.</p>
                    </div>
                </div>

                <div class="faq-item animate-up delay-1" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        How do you structure project pricing?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">We engage exclusively on a fixed-bid basis mapped to highly detailed deliverables, or a dedicated team retainer model for ongoing product development. We do not bill hourly.</p>
                    </div>
                </div>

                <!-- 5 New FAQs requested by user previously -->
                <div class="faq-item animate-up delay-2" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        Do you work with startups or just enterprise?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">Both. We partner with established enterprises looking to innovate, as well as heavily funded Web3 and AI startups needing a world-class foundation.</p>
                    </div>
                </div>

                <div class="faq-item animate-up delay-3" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        What is your stance on responsive design?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">It is non-negotiable. Every system is architected "mobile-first" but optimized for spatial interfaces, ensuring absolute fluidity across all screen dimensions.</p>
                    </div>
                </div>

                <div class="faq-item animate-up delay-4" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        Are your design assets transferred to the client?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">Yes. Upon project completion, all intellectual property, Figma design systems, and source code repositories are fully transferred to your ownership.</p>
                    </div>
                </div>

                <div class="faq-item animate-up delay-1" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        Do you offer 3D asset creation?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">We have in-house technical artists capable of producing optimized WebGL assets, but for complex character or hyper-realistic renders, we partner with specialized studios.</p>
                    </div>
                </div>

                <div class="faq-item animate-up delay-2" style="border-bottom: 1px solid var(--glass-border); padding: 2rem 0;">
                    <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Outfit', sans-serif; font-size: 1.25rem; font-weight: 700; color: #fff;">
                        How involved will our team be during development?
                        <i class="fas fa-chevron-down" style="font-size: 0.9rem; color: var(--text-muted); transition: transform 0.3s;"></i>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease;">
                        <p style="color: var(--text-muted); margin: 1.5rem 0 0; line-height: 1.7;">We maintain continuous integration cycles. You will have access to staging environments and weekly syncs, ensuring total transparency as the architecture takes shape.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
