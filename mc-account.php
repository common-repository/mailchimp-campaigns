<div class="error">
	This plugin is still in beta.  If you'd like to receive a notification about future updates to the plugin, please sign up for our <a target="_blank" href="http://eepurl.com/XTNh9">notifications list</a>!
</div>
<div class="content">
	<form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<input type="text" name="mcapi" placeholder="MailChimp API Key" required>
		<input type="submit" class="">
	</form>
</div>
