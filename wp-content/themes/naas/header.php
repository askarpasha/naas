<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Digital Agency</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head();?>

    
   

</head>

<body>
    <header class="header-wrapper sticky-header">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="flex-center justify-content-between">
                            <!-- Header Logo Start -->
                            <?php
                            // $logoimage = get_custom_logo();
                            
                            ?>
                            <div class="logo">
                                <a href="#">
                                <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                    echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
                                    echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                            }
                            ?>
                            
                                </a>
                            </div>
                            <!-- Header Logo End -->

                            <div class="flex-center header-right">
                                <!-- Header Menu Start -->
                                <div class="d-none d-lg-flex header-right_menu">
                                    <nav class="main-menu">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'top-menu',
                                                'container' => 'ul',
                                                

                                            )
                                            );
                                        ?>
                                        <!-- <ul>
                                            <li>
                                                <a href="#">Home</a>
                                               
                                            </li>
                                            <li class="has-children">
                                                <a href="#">About Us</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Who we are</a></li>
                                                    <li><a href="#">Our Team</a></li>
                                                    <li><a href="#">Mision & Vision</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Services</a>
                                                
                                            </li>
                                            <li><a href="#">Contact</a></li>
                                        </ul> -->
                                    </nav>
                                </div>
                                <!-- Header Menu End -->

                                <!-- Header Actions Start -->
                                <div class="header-right_actions flex-center">
                                    <div class="header-social">
                                        <ul class="social-icon flex-center">
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

                                    <div class="hamburger d-block d-lg-none">
                                        <!-- Mobile Menu Hambarger Action Button Start -->
                                        <a class="header-action-btn header-action-btn-menu hamburger_button d-flex" href="#/" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-header">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                        <!-- Mobile Menu Hambarger Action Button End -->
                                    </div>

                                </div>
                                <!-- Header Social Actions End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-end" id="offcanvas-header">

<div class="offcanvas-header">
    <!-- Header Logo Start -->
    <div class="logo">
        <a href="#">
            <img src="https://naasdigital.com/wp-content/uploads/2022/06/logo-black-1.png" alt="">
        </a>
    </div>
    <!-- Header Logo End -->
    <button type="button" class="btn-close text-reset mobilemenu-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></button>
</div>
<div class="offcanvas-body">
    <!-- mobile menu navigation start -->
    <nav>
        <ul class="mobile-menu">
            <li>
                <a href="#">HOME</a>
            </li>
            <li class="menu-item-has-children">
                <a href="#">ABOUT US</a>
                <ul class="dropdown">
                    <li><a href="#">WHO WE ARE</a></li>
                    <li><a href="#">OUR TEAM</a></li>
                    <li><a href="#">MISION & VISION</a></li>
                </ul>
            </li>
            <li>
                <a href="#">SERVICES</a>
                
            </li>
            
            <li><a href="#">CONTACT US </a></li>
        </ul>
    </nav>
    <!-- mobile menu navigation end -->
</div>

</div>