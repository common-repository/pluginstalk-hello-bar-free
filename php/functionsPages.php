<?php

function pt_embedStyle () {
?>
	<style>
	* {
		font-family: century gothic, Segoe UI Light, Segoe UI, open sans, arial;
	}
	.menu_toggle {
		padding:15px 15px 15px 15px;
		color: white;
		cursor: pointer;
		font-size:22px;	
	}
	.menu_toggle a {
		color: white;
		text-decoration: none;
	}
	.toggle_content {
		padding:15px 15px 15px 15px;
		overflow: hidden;
		font-size: 16px;
		letter-spacing: 1px;
	}
	.toggle_content a {
		text-decoration: none;
	}
	.toggle_content button {
		padding: 4px 10px;
	}
	.red {
		margin-top:10px;
		margin-right:30px;
		font-family:inherit;
		background:#ff0000;
		color:white;
		padding:3px 3px 3px 3px ;
	}
	.red:hover {
		background:#ff2e2e;
	}
	
	.green {
		background:#0a9100;
		margin-top:10px;
		margin-right:30px;
		font-family:inherit;
		color:white;
		padding:3px 3px 3px 3px ;
	}
	.green:hover {
		background:#0dbd00;
	}
	</style>
<?php
}

function pt_showHeader () {
?>
	<div style="overflow: hidden">
		<div style="height: 150px; float: left">
			<a href="http://pluginstalk.com" target="_blank"><img src="<?php echo PLUGIN_BASE_URL.'/images/logo_x150.png' ?>" style="height: inherit;"></a>
		</div>
		<div style="float: right">
			<a href="https://www.PluginsTalk.com" target="_blank"><img src="<?php echo PLUGIN_BASE_URL.'/images/visitWebsite.png' ?>"  border="0" width="163px"></a>
			<br />
			<a href="https://www.facebook.com/PluginsTalk" target="_blank"><img src="<?php echo PLUGIN_BASE_URL.'/images/likeUsOnFacebook.png' ?>"  border="0"></a>
			<br />
			<a href="https://www.twitter.com/PluginsTalk" target="_blank"><img src="<?php echo PLUGIN_BASE_URL.'/images/followUsOnTwitter.png' ?>"  border="0"></a>
		</div>
	</div>
<?php
}

function pt_showLinkToUs () {
?>
	<div class="menu_toggle" style="background:#cac9ff">Link To Us</div>
	<div class="toggle_content" style="background:#cac9ff;">
		<p>
		If you like our articles, our work or our plugins and you want to join us through social media then we are available for you here also:
		<p>
		<p>
		<a href="https://www.facebook.com/PluginsTalk" target="_blank"><img src="<?php echo PLUGIN_BASE_URL.'/images/likeUsOnFacebook.png' ?>"  border="0"></a> <a href="https://www.twitter.com/PluginsTalk" target="_blank"><img src="<?php echo PLUGIN_BASE_URL.'/images/followUsOnTwitter.png' ?>"  border="0"></a> <a href="https://www.PluginsTalk.com" target="_blank"><img src="<?php echo PLUGIN_BASE_URL.'/images/visitWebsite.png' ?>"  border="0"></a>
		</p>
	</div>
<?php
}

function pt_showAboutPluginsTalk () {
?>

<div style="overflow:hidden;">
	<div class="menu_toggle" style="background:#99fffb"><a href="http://pluginstalk.com" target="_blank">Something About PluginsTalk.com</a></div>
	<div class="toggle_content" style="background:#99fffb">
		<p><a href="http://pluginstalk.com" target="_blank">PluginsTalk.com</a> is just another website among all of the websites where we strive hard to provide you the detailed information about web browser&#8217;s plugins. The information we provide includes the steps of plugin installation, how does the plugin work, what are the settings of plugin and how we can use the plugin in most effective way. You'll find plugins which you already know about, which you use daily; with some new and most downloaded plugins. We tell about plugins of all major browsers like: Mozilla Firefox, Google Chrome, Safari, Opera & Internet Explorer.
		</p>
		<p>
		If you also know about some plugins which are cool and want to tell the world then you are always welcomed to write about the plugins. You can <a href="http://dev.pluginstalk.com/contact-us" target="_blank">contact us</a> for further information.
		</p>
		<p>
		<a href="http://pluginstalk.com" target="_blank">Click Here</a> to visit <a href="http://pluginstalk.com" target="_blank">PluginsTalk.com</a> and know more about it.
		</p>
	</div>
	<div class="menu_toggle" style="background:#a3ff99"><a href="http://dev.pluginstalk.com" target="_blank">About Our Developer&#8217;s Section</a></div>
	<div class="toggle_content" style="background:#a3ff99">
		<p>
		We do have a developer section where we tell the world about the plugins which we create, be it on any platform like WordPress or any web browser. Here in our developer&#8217;s section you can get help regarding any of our plugins just by leaving comment or contacting us.
		</p>
		<p>
		If you have any new plugin idea which you think is missing or is a paid service then you are free to provide us the actual requirements that you need through our <a href="http://dev.pluginstalk.com/contact-us" target="_blank">contact section</a>, and if we felt that its worth developing the plugin then we&#8217;ll develop it for the world (including you, obviously). In return your name will be written as a idea submitter in that plugin information section. And if you are lucky enough then you&#8217;ll might get special goodies or cash prizes.
		</p>
		<p>
		Are you a developer? Have you developed any plugin and you want to submit it? Or you want to develop the plugin for us and join our PluginsTalk team? Be it any case, you are always welcomed to <a href="http://dev.pluginstalk.com/contact-us" target="_blank">contact us</a> at any time for any reason.
		</p>
	</div>
	<div class="menu_toggle" style="background:#e4ff99"><a href="http://dev.pluginstalk.com/pluginstalk-hello-bar" target="_blank">About Plugins Talk&#8217;s Hello Bar</a></div>
	<div class="toggle_content" style="background:#e4ff99">
		<p>
		We wanted to show our users what&#8217;s hot and trending plugins about which the world is talking, in a bar, struck on the top of browser window. We tried to find the available options and we found a paid service for it. It was good but we want more flexibility and more alive thing.
		</p>
		<p>
		So we decided to build one. Took WordPress as our platform for our bar and created it. Also released a WordPress plugin with the bar which helps in the integration of bar in the website. We made the designing and integration part so simple that no one will feel difficulty in the whole process. Basic steps are only two:
		<ol>
			<li>Goto the <a href="http://dev.pluginstalk.com/pluginstalk-hello-bar/pluginstalk-hello-bar-construction" target="_blank">bar&#8217;s construction page</a>, design everything, save it and get code</li>
			<li>Install the WordPress plugin available with it and paste the generated code in settings section</li>
		</ol>
		"Activate/Deactivate" buttons does the same work as they say :)
		</p>
	</div>
	<div class="menu_toggle" style="background:#ffc599">About The Developers</div>
	<div class="toggle_content" style="background:#ffc599">
		<p>
		We started with a very few developers in our team. With time our PluginsTalk team increased as many highly experienced and talented developers kept joining our team. Presently some of our developers are working on YouTube plugins and most of them working on WordPress & Joomla plugins.
		</p>
		<p>
		If you want to join our team and want to do something which you like, want to develop your own idea. You can <a href="http://dev.pluginstalk.com/contact-us" target="_blank">join us</a> at anytime.
		</p>
	</div>
	<div class="menu_toggle" style="background:#fec7ff"><a href="http://dev.pluginstalk.com/contact-us" target="_blank">Contact Us</a></div>
	<div class="toggle_content" style="background:#fec7ff">
		<p>
		We don&#8217;t believe that there must be a reason for someone to contact someone. If you just want to say "Hi!!" or you want to do some professional talking or you want to tell us your secrets or you might want to tell that your height is taller than one of our team member, whatever may be the reason you are always welcomed to contact us. We are always happy to hear from you. If everything goes normal then we&#8217;ll surely reply as soon as possible so that you won&#8217;t have to wait for next conversation to begin.
		</p>
		<p>
		Visit our <a href="http://dev.pluginstalk.com/contact-us" target="_blank">contact section</a> for communicating with us.
		</p>
	</div>
	<?php
		pt_showLinkToUs ();
	?>
	
</div>
<?php
}

?>