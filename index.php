<!--
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MM                                   OMM
MM.                             77   OMM
MM.                              ,MM OMM
MM.                              MM~ OMM
MM.                             MM7I:OMM
MM.                                . OMM
MM.   MMMMM       MMMM8              OMM
MM.  $MMMMM      MMMMMM              OMM
MM.  MMMMMMM    .MM:MMM       =OMO.  OMM
MM.  MMM MMM    MMN MMM    ,MMMMMMM. OMM
MM.  MMM MMMM  ~MM. MMM.  MMMM.      OMM
MM. .MMM  MMM. MMI  MMM= :MMM.       OMM
MM. ~MMM  MMMMMMM   MMMO OMMM        OMM
MM. MMMO   MMMMM:   MMMM .MMM~       OMM
MM. MMM=   =MMMM    MMMM  MMMMM?  ~8 OMM
MM. MMM     MMM.    MMMM    MMMMMMMM OMM
MM.                                  OMM
MM.                                  OMM
MM.                                  OMM
MM.                                  OMM
MM.                                  OMM
MM.                                  OMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                         _____ 
                          _                                        _    |___  |
 ___  ___  ___  ___  ___ |_| ___  ___    _____  _ _    ___  ___  _| | ___ |  _|
|  _||  _|| -_|| -_|| . || ||   || . |  |     || | |  |  _|| . || . || -_||_|  
|___||_|  |___||___||  _||_||_|_||_  |  |_|_|_||_  |  |___||___||___||___||_|  
                    |_|          |___|         |___|                           


// Andrew McCallum - 03-20-2013
// Copyright (c) 2013
// Written in Coda 2 with Made of Code Theme. Download it here: http://ipaintcode.com/coda-2-themes/ 
// Fueled on Tim Horton's coffee
// Props to Sheridan IMM for the knowledge
// ------------------------------------------------------------
-->

<!DOCTYPE html>
<!--[if IE]>
<script type="text/javascript">
window.location = "http://andrewmc2.com/ie";
</script>
<![endif]-->



<html lang="en"> 


<head>


  	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  	<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
  	<link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    
    <!-- disable iPhone inital scale -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <!-- <META HTTP-EQUIV="REFRESH" CONTENT="15"> -->
    <meta name="description" content="Forward-thinking web developer & designer">
    <title>Andrew McCallum - Portfolio</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- jQuery 1.3.2 -->
    <link rel="stylesheet" href="js/fb/jquery.fancybox-1.3.4.css" type="text/css">
	<script type='text/javascript' src='js/fb/jquery.min.js'></script>
	<script type='text/javascript' src='js/fb/jquery.fancybox-1.3.4.pack.js'></script>
	<script type="text/javascript">var jQuery132 = $.noConflict(true);</script>	


    <!-- jQuery 1.4 -->	
    <script src="js/jquery-1.4.js" type="text/javascript"></script>	 	 
    <script src="js/jquery.animate.js" type="text/javascript"></script>
	<script src="js/jquery.anchorScroll.js" type="text/javascript"></script>
	<script src="js/jquery.airport-1.1.source.js" type="text/javascript"></script>
	<script type="text/javascript">var jQuery14 = $.noConflict(true);</script>	
	
	<!-- jQuery 1.6.2 -->
	<link rel="stylesheet" href="js/flex/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/flex/jquery.flexslider.js"></script>
	<script type="text/javascript">var jQuery162 = $.noConflict(true);</script>
	
	
	
	
	
<!-- 	fancybox add later when i can figure out use different jquery without conflict-->
<!--

-->	

<!-- add image slider jquery for projects once i figure out how run different versions of jquery -->
	

 <!--
/************************************************************************************
JQUERY JS
*************************************************************************************/
-->   
    <script type="text/javascript">
    
    	
    
    jQuery132(function() {
			jQuery132("a.group").fancybox({
				'nextEffect'	:	'fade',
				'prevEffect'	:	'fade',
				'overlayOpacity' :  0.8,
				'overlayColor' : '#000000',
				'arrows' : false,
			});			
		});
    
		jQuery14(document).ready(function() {	
			jQuery14("#navli-one").anchorScroll();
			jQuery14("#navli-two").anchorScroll();
			jQuery14("#navli-three").anchorScroll(); 
			jQuery14("#navli-four").anchorScroll();
			jQuery14("#nav-logo").anchorScroll();
			jQuery14("#responsive-navli-one").anchorScroll();
			jQuery14("#responsive-navli-two").anchorScroll();
			jQuery14("#responsive-navli-three").anchorScroll();
			jQuery14("#responsive-navli-four").anchorScroll();
			/* jQuery14("#slogan").airport([ 'andrew' ]); */
			

 });
 
 

  jQuery162(window).load(function() {
    jQuery162('.flexslider').flexslider({animation:"slide",slideshow: false, touch: true, manualControls: "true",directionNav:true      
     
    });    
  });
  
  	
  
  
			
	 </script>
   

    
  </head>
  <body> 
<!--
/************************************************************************************
PAGEWRAP
*************************************************************************************/
-->
  	<div id="pagewrap">  	
  	
<!--
/************************************************************************************
HEADER
*************************************************************************************/
-->
	  	<div id="header-wrapper" class="carbon-fiber-bg">
		  	<header id="header">
<!--
/************************************************************************************
MAIN NAV
*************************************************************************************/
-->		  	
			  	<nav>
				  	<ul id="main-nav">
				  		<li><a id="navli-one" href="#about"><div class="navIconSmall"><?php include("images/svg/header/main-nav-about.svg"); ?></div></a></li>
				  		
				  		<li><div class="navIconSmallSpace"></div></li>
				  		
				  		<li><a id="navli-two" href="#projects"><div class="navIconSmall"><?php include("images/svg/header/main-nav-work.svg"); ?></div></a></li>
				  		
						<li><div class="navIconSmallSpace"></div></li>
						
						<li><a id="nav-logo" href="#content"><div id="navCenterLogo"></div></a></li>
						
						<li><div class="navIconSmallSpace"></div></a></li>
						
						<li><a id="navli-three" href="#likes"><div class="navIconSmall"><?php include("images/svg/header/main-nav-likes.svg"); ?></div></a></li>
				  		
						<li><div class="navIconSmallSpace"></div></li>
						
						<li><a id="navli-four" href="#contact"><div class="navIconSmall"><?php include("images/svg/header/main-nav-contact.svg"); ?></div></a></li>
				  	</ul>
					
<!--
/************************************************************************************
RESPONSIVE NAV
*************************************************************************************/
-->					
					<ul id="responsive-nav">
						<li><a id="responsive-navli-one" href="#about"><div class="responsive-menu-text">ABOUT</div></a></li>
						
						<li><a id="responsive-navli-two" href="#projects"><div class="responsive-menu-text">PROJECTS</div></a></li>
						<li><a id="responsive-navli-three" href="#likes"><div class="responsive-menu-text">LIKES</div></a></li>

						<li><a id="responsive-navli-four" href="#contact"><div class="responsive-menu-text">CONTACT</div></a></li>
					</ul>
					
			  	</nav>	  	
			</header>		 
		</div> <!-- header-wrapper done -->		

<!--
/************************************************************************************
CONTENT
*************************************************************************************/
-->

		<div id="content">


<!--
/************************************************************************************
FEATURED CONTENT
*************************************************************************************/
-->		
		<div id="featured-content">
			<div id="slogan-wrapper">
				<p id="slogan1" class="slogan">My name is </p>
				<p id="slogan2" class="slogan">Andrew McCallum</p>
				<p id="slogan3" class="slogan">and I like creating big projects for small screens</p>
			</div>
			
		</div>



<!--
/************************************************************************************
ABOUT
*************************************************************************************/
-->
		
		<div id="about" class="carbon-fiber-bg">
			<div id="about-carbon-fiber-bg-opacity">
			<article id="post clearfix">
				<header>
					<h1 class="section-title-black-bg">About</h1>
						<div class="article-svg-icon" id="about-svg-icon"></div>
				</header>
				
				<p class="section-description-black-bg">
						My passion lies in mobile development, which includes both native iOS app development and responsive web design (like this site!). I am obsessed with fine details and am not satisfied unless any work I do is pixel perfect, both in terms of design and performance. I’m well trained, being a graduate of both <a href="http://imm.sheridanc.on.ca/" target="_blank">Sheridan’s Interactive Multimedia</a> program and <a href="http://mobilemakers.co/" target="_blank">Mobile Makers Academy</a> iOS bootcamp in Chicago. I love coding, and hope we can work together to make your mobile/web idea become a reality. 
				</p>
<hr width="70%">				
				
							<h3 class="section-description-subtitle-blackbg">Developer Skills</h3>
							<div class="skills-wrapper">
								<div class="article-svg-standard"><?php include("images/svg/skills/dev/big/objectivecbig.svg");?></div>
								<div class="article-svg-standard"><?php include("images/svg/skills/dev/big/javascriptbig.svg");?></div>
								<div class="article-svg-standard"><?php include("images/svg/skills/dev/big/html5big.svg");?></div>
								<div class="article-svg-standard"><?php include("images/svg/skills/dev/big/css3big.svg");?></div>
								<div class="article-svg-standard"><?php include("images/svg/skills/dev/big/phpbig.svg");?></div>
								<div class="article-svg-standard"><?php include("images/svg/skills/dev/big/flashbig.svg");?></div>
						
								<!--
<div class="article-svg-standard" id="css3-logo"></div>
								<div class="article-svg-standard" id="jquery-logo"></div>
								<div class="article-svg-standard" id="xcode-logo"></div>
								<div class="article-svg-standard" id="php-logo"></div>
								<div class="article-svg-standard" id="as3-logo"></div>
-->
							
							
							<h3 class="section-description-subtitle-blackbg">Designer Skills</h3>
								<div class="article-svg-standard"><?php include("images/svg/skills/design/big/psbig.svg");?></div>
								<div class="article-svg-standard"><?php include("images/svg/skills/design/big/aibig.svg");?></div>
								<div class="article-svg-standard"><?php include("images/svg/skills/design/big/omnibig.svg");?></div>
								
								</div> <!-- skills-wrapper -->
			</article>
			</div>
			
		</div>
<!--
/************************************************************************************
PROJECTS
*************************************************************************************/
-->		
		<div id="projects">
			<div id="projects-carbon-fiber-bg-opacity">
			<!-- <article id="post clearfix"> -->
				
				<header>
					<h1>Projects</h1>
					<div class="article-svg-icon" id="projects-svg-icon"</div>	
				</header>
				
				<!--
<p class="section-description">
						Please feel free to browse through my recent projects and don't hesitate to contact me if you have any questions or comments. Feedback is always much appreciated. 
					</p>
-->
				
				<div class="project" id="odd-project">		
					<h3 class="project-header">Sushi Snob</h3>
						<!-- <img onclick="alert('shit')" id="cat" src="images/toronto.jpg"></img> -->
						<div class="flexslider-wrapper">
							<div class="flexslider">
							  <ul class="slides">
							    <li>
							      <img src="images/projects/5-sushi/sushi1.jpg" />
							    </li>
							    <li>
							      <img src="images/projects/5-sushi/sushi2.jpg" />
							    </li>
							  </ul>
							</div>
						</div>
						
						<div class="project-text-wrapper-outer">
						<div class="project-text-wrapper-inner">
						
						<p class="project-text">Sushi Snob is a native iOS application written Objective-C that helps sushi fans navigate to the closest sushi restaurant via a live compass. It also features custom maps and allows the user share their favorite sushi memories. Sushi Snob is integrated with the FourSquare API for restaurant information and uses all custom design. For a live web demo, please visit <a href="https://app.io/20NqQA" target="_blank">App.io</a>, but please note that the compass only works on the device.<br>   
</p>	
						</div>
						</div>
					
				</div> <!-- project close -->
				
				<div class="project">
					<h3 class="project-header">Toronto Park Finder</h3>
						<!-- <img onclick="alert('shit')" id="cat" src="images/toronto.jpg"></img> -->
						<div class="flexslider-wrapper">
							<div class="flexslider">
							  <ul class="slides">
							    <li>
							      <img src="images/projects/6-park/park1.jpg" />
							    </li>
							    <li>
							      <img src="images/projects/6-park/park2.jpg" />
							    </li>
							    <li>
							      <img src="images/projects/6-park/park3.jpg" />
							    </li>
							  </ul>
							</div>
						</div>
						
						<div class="project-text-wrapper-outer">
						<div class="project-text-wrapper-inner">
						<p class="project-text">Toronto Park Finder is a responsive web application that allows Torontonians to find the closest park and have the option to choose from dog parks, playgrounds, fire pits and more. They can also view Instagram pictures of the park. The web app taps into Toronto’s open data for the information and uses both Google Maps and Instagram APIs. Please visit the live site <a href="http://andrewmc2.com/park/" target="_blank">here.</a><br> 
</p>	
						</div>
						</div>
		
				</div> <!-- project close -->
					

				
				
					<div class="project-spacer"></div>
				
				
				<div class="project">
					<h3 class="project-header">Retro Rooster</h3>
						<!-- <img onclick="alert('shit')" id="cat" src="images/toronto.jpg"></img> -->
						<div class="flexslider-wrapper">
							<div class="flexslider">
							  <ul class="slides">
							    <li>
							      <img src="images/projects/1-retro/retro1.jpg" />
							</li>
							    <li>
							      <img src="images/projects/1-retro/retro2.jpg" />
							    </li>
							  </ul>
							</div>
						</div>
						
						<div class="project-text-wrapper-outer">
						<div class="project-text-wrapper-inner">
						
						<p class="project-text">Retro Rooster is a native iOS application written in Objective-C that puts a gamification spin on the traditional alarm clock. When the alarm goes off, the user can either snooze or ‘shake to wake’. Once the iPhone is shaken, the user will have to play a mini-game using accelerometer control and gestures to prove that their brain is awake. This is my first native iOs app.    
  
</p>	
						</div>
						</div>
				</div> <!-- project close -->
								
				<div class="project">		
					<h3 class="project-header">Mess With Mitt</h3>
						<!-- <img onclick="alert('shit')" id="cat" src="images/toronto.jpg"></img> -->
						<div class="flexslider-wrapper">
							<div class="flexslider">
							  <ul class="slides">
							<li>
							      <img src="images/projects/2-mitt/mitt1.jpg" />
							</li>
							    <li>
							      <img src="images/projects/2-mitt/mitt2.jpg" />
							    </li>
							  </ul>
							</div>
						</div>
						<div class="project-text-wrapper-outer">
						<div class="project-text-wrapper-inner">
						
						<p class="project-text">Mess with Mitt combines an Arduino, Flash, a solenoid, an infrared motion sensor, silly spray, and everyone’s favorite politician, Mitt Romney. In this project, it’s the year 2050 and the user must interact with Mitt to help him make cash to fund his expensive robot body. If the user succeeds, Mitt is happy. But if the user makes the wrong moves, they will trigger the solenoid and get sprayed.

</p>	
						</div>
						</div>
				</div> <!-- project close -->
<!-- 			</article> -->
			</div>	
			
		</div>
		
<!--
/************************************************************************************
THIS IS A HACK -- FOR SOME REASON ANCHOR SCROLL WAS GOING TO PROJECTS INSTEAD OF LIKES. THE LIKES DIV SEEMEED TO WRAP AROUND THE PROJECTS DIV FOR SOME REASON. I NEED TO FIX THIS IN THE FUTURE

FAKE LIKES
*************************************************************************************/
-->	
<div id="fake-likes">.</div>
					
<!--
/************************************************************************************
LIKES
*************************************************************************************/
-->		
		
		<div id="likes" class="carbon-fiber-bg">
			<div id="likes-carbon-fiber-bg-opacity">
						<article id="post clearfix">
				<header>
					<h1 class="section-title-black-bg">Likes</h1>
						<div class="article-svg-icon" id="likes-svg-icon"></div>
				</header>	
				om
				<p class="section-description-black-bg" id="likes-text">
						I feel that sharing common interests amongst team members can really enhance the working experience. I love keeping up with two things in life: music and tech. My musical journey ranges from Seattle grunge rock and the golden age hip-hop in the 90s to various types electronic music up until today. Currently, I am feeling the new wave R&B movement and the return of hip-hop, with artists like Chance the Rapper, Rockie Fresh, the Weeknd, and Frank Ocean leading the charge. I am also a gadget freak and would buy every gadget possible if I had the money. I was the first Android user out of all my friends, but have recently switched back to iOS. I also enjoy living a healthy lifestyle and traveling and learning new languages. You can view my Instagram below to see my latest activities.
				</p>				
					<!--add this when i have time			
<h2>Hear</h2>
						<div class="article-svg-standard" id=""></div>
						<div class="article-svg-standard" id=""></div>
						<div class="article-svg-standard" id=""></div>
						<div class="article-svg-standard" id=""></div>
					<h2>See</h2>
						<div class="article-svg-standard" id=""></div>
						<div class="article-svg-standard" id=""></div>
						<div class="article-svg-standard" id=""></div>
						<div class="article-svg-standard" id=""></div>
					<h2>Play</h2>
						<div class="article-svg-standard" id=""></div>
						<div class="article-svg-standard" id=""></div>
						<div class="article-svg-standard" id=""></div>
						<div class="article-svg-standard" id=""></div>
-->
			<div id="instagram">
				<h3 class="section-description-subtitle-blackbg">Instagram </h3>
				<br>
				<?php include("addInstagram2.php"); ?>					
				</div>	
			</article>
			</div>
		</div>
<!--
/************************************************************************************
CONTACT
*************************************************************************************/
-->		
		<div id="contact">
			<div id="contact-carbon-fiber-bg-opacity">
						<article id="post clearfix">
				<header>
				<h1>Contact</h1>
					<div class="article-svg-icon" id="contact-svg-icon"></div>
				</header>	
				
				<p class="section-description">
						If you want to get in touch with me, please feel free to connect with me via email, Twitter, LinkedIn or GitHub. My resume is also available to download <a href="http://www.andrewmc2.com/resume/AndrewMcCallumResume2013.pdf" target="_blank">here</a>. Looking forward to working on projects with you in the future!
				</p>
				
				<div id="widgets">
					<a href="http://www.twitter.com/andrewmccallum8" target="_blank"><div id="twitter"></div></a>
					<a href="mailto:info@andrewmc2.com"><div id="email"></div></a>
					<a href="http://www.linkedin.com/in/amccallum1" target="_blank"><div id="linkedIn"></div></a>
					<a href="https://github.com/andrewmc2" target="_blank"><div id="github"></div></a>
				</div>
					<!-- for later maybe
<div class="article-svg-standard" id="email-logo"></div>
					<div class="article-svg-standard" id="linkedin-logo"></div>
					<div class="article-svg-standard" id="twitter-logo"></div>
-->	
				</article>
			<div id="contact-carbon-fiber-bg-opacity">
		</div>


		</content> 

<!--
/************************************************************************************
FOOTER
*************************************************************************************/
-->		
		<footer id="footer">
			
		</footer>
		
  	</div> <!-- pagewrap end -->  	
  </body>
</html>