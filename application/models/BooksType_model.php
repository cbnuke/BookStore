<?php

class BooksType_model extends CI_Model {

    public $id_type;
    public $type_name;
    public $create_date;
    public $update_date;

    public function getAllData() {
        $query = $this->db->get('books_type');
        return $query->result_array();
    }

    public function getData($id_type) {
        $query = $this->db->get_where('books_type', array('id_type' => $id_type));
        return $query->first_row('array');
    }

    public function getDataForDropDown() {
        $query = $this->db->get('books_type');
        $temp = $query->result_array();
        $ans = array();
        foreach ($temp as $row) {
            $ans[$row['id_type']] = $row['type_name'];
        }
        return $ans;
    }

    public function insertData() {
        $this->create_date = standard_date('DATE_W3C', time());
        return $this->db->insert('books_type', $this);
    }

    public function updateData($id_type) {
        $this->update_date = unix_to_human(time(), TRUE);
        return $this->db->update('books_type', $this, array('id_type' => $id_type));
    }

    public function deleteData($id_type) {
        return $this->db->delete('books_type', array('id_type' => $id_type));
    }

}
