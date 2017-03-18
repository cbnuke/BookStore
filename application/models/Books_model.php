<?php

class Books_model extends CI_Model {

    public $id_books;
    public $id_type;
    public $books_name;
    public $books_des;
    public $books_import_price;
    public $books_sell_price;
    public $books_point;
    public $books_img;
    public $create_date;
    public $update_date;

    public function getAllData() {
        $this->db->join('books_type', 'books_type.id_type=books.id_type');
        $query = $this->db->get('books');
        return $query->result_array();
    }

    public function getData($id_books) {
        $query = $this->db->get_where('books', array('id_books' => $id_books));
        return $query->first_row('array');
    }

    public function insertData() {
        $this->create_date = standard_date('DATE_W3C', time());
        return $this->db->insert('books', $this);
    }

    public function updateData($id_books) {
        $this->update_date = unix_to_human(time(), TRUE);
        return $this->db->update('books', $this, array('id_books' => $id_books));
    }

    public function deleteData($id_books) {
        return $this->db->delete('books', array('id_books' => $id_books));
    }

}
