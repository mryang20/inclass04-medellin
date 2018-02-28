	<?php include "inc/html-top.inc" ?>			

	<body>
		<div class="headercontainer">
			<header>
				
				<!-- For the h1's on this page, I was thinking of using a "coding" type font. A good choice would be Inconsolata, its on google fonts. Maybe use the same font for all the "titles", h1, h2, etc -->
				<h1>CS Majors in CSC 174</h1>
				
				<!-- I've already assigned a class called "menu" to the nav element, to use with CSS. -->
				<?php include "inc/nav.inc" ?>
				
			</header>
		</div>

			<!-- For the student pages, I feel like a C-clamp or something could work for layout. Header fixed to the top, footer fixed to the bottom, with the information on the left two thirds of the screen and with the image on the right third -->

			<!-- Also, I know I'm not supposed to give design advice Irfan, but I feel bad for getting this to you so late. The color scheme for the site could be something "codey," so we could do a black background with white text (like the Terminal) or something like that. Just suggestions -->
			<article>
				<!-- Inconsolata? -->
				<div class = "bodycontainer">

				<h2>Kennedy Agusi</h2>

				<img src="images/kennedy.jpg" alt="Kennedy Agusi">
				<figcaption>Senior CS student Kennedy Agusi</figcaption>

				<h3>About Me</h3>

					<!-- Montserrat?-->
					<p>My name is Kennedy Agusi and I am a senior at the University of Rochester. I am majoring in computer science and minoring in mathematics. My area of specialty includes software, mobile and web development.</p>

					<p> feel like I have traveled a lot in my life to the extent I no longer have a permanent home. Every new place I travel to I try to make it my home. After my high school in Nigeria, I traveled to four(4) different countries(UK, Spain, Israel and France) before coming to United States. My journey in United States started in community college in Dallas back in 2015. After completing my associate I transfered to University of Rochester (my traveling continues) to pursue my Bachelors. Ever since I came to United States I have had summer jobs in different states. I guess I should changed my name to "traveler".</p>

					<p>I never picture myself as a leader, but in any place I find myself I always end up to be the one people run to whenever they have problem. In every group project I have done either at work or in school I always end up been the one organizing and managing the team. Maybe I was born to be a leader anyway. My friends and co-workers always tell me that my problem solving skills is exceptional and this has always been the same words I hear from my boss in every job I have had.</p>

				<h3>Work Experience</h3>

				<p>Most recently, I worked a software development job at Nubiatech in Calumet City, Illinois. There, I designed and implemented nursing home management software, including database management systems for clients. I worked with Flask framework, Python, and MySQL there. Before that, I worked as a software developer in a chemistry lab at Richland College in Dallas. Me and my superviosr worked to develop software to help the lab track inventory. The year before that, I worked at Sharyland Utilites in Dallas, where I researched electrical impacts on the power grid at the company.</p>

				</div>

			</article>

			<?php include "inc/foot.inc" ?>
		
		<script src="http://code.jquery.com/jquery.js"></script>
 +		<script src="js/menu-highlighter.js"></script>
	</body>
</html>
