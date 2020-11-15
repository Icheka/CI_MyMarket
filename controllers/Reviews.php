<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("reviews_model");
        // $this->load->model("products_model");
    }

    public function get($id) {
        $value = $this->reviews_model->get($id);
        header("Access-Control-Allow-Origin: *");
        echo json_encode($value);
    }

    public function add($id, $name, $comment) {
        $name = urldecode($name);
        $comment = urldecode($comment);

        $value = $this->reviews_model->add($id, $name, $comment);
        header("Access-Control-Allow-Origin: *");
        if ($value == true) {
            echo json_encode(["success"]);
        } else {
            echo json_encode(["failed"]);
        }
    }

}