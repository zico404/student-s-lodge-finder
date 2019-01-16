<?php

/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/20/2018
 * Time: 1:47 AM
 */
class Pages extends Controller
{

	private $pageModel;

    public function __construct()
    {
        $this->pageModel = $this->model('Page');
    }

    public function index()
    {
		
		$this->view('pages/index');
	             
    }

    public function get_rated_lodge(){

	// Sanitizing Input values

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Check for POST Request

        if ($_SERVER['REQUEST_METHOD'] == 'POST')

         {
			if ( isset($_POST['get_rated_lodge']) )
            {

		        // Process request & navigate to the search page

				$data =  $this->pageModel->get_rated_lodge();
		        $this->view('pages/get_rated_lodge',$data);


            }
        } 
    }

    public function get_featured_lodge(){

	// Sanitizing Input values

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Check for POST Request

        if ($_SERVER['REQUEST_METHOD'] == 'POST')

         {
			if ( isset($_POST['get_featured_lodge']) )
            {

		        // Process request & navigate to the search page

				$data =  $this->pageModel->get_featured_lodge();
		        $this->view('pages/get_featured_lodge',$data);


            }
        } 
    }

    public function get_locations(){

	// Sanitizing Input values

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Check for POST Request

        if ($_SERVER['REQUEST_METHOD'] == 'POST')

         {
			if ( isset($_POST['get_locations']) )
            {

		        // Process request & navigate to the search page

				$data =  $this->pageModel->get_locations();
		        $this->view('pages/get_locations',$data);


            }
        } 
    }

    public function about()
    {
        $this->view('pages/about');
    }





}
