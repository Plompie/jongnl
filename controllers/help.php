<?php

class Help extends controller
{
    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('help/index');
    }

    public function other($arg = false) {

        $this->view->render('help/other/index');

    }
}

?>