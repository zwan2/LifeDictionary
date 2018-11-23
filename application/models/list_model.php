<?
class List_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getList($category_id) {

        $query = "SELECT id, title, content, main_image, image FROM information WHERE category_id = $category_id";
        return $this -> db -> query($query)->result();
    }
    
}