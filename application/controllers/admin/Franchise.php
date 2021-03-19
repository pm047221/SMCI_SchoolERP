<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Franchise extends Admin_Controller {

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

        if (!$this->rbac->hasPrivilege('franchise', 'can_add')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'Franchise');
        $this->session->set_userdata('sub_menu', 'franchise/create');

        $data = array();

        $this->load->view('layout/header', $data);
        $this->load->view('admin/franchise/register', $data);
        $this->load->view('layout/footer', $data);


    }

    public function store() {

        $post = array();
        foreach ( $_POST as $key => $value )
        {
            $post[$key] = $this->input->post($key)."<br/>";
        }
        var_dump($post);
    }

    public function manage() {

        if (!$this->rbac->hasPrivilege('franchise', 'can_view')) {
            access_denied();
        }

        $this->session->set_userdata('top_menu', 'Franchise');
        $this->session->set_userdata('sub_menu', 'franchise/manage');

        $data = array();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/franchise/manage', $data);
        $this->load->view('layout/footer', $data);
    }

}
