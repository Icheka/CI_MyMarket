<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("products_model");

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        // header("Access-Control-Allow-Methods: GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    }

	public function categories() {
        $value = $this->products_model->list_categories();
        header("Access-Control-Allow-Origin: *");
        echo json_encode($value);
    }
    public function list_by_category($category, $limit = 8) {
        $value = $this->products_model->list_products_by_category($category, $limit);
        header("Access-Control-Allow-Origin: *");
        echo json_encode($value);
    }
    public function list_all_products() {
        $value = $this->products_model->all_products();
        header("Access-Control-Allow-Origin: *");
        echo json_encode($value);
    }
    public function search($arg) {
        $value = $this->products_model->search($arg);
        header("Access-Control-Allow-Origin: *");
        echo json_encode($value);
    }
}
