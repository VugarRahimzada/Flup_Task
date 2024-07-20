<?php
class Payment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_payments() {
        $this->db->select('payment.*, category.name as category_name, currency.name as currency_name, payment_type.name as payment_type_name');
        $this->db->from('payment');
        $this->db->join('category', 'payment.category_id = category.id');
        $this->db->join('currency', 'payment.currency_id = currency.id');
        $this->db->join('payment_type', 'payment.payment_type_id = payment_type.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_payment($data) {
        $this->db->insert('payment', $data);
        $this->update_total_amount($data);
    }

    private function update_total_amount($data) {
        $query = $this->db->get('total_amount');
        $result = $query->row();
        $current_total = $result->total;

        if ($data['payment_type_id'] == 4) {
            $new_total = $current_total + $data['amount'];
        } else if ($data['payment_type_id'] == 5) {
            $new_total = $current_total - $data['amount'];
        } else {
            return;
        }
        $this->db->where('id', 1);
        $this->db->update('total_amount', array('total' => $new_total));
    }

    public function get_categories() {
        $this->db->select('id, name');
        $query = $this->db->get('category');
        return $query->result_array();
    }

    public function get_currencies() {
        $this->db->select('id, name');
        $query = $this->db->get('currency');
        return $query->result_array();
    }

    public function get_payment_types() {
        $this->db->select('id, name');
        $query = $this->db->get('payment_type');
        return $query->result_array();
    }

    public function get_total_amount() {
        $query = $this->db->get('total_amount');
        return $query->row();
    }
}
?>
