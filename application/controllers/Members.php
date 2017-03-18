<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('members_model', 'members');
        $this->output->enable_profiler(true);
    }

    public function index() {
        $temp = $this->members->getAllData();
        $data = array(
            'members_list' => $temp,
        );
        $this->load->view('header');
        $this->load->view('members/main', $data);
        $this->load->view('footer');
    }

    public function add() {
        if ($this->input->method(TRUE) == 'POST') {
            $this->members->members_name = $this->input->post('members_name');
            $this->members->members_phone = $this->input->post('members_phone');
            $this->members->members_point = $this->input->post('members_point');

            if ($this->members->insertData()) {
                redirect('members');
            }
        }
        $data = array();
        $this->load->view('header');
        $this->load->view('members/add', $data);
        $this->load->view('footer');
    }

    public function edit($id_members = NULL) {
        if (is_null($id_members)) {
            redirect('members');
        }

        if ($this->input->method(TRUE) == 'POST') {
            $this->members->id_members = $this->input->post('id_members');
            $this->members->members_name = $this->input->post('members_name');
            $this->members->members_phone = $this->input->post('members_phone');
            $this->members->members_point = $this->input->post('members_point');
            $this->members->create_date = $this->input->post('create_date');

            if ($this->members->updateData($id_members)) {
                redirect('members');
            }
        }

        $data = array(
            'members_info' => $this->members->getData($id_members)
        );
        $this->load->view('header');
        $this->load->view('members/edit', $data);
        $this->load->view('footer');
    }

    public function delete($id_members = NULL) {
        if (!is_null($id_members)) {
            $this->members->deleteData($id_members);
        }
        redirect('members');
    }

}
