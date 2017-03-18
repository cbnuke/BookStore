<?php

class Sell_model extends CI_Model {

    public $id_books;
    public $id_members;
    public $discount;
    public $create_date;
    public $update_date;

    public function getAllData() {
        $query = $this->db->get('sell');
        return $query->result_array();
    }

    public function getData($id_books, $id_members) {
        $query = $this->db->get_where('sell', array('id_books' => $id_books, 'id_members' => $id_members));
        return $query->first_row('array');
    }

    public function insertData() {
        $this->create_date = standard_date('DATE_W3C', time());
        return $this->db->insert('sell', $this);
    }

    public function updateData($id_books, $id_members) {
        $this->update_date = unix_to_human(time(), TRUE);
        return $this->db->update('sell', $this, array('id_books' => $id_books, 'id_members' => $id_members));
    }

    public function deleteData($id_books) {
        return $this->db->delete('sell', array('id_books' => $id_books, 'id_members' => $id_members));
    }

}
