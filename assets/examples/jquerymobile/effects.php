<?php

include('header.php');
$effect = $_GET['id'];

echo "<h1>The $effect effect</h1>";

echo '<p>Using any of these transition effects couldn\'t be any easier, simply add <code style="background:#fff; padding: 2px;"><em>data-transition="'.$effect.'"</em></code> to your anchor link and you\'re all set.</p>';

?>
		<br /><br />
		<a href="http://devgrow.com/mobile-web-dev-using-jquery-mobile/" data-role="button" data-theme="a" data-icon="back" data-inline="true">Return to Article</a> 
		<a href="http://devgrow.com/" data-role="button" data-theme="c" data-icon="check" data-inline="true">Example by DevGrow.com</a> 
	</div>
	<div data-role="footer" data-position="fixed">
		<h1>&copy; Copyright Info or Site URL</h1>
	</div>

</div>
</body>
</html>