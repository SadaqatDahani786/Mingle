        </main>
        <footer class="footer mt-64 bg-primary w-full">
            <div class="container">        
                <div class="flex justify-between py-20">                    
                    <div class="w-1/3">
                        <?php dynamic_sidebar('footer-widgets'); ?>
                    </div>                    
                    <div class="newsletter flex-grow bg-gray-100">
                        <h3 class="bg-gray-100 py-5 text-5xl border-l-2 text-center text-gray-200"> Subscribe To Our Newsletter!</h3>
                        <div class="bg-white text-center border-l-2 border-gray-200 py-2">
                            <input type="email" placeholder="Enter Your Email..." class="w-3/4 h-20 border-2 text-3xl border-gray-200"/>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Footer Menu-->
            <div class="footer__menu bg-gray-100 w-full">
                <div class="container">
                    <?php wp_nav_menu(array('theme_location' => 'footer_primary')); ?>
                </div>
            </div>

            <!--Footer Copyright Text-->
            <div class="footer__copyright-text bg-primary border-t-4 border-gray-200">
                <div class="container">
                    <p class="text-3xl py-5 text-center text-gray-200">&copy; Sadaqat Ali 2020. All Rights Reserved.</p>
                </div>
            </div>

        </footer>
        <?php wp_footer(); ?>
    </body>
</html>