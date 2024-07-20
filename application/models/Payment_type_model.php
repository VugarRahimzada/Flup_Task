<?php
class Payment_type_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_payment_types() {
        $query = $this->db->get('payment_type');
        return $query->result_array();
    }
}
?>
