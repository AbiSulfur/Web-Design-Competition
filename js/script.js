/* =========================================
   AETHEL - Premium Custom Interaction Scripts
   ========================================= */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Dynamic Cursor/Background Glow Coordinates
    const mouseGlow = document.getElementById('mouseGlow');
    if (mouseGlow) {
        window.addEventListener('mousemove', (e) => {
            mouseGlow.style.left = `${e.clientX}px`;
            mouseGlow.style.top = `${e.clientY}px`;
        });
    }

    // 2. Navbar Scroll Blur effect
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // 3. Mobile Menu Navigation Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const navLinks = document.getElementById('navLinks');
    
    if (mobileMenuBtn && navLinks) {
        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            
            const icon = mobileMenuBtn.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // 4. Scroll Animations (Intersection Observer)
    const animatedElements = document.querySelectorAll('.animate-up');
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const scrollObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    animatedElements.forEach(el => {
        scrollObserver.observe(el);
    });

    // 5. Active Link Highlight Tracker
    const currentLocation = location.href;
    const menuLinks = document.querySelectorAll('.nav-links a');
    menuLinks.forEach(link => {
        // Clear active class from all links first
        link.classList.remove('active');
        // Match base name or exact link
        if (currentLocation.includes(link.getAttribute('href'))) {
            link.classList.add('active');
        }
    });

    // 6. Live Statistics Counter (Observer triggers counting)
    const statNumbers = document.querySelectorAll('.stat-number');
    if (statNumbers.length > 0) {
        const countUp = (element) => {
            const target = parseInt(element.getAttribute('data-target'), 10);
            const duration = 1500; // ms
            const stepTime = 15; // ms
            const steps = duration / stepTime;
            const stepVal = target / steps;
            let current = 0;

            const timer = setInterval(() => {
                current += stepVal;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, stepTime);
        };

        const statsObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    countUp(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        statNumbers.forEach(num => {
            statsObserver.observe(num);
        });
    }

    // 7. Interactive Portfolio Filter
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    if (filterButtons.length > 0 && projectCards.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Toggle active states
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filterVal = btn.getAttribute('data-filter');

                projectCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    
                    if (filterVal === 'all' || category === filterVal) {
                        card.style.display = 'flex';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0) scale(1)';
                        }, 50);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(15px) scale(0.95)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }

    // 8. Immersive Case Study Modals Injection Toggles
    const caseTriggers = document.querySelectorAll('.case-study-trigger');
    const modalOverlay = document.getElementById('projectModal');
    const modalClose = document.getElementById('modalClose');

    if (caseTriggers.length > 0 && modalOverlay && modalClose) {
        const modalImg = document.getElementById('modalImg');
        const modalTag = document.getElementById('modalTag');
        const modalTitle = document.getElementById('modalTitle');
        const modalDesc = document.getElementById('modalDesc');

        caseTriggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                
                // Read datasets
                const title = trigger.getAttribute('data-title');
                const tag = trigger.getAttribute('data-tag');
                const img = trigger.getAttribute('data-img');
                const desc = trigger.getAttribute('data-desc');

                // Populate modal
                modalImg.src = img;
                modalImg.alt = title;
                modalTag.textContent = tag;
                modalTitle.textContent = title;
                modalDesc.textContent = desc;

                // Show modal overlay
                modalOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close on button click
        modalClose.addEventListener('click', () => {
            modalOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });

        // Close on background click
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) {
                modalOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // 9. High-Tech Terminal Console Logger (Success Submission Output)
    const contactForm = document.getElementById('contactConsoleForm');
    const formSuccess = document.getElementById('formSuccess');

    if (contactForm && formSuccess) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Retrieve fields
            const nameVal = document.getElementById('name').value;
            const emailVal = document.getElementById('email').value;
            const subjectVal = document.getElementById('subject').value;

            // Form fade-out transition
            contactForm.style.transition = 'opacity 0.4s ease';
            contactForm.style.opacity = '0';
            
            setTimeout(() => {
                contactForm.style.display = 'none';
                formSuccess.style.display = 'block';
                
                // Sci-Fi Log Messages Array
                const logs = [
                    `>> INITIALIZING CONNECTION MATRIX...`,
                    `>> SYSTEM CHECK: STATUS ACTIVE [OK]`,
                    `>> PARSING UPLINK PAYLOAD STREAMS...`,
                    `>> TRANSMISSION CONFIRMED FROM: "${nameVal.toUpperCase()}"`,
                    `>> COMM DIRECTORY REGISTERED: "${emailVal.toUpperCase()}"`,
                    `>> SUBJECT IDENTIFIED: "${subjectVal.toUpperCase()}"`,
                    `>> INJECTING DATA PACKAGE BLOCKS...`,
                    `>> [........................................] 100%`,
                    `>> TRANSMISSION UPLINK PARSED SUCCESSFUL!`,
                    `>> SECURE CHANNEL CLOSED WITH NEON VALLEY CORE.`,
                    `>> AETHEL WILL UPLINK WITH YOUR COMM PORT SHORTLY.`
                ];

                // Typewriter loop simulation
                let lineIndex = 0;
                const printLogLine = () => {
                    if (lineIndex < logs.length) {
                        const lineDiv = document.createElement('div');
                        lineDiv.style.marginBottom = '0.6rem';
                        lineDiv.style.borderRight = '2px solid var(--accent-cyan)';
                        lineDiv.style.display = 'inline-block';
                        lineDiv.style.width = '0';
                        lineDiv.style.whiteSpace = 'nowrap';
                        lineDiv.style.overflow = 'hidden';
                        
                        formSuccess.appendChild(lineDiv);
                        formSuccess.appendChild(document.createElement('br'));

                        const currentText = logs[lineIndex];
                        let charIndex = 0;

                        const typeChar = () => {
                            if (charIndex <= currentText.length) {
                                lineDiv.textContent = currentText.substring(0, charIndex);
                                lineDiv.style.width = 'auto'; // allow dynamic spacing
                                charIndex++;
                                setTimeout(typeChar, 15);
                            } else {
                                lineDiv.style.borderRight = 'none'; // remove cursor blink
                                lineIndex++;
                                setTimeout(printLogLine, 150); // next line delay
                            }
                        };
                        
                        typeChar();
                    }
                };

                printLogLine();

            }, 400);
        });
    }

    // 10. Floating Chatbot Controller with Groq API
    const chatWidget = document.getElementById('chatWidget');
    if (chatWidget) {
        const chatBubble = document.getElementById('chatBubble');
        const chatPanel = document.getElementById('chatPanel');
        const chatCloseBtn = document.getElementById('chatCloseBtn');
        const chatMessages = document.getElementById('chatMessages');
        const chatInputArea = document.getElementById('chatInputArea');
        const chatInput = document.getElementById('chatInput');

        // Fallback API key in case .env loading is blocked by browser local file security (file:/// protocol)
        const fallbackApiKey = '';

        // Store chat history PURELY in memory! Wipes out completely when closing page OR moving/navigating to another page!
        let chatMessagesHistory = [
            {
                role: 'system',
                content: 'Anda adalah Aethel AI, inti kognitif dari Aethel Digital Consultancy. Gunakan Bahasa Indonesia secara default. Nada bicara Anda elitis, profesional, minimalis, bernuansa sci-fi, dan sangat intelektual. Anda membantu pengguna merancang warisan digital (digital legacy), membangun antarmuka spasial, arsitektur AI, dan frontend Web3. Jawablah dengan sangat singkat, padat, dan presisi.'
            }
        ];

        // Load settings from .env at startup
        async function loadEnvSettings() {
            try {
                const response = await fetch('.env');
                if (response.ok) {
                    const text = await response.text();
                    const lines = text.split('\n');
                    lines.forEach(line => {
                        const parts = line.split('=');
                        if (parts.length >= 2) {
                            const key = parts[0].trim();
                            const value = parts.slice(1).join('=').trim();
                            // Strip single and double quotes if present
                            let cleanValue = value.replace(/^['"]|['"]$/g, '').trim();
                            if (key === 'GROQ_API_KEY' && cleanValue && cleanValue !== 'your_groq_api_key_here') {
                                sessionStorage.setItem('groq_api_key', cleanValue);
                            }
                        }
                    });
                }
            } catch (err) {
                console.warn('Unable to load environment variables from .env file.', err);
            }
        }

        // Call env loader
        loadEnvSettings();

        // Toggle chat panel window
        chatBubble.addEventListener('click', () => {
            chatPanel.classList.toggle('active');
            scrollToBottom();
        });

        chatCloseBtn.addEventListener('click', () => {
            chatPanel.classList.remove('active');
        });

        // Helper to append message bubble to UI
        const appendMessage = (role, content) => {
            const msgDiv = document.createElement('div');
            msgDiv.classList.add('chat-msg', role);
            msgDiv.textContent = content;
            chatMessages.appendChild(msgDiv);
            scrollToBottom();
        };

        const appendSystemMsg = (content) => {
            const msgDiv = document.createElement('div');
            msgDiv.classList.add('chat-msg', 'system');
            msgDiv.textContent = content;
            chatMessages.appendChild(msgDiv);
            scrollToBottom();
        };

        const scrollToBottom = () => {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        };

        // Handle sending user transmissions
        chatInputArea.addEventListener('submit', async (e) => {
            e.preventDefault();
            const text = chatInput.value.trim();
            if (!text) return;

            // Clear input
            chatInput.value = '';

            // 1. Render User Message
            appendMessage('user', text);
            chatMessagesHistory.push({ role: 'user', content: text });

            // 2. Retrieve groq key
            const apiKey = sessionStorage.getItem('groq_api_key') || fallbackApiKey;

            if (!apiKey || apiKey === 'your_groq_api_key_here') {
                setTimeout(() => {
                    appendSystemMsg('>> CONFIGURATION ERROR: Groq API Key not loaded. Please ensure you have written your key inside the .env file in the project root, and that the website is accessed via HTTP (e.g., http://localhost/Lomba/Web-Design-Competition/index.html) instead of directly opening the HTML file, as browser security blocks local text file access.');
                }, 400);
                return;
            }

            // 3. Render Typing/Thinking indicator
            const typingIndicator = document.createElement('div');
            typingIndicator.classList.add('chat-msg', 'system');
            typingIndicator.textContent = '>> PROCESSING TRANSMISSION...';
            chatMessages.appendChild(typingIndicator);
            scrollToBottom();

            try {
                // 4. Request Groq Chat Completion API
                const response = await fetch('https://api.groq.com/openai/v1/chat/completions', {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${apiKey}`,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        model: 'llama-3.3-70b-versatile',
                        messages: chatMessagesHistory,
                        temperature: 0.7,
                        max_tokens: 800
                    })
                });

                // Remove typing indicator
                chatMessages.removeChild(typingIndicator);

                if (!response.ok) {
                    const errData = await response.json();
                    throw new Error(errData.error?.message || `HTTP ${response.status}`);
                }

                const data = await response.json();
                const reply = data.choices[0].message.content;

                // 5. Append Assistant Response to UI
                appendMessage('assistant', reply);
                chatMessagesHistory.push({ role: 'assistant', content: reply });

            } catch (err) {
                // Remove typing indicator if exists
                if (chatMessages.contains(typingIndicator)) {
                    chatMessages.removeChild(typingIndicator);
                }
                appendSystemMsg(`>> SYSTEM CRITICAL ERROR: Uplink failed. Details: ${err.message}. Check your API Key settings.`);
            }
        });
    }

});
