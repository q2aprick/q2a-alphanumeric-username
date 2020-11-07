<?php

/*
	Plugin Name: Q2A Alpahnumeric Username
	Plugin URI: https://github.com/q2aprick/q2a-alphanumeric-username
	Plugin Update Check URI: 
	Plugin Description: Restricts the characters in username to standard English characters A-Z, numbers 0-9, and the underscore sign.
	Plugin Version: 1.0
	Plugin Date: 2020-11-7
	Plugin Author: Q2A Prick
	Plugin Author URI: https://github.com/q2aprick
	Plugin Minimum Question2Answer Version:
	Plugin Minimum PHP Version:
	Plugin License: copy lefted          
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	qa_register_plugin_module('filter', 'alpha.php', 'alpha_filter', 'Alphanumeric Handle Filter');
	qa_register_plugin_layer('mention.php', 'Mention Layer');

/*
	Omit PHP closing tag to help avoid accidental output
*/
