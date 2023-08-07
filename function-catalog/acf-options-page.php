<?php

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{
	// Ustawienia globalne
	acf_add_options_page(array(
		'page_title' 	=> 'Ustawienia globalne',
		'menu_title'	=> 'Ustawienia globalne',
		'menu_slug' 	=> 'theme-general-settings',
	));

	//Nagłówek
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Nagłówek',
		'menu_title'	=> 'Nagłówek',
		'parent_slug'	=> 'theme-general-settings',
	));

	//Stopka
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Stopka',
		'menu_title'	=> 'Stopka',
		'parent_slug'	=> 'theme-general-settings',
	));

	//Main menu - Services
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Main menu - Services',
		'menu_title'	=> 'Main menu - Services',
		'parent_slug'	=> 'theme-general-settings',
	));

	//Main menu - Knowledge
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Main menu - Knowledge',
		'menu_title'	=> 'Main menu - Knowledge',
		'parent_slug'	=> 'theme-general-settings',
	));
};
