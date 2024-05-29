<footer class="section footer-classic">
    <div class="footer-body">
        <div class="container">
            <div class="row justify-content-xl-between row-40 justify-content-lg-center">
                <div class="col-lg-6">
                    <div class="row row-20">
                        <div class="col-sm-4 col-6 wow fadeInUp" data-wow-delay=".1s">
                            <div class="footer-title">Who We Are</div>
                            <ul class="nav-list">
                                <li><a href="{{ url('about') }}">About Us</a></li>
                                <li><a href="{{ url('ministies') }}">Ministries</a></li>
                                <li><a href="{{ url('events') }}">Events</a></li>
                                <li><a href="{{ url('contacts') }}">Contacts</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-4 col-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="footer-title">Help</div>
                            <ul class="nav-list">
                                <li><a href="donate.html">Donate Now</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="/index.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 inset-right-100 wow fadeInRight" data-wow-delay=".3s">
                    <div class="footer-title">Contact Us</div>
                    <ul class="contact-list">
                        <li>Umoja 1, Nairobi, Kenya. Questions? Please write us at: <a class="link-secondary"
                                href="mailto:info@heavenvisionchurchinternational.com">info@heavenvisionchurchinternational.com</a>
                        </li>
                        <li><span>Call us:</span><a class="phone" href="tel:+254738900924">+254 738 900 924</a></li>
                    </ul>
                    <ul class="social-list">
                        <li><a
                                href="https://www.facebook.com/p/Heaven-Vision-Church-100081774011615/?paipv=0&eav=AfZBQtKJs9B5cUVeh_yxxkjayrZI2fjE0UyW8caiUQ9yKbs4HyGgFRuja28jThCmLD4&_rdr"><span
                                    class="icon fa fa-youtube-play"></span></a></li>
                        <li><a
                                href="https://www.facebook.com/p/Heaven-Vision-Church-100081774011615/?paipv=0&eav=AfZBQtKJs9B5cUVeh_yxxkjayrZI2fjE0UyW8caiUQ9yKbs4HyGgFRuja28jThCmLD4&_rdr"><span
                                    class="icon fa fa-twitter"></span></a></li>
                        <li><a
                                href="https://www.facebook.com/p/Heaven-Vision-Church-100081774011615/?paipv=0&eav=AfZBQtKJs9B5cUVeh_yxxkjayrZI2fjE0UyW8caiUQ9yKbs4HyGgFRuja28jThCmLD4&_rdr"><span
                                    class="icon fa fa-facebook-f"></span></a></li>
                        <li><a
                                href="https://www.facebook.com/p/Heaven-Vision-Church-100081774011615/?paipv=0&eav=AfZBQtKJs9B5cUVeh_yxxkjayrZI2fjE0UyW8caiUQ9yKbs4HyGgFRuja28jThCmLD4&_rdr"><span
                                    class="icon fa fa-rss"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-aside">
        <div class="container">
            <div class="row row-xl-40">
                <div class="col-12 wow fadeInUp" data-wow-delay=".2s">
                    <p>Heaven Vision Church International is committed to Bible teaching and joyful worship. We offer
                        ministries for children, youth, and adults of all ages. Join us and experience what it is like
                        to be a
                        part of our church family. Our mission is "To Know Jesus and make Him known; To Follow the
                        Leadership
                        of the Holy Spirit; and to Take God's Word to God's World."</p>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay=".4s">
                    <p class="rights">&copy;&nbsp;<span class="copyright-year"></span>&nbsp;Heaven Vision Church
                        International. All Rights Reserved. Developed by <a href="https://jrmhd.tech">Jrmhd
                            Technologies</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    // Automatically update the copyright year
    document.addEventListener('DOMContentLoaded', function() {
        const yearSpan = document.querySelector('.copyright-year');
        const currentYear = new Date().getFullYear();
        yearSpan.textContent = currentYear;
    });
</script>
