<?php

class Products_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function list_categories() {
        $this->db->select("*");
        $value = $this->db->get("categories");
        return $value->result();
    }

    public function list_products_by_category($category, $limit) {
        $this->db->select("*");
        $this->db->like("category", $category, "both");
        $value = $this->db->get("products", 0, $limit);
        return $value->result();
    }

    public function all_products() {
        $this->db->select("*");
        $value = $this->db->get("products");
        return $value->result();
    }

    public function search($arg) {
        $params = array(
            "name" => $arg,
            "category" => $arg,
            "description" => $arg
        );

        $this->db->select("*");
        $this->db->like("name", $arg, "both");
        $this->db->or_like("category", $arg, "both");
        $this->db->or_like("description", $arg, "both");
        $this->db->or_like("product_id", $arg, "both");
        $value = $this->db->get("products");
        return $value->result();
    }
}