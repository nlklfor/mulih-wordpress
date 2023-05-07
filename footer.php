<footer class="footer">
        <div class="footer_container">
            <div class="footer_logo">
                <img src="<?php bloginfo('template_directory')?>/source/logo.png" class="footer_logo-img" alt="Website Logo" width="40" height="40">
                <p class="footer_logo-title">Mulih</p>
            </div>
            <div class="footer_form">
                <p class="footer_form-desc">We have built our reputation as true local <br> area experts.</p>
                <div class="footer_form-input">
                    <label class="footer_newsletter">Newsletter</label>
                    <form>
                        <input type="text" id="mail" name="mail" placeholder="example@gmail.com">
                        <button class="footer_form-btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer_list">
            <ul class="footer_list-service">
                <h2>Service</h2>
                <li>
                    <a>About Us</a>
                </li>
                <li>
                    <a>Careers</a>
                </li>
                <li>
                    <a>Terms & Conditions</a>
                </li>
                <li>
                    <a>Privacy & Policy</a>
                </li>
            </ul>
            <ul class="footer_list-community">
                <h2>Community</h2>
                <li>
                    <a>Find agents</a>
                </li>
                <li>
                    <a>Lifestyle</a>
                </li>
                <li>
                    <a>Legal notic</a>
                </li>
            </ul>
            <ul class="footer_list-follow">
                <h2>Follow us on</h2>
                <div class="footer_list-media">
                    <li>
                        <img src="<?php bloginfo('template_directory')?>/source/facebook.svg" alt="facebook">
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory')?>/source/instagram.svg" alt="instagram">
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory')?>/source/youtube.svg" alt="youtube">
                    </li>
                </div>
            </ul>
        </div>
    </footer>
    <script src="<?php bloginfo('template_directory')?>/script/countUp.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/script/script.js"></script>
</body>
<?php wp_footer()?>
</html>