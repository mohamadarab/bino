
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand pull-left" href="#home">
                                                <?php if ($logo): ?>
													<a  href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" >
														<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
													</a>
												<?php endif; ?>
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
												<?php print render($page['menu']); ?>
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->




            <!--home Section -->
            <section id="home" class="home">
                <div class="overlay">
                    <div class="home_skew_border">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="main_home_slider text-center slick-initialized slick-slider">
										<?php print render($page['slider']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scrooldown">
                            <a href="#feature"><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </section><!--End of home section -->


            <!--feature section -->
            <section id="feature" class="feature sections">
                <div class="container">
                    <div class="row">
                        <div class="main_feature text-center">
                            <?php print render($page['slogan']); ?>
                        </div>
                    </div>
                </div><!--End of container -->
            </section><!--End of feature Section -->
            <hr />


            <!-- History section -->
            <section id="history" class="history sections">
                <div class="container">
                    <div class="row">
                        <div class="main_history">
                            <div class="col-sm-6">
                                <div class="single_history_img">
                                   <?php print render($page['about-img']); ?>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single_history_content">
                                    
                                    <?php print render($page['about']); ?>

                                    <a href="about-us" class="btn btn-lg">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div><!--End of row -->
                </div><!--End of container -->
            </section><!--End of history -->


            <!-- service Section -->
            <section id="service" class="service">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_service">
                            <div class="col-md-6 col-sm-12 no-padding">

                                <div class="single_service single_service_text text-right">
                    
                                    <div class="row">
											<?php print render($page['service']); ?>
                                    </div>
                                </div>
                            </div><!-- End of col-sm-6 -->

                            <div class="col-md-6 col-sm-12 no-padding">
                                <figure class="single_service single_service_img">
                                    <div class="overlay-img"></div>
                                    <?php print render($page['service-img']); ?>
                                </figure><!-- End of figure -->
                            </div><!-- End of col-sm-6 -->

                        </div>
                    </div><!-- End of row -->
                </div><!-- End of Container-fluid -->
            </section><!-- End of service Section -->


            <section id="portfolio" class="portfolio sections">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_portfolio">
                            <div class="col-sm-12">
                                <div class="head_title text-center">
                                    <h2>نمونه کارها</h2>
                                    <div class="subtitle">
                                        این یک متن نمونه برای نمایش موقعیت است. این یک متن نمونه برای نمایش موقعیت است.
                                    </div>
                                    <div class="separator"></div>
                                </div>
                            </div>
                            

                            <div style="clear:both;"></div>     
                            <div id="portfoliowork"> 
                                <?php print render($page['portfolio']); ?>

                            </div>

                            <div style="clear:both;"></div>  
                        </div>
                    </div>
                </div><!-- End off container --> 
            </section> <!-- End off Work Section -->            



            <!-- Study Section --> 
            <section id="study" class="study text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="container">
                    <div class="row">
                        <div class="main_study_area sections">
                            <div class="head_title text-center">
                                <h2>پروژه های تکمیل شده</h2>
                                <div class="subtitle">
                                    این یک متن نمونه برای نمایش موقعیت است. این یک متن نمونه برای نمایش موقعیت است.
                                </div>
                                <div class="separator"></div>
                            </div>
                            <div class="single_study_content">
                                <div class="col-sm-6">
                                    <div class="single_study_slid_area">

                                        <div class="single_study_text">
                                            <div class="study_slider"> 
                                                 <?php print render($page['portfolio-complated']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="single_study_right_img">
                                    <div class="col-sm-6">
                                        <div class="single_study_img">
                                             <?php print render($page['comment-img']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row --> 
                </div><!-- End off Container --> 
            </section><!-- End off Study Section --> 


            

            

            <!-- Team Section -->
            <section id="team" class="team">
                <div class="main_team_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="head_title textwhite text-center margin-top-80">
                                    <h2>همکاران</h2>
                                    <div class="subtitle">
                                         این یک متن نمونه برای نمایش موقعیت است. این یک متن نمونه برای نمایش موقعیت است.
                                    </div>
                                    <div class="separator"></div>
                                </div><!-- End off Head_title -->

                                <div class="main_team">
                                    <ul>
                                         <?php print render($page['team']); ?>
                                        
                                    </ul>
                                </div>

                            </div><!-- End of main team contant --> 
                        </div>
                    </div><!-- End of container -->
                </div>
            </section><!-- End off Team Section -->

            <!-- Client Logo Section -->
            <section id="clogo" class="clogo">
                <div class="container">
                    <div class="row">
                        <div class="main_clogo sections text-center">
                            <div class="head_title text-center">
                                <h2>مشتریان ما</h2>
                                <div class="subtitle">
                                     این یک متن نمونه برای نمایش موقعیت است. این یک متن نمونه برای نمایش موقعیت است.
                                </div>
                                <div class="separator"></div>
                            </div><!-- End off Head_title -->

                            <?php print render($page['client']); ?>
                            
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            </section><!-- End off clogo Section -->


            <!-- Blog Section -->
            <section id="blog" class="blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_blog sections">
                            <div class="head_title text-center">
                                <h2>وبلاگ</h2>
                                <div class="subtitle">
                                     این یک متن نمونه برای نمایش موقعیت است. این یک متن نمونه برای نمایش موقعیت است.
                                </div>
                                <div class="separator"></div>
                            </div><!-- End off Head_title -->

                            <div class="main_blog_content">
                                
									 <?php print render($page['blog']); ?>
                                
                                
                            </div>

                        </div>
                    </div>
                </div><!-- End off container -->
            </section><!-- End off Blog Section -->


            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_contant sections">
                                <div class="head_title text-center">
                                    <h2>ارتباط با ما</h2>
                                    <div class="subtitle">
                                         این یک متن نمونه برای نمایش موقعیت است. این یک متن نمونه برای نمایش موقعیت است.
                                    </div>
                                    <div class="separator"></div>
                                </div><!-- End off Head_title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="main_contact_info">
                                            <div class="row">
                                                <div class="contact_info_content" id="contact">
                                                     <?php print render($page['contact-us']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="single_contant_left " id="contact">
										<form action="#" id="formid">
                                                <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
                                             <?php print render($page['contact-form']); ?>
											 </div>
											 </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End of contact section -->

            <section id="trial" class="trial text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="main_trial_area">
                    <div class="video_overlay sections">
                        <div class="container">
                            <div class="row">
                                <div class="main_trial">
                                    <div class="col-sm-12">
                                        <h2><span>خبرنامه</span></h2>
                                        <h4>با عضویت در خبرنامه از جدیدترین اخبار و مطالب مطلع شوید.</h4>
                                        <a href="<?php print $front_page; ?>" class="btn btn-lg">عضویت در خبرنامه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End of Trial section -->


            <!--Footer section-->
            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flowus">
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                            <a href=""><i class="fa fa-google-plus"></i></a>
                                            <a href=""><i class="fa fa-instagram"></i></a>
                                            <a href=""><i class="fa fa-youtube"></i></a>
                                            <a href=""><i class="fa fa-dribbble"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="http://drupalthemes.ir">Drupalthemes</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off footer Section-->











        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
