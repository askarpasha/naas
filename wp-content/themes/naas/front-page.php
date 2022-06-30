<?php get_header(); ?>

   

<!-- Slider Section End -->
 <?php
// $hero = get_field('hero');
?> 



<div class="slider-section">
<div class="swiper sliderone animation-style-01">
    <div class="swiper-wrapper">
    <?php
    if (have_rows('hero_repeater')):;
    ?>

    <?php while(have_rows('hero_repeater')) : the_row();

    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $buttonlink = get_sub_field('button_link');
    $buttontext = get_sub_field('button_text');
    $imageone = get_sub_field('image_one');
    $imagetwo = get_sub_field('image_two');
    ?>

<div class="swiper-slide ">
            <!-- Single Slider Start -->
            <div class="slingle-slider overlay slider-bg-image" data-bg-color="#E9EDF4" data-bg-image="<?php bloginfo('template_directory');?>/assets/images/slider/01_home_01.png">
                <span class="shape shape-one">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-1.png" alt="Shape">
        </span>
                <span class="shape shape-two layer" data-speed="1">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-2.png" alt="Shape">
        </span>
                <span class="shape shape-three">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-3.png" alt="Shape">
        </span>
                <span class="shape shape-four">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-4.png" alt="Shape">
        </span>
                <span class="shape shape-five layer" data-speed="2">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-5.png" alt="Shape">
        </span>
                <span class="shape shape-six">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-6.png" alt="Shape">
        </span>
                <span class="shape shape-seven">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-7.png" alt="Shape">
        </span>
                <span class="shape shape-eight">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-8.png" alt="Shape">
        </span>
                <span class="shape shape-nine">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-9.png" alt="Shape">
        </span>
                <span class="shape shape-ten">
            <img src="<?php bloginfo('template_directory');?> /assets/images/slider/shape-10.png" alt="Shape">
        </span>
                <div class="slider-content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5 align-self-center">
                                <!-- Slider Content Start -->
                                <div class="slider-content">
                                    <span class="subtitle"><?php echo $subtitle; ?> </span>
                                    <h2 class="title"><?php echo $title; ?></h2>
                                    <p class="text"><?php echo $text; ?></p>

                                
                                    <a href="<?php echo $buttonlink; ?>" class="btn btn-style-one"> <span><?php echo $buttontext; ?></span> </a>
                                   
                                
                                </div>
                                <!-- Slider Content End -->
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <!-- Slider Image Start -->
                                

                                <div class="slider-image">
                                <div class="slider-image-one js-tilt">
                                
                                <img src="<?php echo $imageone; ?>" />
                                    </div>
                                    <div class="slider-image-two js-tilt">
                                    <img src="<?php echo $imagetwo; ?>" />
                                    </div>
                                    <span class="shape shape-circle">
                                <img src="<?php bloginfo('template_directory');?> /assets/images/slider/circle.png" alt="Shape">
                            </span>
                                </div>
                                <!-- Slider Image End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider End -->
        </div>

<?php endwhile; ?>
<?php endif; ?>
       


    </div>
    <div class="swiper-pagination sliderone-pagination"></div>
</div>
</div>
<!-- Slider Section Start -->

<!-- Plan Section Start -->
<div class="section-padding">
<div class="container">
    <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 mb-n30">
                <?php
            if (have_rows('features')):;
            ?>

            <?php while(have_rows('features')) : the_row();

            $number = get_sub_field('number');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $image_icon = get_sub_field('image_icon');
            ?>
        <div class="col mb-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
            <!-- Single Plan Start -->
            <div class="single-plan">
                <div class="single-plan-head">
                    <div class="title-number">
                        <span class="number"><?php echo $number ?></span>
                        <h6 class="title"><?php echo $title ?></h6>
                    </div>
                    <div class="icon">
                        <img src="<?php echo $image_icon ?>" alt="icon">
                    </div>
                </div>
                <p class="single-plan-text"><?php echo $text ?></p>
            </div>
            <!-- Single Plan End -->
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
       
    </div>
</div>
</div>
<!-- Plan Section End -->

<!-- Portfolio Carousel Start -->
<div class="section-padding-bottom portfolio-carousel-wrapper">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-head wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
            <?php
            $portfolio_title = get_field('portfolio_title');
            if( $portfolio_title ): ?>
               
                <span class="subtitle"><?php echo $portfolio_title['sub_title']; ?></span>
                <h2 class="title"><?php echo $portfolio_title['title']; ?></h2>
                <p class="text"><?php echo $portfolio_title['text']; ?></p>
            
               
                
            <?php endif; ?>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="swiper portfolio-carousel parent-gallery">
                <div class="swiper-wrapper">
                <?php
                if (have_rows('portfolio')):;
                ?>

                <?php while(have_rows('portfolio')) : the_row();

                $subtitle = get_sub_field('sub_title');
                $title = get_sub_field('title');
                $image = get_sub_field('image');
                
                ?>
                    <div class="swiper-slide">
                        <div class=" single-portfolio">
                            <a class="thumbnail" href="#">
                                <img src="<?php echo $image; ?>" alt="">
                            </a>
                            <div class="content">
                                <span class="subtitle"><?php echo $subtitle; ?></span>
                                <h3 class="title">
                                    <a href="#"><?php echo $title; ?></a>
                                </h3>
                            </div>
                            <div class="lightbox">
                                <a class="item" href="<?php echo $image; ?>"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                   
                    <?php endwhile; ?>
                    <?php endif; ?>
       
                </div>
                <!--== Add Swiper navigation Buttons ==-->
                <div class="portfolio-swiper-arrow">
                    <div class="swiper-btn swiper-btn-prev">
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="swiper-btn swiper-btn-next">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Portfolio Carousel Start -->




<!-- Testimonial Section Start -->
<div class="testimonial">
<div class="container">
    <div class="testimonial-wrapper">
        <div class="large-quote">
            <img src="<?php bloginfo('template_directory');?> /assets/images/quote/quote-1.png" alt="quote">
        </div>
        
        <div class="row">
            <div class="col-lg-12 wow fadeIn" data-wow-duration=".6s" data-wow-delay=".1s">
                <div class="testimonial-inner">
                    <!-- Section Title Start -->
                    <div class="section-title-center section-head">
                    <?php
                     $testimonial_title = get_field('testimonial_title');
                     if( $testimonial_title ): ?>
                        
                        <span class="subtitle"><?php echo $testimonial_title['sub_title']; ?></span>
                        <h2 class="title"><?php echo $testimonial_title['title']; ?></h2>
                        
                        
                         
                     <?php endif; ?>
                       
                    </div>
                    <!-- Section Title End  -->

                    <div class="swiper testimonialone">
                        <div class="swiper-wrapper">
                        <?php
                          if (have_rows('testimonials')):;
                          ?>

                          <?php while(have_rows('testimonials')) : the_row();

                          $text = get_sub_field('text');
                          $avatar = get_sub_field('avatar');
                          $person_name = get_sub_field('person_name');
                          $job_role = get_sub_field('job_role');
                       
                          ?>


                            <div class="swiper-slide">
                                <!--== Start Testimonial Item ==-->
                                <div class="testimonial-single">
                                    <div class="testimonial-single-quote">
                                        <img src="<?php bloginfo('template_directory');?> /assets/images/quote/quote-2.png" alt="Quote">
                                    </div>
                                    <div class="testimonial-single-content">
                                        <p class="client-text"><?php echo $text; ?></p>
                                        <div class="client-info">
                                            <img src="<?php echo $avatar; ?>" alt="">
                                            <h4 class="name"><?php echo $person_name; ?>, <span class="designation"><?php echo $job_role; ?></span></h4>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Testimonial Item ==-->
                            </div>

                            
                    <?php endwhile; ?>
                    <?php endif; ?>
                            
                        </div>

                        <!--== Add Swiper navigation Buttons ==-->
                        <div class="swiper-arrow">
                            <div class="swiper-btn swiper-btn-prev">
                                <img src="<?php bloginfo('template_directory');?> /assets/images/testimonial/arrow-1.png" alt="Arrow" class="arrow-1">
                                <img src="<?php bloginfo('template_directory');?> /assets/images/testimonial/arrow-2.png" alt="Arrow" class="arrow-2">
                            </div>
                            <div class="swiper-btn swiper-btn-next">
                                <img src="<?php bloginfo('template_directory');?> /assets/images/testimonial/arrow-1.png" alt="Arrow" class="arrow-1">
                                <img src="<?php bloginfo('template_directory');?> /assets/images/testimonial/arrow-2.png" alt="Arrow" class="arrow-2">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer();?>