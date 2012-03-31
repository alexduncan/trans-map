<?php

class Report extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('core');

		// CHECK VALID LOGGED IN USER
		if (!$this->session->userdata('loggedin') AND $this->uri->segment(2) != 'login')
		{
			redirect('/login');
		}
	}
	
	function index()
	{
		$this->load->view('welcome_message');
	}
	
	
	// =============================================================================================
	// GET LOCATION LINKS
	// =============================================================================================
	// AJAX ONLY request for a list of employee - office location links
	//
	//
	function get_links()
	{
	
		// GET CLIENT
		$client = "";
		
		
		// -------------------------------------------------------------------------------------------------
		// GET COMPANY LOCATIONS
		// -------------------------------------------------------------------------------------------------
		
		// DB QUERY -> SELECT * FROM locations WHERE company = '';
		if () {
			// RETURN LOCATIONS
		}
		else {
			// NO LOCATIONS FOUND ADD ERROR MESSAGE
			$errors[] = 'no locations found';
		}
		
		
		// -------------------------------------------------------------------------------------------------
		// GET COMPANY EMPLOYEES
		// -------------------------------------------------------------------------------------------------
		
		// DB QUERY -> SELECT * FROM employees WHERE company = '';
		if () {
			// RETURN EMPLOYEES
		}
		else {
			// NO EMPLOYEES FOUND ADD ERROR MESSAGE
			$errors[] = 'no employees found';
		}
		
		
		// -------------------------------------------------------------------------------------------------
		// CHECK LOCATION RELATIONSHIPS EXIST
		// -------------------------------------------------------------------------------------------------
		
		// CHECK NO ERRORS
		if (empty($errors)) {
		
			// ARRAY OF EXISTING LOCATION RELATIONSHIPS
			$links = array();
			
			// CREATE QUEUE FOR GETTING NEW RELATIONSHIPS
			$queue = array();
			
			// LOOP THROUGH EMPLOYEES
			foreach ($employees) {
			
				// LOOP THROUGH LOCATIONS
				foreach ($locations) {
					
					/* DB QUERY -> SELECT * FROM location_links as L WHERE
							L.min_lat < $employee->lat AND
							L.max_lat > $employee->lat AND
							L.min_long < $employee->long AND
							L.max_long > $employee->long AND
							L.method == $employee->method AND
							L.expiration > NOW()
					*/
					if () {
						// LINK EXISTS -> ADD TO $links
					}
					else {
						// LINK NOT FOUND -> ADD TO $queue
						$queue[] = array(
							'' => ''
						);
					}
					
				}
			
			}
		
		} // CHECK NO ERRORS
		
		
		// -------------------------------------------------------------------------------------------------
		// OUTPUT TO BROWSER
		// -------------------------------------------------------------------------------------------------
		
		$output = array();
		
		// BUILD OUTPUT ARRAY
		if (empty($errors)) {
		
			$output['links'] = $links;
			$output['queue'] = $queue;
		
		}
		else {
		
		}
		
		// ENCODE TO JSON AND OUTPUT TO BROWSER
		echo json_encode($output);

	
	}

	
	// SAVE LINK
	// ---------------------------------------------------------------------------------------------
	// AJAX ONLY method to save link data obtained from the Google Maps Javascript API
	//
	//
	
	function save_link()
	{
		$this->load->view('welcome_message');
	}
	
	
}

/* End of file report.php */
/* Location: /app/controllers/report.php */ ?>