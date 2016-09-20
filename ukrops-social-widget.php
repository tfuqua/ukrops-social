<?php
/*
Plugin Name: Ukrops Social Media Icons
Version: 1.0
Author: Taylor Fuqua
*/

class Ukrops_Social_Icons extends WP_Widget {

	function __construct() {
		parent::__construct(
			'ukrops-social', // Base ID
			'Ukrops Social Icons', // Widget Name
			array(
				'classname' => 'ukrops-social',
				'description' => 'Displays a list of social media website icons and a link to your profile.',
			)
		);

		global $social_accounts;
		$social_accounts = array(
			'Facebook' => 'facebook',
			'Instagram' => 'instagram',
			'RSS Feed' => 'rss',
			'Twitter' => 'twitter',
			'YouTube' => 'youtube',
		);
	}

	function form($instance) {
		include('lib/form.php');
	}

	function widget($args, $instance) {
		include('lib/widget.php');
	}

	function update($new_instance, $old_instance) {
		global $social_accounts;
		$instance = array();

		foreach ($social_accounts as $site => $url) {
			$instance[$url] = $new_instance[$url];
		}

		return $instance;
	}

}

add_action('widgets_init', create_function('', 'register_widget("Ukrops_Social_Icons");') );

?>
