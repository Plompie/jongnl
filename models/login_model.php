<?php

    class Login_Model extends Model
    {
        public function __construct() {
            parent::__construct();
        }
        public function loginAuth() {

            $sth = $this->db->prepare("SELECT * FROM users WHERE login = ?");
            $sth->execute([$_POST['login']]);
            $user = $sth->fetch();

            if ($user && password_verify($_POST['password'], $user['password']))
            {
                //login
                Session::init();
                Session::set('loggedIn', true);
                header('location: ../dashboard');
            } else {
                //error
                header('location: ../login');
            }
            
        }

    }