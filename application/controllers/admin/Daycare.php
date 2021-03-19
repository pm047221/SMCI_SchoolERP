<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class daycare extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->config->load('app-config');
    }

    public function unauthorized()
    {
        $data = array();
        $this->load->view('layout/header', $data);
        $this->load->view('unauthorized', $data);
        $this->load->view('layout/footer', $data);
    }

    public function create() {

        if (!$this->rbac->hasPrivilege('day_care', 'can_view')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'day_care');
        $this->session->set_userdata('sub_menu', 'daycare/create');

        $data = array();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/daycare/register', $data);
        $this->load->view('layout/footer', $data);
    }

    public function manage() {

        if (!$this->rbac->hasPrivilege('day_care', 'can_view')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'day_care');
        $this->session->set_userdata('sub_menu', 'daycare/manage');

        $data = array();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/daycare/manage', $data);
        $this->load->view('layout/footer', $data);
    }

}
