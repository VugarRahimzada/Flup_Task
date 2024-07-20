<?php
class Payment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Payment_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['payments'] = $this->Payment_model->get_payments();
        $data['total_amount'] = $this->Payment_model->get_total_amount();
        $this->load->view('templates/header');
        $this->load->view('payment/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $data['categories'] = $this->Payment_model->get_categories();
        $data['currencies'] = $this->Payment_model->get_currencies();
        $data['payment_types'] = $this->Payment_model->get_payment_types();

        if ($this->input->post()) {
            $payment_data = array(
                'amount' => $this->input->post('amount'),
                'category_id' => $this->input->post('category_id'),
                'currency_id' => $this->input->post('currency_id'),
                'payment_type_id' => $this->input->post('payment_type_id'),
                'feedback' => $this->input->post('feedback')
            );
            $this->Payment_model->add_payment($payment_data);
            redirect('payment');
        } else {
            $this->load->view('templates/header');
            $this->load->view('payment/create', $data);
            $this->load->view('templates/footer');
        }
    }
}
?>
