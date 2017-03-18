<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('members_model', 'members');
        $this->load->model('books_model', 'books');
        $this->load->model('bookstype_model', 'bookstype');
        $this->output->enable_profiler(true);
    }

    public function index() {
        $data = array(
            'books_list' => $this->books->getAllData(),
            'bookstype_list' => $this->bookstype->getAllData(),
        );
        $this->load->view('header');
        $this->load->view('books/main', $data);
        $this->load->view('footer');
    }

    public function add() {
        if ($this->input->method(TRUE) == 'POST') {
            $this->books->books_name = $this->input->post('books_name');
            $this->books->id_type = $this->input->post('id_type');
            $this->books->books_des = $this->input->post('books_des');
            $this->books->books_import_price = $this->input->post('books_import_price');
            $this->books->books_sell_price = $this->input->post('books_sell_price');
            $this->books->books_point = $this->input->post('books_point');
            $this->books->books_img = $this->input->post('books_img');

            if ($this->books->insertData()) {
                redirect('books');
            }
        }
        $data = array(
            'bookstype_dropdown' => $this->bookstype->getDataForDropDown(),
        );
        $this->load->view('header');
        $this->load->view('books/add', $data);
        $this->load->view('footer');
    }

    public function edit($id_books = NULL) {
        if (is_null($id_books)) {
            redirect('books');
        }

        if ($this->input->method(TRUE) == 'POST') {
            $this->books->id_books = $this->input->post('id_books');
            $this->books->books_name = $this->input->post('books_name');
            $this->books->id_type = $this->input->post('id_type');
            $this->books->books_des = $this->input->post('books_des');
            $this->books->books_import_price = $this->input->post('books_import_price');
            $this->books->books_sell_price = $this->input->post('books_sell_price');
            $this->books->books_point = $this->input->post('books_point');
            $this->books->books_img = $this->input->post('books_img');
            $this->books->create_date = $this->input->post('create_date');

            if ($this->books->updateData($id_books)) {
                redirect('books');
            }
        }

        $data = array(
            'books_info' => $this->books->getData($id_books),
            'bookstype_dropdown' => $this->bookstype->getDataForDropDown(),
        );
        $this->load->view('header');
        $this->load->view('books/edit', $data);
        $this->load->view('footer');
    }

    public function delete($id_books = NULL) {
        if (!is_null($id_books)) {
            $this->books->deleteData($id_books);
        }
        redirect('books');
    }

    public function add_type() {
        if ($this->input->method(TRUE) == 'POST') {
            $this->bookstype->type_name = $this->input->post('type_name');

            if ($this->bookstype->insertData()) {
                redirect('books');
            }
        }
        $data = array();
        $this->load->view('header');
        $this->load->view('books/add_type', $data);
        $this->load->view('footer');
    }

    public function edit_type($id_type = NULL) {
        if (is_null($id_type)) {
            redirect('books');
        }

        if ($this->input->method(TRUE) == 'POST') {
            $this->bookstype->id_type = $this->input->post('id_type');
            $this->bookstype->type_name = $this->input->post('type_name');
            $this->bookstype->create_date = $this->input->post('create_date');

            if ($this->bookstype->updateData($id_type)) {
                redirect('books');
            }
        }

        $data = array(
            'bookstype_info' => $this->bookstype->getData($id_type)
        );
        $this->load->view('header');
        $this->load->view('books/edit_type', $data);
        $this->load->view('footer');
    }

    public function delete_type($id_type = NULL) {
        if (!is_null($id_type)) {
            $this->bookstype->deleteData($id_type);
        }
        redirect('books');
    }

}
