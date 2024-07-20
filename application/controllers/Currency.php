<?php
class Currency extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Currency_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['currencies'] = $this->Currency_model->get_currencies();
        $this->load->view('templates/header');
        $this->load->view('currency/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        if ($this->input->post()) {
            $this->Currency_model->add_currency($this->input->post('name'));
            redirect('currency');
        } else {
            $this->load->view('templates/header');
            $this->load->view('currency/create');
            $this->load->view('templates/footer');
        }
    }
}
?>
