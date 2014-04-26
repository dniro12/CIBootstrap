<?php

class Member extends My_Model {

    const DB_TABLE = 'member';
    const DB_TABLE_PK = 'id';

    public $id;
    public $email;
    public $name;
    public $device_token;
    public $type;
    public $regdate;
    public $password;

    function __construct() {
        parent::__construct();
    }

    //Login Check
    function Login($auth) {
        $query = $this->db->get_where($this::DB_TABLE, array(
            'email' => $auth['email'],
            'password' => $auth['password'],
        ));

        if ($query->num_rows() > 0) {

            $row = $query->first_row();
            // Log in user
            $data = array(
                'id' => $row->id,
                'name' => $row->name,
                'email' => $row->email,
                'logged_in' => TRUE,
            );
            $this->session->set_userdata($data);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // restful_login
    function RestLogin($auth) {
        $query = $this->db->get_where($this::DB_TABLE, array(
            'email' => $auth['email'],
            'password' => $auth['password'],
        ));

        if ($query->num_rows() > 0) {
            return $query->row_array(1);
            
        }else
        {
            return NULL;
        }
    }

    function IsExist($key) {
        $query = $this->db->get_where($this::DB_TABLE, array('email' => $key));

        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
