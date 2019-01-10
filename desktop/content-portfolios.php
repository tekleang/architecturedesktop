<?php 
	include_once('../header-desktop.php');
 ?>

<div id="wrapper">
	<div id="content">
<style type="text/css">
/*#content .sub-banner .text h1{padding: 0 36%;}*/
</style>
		<!-- sub-banner -->
		<div class="container-fluid sub-banner">
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">	
		    	<div class="item banner-img">
		    		<div class="gradientb" ></div>
		        	<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-portfolios-02.jpg" alt="Location-banner">
		        	<div class="img">
		         		<a href="<?php echo $BATH_URL;?>"><img src="<?php echo $BATH_URL;?>assets/images/Architecture-option21-logo.svg"></a>
		         	</div>
		         	<div class="text">
		         		<div class="linehigh"></div>
                         <h1>portfolios</h1>
		         	</div>
				        
			    </div>
		    </div>
		</div>
		<style type="text/css">
	#content .profile{overflow: hidden;display: flex;justify-content: center;}
	#content .profile .b-img{width: 100%;height: 900px;position: relative;}
	#content .profile .b-img .left{}
	#content .profile .b-img .right{background-image: url('<?php echo $BATH_URL;?>assets/images/ptn-1.png');background-repeat: repeat;height: 1030px;}
	#content .profile .title{margin-left: 67px;padding-top: 80px;}
	#content .profile .title h4{margin: 0;font-size: 18px;text-transform: uppercase;letter-spacing: 7px;margin-top: 50px;}

#slider{width: 100%;padding-top: 50px;}
/*#slider img{width: 525px !important;height: 525px}*/
#slider .imglastnews{margin-right: 30px}
#slider .imglastnews img{width:800px;height: 450px;object-fit: cover;}
#content .profile .slick-initialized .slick-slide{margin-left: -33px;}
#slider .text{padding-top: 30px;}
#slider .text h3{font-size: 18px;text-transform: uppercase;line-height: 30px;margin: 0;}
#slideshow .text h4{font-size: 18px;margin: 0;text-transform: capitalize;margin-top: 15px;}
</style>

			<!-- We is making headlines for raising the profile of architects news in the world. -->
			<div class="container-fluid profile">
				<div class="b-img">
					<div style="position: absolute;top:0;left: 0;width:100%;height: 100%">
						<div class="col-sm-6 left"></div>
						<div class="col-sm-6 right"></div>
					</div>
					
					<div class="container-fluid" style="padding-left: 171px">
						<div class="title">
							<div class="linehigh"></div>
							<h4>INPROGRESS PROJECTS</h4>
						</div>
						<div id="slider">
							<div class="imglastnews">
								<img src="<?php echo $BATH_URL;?>assets/images/Architecture-portfolios-details-Link-option21-01.jpg">
								<div class="text">
									<h3>OUR TAMPINES HUB</h3>
									<h4>Toul Kork - Phnom Penh</h4>
								</div>
							</div>
							<div class="imglastnews">
								<img src="<?php echo $BATH_URL;?>assets/images/Architecture-portfolios-details-Link-option21-02.jpg">
								<div class="text">
									<h3>OUR TAMPINES HUB</h3>
									<h4>Toul Kork - Phnom Penh</h4>
								</div>
							</div>
							<div class="imglastnews">
								<img src="<?php echo $BATH_URL;?>assets/images/Architecture-portfolios-details-Link-option21-03.jpg">
								<div class="text">
									<h3>OUR TAMPINES HUB</h3>
									<h4>Toul Kork - Phnom Penh</h4>
								</div>
							</div>

						</div>
					
					</div>
				</div>
				
			</div>

<script type="text/javascript">
	$('#slider').slick({
	centerMode:true,
  slidesToShow: 2.01,
  autoplay: true,
  autoplaySpeed: 4000,
  // centerMode: true,
});
</script>

		<style type="text/css">
	#content .luxury{}
	#content .luxury .group-luxury{padding-top: 80px;width: 82%;}
	#content .luxury .title{margin-left: 67px;}
	#content .luxury .title h4{margin: 0;font-size: 18px;text-transform: uppercase;letter-spacing: 7px;margin-top: 50px;}
	#content .luxury .box{margin-top: 20px;display: flex;}
	#content .luxury .items{margin-top: 30px;overflow: hidden;display: flex;align-items: center;}
	#content .luxury .items .img{height: 450px;width: 100%;overflow: hidden;position: relative;}
	#content .luxury .items .img .gradientb{opacity: 0;}
	#content .luxury .items .img img{width: 100%;height: 100%;object-fit: cover;}
	#content .luxury .items .text{width: 100%;display: flex;justify-content: center;align-items: center;flex-direction: column;position: absolute;color: #fff;opacity: 0;transition: 0.7s;}
	#content .luxury .items .text h3{font-size: 18px;}
	#content .luxury .items .text p{font-size: 14px;}

#content .luxury .zoom-out{overflow: hidden;}
#content .luxury .zoom-out img{transition: 0.7s;}
#content .luxury .zoom-out:hover img{-moz-transform: scale(1);-webkit-transform: scale(1.1);transform: scale(1.1);}
#content .luxury .zoom-out:hover .text{opacity: 1;z-index: 2;}

#content .luxury .box-thin-height .col-sm-4 .img{height: 290px;}
#content .luxury .items:hover .gradientb{opacity: 1;z-index: 1;}
#content .luxury .button{text-align: center;}
</style>
			<!-- Touch modern concepts and designs with luxury architecture. -->
			<div class="container-fluid luxury">
				<div class="container group-luxury">
					<div class="title">
						<div class="linehigh"></div>
						<h4>LATEST PROJECTS</h4>
					</div>
					<div class="row">
						<div class="box"></div>
							<div class="col-sm-6">
								<div class="items zoom-out">
									<a href="content-portfolios-detail.php">
										<div class="img wow slideInUp slow">
											<div class="gradientb"></div>
												<img src="<?php echo $BATH_URL;?>assets/images/Architecture-portfolios-details-Link-option21-01.jpg">
										</div>
									</a>
									<div class="text">
										<div class="linehigh"></div>
										<h3>OUR TAMPINES HUB</h3>
										<p>Toul Kork - Phnom Penh</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="items zoom-out">
									<a href="content-portfolios-detail.php">
										<div class="img wow slideInUp slow">
											<div class="gradientb"></div>
												<img src="<?php echo $BATH_URL;?>assets/images/Architecture-portfolios-details-Link-option21-02.jpg">
										</div>
									</a>
									<div class="text">
										<div class="linehigh"></div>
										<h3>OUR TAMPINES HUB</h3>
										<p>Toul Kork - Phnom Penh</p>
									</div>
								</div>
							</div>
							<div class="box-thin-height">
								<div class="col-sm-4">
									<div class="items zoom-out">
										<a href="content-portfolios-detail.php">
											<div class="img wow slideInUp slow" >
												<div class="gradientb"></div>
												<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-portfolios-04.jpg">
											</div>
										</a>
										
										<div class="text">
											<div class="linehigh"></div>
											<h3>OUR TAMPINES HUB</h3>
											<p>Toul Kork - Phnom Penh</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="items zoom-out">
										<a href="content-portfolios-detail.php">
											<div class="img wow slideInUp slow">
												<div class="gradientb"></div>
												<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-portfolios-08.jpg">
											</div>
										</a>
										<div class="text">
											<div class="linehigh"></div>
											<h3>OUR TAMPINES HUB</h3>
											<p>Toul Kork - Phnom Penh</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="items zoom-out">
										<a href="content-portfolios-detail.php">
											<div class="img wow slideInUp slow">
												<div class="gradientb"></div>
												<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-portfolios-05.jpg">
											</div>
										</a>
										<div class="text">
											<div class="linehigh"></div>
											<h3>OUR TAMPINES HUB</h3>
											<p>Toul Kork - Phnom Penh</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="items zoom-out">
										<a href="content-portfolios-detail.php">
											<div class="img wow slideInUp slow">
												<div class="gradientb"></div>
												<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-portfolios-06.jpg">
											</div>
										</a>
										
										<div class="text">
											<div class="linehigh"></div>
											<h3>OUR TAMPINES HUB</h3>
											<p>Toul Kork - Phnom Penh</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="items zoom-out">
										<a href="content-portfolios-detail.php">
											<div class="img wow slideInUp slow">
												<div class="gradientb"></div>
												<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-portfolios-07.jpg">
											</div>
										</a>
										<div class="text">
											<div class="linehigh"></div>
											<h3>OUR TAMPINES HUB</h3>
											<p>Toul Kork - Phnom Penh</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="items zoom-out">
										<a href="content-portfolios-detail.php">
											<div class="img wow slideInUp slow">
												<div class="gradientb"></div>
												<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-portfolios-03.jpg">
											</div>
										</a>
										<div class="text">
											<div class="linehigh"></div>
											<h3>OUR TAMPINES HUB</h3>
											<p>Toul Kork - Phnom Penh</p>
										</div>
									</div>
								</div>
							</div>

							<div class="button">
								<button>LOAD MORE</button>
							</div>
							
					</div>

				</div>
			</div>

			

 <?php 
	include_once('../footer-desktop.php');
 ?>
