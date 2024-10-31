<?php
$dbHandler = new databaseHandler();
	$previous = $dbHandler->getCode();
	if(isset($_POST['code'])){
		global $wpdb;
		$code=$_POST['code'];
		$blog_id = $_SESSION['blogid'];
		if($wpdb->query("update ".TABLE_NAME." set code = '$code', active = 'y' where code = '$previous' AND blogid = $blog_id ")){
			$previous = $code;
		}else{
			if ( $wpdb->query( "insert into ".TABLE_NAME."(blogid,code,active) values($blog_id,'$code','y') " ) ) {
				$previous = $code;
			} else {
				echo 'Sorry Your Code Cannot Be Saved!!!';
			}
		}
	}
	if ( isset ( $_POST['activate'] ) ) {
		$dbHandler->activateBar($_POST['activate']);
	}
	$active = $dbHandler->isActive ( $previous );
	if ( isset ( $_POST['deactivate'] ) ) {
		$dbHandler->deactivateBar( $previous );
		$active = FALSE;
	}
	pt_embedStyle ();
	pt_showHeader ();
?>
<div style="overflow:hidden;">

<?php
	if ( $previous != "" ) {
?>

	<div class="menu_toggle" style="background:#99fffb">Your Saved Code</div>
	<div class="toggle_content" style="background:#99fffb">
		<p>Your Code : <?php echo $previous; ?></p>
		<p>If you have changed any settings on <a href="http://dev.pluginstalk.com/pluginstalk-hello-bar/pluginstalk-hello-bar-construction" target="_blank">main settings page</a> and the code is changed then your bar will not be displayed until new code is saved.</p>		
	</div>
	<div class="menu_toggle" style="background:#a3ff99">Activate/Deactivate Settings</div>
	<div class="toggle_content" style="background:#a3ff99">
		
		<?php			
			if ( !$active ) {
		?>
			<p>
			Your bar is at present not active. Reactivating it will make it appear on your web blog. Just click the below button to activate it.
			<br />
			<form method="post">
				<input type='hidden' name='activate' value='<?php echo $previous; ?>' />
				<button class="green" type="submit">
					Activate Bar :)
				</button>
			</form>	
			</p>
		<?php
			} else {
		?>
			<p>
			Your bar is currently active and deactivating the bar will make the bar disappear from all of your web pages. So deactivate it only at your own risk.
			<br></br>
			We recommend deactivating it before you want to change any settings and then reactivating it again.
			<br />
			<form method="post">
				<input type='hidden' name='deactivate' value='<?php echo $previous; ?>' />
				<button type="submit" class="red">
					Deactivate Bar :( 
				</button>
			</form>
			</p>
		<?php
			}
		?>
		
	</div>
	
<?php
	}
?>
	
	<div class="menu_toggle" style="background:#e4ff99">Got New Code? Save It Here.</div>
	<div class="toggle_content" style="background:#e4ff99">
		<p>
			<span>Enter your code here</span>
			<form method="post">
				<input type='text' name='code' value='' />
				<br /><br />
				<button type="submit">Save & Activate</button>
			</form>
		</p>
		<p>
			If you don&#8217;t have any code then you can generate one from <a href="http://dev.pluginstalk.com/pluginstalk-hello-bar/pluginstalk-hello-bar-construction" target="_blank">bar&#8217;s construction page</a>.
		</p>
	</div>	
	<div class="menu_toggle" style="background:#fec7ff"><a href="http://dev.pluginstalk.com/contact-us" target="_blank">Need Any Help & Support?</a></div>
	<div class="toggle_content" style="background:#fec7ff">
		<p>
			Don&#8217;t know how to use the plugin? Or do you have any problem using our plugin?<br/>
			Just leave a comment on <a href="http://dev.pluginstalk.com/pluginstalk-hello-bar" target="_blank">this page</a> or you can directly <a href="http://dev.pluginstalk.com/contact-us" target="_blank">contact us by email</a> ( admin@pluginstalk.com )
		</p>
		<p>
			How to use our plugin? Basic steps are only two:
			<ol>
				<li>Goto the <a href="http://dev.pluginstalk.com/pluginstalk-hello-bar/pluginstalk-hello-bar-construction" target="_blank">bar&#8217;s construction page</a>, design everything, save it and get code</li>
				<li>Install the WordPress plugin available with it and paste the generated code in settings section</li>
			</ol>
			"Activate/Deactivate" buttons does the same work as they say :) You can find them above.
		</p>
	</div>
	<?php
		pt_showLinkToUs ();
	?>
	
</div>