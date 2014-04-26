<?php

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        //$this->load->library('table');
        //$this->load->library('upload');
    }

    function index() {
/*
        $this->load->model('Member');
        $records = $this->Member->get();
        $results = array();

        foreach ($records as $record) {
            $results[] = array(
                $record->id,
                $record->name,
                $record->email,
                $record->type,
                $record->regdate,
            );
        }

        $this->data['subview'] = 'front_end';
        $this->data['members'] = $results;
        $this->load->view('component/layout_v', $this->data);*/

    }

    /*
     * Add User
     */

    public function sign() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[member.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        if ($this->form_validation->run() == FALSE) {
            //$this->data['subview'] = 'auth/member_form';
            //$this->load->view('component/layout_v', $this->data);
            $this->load->view('member/signform_v');
            
        } else {

            $this->load->model('member');
            $model = new Member();
            $model->name = $this->input->post('name',TRUE);
            $model->email = $this->input->post('email', TRUE);
            $model->password = md5($this->input->post('password', TRUE));
            
            $model->save();
            redirect(site_url('/index.php/'));
            
        }
    }

    /*
     *  Login
     */

    public function login() {
        //$this->load->helper('alert');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div');

        if ($this->form_validation->run() == FALSE) {
            // $this->form_validation->setrule
           // $this->data['subview'] = 'auth/login_v';
            $this->load->view('member/login_v');
        } else {
            //Login id/password test
            $auth = array(
                'email' => $this->input->post('email', TRUE),
                'password' => md5($this->input->post('password', TRUE)),
            );

            $this->load->model('Member');
            $result = $this->Member->login($auth);
            if ($result) {
                redirect(site_url('/index.php/'));
            } else {
                echo '<h2>login faied</h2>';
                exit;
            }
        }
    }
    
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('/index.php'));
    }
    
   
}
