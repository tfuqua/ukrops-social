<?php
	global $social_accounts;
?>

<div class="social_icons_widget">

	<ul class="social_accounts">
		<?php foreach ($social_accounts as $site => $url) : ?>
			<li><label for="<?php echo $this->get_field_id($url); ?>" class="<?php echo $url; ?>"><?php echo $site; ?></label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id($url); ?>" name="<?php echo $this->get_field_name($url); ?>" value="<?php echo esc_attr($instance[$url]); ?>" placeholder="http://" /></li>
		<?php endforeach; ?>
	</ul>
	<br />

</div>
