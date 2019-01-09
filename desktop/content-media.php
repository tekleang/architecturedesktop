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
		        	<img src="<?php echo $BATH_URL;?>assets/images/Architecture-MEDIA-Link-option21-banner-01.jpg" alt="Location-banner">
		        	<div class="img">
		         		<a href="<?php echo $BATH_URL;?>"><img src="<?php echo $BATH_URL;?>assets/images/Architecture-option21-logo.svg"></a>
		         	</div>
		         	<div class="text">
		         		<div class="linehigh"></div>
                         <h1>media</h1>
		         	</div>
				        
			    </div>
		    </div>
		</div>
		<style type="text/css">
	#content .profile{overflow: hidden;display: flex;justify-content: center;}
	#content .profile .b-img{width: 100%;height: 1030px;position: relative;}
	#content .profile .b-img .left{}
	#content .profile .b-img .right{background-image: url('<?php echo $BATH_URL;?>assets/images/ptn-1.png');background-repeat: repeat;height: 1030px;}
	#content .profile .title{margin-left: 67px;padding-top: 80px;}
	#content .profile .title h4{margin: 0;font-size: 18px;text-transform: uppercase;letter-spacing: 7px;margin-top: 50px;}
	#content .profile .title h2{text-align: left;margin: 0;font-size: 35px;margin-top: 50px;padding-right: 54%;}

#slider{width: 100%;padding-top: 50px;}
/*#slider img{width: 525px !important;height: 525px}*/
#slider .imglastnews{margin-right: 30px}
#slider .imglastnews img{width:500px;height: 500px;object-fit: cover;}
#content .profile .slick-initialized .slick-slide{margin-left: 28px;}
#slider .text{padding-top: 30px;}
#slider .text h3{font-size: 18px;text-transform: uppercase;line-height: 30px;margin: 0;}
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
							<h4>LATEST NEWS & EVENTS</h4>
							<h2>We is making headlines for raising the profile of architects news in the world.</h2>
						</div>
						<div id="slider">
							<div class="imglastnews">
								<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-01.jpg">
								<div class="text">
									<h3>DESIGN AND ARCHITECTURE SINGAPORE:<br>SOUTHEAST ASIA FOCUS</h3>
								</div>
							</div>
							<div class="imglastnews">
								<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-02.jpg">
								<div class="text">
									<h3>DESIGN AND ARCHITECTURE SINGAPORE:<br>SOUTHEAST ASIA FOCUS</h3>
								</div>
							</div>
							<div class="imglastnews">
								<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-03.jpg">
								<div class="text">
									<h3>DESIGN AND ARCHITECTURE SINGAPORE:<br>SOUTHEAST ASIA FOCUS</h3>
								</div>
							</div>
							<div class="imglastnews">
								<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-04.jpg">
								<div class="text">
									<h3>DESIGN AND ARCHITECTURE SINGAPORE:<br>SOUTHEAST ASIA FOCUS</h3>
								</div>
							</div>
						</div>
					
					</div>
				</div>
				
			</div>

<script type="text/javascript">
	$('#slider').slick({
	centerMode:true,
  slidesToShow: 3.15,
  autoplay: true,
  autoplaySpeed: 4000,
  // centerMode: true,
});
</script>

<style type="text/css">
#content .event{}
#content .event .group-event{padding-top: 80px; width: 82%;}
#content .event .title{margin-left: 67px;}
#content .event .title h4{margin: 0;font-size: 18px;text-transform: uppercase;letter-spacing: 7px;margin-top: 50px;}
#content .event .items{padding-top: 50px;overflow: hidden;}
#content .event .items .img{height: 525px;width: 100%;overflow: hidden;}
#content .event .items .img img{width: 100%;height: 100%;object-fit: cover;}
#content .event .items .text{margin-top: 30px;}
#content .event .items .text h4{margin: 0;line-height: 30px;}
#content .event .button{text-align: center;}
#content .event .zoom-out{overflow: hidden;}
#content .event .zoom-out img{transition: 0.7s;}
#content .event .zoom-out:hover img{-moz-transform: scale(1);-webkit-transform: scale(1.1);transform: scale(1.1);}
</style>
		<!-- O U R N E W S & E V E N T S -->
		<div class="container-fluid event">
			<div class="container group-event">
				<div class="title">
					<div class="linehigh"></div>
					<h4>OUR NEWS & EVENTS</h4>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="items zoom-out wow fadeInUp slow" data-wow-duration="1.1s">
							<a href="content-media-detail.php"></a>
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-01.jpg">
							</div>
							<div class="text">
								<h4>DESIGN AND ARCHITECTURE SINGAPORE:</h4>
								<h4>SOUTHEAST ASIA FOCUS</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="items zoom-out wow fadeInUp slow" data-wow-duration="1.3s">
							<a href="content-media-detail.php"></a>
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-02.jpg">
							</div>
							<div class="text">
								<h4>DESIGN AND ARCHITECTURE SINGAPORE:</h4>
								<h4>SOUTHEAST ASIA FOCUS</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="items zoom-out wow fadeInUp slow" data-wow-duration="1.6s">
							<a href="content-media-detail.php">
								<div class="img">
									<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-03.jpg">
								</div>
							</a>
							<div class="text">
								<h4>DESIGN AND ARCHITECTURE SINGAPORE:</h4>
								<h4>SOUTHEAST ASIA FOCUS</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="items zoom-out wow fadeInUp slow" data-wow-duration="1.1s">
							<a href="content-media-detail.php">
								<div class="img">
									<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-01.jpg">
								</div>
							</a>
							
							<div class="text">
								<h4>DESIGN AND ARCHITECTURE SINGAPORE:</h4>
								<h4>SOUTHEAST ASIA FOCUS</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="items zoom-out wow fadeInUp slow" data-wow-duration="1.3s">
							<a href="content-media-detail.php">
								<div class="img">
									<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-02.jpg">
								</div>
							</a>
							
							<div class="text">
								<h4>DESIGN AND ARCHITECTURE SINGAPORE:</h4>
								<h4>SOUTHEAST ASIA FOCUS</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="items zoom-out wow fadeInUp slow" data-wow-duration="1.6s">
							<a href="content-media-detail.php">
								<div class="img">
									<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-03.jpg">
								</div>
							</a>
							
							<div class="text">
								<h4>DESIGN AND ARCHITECTURE SINGAPORE:</h4>
								<h4>SOUTHEAST ASIA FOCUS</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="items zoom-out wow fadeInUp slow" data-wow-duration="1.1s">
							<a href="content-media-detail.php">
								<div class="img">
									<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-01.jpg">
								</div>
							</a>
							
							<div class="text">
								<h4>DESIGN AND ARCHITECTURE SINGAPORE:</h4>
								<h4>SOUTHEAST ASIA FOCUS</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="items zoom-out wow fadeInUp slow" data-wow-duration="1.3s">
							<a href="content-media-detail.php">
								<div class="img">
									<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-02.jpg">
								</div>
							</a>
							
							<div class="text">
								<h4>DESIGN AND ARCHITECTURE SINGAPORE:</h4>
								<h4>SOUTHEAST ASIA FOCUS</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="items zoom-out wow fadeInUp slow" data-wow-duration="1.6s">
							<a href="content-media-detail.php">
								<div class="img">
									<img src="<?php echo $BATH_URL;?>assets/images/Architecture-Link-option21-media-03.jpg">
								</div>
							</a>
							
							<div class="text">
								<h4>DESIGN AND ARCHITECTURE SINGAPORE:</h4>
								<h4>SOUTHEAST ASIA FOCUS</h4>
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
