<?php $this->load->view("headerCss");?>
<body class="">
<div id="wrapper" class="clearfix">
	<!-- preloader -->
	<div id="preloader">
		<div id="spinner">
			<img class="floating" src="<?php echo base_url();?>assets/images/preloaders/13.png" alt="">
			<h5 class="line-height-50 font-18 ml-15">Loading...</h5>
		</div>
		<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
	</div>

	<!-- Header -->
	<header id="header" class="header">
		<div class="header-top border-bottom sm-text-center p-0 bg-theme-color-blue">
			<div class="container pt-5 pb-5">
				<div class="row">
					<div class="col-md-6 sm-text-center">
						<div class="widget no-border m-0">
							<ul class="list-inline xs-text-center m-0">
								<li class="m-0 pl-10 pr-10"> 
									<a href="#" class="text-white"><i class="fa fa-phone"></i> 00-123-456</a>
								</li>
								<li class="m-0 pl-10 pr-10"> 
									<a href="#" class="text-white"><i class="fa fa-envelope-o mr-5"></i> contact@yourdomain.com</a> 
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 text-right sm-text-center">
						<div class="widget no-border m-0">
							<p class="mb-0 text-white">Donation Hotline :<a class="text-white font-weight-600" href="tel:"> +011-223-3445</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-nav">
			<div class="header-nav-wrapper navbar-scrolltofixed bg-white">
				<div class="container">
					<nav id="menuzord-right" class="menuzord default">
						<a class="menuzord-brand pull-left flip xs-pull-center mt-20 pt-5 mt-sm-10 pt-sm-0" href="index-mp-layout1.html">
							<img src="<?php echo base_url();?>assets/images/logo-wide.png" alt="">
						</a>
						<ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a>
                <ul class="dropdown">
                  <li><a href="#">Multi Page Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-mp-layout1.html">Layout1</a></li>
                      <li><a href="index-mp-layout2.html">Layout2</a></li>
                      <li><a href="index-mp-layout3.html">Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Single Page Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-sp-layout1.html">Layout1</a></li>
                      <li><a href="index-sp-layout2.html">Layout2</a></li>
                      <li><a href="index-sp-layout3.html">Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Boxed Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-boxed-mp-layout1.html">Boxed Multi Page Layout1</a></li>
                      <li><a href="index-boxed-mp-layout2.html">Boxed Multi Page Layout2</a></li>
                      <li><a href="index-boxed-mp-layout3.html">Boxed Multi Page Layout3</a></li>
                      <li><a href="index-boxed-sp-layout1.html">Boxed Single Page Layout1</a></li>
                      <li><a href="index-boxed-sp-layout2.html">Boxed Single Page Layout2</a></li>
                      <li><a href="index-boxed-sp-layout3.html">Boxed Single Page Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">RTL Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-rtl-mp-layout1.html">RTL Multi Page Layout1</a></li>
                      <li><a href="index-rtl-mp-layout2.html">RTL Multi Page Layout2</a></li>
                      <li><a href="index-rtl-mp-layout3.html">RTL Multi Page Layout3</a></li>
                      <li><a href="index-rtl-sp-layout1.html">RTL Single Page Layout1</a></li>
                      <li><a href="index-rtl-sp-layout2.html">RTL Single Page Layout2</a></li>
                      <li><a href="index-rtl-sp-layout3.html">RTL Single Page Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dark Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-dark-mp-layout1.html">Dark Multi Page Layout1</a></li>
                      <li><a href="index-dark-mp-layout2.html">Dark Multi Page Layout2</a></li>
                      <li><a href="index-dark-mp-layout3.html">Dark Multi Page Layout3</a></li>
                      <li><a href="index-dark-sp-layout1.html">Dark Single Page Layout1</a></li>
                      <li><a href="index-dark-sp-layout2.html">Dark Single Page Layout2</a></li>
                      <li><a href="index-dark-sp-layout3.html">Dark Single Page Layout3</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
							<li><a href="#">Features</a>
								<ul class="dropdown">
									<li><a href="features-preloader.html">Preloaders</a></li>
									<li><a href="#">Header</a>
										<ul class="dropdown">
											<li><a href="features-header-style1.html">Header Style1</a></li>
											<li><a href="features-header-style2.html">Header Style2</a></li>
											<li><a href="features-header-style3.html">Header Style3</a></li>
											<li><a href="features-header-style4.html">Header Style4</a></li>
											<li><a href="features-header-style5.html">Header Style5</a></li>
											<li><a href="features-header-style6.html">Header Style6</a></li>
											<li><a href="features-header-style7.html">Header Style7</a></li>
											<li><a href="features-header-vertical-nav.html">Vertical Header</a></li>
										</ul>
									</li>
									<li><a href="#">Page Title</a>
										<ul class="dropdown">
											<li><a href="features-page-title-text-left.html">Text Left</a></li>
											<li><a href="features-page-title-text-center.html">Text Center</a></li>
											<li><a href="features-page-title-text-right.html">Text Right</a></li>
											<li><a href="features-page-title-mini-version.html">Mini Version</a></li>
											<li><a href="features-page-title-big-version.html">Big Version</a></li>
											<li><a href="features-page-title-extra-big-version.html">Extra Big Version</a></li>
											<li><a href="features-page-title-bg-white.html">Bg White</a></li>
											<li><a href="features-page-title-bg-image.html">Bg Image</a></li>
											<li><a href="features-page-title-bg-image-parallax.html">Bg Image Parallax</a></li>
											<li><a href="features-page-title-bg-video.html">Bg Video</a></li>
											<li><a href="features-page-title-full-transparent.html">Full Transparent</a></li>
										</ul>
									</li>
									<li><a href="#">Footer</a>
										<ul class="dropdown">
											<li><a href="features-footer-style1.html#footer">Footer Dark One</a></li>
											<li><a href="features-footer-style2.html#footer">Footer Dark Two</a></li>
											<li><a href="features-footer-style3.html#footer">Footer Dark Three</a></li>
											<li><a href="features-footer-style4.html#footer">Footer Dark Four</a></li>
											<li><a href="features-footer-style5.html#footer">Footer Dark Five</a></li>
											<li><a href="features-footer-style6.html#footer">Footer Dark Six</a></li>
											<li><a href="features-footer-style7.html#footer">Footer Dark Seven</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#">About Us</a>
								
										<ul class="dropdown">
											<li><a href="<?php echo base_url();?>index.php/welcome/aboutus"> School Teachers</a></li>
											<li><a href="<?php echo base_url();?>index.php/welcome/schoolHistory">School History</a></li>
											<li><a href="<?php echo base_url();?>index.php/welcome/aboutus">Principal's View</a></li>
											<li><a href="<?php echo base_url();?>index.php/welcome/aboutus">Manager's View</a></li>
											<li><a href="<?php echo base_url();?>index.php/welcome/aboutus">School History</a></li>
										</ul>
							</li>
							<li><a href="#">Gallery</a>
								<ul class="dropdown">
									<li><a href="page-course1.html">Events</a></li>
									<li><a href="page-course2.html">Sports</a></li>
									<li><a href="page-course-details.html">Activites</a></li>
									<li><a href="page-course-details.html">Winner</a></li>
									<li><a href="page-course-details.html">Achievement</a></li>
								</ul>
							</li>
							<li><a href="#">School Rules</a>
								<ul class="dropdown">
									<li><a href="page-teachers-3col.html">For Admission</a></li>
									<li><a href="page-teachers-4col.html">CBSE</a></li>
									
								</ul>
							</li>
							<li><a href="#">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Blog Classic</a>
										<ul class="dropdown">
											<li><a href="blog-classic-no-sidebar.html">Blog Classic No Sidebar</a></li>
											<li><a href="blog-classic-left-sidebar.html">Blog Classic Left Sidebar</a></li>
											<li><a href="blog-classic-right-sidebar.html">Blog Classic Right Sidebar</a></li>
											<li><a href="blog-classic-both-sidebar.html">Blog Classic Both Sidebar</a></li>
										</ul>
									</li>
									<li><a href="#">Blog Grid</a>
										<ul class="dropdown">
											<li><a href="blog-grid-2-column.html">Blog Grid 2 Column</a></li>
											<li><a href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
											<li><a href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
										</ul>
									</li>
									<li><a href="#">Blog Single</a>
										<ul class="dropdown">
											<li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
											<li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
											<li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
										</ul>
									</li>
								</ul>
							</li>        
							<li><a href="#">Shortcodes</a>
								<div class="megamenu">
									<div class="megamenu-row">
										<div class="col3">
											<ul class="list-unstyled list-dashed">
												<li><a href="shortcode-accordion.html"><i class="fa fa-list-ul"></i> Accordion</a></li>
												<li><a href="shortcode-alerts.html"><i class="fa fa-exclamation-circle"></i> Alerts</a></li>
												<li><a href="shortcode-animations.html"><i class="fa fa-magic"></i> Animations</a></li>
												<li><a href="shortcode-background-html5-video.html"><i class="fa fa-video-camera"></i> HTML5 Background Video</a></li>
												<li><a href="shortcode-blockquotes.html"><i class="fa fa-quote-right"></i> Blockquotes</a></li>
												<li><a href="shortcode-button-groups-and-dropdowns.html"><i class="fa fa-link"></i> Button Groups</a></li>
												<li><a href="shortcode-button-hover-effect.html"><i class="fa fa-flag-o"></i> Button Hover Effect</a></li>
												<li><a href="shortcode-buttons.html"><i class="fa fa-external-link"></i> Buttons</a></li>
												<li><a href="shortcode-call-to-actions.html"><i class="fa fa-plus-square"></i> Call To Actions</a></li>
												<li><a href="shortcode-charts.html"><i class="fa fa-pie-chart"></i> Charts</a></li>
												<li><a href="shortcode-columns-grids.html"><i class="fa fa-columns"></i> Columns Grids</a></li>
												<li><a href="shortcode-divider.html"><i class="fa fa-indent"></i> Divider</a></li>
												<li><a href="shortcode-dropcaps.html"><i class="fa fa-bold"></i> Dropcaps</a></li>
												<li><a href="shortcode-datetime-datepicker.html"><i class="fa fa-calendar"></i> Date Picker</a></li>
												<li><a href="shortcode-datetime-timepicker.html"><i class="fa fa-calendar"></i> Time Picker</a></li>
											</ul>
										</div>
										<div class="col3">
											<ul class="list-unstyled list-dashed">
												<li><a href="shortcode-datetime-datetimepicker.html"><i class="fa fa-calendar"></i> Bootstrap Date-Time Picker</a></li>
												<li><a href="shortcode-datetime-datepair.html"><i class="fa fa-calendar"></i> Date Pair</a></li>
												<li><a href="shortcode-flex-sliders.html"><i class="fa fa-sliders"></i> Flex Sliders</a></li>
												<li><a href="shortcode-flipbox.html"><i class="fa fa-square"></i> Flipbox</a></li>
												<li><a href="shortcode-forms.html"><i class="fa fa-align-justify"></i> Forms</a></li>
												<li><a href="shortcode-iconbox.html"><i class="fa fa-unsorted"></i> Icon Box</a></li>
												<li><a href="shortcode-icon-7stroke.html"><i class="fa fa-circle-o"></i> Icons 7stroke</a></li>
												<li><a href="shortcode-icon-elegant-icons.html"><i class="fa fa-eye-slash"></i> Icons Elegant</a></li>
												<li><a href="shortcode-icon-flat-color-icons.html"><i class="fa fa-i-cursor"></i> Icons Flat Color</a></li>
												<li><a href="shortcode-icon-fontawesome.html"><i class="fa fa-fort-awesome"></i> Icons FontAwesome</a></li>
												<li><a href="shortcode-icon-fontawesome-tutorial.html"><i class="fa fa-fonticons"></i> Icons FontAwesome Tutorial</a></li>
												<li><a href="shortcode-icon-strokegap.html"><i class="fa fa-anchor"></i> Icons Strokegap</a></li>
												<li><a href="shortcode-image-box.html"><i class="fa fa-file-image-o"></i> Image Box</a></li>
												<li><a href="shortcode-instagram.html"><i class="fa fa-instagram"></i> Instagram Feed</a></li>
												<li><a href="shortcode-labels-badges.html"><i class="fa fa-check-square-o"></i> Labels Badges</a></li>
											</ul>
										</div>
										<div class="col3">
											<ul class="list-unstyled list-dashed">
												<li><a href="shortcode-listgroup-panels.html"><i class="fa fa-th-list"></i> Listgroup Panels</a></li>
												<li><a href="shortcode-lists.html"><i class="fa fa-list"></i> Lists</a></li>
												<li><a href="shortcode-maps.html"><i class="fa fa-map-o"></i> Maps</a></li>
												<li><a href="shortcode-media-embed.html"><i class="fa fa-play-circle-o"></i> Media Embed</a></li>
												<li><a href="shortcode-modal-bootstrap.html"><i class="fa fa-search-plus"></i> Modal</a></li>
												<li><a href="shortcode-modal-lightbox.html"><i class="fa fa-expand"></i> Lightbox</a></li>
												<li><a href="shortcode-navigation.html"><i class="fa fa-navicon"></i> Navigation</a></li>
												<li><a href="shortcode-owl-carousel.html"><i class="fa fa-sliders"></i> Owl Carousel</a></li>
												<li><a href="shortcode-pagination.html"><i class="fa fa-arrow-circle-o-right"></i> Pagination</a></li>
												<li><a href="shortcode-progressbar.html"><i class="fa fa-tasks"></i> Progress Bars</a></li>
												<li><a href="shortcode-responsive.html"><i class="fa fa-tablet"></i> Responsive</a></li>
												<li><a href="shortcode-separator.html"><i class="fa fa-minus-square-o"></i> Separator</a></li>
												<li><a href="shortcode-sitemap.html"><i class="fa fa-sitemap"></i> Sitemap</a></li>
												<li><a href="shortcode-sliders.html"><i class="fa fa-sliders"></i> Sliders</a></li>
												<li><a href="shortcode-smoothscrolling.html"><i class="fa fa-binoculars"></i> Smoothscrolling</a></li>
											</ul>
										</div>
										<div class="col3">
											<ul class="list-unstyled list-dashed">
												<li><a href="shortcode-styled-icons.html"><i class="fa fa-facebook-square"></i> Styled Icons</a></li>
												<li><a href="shortcode-subscribe.html"><i class="fa fa-user-plus"></i> Subscribe</a></li>
												<li><a href="shortcode-tables.html"><i class="fa fa-table"></i> Tables</a></li>
												<li><a href="shortcode-tabs.html"><i class="fa fa-indent"></i> Tabs</a></li>
												<li><a href="shortcode-textblock.html"><i class="fa fa-bold"></i> Textblock</a></li>
												<li><a href="shortcode-thumbnails-carousels.html"><i class="fa fa-sliders"></i> Thumbnails/carousels</a></li>
												<li><a href="shortcode-title.html"><i class="fa fa-text-height"></i> Title</a></li>
												<li><a href="shortcode-timer-final-countdown.html"><i class="fa fa-text-height"></i> Timer Final Countdown</a></li>
												<li><a href="shortcode-timer-flipclock.html"><i class="fa fa-text-height"></i> Timer Flipclock</a></li>
												<li><a href="shortcode-timer-slick-circular.html"><i class="fa fa-text-height"></i> Timer Slick Circular</a></li>
												<li><a href="shortcode-twitter.html"><i class="fa fa-twitter-square"></i> Twitter Feed</a></li>
												<li><a href="shortcode-typography.html"><i class="fa fa-font"></i> Typography</a></li>
												<li><a href="shortcode-vertical-timeline.html"><i class="fa fa-arrows-v"></i> Vertical Timeline</a></li>
												<li><a href="shortcode-widgets.html"><i class="fa fa-gift"></i> Widgets</a></li>
												<li><a href="shortcode-working-process.html"><i class="fa fa-exchange"></i> Working Process</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>