<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get($id) {
        $this->db->select("*");
        $this->db->where("product_id", $id);

        $value = $this->db->get("reviews");
        return $value->result();
    }

    public function add($id, $name, $comment) {
        $data = [
            'product_id' => $id,
            'name' => $name,
            'comment' => $comment
        ];
        return $this->db->insert("reviews", $data);
    }
}