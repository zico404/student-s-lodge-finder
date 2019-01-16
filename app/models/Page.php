<?php

    class Page
    {

   		private $db;

        function __construct()
        {
        	$this->db = new Database;
        }

        public function get_rated_lodge()

        {
	            
	    	$query = "SELECT * FROM lodge INNER JOIN lodge_meta ON lodge.lodge_id = lodge_meta.lodge_id  ORDER BY views DESC LIMIT 12";


	        $this->db->query($query);


	        // execute

	        $row = $this->db->resultSet();

	        if ($this->db->rowCount() >= 1)
	        {
	            return $row;
	        }

        }


        public function get_featured_lodge()

        {
	            
	    	$query = "SELECT * FROM lodge INNER JOIN lodge_meta ON lodge.lodge_id = lodge_meta.lodge_id WHERE featured = 1 ORDER BY lodge_name ASC LIMIT 12";


	        $this->db->query($query);


	        // execute

	        $row = $this->db->resultSet();

	        if ($this->db->rowCount() >= 1)
	        {
	            return $row;
	        }

        }

        public function get_locations()

        {
	            
	    	$query = "SELECT * FROM locations ORDER BY location_name ASC LIMIT 12;";


	        $this->db->query($query);


	        // execute

	        $row = $this->db->resultSet();

	        if ($this->db->rowCount() >= 1)
	        { 
	            return $row;
	        }

        }

        

    }
