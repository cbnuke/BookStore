<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buy extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('sell_model', 'sell');
        $this->load->model('stat_model', 'stat');
        $this->output->enable_profiler(true);
    }

    public function index() {
        if ($this->input->method(TRUE) == 'POST') {
            $this->sell->id_books = $this->input->post('id_books');
            $this->sell->id_members = $this->input->post('id_members');
            $this->sell->discount = $this->input->post('discount');

            if ($this->sell->insertData()) {
                redirect('buy');
            }
        }

        $data = array(
            'selltoday_list' => $this->stat->sellToDay(),
        );
        $this->load->view('header');
        $this->load->view('buy/main', $data);
        $this->load->view('footer');
    }

}
