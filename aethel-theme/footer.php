    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand animate-up">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php bloginfo('name'); ?><span>.</span></a>
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <div class="footer-links animate-up delay-1">
                    <h4>Navigation</h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </div>
                <div class="footer-links animate-up delay-2">
                    <h4>Connect</h4>
                    <ul class="footer-social">
                        <li><a href="https://tiktok.com/@aethel" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a></li>
                        <li><a href="https://linkedin.com/company/aethel-design" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://instagram.com/aethel" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/aethel_design" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://youtube.com/@aethel" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- CHATBOT WIDGET -->
    <div class="chat-widget" id="chatWidget">
        <button class="chat-bubble" id="chatBubble" aria-label="Open AI Assistant">
            <i class="fas fa-comment-alt"></i>
        </button>
        <div class="chat-panel" id="chatPanel">
            <div class="chat-header">
                <div style="display: flex; align-items: center; gap: 0.8rem;">
                    <div class="status-dot" style="background: #22c55e; animation: pulseNeon 1.5s infinite; width: 8px; height: 8px; border-radius: 50%;"></div>
                    <div>
                        <h4 style="margin: 0; font-family: monospace; font-size: 0.85rem; letter-spacing: 1px;">AETHEL_CORE.EXE</h4>
                        <span style="font-size: 0.7rem; color: var(--text-muted);">AI Assistant</span>
                    </div>
                </div>
                <button class="chat-close-btn" id="chatCloseBtn"><i class="fas fa-times"></i></button>
            </div>
            <div class="chat-messages" id="chatMessages">
                <div class="chat-msg system">Aethel Cognitive Core active. How may I help you build your digital legacy?</div>
            </div>
            <form class="chat-input-area" id="chatInputArea">
                <input type="text" id="chatInput" placeholder="Send a transmission..." required autocomplete="off">
                <button type="submit" id="chatSendBtn"><i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
