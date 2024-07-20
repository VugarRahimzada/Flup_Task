<?php
class Currency_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_currencies() {
        $query = $this->db->get('currency');
        return $query->result_array();
    }

    public function add_currency($name) {
        $data = array(
            'name' => $name
        );
        return $this->db->insert('currency', $data);
    }
}
?>
