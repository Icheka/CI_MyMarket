<?php

class Admin_model extends CI_Model {
    public function __construct() {
        parent::__construct();

    }

    public function getAdminInfo() {
        $this->db->select("*");
        $value = $this->db->get("admin");
        return $value->row();
    }

}