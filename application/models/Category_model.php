<?php
class Category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_categories() {
        $query = $this->db->get('category');
        return $query->result_array();
    }

    public function add_category($name) {
        $data = array(
            'name' => $name
        );
        return $this->db->insert('category', $data);
    }
}
?>
