    </main>
    <!-- End main -->
    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="footer-col-title">Categories:</h2>
                    <ul id="menu-footer-categories">
                        <li class="menu-item"><a href="#">Home</a>
                        </li>
                        <li class="menu-item"><a href="#">About Us</a>
                        </li>
                        <li class="menu-item"><a href="#">Service</a>
                        </li>
                        <li class="menu-item"><a href="#">Schools</a>
                        </li>
                        <li class="menu-item"><a href="#">Feedback</a>
                        </li>
                        <li class="menu-item"><a href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2 class="footer-col-title">Do you have questions?</h2>
                    <ul class="footer-contacts">
                        <li>
                            <h3>Call Us To Canada</h3>
                            <tel>+1 403 929 23 28</tel>
                        </li>
                        <li>
                            <h3>Call Us To Russia</h3>
                            <tel>+7 921 304 55 14
                                <br>+8 985 141-1936</tel>
                        </li>
                        <li>
                            <h3>Write Us</h3>
                            <a href="mailto:incanrus@info.com" class="mailto">incanrus@info.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2 class="footer-col-title">We are in social networks</h2>
                    <ul class="footer-social">
                        <li><a href="#" class="facebook">Facebook</a>
                        </li>
                        <li><a href="#" class="google-plus">Google Plus</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container"><span class="copyright-label">INCANRUS &copy; 2015</span>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="<?php bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/main.min.js"></script>
    <?php if(is_page('contacts')){
    	echo '<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init() {
        myMap = new ymaps.Map("map", {
            center: [48.472331, 34.980741],
            zoom: 10
        });

        myPlacemark = new ymaps.Placemark([48.472331, 34.980741], {
            hintContent: \'Hint\',
            balloonContent: \'Hint!\'
        });

        myMap.geoObjects.add(myPlacemark);
    }
    </script>';
    } ?>
    <?php wp_footer(); ?>
</body>

</html>
