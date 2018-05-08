<?php

    class ErrorMsg extends controller
    {
        function __construct() {
            parent::__construct();
            $this->view->msg = 'Deze pagina bestaat niet!';
        }

        function index() {
            $this->view->render('error/index');
        }
    }
