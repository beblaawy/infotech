<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="storage/anu/favicon.ico" rel="icon" type="image/x-icon" />

    <title>Bmn</title>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-animate.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-route.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-aria.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-messages.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.3/angular-material.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.5.16/textAngular-rangy.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.5.16/textAngular-sanitize.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.5.16/textAngularSetup.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.5.16/textAngular.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ngInfiniteScroll/1.3.0/ng-infinite-scroll.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-chart.js/1.1.1/angular-chart.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-bootstrap-colorpicker/3.0.28/js/bootstrap-colorpicker-module.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ngDraggable/0.1.11/ngDraggable.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/danialfarid-angular-file-upload/12.2.13/ng-file-upload-all.min.js" type="text/javascript"></script>



<link href='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.5.16/textAngular.css' rel="stylesheet" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css" />
<link href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css" rel="stylesheet" >
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/angular-bootstrap-colorpicker/3.0.28/css/colorpicker.min.css" rel="stylesheet">

<link href="http://fonts.googleapis.com/css?family=Lato%3A400%2C300%2C300italic%2C400italic%2C700%2C700italic%2C800%2C800italic%2C600italic%2C600&subset=latin%2Cgreek-ext%2Ccyrillic-ext%2Cgreek%2Cvietnamese%2Ccyrillic&ver=4.7.2" rel="stylesheet">

<?php
function asset($x){
	echo 'storage/'.$x;
}
?>
<script src="<?php asset('js/angular-spectrum-colorpicker.min.js');?>" type="text/javascript"></script>
<script src="<?php  asset('js/global_.js') ;?>"></script>
<script src="<?php  asset('js/global.js') ;?>"></script>
<script src="<?php  asset('js/home.js') ;?>"></script>

<link rel="stylesheet" href="<?php  asset('css/main.css') ;?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php  asset('css/home.css') ;?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php  asset('css/effects.css') ;?>" type="text/css" media="screen">

</head>


  <body ng-app="AnupamaApp" data-spy="scroll" data-spy="scroll" data-target="#scroll-spy" ng-jq>

	<!-- Navigation - Fixed Top -->
	<nav class="navbar navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="#home" role="button"><img src="storage/bmn/logo.jpg" width="60%"></a>	
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#scroll-spy" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<i class="material-icons">&#xE5D2;</i>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="scroll-spy">
				<ul class="nav navbar-nav navbar-right main-menu">
				<?php $nav=['home','services','about','our team','portfolio','testimonial','pricing','contact'];
					foreach($nav as $x){
						?>
					<li><a href="#<?php echo $x=='our team'?'team':$x ;?>"><?php echo $x ;?></a><span class="arrow"></span></li>
					<?php } ?>
				</ul>
			</div>	
		</div>
	</nav>

	<section id="home">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		  <?php for($i=1;$i<4;$i++){?>
		    <div class="item <?php echo $i==1?'active':''; ?>">
		      <img src="storage/bmn/carousel/<?php echo $i;?>.jpg" alt="Chania">
		      <div class="carousel-caption" style="top:35%;">
		        <h3>Make a bold statement</h3>
		        <p style="font-size:12px;">Grab your visitors' attention front and center on your homepage, then give them an action to take.</p>
		        <a class="tutorials-link btn btn-sm animated-button victoria-two" href="#contact" role="button">GET STARTED</a>
		      </div>
		    </div>
		    <?php }?>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>
	<section id="services">
		<div class="container">
			<div class="row">
			<?php 
				$r=[
					'Internal Audit'=>'Audit services are designed to help your business mitigate risk, create new efficiencies and better support strategic objectives.',
					'Accounting'=>'A range of services designed to provide timely preparation of company accounts, whether it be at the financial year end or on a monthly basis.',
					'Audit'=>'Audits are verified by sight, confirmation, discussion with management, assessment of internal controls and analytical procedures.',
					'Legislative Support'=>'To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.',
					'Review'=>'Reviews are less detailed and consist predominantly of an assessment of the company`s books and records.',
					'Attest Services'=>'Attestation services that we provide, include the process of independent review of the data validity audited by an accountant.',
				]; 
				$i=1;
				?>
			<?php foreach($r as $k=>$v){?>
				<div class="col-sm-6 col-md-4 service text-center">
					<div class="go-up">
						<img src="storage/bmn/icons/icon-<?php echo $i ;?>.png">
						<h5><a href="#"><?php echo $k ;?></a></h5>
					</div>
					<p class="go-down"><?php echo $v ;?></p>
					<span class="fa fa-angle-double-right arrow"></span>
				</div>
			<?php $i++;?>
			<?php } ?>
			</div>
		</div>
	</section>
	
	<section id="about" style="padding: 0px;">
		<div class="container-fluid" style="background-color:#009FFA;">
			<div class="container">
				<div class="row text-center co-w" style="background-color:#3a3c3e;padding:50px 0px 0px;margin-top:-60px;box-shadow: 0px 0px 10px rgba(0,0,0,0.5);position: relative;bottom:-30px;z-index: 1">
					<div class="col-xs-12" style="font-size: 26px;">
						<h3 style="color:#74787C;font-weight:700;text-transform:uppercase;line-height: 1.35;">LOOKING FOR</h3>
						<h3 style="margin-top:-10px;"><span style="font-weight: 100;margin-right: .25em;color:#999;">A FIRST-CLASS</span><span style="color:#fff;font-weight:700;text-transform:uppercase;line-height: 1.35;">AUDITOR?</span></h3>
						<p class="co-w">With a lot of experience in audit, hiring us will become a proper solution for your business!</p>
					</div>
					<div class="col-xs-12" style="margin: 25px 0px;">
						<div class="row">
							<div class="col-sm-6 col-md-3"><h2><b class="co-w">396</b></h2><h6>TRUSTED CLIENTS</h6><div class="right-slash hidden-xs"></div></div>
							<div class="col-sm-6 col-md-3"><h2><b class="co-w">65</b></h2><h6>AWARDS</h6><div class="right-slash hidden-xs hidden-sm"></div></div>
							<div class="clearfix visible-xs visible-sm"></div>
							<div class="col-sm-6 col-md-3"><h2><b class="co-w">17</b></h2><h6>YEARS OF EXPERIENCE</h6><div class="right-slash hidden-xs"></div></div>
							<div class="col-sm-6 col-md-3"><h2><b class="co-w">35</b></h2><h6>EXPERTS</h6></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="team" style="padding: 0px;">
		<div class="container-fluid" style="background-color:rgba(228,228,228,0.3);padding-top:40px;padding-bottom:40px;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h3 style="color:#444;"><span style="font-weight:50">Our</span> <b>Team</b></h3>
					</div>
	                <div class="col-md-12" data-wow-delay="0.2s">
	                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
	                        <!-- Bottom Carousel Indicators -->
	                        <ol class="carousel-indicators">
	                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="storage/bmn/team/2.jpg" alt="">
	                            </li>
	                            <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="storage/bmn/team/3.jpg" alt="">
	                            </li>
	                            <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="storage/bmn/team/1.jpg" alt="">
	                            <li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive" src="storage/bmn/team/4.jpg" alt="">
	                            </li>
	                        </ol>

	                        <?php
	                        $t=[
		                        [
			                        'img'=>1,
			                        'name'=>'Sam Jones',
			                        'position'=>'Senior partner',
			                        'data'=>'As a principal advisor, Sam Jones guides business owners through the pitfalls and joys of the corporational world.',
		                        ],
		                        [
			                        'img'=>2,
			                        'name'=>'Richard White',
			                        'position'=>'Senior partner',
			                        'data'=>'Richard White has operated several small business over the past ten years and brings a diverse',
		                        ],
		                        [
			                        'img'=>3,
			                        'name'=>'Melissa Spector',
			                        'position'=>'partner',
			                        'data'=>'Melissa Spector brings a strong background in leadership and management to the company team. She works',
		                        ],
		                        [
			                        'img'=>3,
			                        'name'=>'Sarah Winter',
			                        'position'=>'partner',
			                        'data'=>'After over a decade of working in senior-level corporate business operations and project management roles, Jim',
		                        ],
	                        ];
	                        ?>

	                        <div class="carousel-inner text-center">
	                        <?php foreach($t as $v){?>
	                            <div class="item <?php echo $v['img']==1? 'active':'' ;?>">
	                                <blockquote>
	                                    <div class="row">
	                                        <div class="col-sm-8 col-sm-offset-2">
	                                            <p><?php echo $v['data'] ;?></p>
	                                            <small><?php echo $v['name'] ;?></small>
	                                            <small><?php echo $v['position'] ;?></small>
												<ul class="footer-contact">
													<li><a href="#"><span class="fa fa-facebook"></span></a></li>
													<li><a href="#"><span class="fa fa-twitter"></span></a></li>
													<li><a href="#"><span class="fa fa-google"></span></a></li>
													<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
													<li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
												</ul>
	                                        </div>
	                                    </div>
	                                </blockquote>
	                            </div>
	                        <?php } ?>
	                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
	                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
	                    </div>
	                </div>
	            </div>
			</div>
		</div>
	</section>

	<section id="portfolio">
		<div class="container" ng-controller="Portfolio">
			<div class="row text-center">
				<div class="col-xs-12">
					<h3 style="color:#444;margin-bottom:40px;"><span style="font-weight:50">Our</span> <b>Portfolio</b></h3>
					<p style="color:#555;font-size:0.9em;letter-spacing:1.25px;">Check the awesome projects handled by our smart team.</p>
				</div>
				<div class="col-xs-12" style="margin-top:40px;" ng-cloak>
					<ul class="portfolio-gal">
						<li ng-repeat="x in portfolio track by $index" ng-click="handldeRan(x.num)">[[x.name]]</li>
					</ul>
				</div>
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 fadein" style="padding-bottom: 15px;" ng-if="x!==0" ng-repeat="x in ran track by $index">
							<div class="gallery">
								<p class="project-name">Lorem Ipusm..</p>
								<img class="img img-responsive" ng-src="storage/bmn/portfolio/[[x]].jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		App.controller('Portfolio',['$scope',function($scope){
			$scope.handldeRan=function(x=25){
				$scope.ran=[];
				for (var i = 0; i < x; i++) {
					$scope.ran.push(i);
				}
			}
			$scope.handldeRan();
			$scope.portfolio=[
				{name:'All works',num:25,},
				{name:'Branding',num:4,},
				{name:'Digital Marketing',num:3,},
				{name:'Web Design & Development',num:15,},
			]
		}])
	</script>

	<section id="testimonial" style="background-color:rgba(250,250,250,1);">
		<div class="container-fluid" style="padding:50px 0px;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center m-b-20">
						<h4 style="text-transform:capitalize;color:#999;margin-bottom:5px;">See the testimonials</h4>
						<h3 style="text-transform:capitalize;color:#009FFA;margin-top:0px;">Our <b>Clients</b> have submitted</h3>
					</div>
					<div class="col-sm-12" style="margin-top:50px">
						<div class="row">
						<?php
							$t=[
								[
									'img'=>1,
									'name'=>'David Black',
									'testimonial'=>"Business litigation has always been what our competitors were using to suppress us. But as soon as we've hired this law firm, which by the way had fees 5 times lower than the...",
								],
								[
									'img'=>2,
									'name'=>'Martin Edwards',
									'testimonial'=>"As the one who recently suffered from the FELA (Federal Employers’ Liability Act Claims) related issues, I've been desperate to find a firm who could have won my case...",
								],
								[
									'img'=>3,
									'name'=>"Sarah Hayes",
									'testimonial'=>"Finally, 3 months later the truth and the law prevailed, all thanks to this firm's lawyers diligence! We finally had all the disputes resolved in our favor!...",
								],

							];
						?>
							<?php foreach($t as $v){?>
							<div class="col-xs-12 col-sm-4" style="margin-bottom:30px;">
								<div class="col-xs-2 col-xs-offset-5 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 text-center">
									<img src="storage/bmn/testimonials/<?php echo $v['img'] ;?>.jpg" style="margin-top:30px;" class="img img-responsive img-circle">
								</div>
								<div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0 col-md-8 text-left">
									<p style="font-size:4.5em;color:#006ead;margin-top:20px;" class="text-center visible-xs visible-sm">&ldquo;</p>
									<p style="font-size:4.5em;color:#006ead;margin-top:20px;" class="text-left hidden-xs hidden-sm">&ldquo;</p>
									<p class="visible-xs visible-sm text-center" style="color:#888;margin-top:-10px;"><?php echo $v['testimonial'] ;?></p>
									<p class="hidden-xs hidden-sm text-left" style="color:#888;margin-top:-10px;"><?php echo $v['testimonial'] ;?></p>
									<p class="visible-xs visible-sm text-center"><b>— <?php echo $v['name'] ;?></b></p>
									<p class="hidden-xs hidden-sm text-left"><b>— <?php echo $v['name'] ;?></b></p>
								</div>
							</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="pricing" style="background-color:rgba(250,250,250,1);">
		<div class="container">
		    <div class="row">
		        <div class="col-xs-12 col-sm-6 col-md-4">
		            <div class="panel panel-primary">
		                <div class="panel-heading">
		                    <h3 class="panel-title">
		                        Bronze</h3>
		                </div>
		                <div class="panel-body">
		                    <div class="the-price">
		                        <h1>
		                            $10<span class="subscript">/mo</span></h1>
		                        <small>1 month FREE trial</small>
		                    </div>
		                    <table class="table">
		                        <tr>
		                            <td>
		                                1 Account
		                            </td>
		                        </tr>
		                        <tr class="active">
		                            <td>
		                                1 Project
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                100K API Access
		                            </td>
		                        </tr>
		                        <tr class="active">
		                            <td>
		                                100MB Storage
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                Custom Cloud Services
		                            </td>
		                        </tr>
		                        <tr class="active">
		                            <td>
		                                Weekly Reports
		                            </td>
		                        </tr>
		                    </table>
		                </div>
		                <div class="panel-footer">
		                    <a href="#" class="btn btn-success" role="button">Sign Up</a>
		                    1 month FREE trial</div>
		            </div>
		        </div>
		        <div class="col-xs-12 col-sm-6 col-md-4">
		            <div class="panel panel-success">
		                <div class="panel-heading">
		                    <h3 class="panel-title">
		                        Silver</h3>
		                </div>
		                <div class="panel-body">
		                    <div class="the-price">
		                        <h1>
		                            $20<span class="subscript">/mo</span></h1>
		                        <small>1 month FREE trial</small>
		                    </div>
		                    <table class="table">
		                        <tr>
		                            <td>
		                                2 Account
		                            </td>
		                        </tr>
		                        <tr class="active">
		                            <td>
		                                5 Project
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                100K API Access
		                            </td>
		                        </tr>
		                        <tr class="active">
		                            <td>
		                                200MB Storage
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                Custom Cloud Services
		                            </td>
		                        </tr>
		                        <tr class="active">
		                            <td>
		                                Weekly Reports
		                            </td>
		                        </tr>
		                    </table>
		                </div>
		                <div class="panel-footer">
		                    <a href="#" class="btn btn-success" role="button">Sign Up</a>
		                    1 month FREE trial</div>
		            </div>
		        </div>
		        <div class="col-xs-12 col-sm-6 col-md-4">
		            <div class="panel panel-info">
		                <div class="panel-heading">
		                    <h3 class="panel-title">
		                        Gold</h3>
		                </div>
		                <div class="panel-body">
		                    <div class="the-price">
		                        <h1>
		                            $35<span class="subscript">/mo</span></h1>
		                        <small>1 month FREE trial</small>
		                    </div>
		                    <table class="table">
		                        <tr>
		                            <td>
		                                5 Account
		                            </td>
		                        </tr>
		                        <tr class="active">
		                            <td>
		                                20 Project
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                300K API Access
		                            </td>
		                        </tr>
		                        <tr class="active">
		                            <td>
		                                500MB Storage
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                Custom Cloud Services
		                            </td>
		                        </tr>
		                        <tr class="active">
		                            <td>
		                                Weekly Reports
		                            </td>
		                        </tr>
		                    </table>
		                </div>
		                <div class="panel-footer">
		                    <a href="#" class="btn btn-success" role="button">Sign Up</a> 1 month FREE trial</div>
		            </div>
		        </div>
		    </div>
		</div>

	</section>
	<section id="contact" style="background-color:rgba(250,250,250,1);">
		<div class="container-fluid" style="padding:50px 0px;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h2 style="text-transform:uppercase;color:#009FFA;">legal consultation</h2>
						<p><span style="font-size:1.1em;">Would you like to speak with one of our financial advisers?</span><br> Just submit your contact details and we’ll be in touch shortly.<br> You can also email us and we'll answer you ASAP.</p>
						<p><b>I would like to discuss</b></p>
					</div>
					<div class="col-sm-12 col-md-8 col-md-offset-2 m-t-20" layout="column" ng-cloak>
					    <form role="form" novalidate name="reg.form" ng-submit="send()">
					        <md-content class="md-no-momentum bg-no sma-icons">
								<md-input-container md-no-float class="md-icon-float md-block m-no">
									<md-icon class="name"><span class="glyphicon glyphicon-user big_glygh"></span></md-icon>
									<input class="p-l-10" ng-model="reg.data.name" placeholder="Your Name" type="text" ng-required="true">
								</md-input-container>

								<md-input-container md-no-float class="md-block m-no">
									<md-icon class="email"><span class="glyphicon glyphicon-envelope big_glygh"></span></md-icon>
									<input class="p-l-10" ng-model="reg.data.email" type="email" placeholder="Email" ng-required="true">
								</md-input-container>

					            <md-input-container md-no-float class="md-block">
					              <textarea ng-model="reg.data.tittle" md-maxlength="1000" placeholder="Subject ..." rows="3" md-select-on-focus></textarea>
					            </md-input-container>

					            <md-button class="md-primary pull-right f-btn m-r-no" type="submit"><span>Send</span></md-button>
					        </md-content>
					    </form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="padding-bottom:0px;padding-top:0px">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12" style="width:100%;height: 300px;" id="map"></div>
					    <script>
			      function initMap() {
			        var uluru = {lat: -25.363, lng: 131.044};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 8,
			          center: uluru
			        });
			        var marker = new google.maps.Marker({
			          position: uluru,
			          map: map
			        });
			      }
			    </script>
			    <script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw40VlRuXBgnN7uriPiXzEY4AeUOdsJmM&callback=initMap">
			    </script>
			</div>
		</div>
	</section>


	<section style="padding-bottom: 0px;padding-top:0px;">
		<div class="container-fluid footer" style="background-color:#202f39;color:white;letter-spacing:1.25px;font-size:.8em;padding:40px 0px 30px;">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-3">
						<img src="storage/bmn/logo.jpg" width="60px" style="margin-bottom:13px;">
						<p style="font-size:0.9em;text-align:justify;">Founded by Steven Pfeiffer, Lesley Dingle and Gerald Harrison back in 1989, today their Houston-based law firm is currently the #1 in both yearly cases dealt with and the percentage of all those cases being won.</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<h4>Navigation</h4>
						<ul class="footer-nav">
							<li style="padding:3px 0px;"><a href="#about">About us</a></li>
							<li style="padding:3px 0px;"><a href="#">Practice Areas</a></li>
							<li style="padding:3px 0px;"><a href="#">Won Cases</a></li>
							<li style="padding:3px 0px;"><a href="#">News</a></li>
							<li style="padding:3px 0px;"><a href="#">Contacts</a></li>
						</ul>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<h4>Contact information</h4>
						<p>4096 N Highland St, Arlington<br>VA 32101, USA</p>
						<p><a style="color:#009FFA;margin-top:10px;" href="#">info@bmninfotech.org</a></p>
						<ul class="footer-contact">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-google"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
							<li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
						</ul>

					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<h4>Opening hours</h4>
						<p>Mon-Thu: 9:30 - 21:00<br>
						Fri: 6:00 - 21:00<br>
						Sat: 10:00 - 15:00
						</p>
					</div>
					<div class="clearfix"></div>
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center" style="margin-top:30px;">
						2017 © Bmninfotech. All Rights Reserved | Privacy Policy
					</div>
				</div>
			</div>
		</div>
	</section>
		<a href="#home" style="text-decoration:none;background-color:#dd0000" role="button" class="scrollTop">
		<svg class="lnr lnr-chevron-up"><use xlink:href="#lnr-chevron-up"></use></svg><span class="fa fa-angle-double-up" style="position: relative;bottom:10px;font-size: 18px;color:#fff"></span>
	</a>

  </body>
</html>

