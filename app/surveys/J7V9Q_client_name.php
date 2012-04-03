<?php

// SURVEY CONFIG FILE
// -------------------------------------------------------------------------------------------------
// Client : Name of Client

$survey_config = array(
	'client_name'		=> 'Name of Client',
	'client_logo'		=> 'logo-url.jpg',
	'survey_start'		=> 'YYYY-MM-DD HH:MM:SS',
	'survey_end'		=> 'YYYY-MM-DD HH:MM:SS',
	'survey_title'		=> '',
	'survey_intro'		=> '',
	'survey_questions'	=> array(
	
		// PREFERRED METHOD OF TRANSPORT
		'transport_method' => array(
			'type' = 'select',
			'options' => array(
				'with_parents' => '',
			),
			'required' => true
		),
	
		// DOMESTIC SETUP
		'domestic_setup' => array(
			'type' => 'select',
			'options' => array(
				'with_parents' => '',
			),
			'required' => false
		),
	
		// COMMENTS
		'comments' => array(
			'type' = 'text',
			'required' => false
		)
		
	),
	
);


?>