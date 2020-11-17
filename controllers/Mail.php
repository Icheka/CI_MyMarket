<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper("form");
        $this->load->model("mail_model");

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    }

    public function addToMailingList($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            echo json_encode(["invalid email address"]);
            return;
        }

        $value = $this->mail_model->addToMailingList($email);

        if ($value == 1) {
            echo json_encode(["success"]);
        } else {
            echo json_encode(["error"]);
        }
    }
}