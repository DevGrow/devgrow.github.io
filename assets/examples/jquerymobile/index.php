<?php include('header.php'); ?>
	<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="a">
		<li data-role="list-divider">Transition Effects</li>
		<li><a href="effects.php?id=slide" data-transition="slide">Slide</a></li>
		<li><a href="effects.php?id=slideup" data-transition="slideup">Slide Up</a></li>
		<li><a href="effects.php?id=slidedown" data-transition="slidedown">Slide Down</a></li>
		<li><a href="effects.php?id=pop" data-transition="pop">Pop</a></li>
		<li><a href="effects.php?id=flip" data-transition="flip">Flip</a></li>
		<li><a href="effects.php?id=fade" data-transition="fade">Fade</a></li>
	</ul>
	<br /><br />
	<ul data-role="listview" data-dividertheme="e">
		<li data-role="list-divider">Seamless List (margin-less)</li>
		<li><a href="#foo" data-transition="slide">Internal Link 1</a></li>
		<li><a href="#bar" data-transition="slide">Internal Link 2</a></li>
		<li><a href="#" data-transition="slide">Example Item 3</a></li>
	</ul>
<?php include('footer.php'); ?>