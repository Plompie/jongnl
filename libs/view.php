
<?php

class View
{
    function __construct() {

    }

    public function render($name, $dontInclude = false)
    {
        if ($dontInclude == true){
            require 'views/' . $name . '.php';
        }
        else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
}


