
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header">            
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
                                            <a class="navbar-brand" href="#home">
                                                <?php if ($logo): ?>
													<a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" >
														<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
													</a>
												<?php endif; ?>
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
												<a href="<?php print $front_page; ?>" class="btn btn-lg">بازگشت به صفحه اصلی</a>
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->

            <section id="portfolio" class="portfolio sections">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_portfolio">
                            <div class="col-sm-12">
                                <div class="head_title text-center margin-top-80">
                                    <h2> <?php print $title; ?></h2>
									<div class="separator"></div>
                                    
									<div id="content-page" class="col-md-12 content-page">
										<div class="container">
											<div class="row">
												<div class="col-md-12 ">
													<div id="content" class="column">
														<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
														<a id="main-content"></a>
														<?php if ($tabs): ?>
															<div class="tabs">
																<?php print render($tabs); ?>
															</div>
														<?php endif; ?>
													<?php print render($page['help']); ?>
															<?php if ($action_links): ?>
													<ul class="action-links">
														<?php print render($action_links); ?>
														</ul>
																<?php endif; ?>
																<?php print render($page['content']); ?>
														<?php print $feed_icons; ?>
				</div>
			</div>
		</div>
	</div>
									
									</div>
                                    
                                </div>
                            </div>
                            

                            <div style="clear:both;"></div>     
                            <div id="portfoliowork"> 
                                
				</div>
			</div>
		</div>

                            </div>

                            <div style="clear:both;"></div>  
                        </div>
                    </div>
                </div><!-- End off container --> 
            </section> <!-- End off Work Section -->            



           


            

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
