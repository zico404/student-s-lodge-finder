<?php
/**
 *
 */
class lodgeModel
{
    private $db;
    function __construct()
    {
        $this->db = new Database;
    }

    //setters


    public function get_lodge($id)
    {

    	$query = "SELECT * FROM lodge INNER JOIN lodge_meta ON lodge.lodge_id = lodge_meta.lodge_id WHERE lodge.lodge_id = :id AND approved = 1 ORDER BY price ASC LIMIT 12";

        $this->db->query($query);

        $this->db->bind(':id', $id);


        // execute

        $row = $this->db->single();

        if ($this->db->rowCount() == 1)
        {
            return $row;
        }

        else
        {
            return null;
        }

    }

}


?>