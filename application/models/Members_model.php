<?php

class Members_model extends CI_Model {

    public $id_members;
    public $members_name;
    public $members_phone;
    public $members_point;
    public $create_date;
    public $update_date;

    public function getAllData() {
//        $this->db->select('*');
//        $this->db->from('members');
//        $query = $this->db->get();
        $query = $this->db->get('members');
        return $query->result_array();
    }

    public function getData($id_members) {
//        $this->db->select('*');
//        $this->db->from('members');
//        $this->db->where('id_members', $id_members);
//        $query = $this->db->get();
        $query = $this->db->get_where('members', array('id_members' => $id_members));
        return $query->first_row('array');
    }

    public function insertData() {
        $this->create_date = standard_date('DATE_W3C', time());
        return $this->db->insert('members', $this);
    }

    public function updateData($id_members) {
        $this->update_date = unix_to_human(time(), TRUE);
        return $this->db->update('members', $this, array('id_members' => $id_members));
    }

    public function deleteData($id_members) {
        return $this->db->delete('members', array('id_members' => $id_members));
    }

}
