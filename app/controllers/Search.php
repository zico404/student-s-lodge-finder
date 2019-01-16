<?php

	class Search extends Controller
	{

	    private $searchModel;

		    public function __construct()
		    {
		        $this->searchModel = $this->model('SearchModel');
		    }

		    public function index()
		    {

		        // Sanitizing Input values

		            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			        // Check for POST Request

			        if ($_SERVER['REQUEST_METHOD'] == 'POST')

			         {
			            if ( !empty($_POST['location']) or
			             (!empty($_POST['price']) and 
			                !empty($_POST['type'])) )
			            {
			                $data = [
			                'location' => trim($_POST['location']),
			                'price' => trim($_POST['price']),
			                'type' => trim($_POST['type'])
			                ];

					        // Process request & navigate to the search page

	        				$data =  $this->searchModel->search_lodge($data);
					        $this->view('search/index',$data);


			            }
			        } 


	            else
	            {
					$this->view('search/index');
	            }    
	    	}


	}
