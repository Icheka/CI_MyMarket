<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("form");
        $this->load->model("cart_model");

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

        // header("Access-Control-Allow-Methods: GET, OPTIONS");
    } 

    public function a() {
        $data = $this->input->post();
        echo $data['firstname'];
    }

    public function checkout($item, $quantity, $firstname, $lastname, $address, $phone, $city, $state, $country) {
        
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        // header("Access-Control-Allow-Methods: GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        
        $value = $this->cart_model->addOrder($item, $quantity, $firstname, $lastname, $address, $phone, $city, $state, $country);
        
        echo json_encode($value);
    }
}