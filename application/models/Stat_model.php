<?php

class Stat_model extends CI_Model {

    public function sellToDay() {
        $current_date = new DateTime(standard_date('DATE_W3C', time()));
        $current_date->modify('+1 day');
        $end = $current_date->format('Y-m-d');
        $current_date->modify('-2 day');
        $start = $current_date->format('Y-m-d');

        $this->db->from('sell');
        $this->db->join('books', 'books.id_books=sell.id_books');
        $this->db->join('members', 'members.id_members=sell.id_members');
        $this->db->where('sell.create_date >=', $start);
        $this->db->where('sell.create_date <=', $end);
        $query = $this->db->get();
        return $query->result_array();
    }

}
