<?php
/**
 *
 */
class SearchModel
{
	public $keyword,$price,$location,$lodge_type,$amenities;
    private $db;
    function __construct()
    {
        $this->db = new Database;
    }

    //setters


    public function search_lodge(array $data)
    {

    	$query = "SELECT * FROM lodge INNER JOIN lodge_meta ON lodge.lodge_id = lodge_meta.lodge_id WHERE (state = :state AND price <= :price AND type_of = :type) AND approved = 1 ORDER BY price ASC LIMIT 12";

        $this->db->query($query);

        $this->db->bind(':state', $data['location']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':type', $data['type']);


        // execute

        $row = $this->db->single();
        $row2 = $this->db->resultSet();

        if ($this->db->rowCount() == 1)
        {
            return $row;
        }

        elseif ($this->db->rowCount() > 1) 
        {
            
            return $row2;
        }

        else
        {
            return null;
        }

    }

}


?>