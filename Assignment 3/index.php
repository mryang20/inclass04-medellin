	<?php include "inc/html-top.inc" ?>

	<body>
		<!-- Use this class to execute the "floating" content trick, or just use CSS Grid -->
		<!-- Depending on what you do, I might have to move the container to not include the header too. Let me know -->
		<div class="container">

			<header>
			<!-- For the h1's on this page, I was thinking of using a "coding" type font. A good choice would be Inconsolata, its on google fonts. Maybe use the same font for all the "titles", h1, h2, etc -->
			<h1>CS Majors in CSC 174</h1>
			<!-- I've already assigned a class called "menu" to the nav element, to use with CSS. -->
			<?php include "inc/nav.inc" ?>
			</header>
			<article>

				<!-- this is where I think the JavaScript element should go. Probably just a slideshow of each student, with the pictures in the "images" folder, unless you want to do something else. -->

				<!-- I picture a nice clean sans-serif font for the paragraph text on the site. A good pairing with Iconsolata would be Montserrat, which is also a google font -->
				<section><p>Despite being listed as a Computer Science course, many of the students in this class are not Computer Science majors. The appeal of website development is wide ranging, and the class has students ranging from Digital Media Studies majors to Psychology majors. That isn't to say Computer Science majors can't enjoy the class, however, and many of our students are CSC majors. Here, we'll get to know a few of them a little better.</p></section>
			
			</article>

			<!-- I imagine the footer stretching across the bottom of the page, but that's up to you -->
			<?php include "inc/foot.inc" ?>
		</div><!-- .container -->
	</body>
</html>