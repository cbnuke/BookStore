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
        //Update members point
        $this->load->model('books_model', 'books');
        $this->load->model('members_model', 'members');
        $books_info = $this->books->getData($this->id_books);
        $member_info = $this->members->getData($this->id_members);
        $this->members->id_members = $member_info['id_members'];
        $this->members->members_name = $member_info['members_name'];
        $this->members->members_phone = $member_info['members_phone'];
        $this->members->members_point = $member_info['members_point'] + $books_info['books_point'];
        $this->members->create_date = $member_info['create_date'];
        $this->members->updateData($member_info['id_members']);

        //Insert to sell
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
