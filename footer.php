<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

?>
	</main>

	<?php
		do_action('blocksy:content:after');
		do_action('blocksy:footer:before');

	
    <style>
        :root {
            --bg-light: #f9fafb;
            --bg-dark: #1f2937;
            --text-light: #111827;
            --text-dark: #ffffff;
            --text-muted-light: #6b7280;
            --text-muted-dark: #9ca3af;
            --border-color-light: #e5e7eb;
            --border-color-dark: #374151;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .dark-mode {
            background-color: var(--bg-dark);
            color: var(--text-dark);
        }

        .footer {
            background-color: var(--bg-light);
            padding: 1rem;
            transition: background-color 0.3s ease;
        }

        .dark-mode .footer {
            background-color: var(--bg-dark);
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 1rem;
        }

        .footer-grid {
            display: grid;
            gap: 1.5rem;
        }

        /* Mobile Layout (Default) */
        @media (max-width: 768px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                grid-template-areas: 
                    "org sports"
                    "terms tv"
                    "help help";
            }

            .footer-column:nth-child(1) { grid-area: org; }
            .footer-column:nth-child(2) { grid-area: sports; }
            .footer-column:nth-child(3) { grid-area: terms; }
            .footer-column:nth-child(4) { grid-area: tv; }
            .footer-column:nth-child(5) { grid-area: help; }
        }

        /* Desktop Layout */
        @media (min-width: 769px) {
            .footer-grid {
                grid-template-columns: repeat(5, 1fr);
            }
        }

        .footer-column h2 {
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--text-light);
        }

        .dark-mode .footer-column h2 {
            color: var(--text-dark);
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column ul li {
            margin-bottom: 1rem;
        }

        .footer-column a {
            text-decoration: none;
            color: var(--text-muted-light);
            transition: color 0.3s ease;
        }

        .footer-column a:hover {
            text-decoration: underline;
            color: var(--text-light);
        }

        .dark-mode .footer-column a {
            color: var(--text-muted-dark);
        }

        .dark-mode .footer-column a:hover {
            color: var(--text-dark);
        }

        .footer-divider {
            border: 0;
            border-top: 1px solid var(--border-color-light);
            margin: 1.5rem 0;
        }

        .dark-mode .footer-divider {
            border-top-color: var(--border-color-dark);
        }

        .footer-bottom {
            text-align: center;
        }

        .footer-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1.25rem;
        }

        .footer-logo img {
            max-width: 186px;
            height: auto;
        }

        .footer-copyright {
            display: block;
            font-size: 0.875rem;
            color: var(--text-muted-light);
        }

        .dark-mode .footer-copyright {
            color: var(--text-muted-dark);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.25rem;
            margin-top: 1.25rem;
            list-style: none;
            padding: 0;
        }

        .social-links li {
            display: inline;
        }

        .social-links a {
            color: var(--text-muted-light);
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--text-light);
        }

        .dark-mode .social-links a {
            color: var(--text-muted-dark);
        }

        .dark-mode .social-links a:hover {
            color: var(--text-dark);
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h2>組織</h2>
                    <ul>
                        <li><a href="https://ssangyongsports.eu.org/blog">部落格</a></li>
                        <li><a href="https://ssangyongsports.eu.org/contact">聯繫</a></li>
                        <li>
                            <a id="footer-badge" href="https://status.ssangyongsports.eu.org">載入狀態中</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h2>體育</h2>
                    <ul>
                        <li><a href="https://slb.ssport.eu.org/">雙龍職棒</a></li>
                        <li><a href="https://sba.ssangyongsports.eu.org/">雙龍職籃</a></li>
                        <li><a href="https://js.ssangyongsports.eu.org/">雙龍足球</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h2>條款</h2>
                    <ul>
                        <li><a href="https://ssangyongsports.eu.org/p">隱私政策</a></li>
                        <li><a href="https://ssangyongsports.eu.org/t">服務條款</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h2>雙龍體育TV</h2>
                    <ul>
                        <li><a href="https://ssangyongsports.eu.org/tv">官網</a></li>
                        <li><a href="https://ssangyongsports.eu.org/contact?mode=tv">註冊</a></li>
                        <li><a href="https://ssangyongsports.org/watch-tv">登入</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h2>幫助</h2>
                    <ul>
                        <li><a href="https://ssangyongsports.eu.org/support">幫助中心</a></li>
                        <li><a href="https://backed-live.ssport.eu.org/">線上客服</a></li>
                        <li><a href="https://forum.ssangyongsports.eu.org/d/1">論壇</a></li>
                        <li><a href="https://ssangyongsports.eu.org/contact">聯繫</a></li>
                    </ul>
                </div>
            </div>

            <hr class="footer-divider">

            <div class="footer-bottom">
                <div class="footer-logo">
                    <img src="https://ssangyongsports.eu.org/logo.png" alt="雙龍體育Logo">
                </div>
                <span class="footer-copyright">
                    Copyright © 2024 
                    <a href="https://ssangyongsports.eu.org/">雙龍體育</a>
                    保留一切權利。
                </span>
                <ul class="social-links">
                    <li>
                        <a href="https://www.facebook.com/ssangyongsports/">
                            <svg fill="currentColor" viewBox="0 0 24 24" width="20" height="20">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/ssport_org">
                            <svg fill="currentColor" viewBox="0 0 24 24" width="20" height="20"><path fill-rule="evenodd" d="M8.29 20.251c7.547 0 11.675-6.155 11.675-11.494 0-.175 0-.349-.012-.522A8.243 8.243 0 0 0 22 5.92a8.18 8.18 0 0 1-2.357.636 4.1 4.1 0 0 0 1.804-2.253 8.224 8.224 0 0 1-2.605.981 4.1 4.1 0 0 0-6.993 3.741A11.633 11.633 0 0 1 3.152 4.723a4.06 4.06 0 0 0-.554 2.061c0 1.422.728 2.677 1.833 3.412a4.093 4.093 0 0 1-1.858-.51v.051c0 1.986 1.416 3.644 3.292 4.021a4.118 4.118 0 0 1-1.853.07c.523 1.613 2.038 2.788 3.833 2.818a8.233 8.233 0 0 1-5.096 1.746c-.331 0-.659-.019-.98-.057a11.615 11.615 0 0 0 6.29 1.831"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                       <a href="https://www.instagram.com/ssangyongsports/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" className="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>

		do_action('blocksy:footer:after');
	?>
</div>

<?php wp_footer(); ?>

</body>
</html>
