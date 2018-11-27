<?
class List_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getList($category_id) {

        $sql = "SELECT id, title, main_image FROM information WHERE category_id = $category_id";
        return $this -> db -> query($sql)->result();
    }
    /*
    function getDetail($information_id) {

        $query = "SELECT id, title, content, image FROM information WHERE id = $information_id";
        return $this -> db -> query($query)->result();
    }
    */
}