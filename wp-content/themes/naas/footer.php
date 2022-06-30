
    <footer class="footer-wrapper">
        <div class="shape-one">
            <img src="<?php bloginfo('template_directory');?> /assets/images/footer/shape-one.png" alt="Footer-Shape">
        </div>
        <div class="shape-two">
            <img src="<?php bloginfo('template_directory');?> /assets/images/footer/shape-two.png" alt="Footer-Shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Top Start -->
                    <div class="footer-top">
                        <!-- Section Title Start -->
                        <div class="section-title-center section-head mb-0 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <span class="subtitle">Get Updates</span>
                            <h2 class="title">Signup for Newsletter</h2>
                        </div>
                        <!-- Section Title End  -->
                        <div class="subcription-form-wrapper wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <!-- Subscription Form Start -->
                            <form id="mc-form" class="subscribe-form" action="#">
                                <input class="email" type="email" placeholder="Your email here" name="EMAIL">
                                <button class="button">Subscribe</button>
                            </form>
                            <!-- Subscription Form End -->
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-green-400"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-red-600"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                    <!-- Footer Top End -->
                </div>
            </div>

            <div class="row mb-n30">

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <?php
                     $footer_column_one = get_field('footer_column_one','options');
                     if( $footer_column_one ): ?>
               
                        <div class="footer-widget negative-margin">
                        <div class="logo">
                            <a href="#">
                                <img src="<?php echo $footer_column_one['logo']; ?>" alt="" width="120">
                            </a>
                        </div>
                        <ul class="footer-widget-list-icon">
                            <li><i class="fas fa-map-marker-alt"></i> <span><?php echo $footer_column_one['address']; ?></span></li>
                            <li><i class="fas fa-envelope"></i> <span><?php echo $footer_column_one['email']; ?></span> </li>
                            <li><i class="fas fa-phone"></i><span>+<?php echo $footer_column_one['mobile_number']; ?></span> </li>
                        </ul>
                        <ul class="social-icon d-flex flex-start">
                            <li>
                                <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
            
               
                
            <?php endif; ?>
                
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-30 d-flex justify-content-lg-center justify-content-sm-end wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <?php
                     $footer_column_two = get_field('footer_column_two','options');
                     if( $footer_column_two ): ?>
                        
                        <div class="footer-widget">
                        <h5 class="footer-widget-title"><?php echo $footer_column_two['column_title']; ?></h5>
                        <ul class="footer-widget-list">
                            <li><a href="#"><?php echo $footer_column_two['service_one']; ?></a></li>
                            <li><a href="#"><?php echo $footer_column_two['service_two']; ?></a></li>
                            <li><a href="#"><?php echo $footer_column_two['service_three']; ?></a></li>
                            <li><a href="#"><?php echo $footer_column_two['service_four']; ?></a></li>
                            <li><a href="#"><?php echo $footer_column_two['service_five']; ?></a></li>
                        </ul>
                    </div>
                    <?php endif; ?>   
                </div>
                 
                
                <!-- <div class="footer-widget">
                        <h5 class="footer-widget-title">Service</h5>
                        <ul class="footer-widget-list">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Photogaphy</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-4 col-sm-5 col-12 mb-30 d-flex justify-content-lg-center justify-content-md-end wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <div class="footer-widget">
                        <h5 class="footer-widget-title">Quick Links</h5>
                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'footer-menu',
                                                'container' => 'ul',
                                                'menu_class' => 'footer-widget-list',
                                                

                                            )
                                            );
                                        ?>
                        
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-sm-7 col-12 mb-30 d-flex justify-content-sm-end wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <div class="footer-widget">
                        <h5 class="footer-widget-title">Follow Us On</h5>
                        <ul class="instagrm">
                            <li>
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory');?> /assets/images/footer/insta-one.png" alt="Insta-Image">
                                    <div class="add-action">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory');?> /assets/images/footer/insta-two.png" alt="Insta-Image">
                                    <div class="add-action">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory');?> /assets/images/footer/insta-three.png" alt="Insta-Image">
                                    <div class="add-action">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory');?> /assets/images/footer/insta-four.png" alt="Insta-Image">
                                    <div class="add-action">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory');?> /assets/images/footer/insta-five.png" alt="Insta-Image">
                                    <div class="add-action">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory');?> /assets/images/footer/insta-six.png" alt="Insta-Image">
                                    <div class="add-action">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget End -->

            </div>
            <div class="row">
                <div class="col-12">


                <?php
                     $footer_copyright = get_field('footer_copyright','options');
                     if( $footer_copyright ): ?>
                        
                        <div class="copyright wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <p class="order-md-1 order-2"><?php echo $footer_copyright['company_name']; ?></p>

                        <ul class="footer-bootm-list order-md-2 order-1">
                            <li><a href="#"><?php echo $footer_copyright['link_one_text']; ?></a></li>
                            <li><a href="#"><?php echo $footer_copyright['link_two_text']; ?></a></li>
                        </ul>
                    </div>
                    <?php endif; ?>  


                    
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top fas fa-angle-double-up"></i>
        <i class="arrow-bottom fas fa-angle-double-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- JS Vendor, Plugins & Activation Script Files -->
    <?php wp_footer();?>
    <!-- Vendors JS -->
   

</body>

</html>