<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_COntroller {
    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("admin_model");

        $this->admin_info = $this->admin_model->getAdminInfo();
    }

    public function admin() {
        $admin_info = $this->admin_info;
        // print_r($admin_info);
        $this->load->view("pages/admin/admin", $admin_info);

    }
}