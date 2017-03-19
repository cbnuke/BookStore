<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('stat_model', 'stat');
        $this->output->enable_profiler(true);
    }

    public function index() {
        $data = array(
            'selltoday_list' => $this->stat->sellToDay(),
            'counttoday' => $this->stat->countToDay(),
        );
        $this->load->view('header');
        $this->load->view('stat/main', $data);
        $this->load->view('footer');
    }

}
