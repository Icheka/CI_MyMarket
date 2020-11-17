<?php

class Mail_model extends CI_Model {
    public function __construct() {
        parent::__construct();

    }

    public function addToMailingList($email) {
        $data = array(
            'email' => "$email"
        );
        $this->db->set("datet", 'NOW()', FALSE);
        return $this->db->insert("mailingList", $data);
    }
}