<?php
global $social_accounts;
?>

<ul class="social-icons">
	<?php foreach($social_accounts as $siw_title => $url) :
		if($instance[$url] != ''): ?>


		<li>
			<a class="icon-<?php echo $url?>" href="<?php echo $instance[$url]?>">
				<i class="fa fa-<?php echo $url ?>"></i>
			</a>
		</li>

	<?php endif; ?>
	<?php endforeach; ?>
</ul>
