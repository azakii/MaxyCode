<?php
/*
 * Author: Ahmed zaki
 * URL: http://dashsolution.net
 * License URL: ah.zakii@hotmail.com
 */
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'info@maxycode.com';
            $emailSubject = 'Contact Request Submitted by '.$name;
            $htmlContent = '<h2>Contact Request Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your contact request has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your contact request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="MaxyCode">
<meta name="author" content="azaki">
<title>MC</title>
<link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/hover.css" rel="stylesheet">

<!-- Theme CSS -->
<link href="css/main.css" rel="stylesheet">
<link href="css/agency.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

<!---animation style-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/jquery.scrollmagic.min.js"></script>
<style>
.statusMsg.succdiv {
    background: #e7fcc5;
    margin-bottom: 30px;
    padding-bottom: 0;
    padding: 10px;
    text-align: center;
    border: 1px #b8d38c solid;
    min-height: 0;
}
</style>

</head>

<body id="page-top">
  <div id="preloader"></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.html"><img src="img/logo.svg" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#/"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="formula.html">Our Code</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="list-case.html">Case Studies</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="list-ibs.html">Power Tools</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.php">Let's Co-operate</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
<header  class="parallax-window headerInner list" data-parallax="scroll" data-image-src="./img/bg2.jpg">
	<div class="bg-overlay inner">
	<div id="large-header" class="large-header">
	<div class="position">
        <div class="container">
			<div class="col-md-12 top-txt stdc_container">
				<div class="even text-left steps-content-left" id="step-description">
				  <h1 class="steps-content-left"><span> <br /> <label>Contact</label></span></h1>
				  </div>
			  </div>
        </div>
		</div>
	</div>
	</div>
    </header>


<!-- Portfolio Grid Section -->
<section id="list-articles">
  <div class="container wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">
<div class="album text-muted">
      <div class="container">

        <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="animated fadeIn">

  <div class="row">

    <div class="col-sm-12" id="parent">

          <div class="contact_results col-sm-12">
                        <?php if(!empty($statusMsg)){ ?>
                        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                      <?php } ?>

                  </div>


    	<div class="col-sm-6">
          <iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33873.60042966115!2d55.176514734405266!3d25.125110029727367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6beabf615ab5%3A0x3d0dcf9b883dad4b!2sDusseldorf+Business+Point!5e0!3m2!1sen!2seg!4v1503606166687" allowfullscreen></iframe>
    	</div>

    	<div class="col-sm-6">
          <form action="" class="contact-form" method="post">
		        <div class="form-group">
		          <input type="text" class="form-control" name="name" placeholder="Name" required="" autofocus="">
		        </div>


		        <div class="form-group form_left">
		          <input type="email" class="form-control" name="email" placeholder="Email" required="">
		        </div>

		      <div class="form-group">
		           <input type="text" class="form-control" name="subject" maxlength="12" placeholder="Mobile No." required="">
		      </div>
		      <div class="form-group">
		      <textarea class="form-control textarea-contact" rows="5" name="message" placeholder="Type Your Message/Feedback here..." required=""></textarea>
		      <br>
          <button class="btn btn-default btn-send" type="submit" name="submit" value="Send"> <span class="glyphicon glyphicon-send"></span> Send </button>
          <!--input  class="btn btn-default btn-send" type="submit" name="submit" value="Send"-->
		      </div>
     		</form>
    	</div>
    </div>
  </div>

  <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">MAIL & WEBSITE</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp info@maxycode.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.maxycode.com
						</p>

					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CONTACT</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+971) 0527477511
							<br>
							<br>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+971) 0553788472
						</p>

					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">ADDRESS</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Level 08 Dusseldorf Business Point, Al Barsha 1 - Dubai, United Arab Emirates
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>
		<!-- /Boxes de Acoes -->

		<!--My Portfolio  dont Copy this -->

	</div>
</div>

</div>

      </div>
    </div>
  </div>

</section>

<!-- Contact Section -->
<section id="contact" class="parallax-window" data-parallax="scroll" data-image-src="./img/f-bg.jpg">
  <div class="container">
    <div class="row">
      <div class="container text-center">
        <h2>We are always pleased to co-operate <br />
          to achieve you business goals</h2>
        <a href="contact.php">Let's Meet</a> </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left"> <span class="copyright">&copy; 2017 <b>MaxyCode</b> | Copyright reserved</span> </div>
      <div class="col-md-6 text-right">
				<div class="pull-right slogo">
					<img src="img/f-logo.jpg" alt="MaxyCode" />
				</div>
				<div class="socialMedia pull-right">
						<a href="https://www.instagram.com/maxy_code/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://twitter.com/Maxy_Code" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/maxycode" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/company/10370618/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="https://plus.google.com/u/0/100693533481775896677" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com/channel/UCTskTYmIuvDc-XRf_a284lg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					</div>
				</div>
    </div>
  </div>
</footer>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!---- home background ---->


<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<script src="js/parallax.min.js"></script>

<!-- home background -->
<script src="js/script.js"></script>
<script src="js/jQuery.scrollSpeed.js"></script>
<script>
$(function() {

    jQuery.scrollSpeed(100, 800);

});
</script>

<script type="text/javascript">
jQuery(document).ready(function(){controller=new ScrollMagic();var animatesteps=new TimelineMax().add([TweenMax.from(".steps-content-left",1.5,{opacity:0,x:50,}),TweenMax.from(".character_six",1.5,{opacity:0,x:-50,}),TweenMax.to(".character_six",6,{opacity:1,ease:Back.easeOut}),TweenMax.from("#inner",2,{transformOrigin:"50% 50%",scale:0,ease:Back.easeOut}),TweenMax.from("#outter",2.2,{transformOrigin:"50% 50%",scale:0,delay:0.5,Opacity:0,ease:Back.easeOut}),TweenMax.from("#discover-line",2.8,{transformOrigin:"0 100%",scale:0,delay:1.2,ease:Back.easeOut}),TweenMax.from("#plan-line",2.8,{transformOrigin:"0px 100%",scale:0,delay:0.8,ease:Back.easeOut}),TweenMax.from("#design-line",2.8,{transformOrigin:"0 0",scale:0,delay:1,ease:Back.easeOut}),TweenMax.from("#develop-line",2.8,{transformOrigin:"100% 0",scale:0,delay:1.2,ease:Back.easeOut}),TweenMax.from("#launch-line",2.8,{transformOrigin:"100% 0",scale:0,delay:0.8,ease:Back.easeOut}),TweenMax.from("#promote-line",2.8,{transformOrigin:"100% 100%",scale:0,delay:1,ease:Back.easeOut}),TweenMax.from("#discover, #define",2.8,{xPercent:"0",yPercent:"100%",delay:1.2,opacity:0,ease:Back.easeOut}),TweenMax.from("#plan, #analysis",2.8,{xPercent:"-100%",yPercent:"100%",delay:0.8,opacity:0,ease:Back.easeOut}),TweenMax.from("#design, #construct",2.8,{xPercent:"-100%",yPercent:"-100%",delay:1,opacity:0,ease:Back.easeOut}),TweenMax.from("#develop, #implement",2.8,{xPercent:0,yPercent:"-100%",delay:1.2,opacity:0,ease:Back.easeOut}),TweenMax.from("#launch, #measure",2.8,{xPercent:"100%",yPercent:"-100%",delay:0.8,opacity:0,ease:Back.easeOut}),TweenMax.from("#promote, #review-manage",2.8,{xPercent:"100%",yPercent:"100%",delay:1,opacity:0,ease:Back.easeOut}),]);var scene5=new ScrollScene({triggerElement:".steps-block",triggerHook:"onBottom",reverse:false}).setTween(animatesteps).addTo(controller);});
</script>

<script type='text/javascript'>jQuery(document).ready(function(){jQuery('.tab').click(function(){jQuery('#steps_container > .tabs > li.active').removeClass('active');jQuery(this).parent().addClass('active');jQuery('#steps_container > .step_contents_container > div.tab_contents_active').removeClass('tab_contents_active');jQuery(this.rel).addClass('tab_contents_active');});});</script>

<script type="text/javascript">function isEven(n){return n%2==0;}
jQuery(document).ready(function(){var industry_container_right=jQuery(".right-ind-col > .industry-list div");var industry_container_left=jQuery(".left-col-half > .industry-text-col");var index=0;var swpa_class='';var c='';industry_container_right.on("click",function(){var clicked_element=jQuery(this);var ind_title=clicked_element.attr("title");var ind_desc=clicked_element.data("desc");var ind_link=clicked_element.data("indust-link");index=index+1;if(index>1){c=isEven(index);if(c===false){swpa_class='animate1';}else if(c===true){swpa_class='animate2';}else{alert('else');}
jQuery(".industry-text-col").removeClass('animate1 animate2');jQuery(".industry-text-col").addClass(swpa_class);}
jQuery(".right-ind-col > .industry-list div").on('click',function(e){document.getElementById('current-industry').style.pointerEvents='none';document.getElementById('item-large').style.pointerEvents='none';document.getElementById('ind-name').style.pointerEvents='none';});industry_container_right.removeClass("active");clicked_element.addClass("active");jQuery(".item-large .ind-name").text(clicked_element.text());jQuery("#current-industry").removeClass();jQuery("#current-industry").addClass(clicked_element.data("alt"));industry_container_left.find('h2').html(ind_title);industry_container_left.find('#indus-desc').html(ind_desc);jQuery("#indust-path").attr('href',ind_link);});jQuery(".industry-container #active-industry").trigger('hover');jQuery(".right-ind-col > .industry-list > #active-industry").trigger("click");var steps_list_wrap=jQuery(".steps-container-2 > .steps-list a");var steps_description_left=jQuery(".stdc_container > .steps-content-left");steps_list_wrap.on("click",function(){var clicked_element=jQuery(this);var step_title=clicked_element.attr("title");var step_desc=clicked_element.data("desc");jQuery(".itemclicked").css({stroke:"#FFF"});jQuery(".itemclicked").css({fill:"#000"});jQuery(".circle-text").css({fill:"#494949"});jQuery(".circle-path").css({fill:"#5a5a5a"});clicked_element.find('circle').css({fill:"#5a5a5a"});clicked_element.find('circle').css({stroke:"#fff"});clicked_element.find('path').css({fill:"#fff"});clicked_element.find('text').css({fill:"#fff"});steps_list_wrap.removeClass("active");clicked_element.addClass("active");steps_description_left.find('h2').html(step_title);steps_description_left.find('#step-description').html(step_desc);});
jQuery(".svg1 #active-item").trigger('click');if(jQuery(window).width()<767){jQuery(".steps-container-2 > .steps-list #selected-item").trigger('click');}
var highestBox=0;jQuery('.blog .post .entry-title').each(function(){if(jQuery(this).height()>highestBox){highestBox=jQuery(this).height();}});jQuery('.blog .entry-title').height(highestBox);var highestBox=0;jQuery('.blog .post .entry-summary').each(function(){if(jQuery(this).height()>highestBox){highestBox=jQuery(this).height();}});jQuery('.blog .entry-summary').height(highestBox);var highestBox=0;jQuery('.category .entry-title').each(function(){if(jQuery(this).height()>highestBox){highestBox=jQuery(this).height();}});jQuery('.category .entry-title').height(highestBox);jQuery('.category .entry-summary').each(function(){if(jQuery(this).height()>highestBox){highestBox=jQuery(this).height();}});jQuery('.category .entry-summary').height(highestBox);var highestBox=0;jQuery('.blog_cat li a').each(function(){if(jQuery(this).height()>highestBox){highestBox=jQuery(this).height();}});jQuery('.blog_cat li a').height(highestBox);jQuery('.btn-click-view').on('click',function(e){e.preventDefault();jQuery(this).closest('.owl-wrapper-outer .item').find('.more').slideToggle();});});jQuery(function(){var ink,d,x,y;jQuery(".mdl-button").hover(function(e){if(jQuery(this).find(".ink").length===0){jQuery(this).prepend("<span class='ink'></span>");}
ink=jQuery(this).find(".ink");ink.removeClass("animate");if(!ink.height()&&!ink.width()){d=Math.max(jQuery(this).outerWidth(),jQuery(this).outerHeight());ink.css({height:d,width:d});}
x=e.pageX-jQuery(this).offset().left-ink.width()/2;y=e.pageY-jQuery(this).offset().top-ink.height()/2;ink.css({top:y+'px',left:x+'px'}).addClass("animate");});});
</script>

</body>
</html>
