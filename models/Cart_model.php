<?php

class Cart_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function addOrder($item, $quantity, $firstname, $lastname, $address, $phone, $city, $state, $country) {

        $data = array(
            'item' => $item,
            'quantity' => $quantity,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'address' => $address,
            'phone' => $phone,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'status' => "Pending"
        );

        $this->db->insert("orders", $data);
        return $this->db->insert_id();
    }
}