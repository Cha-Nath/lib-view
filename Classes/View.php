<?php

namespace lib\View\Classes;

use lib\Path\Classes\Path;

class View {

    private $_view;

    public function __construct(string $view) {
        $this->setView($view);
    }

    public function load(string $view) : void {

        if(!file_exists($to_load = Path::i()->getPublic() . $view . '.php')) die('View "<em>' . $view . '</em>" doesn\'t exist.');
        
        require_once $to_load;
    }

    public function render(array $parameters = []) : string {

        ob_start();

        $this->load($this->_view);

        $html = ob_get_clean();

        return $html;
    }

    public function setView(string $view) : self { $this->_view = $view; return $this; }
}