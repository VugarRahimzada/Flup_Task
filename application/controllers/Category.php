<?php
class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['categories'] = $this->Category_model->get_categories();
        $this->load->view('templates/header');
        $this->load->view('category/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        if ($this->input->post()) {
            $this->Category_model->add_category($this->input->post('name'));
            redirect('category');
        } else {
            $this->load->view('templates/header');
            $this->load->view('category/create');
            $this->load->view('templates/footer');
        }
    }
    
}
?>
