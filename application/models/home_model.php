<?
class Home_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getHome() {

        $query = "SELECT id, title FROM categories";
        return $this -> db -> query($query)->result();
    }
    
}