<?php
class Payment_type extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Payment_type_model'); // Modeli doğru bir şekilde yüklediğinizden emin olun
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['payment_types'] = $this->Payment_type_model->get_payment_types();
        $this->load->view('templates/header');
        $this->load->view('payment_type/index', $data);
        $this->load->view('templates/footer');
    }
}
?>
