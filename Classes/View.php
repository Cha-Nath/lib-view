<?php

namespace nlib\View\Classes;

use nlib\Path\Classes\Path;
use nlib\View\Interfaces\ViewInterface;

class View implements ViewInterface {

    private $_view;    
    private $_parameters;

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

    #region Getter

    public function getParameters() : array { return $this->_parameters; }

    #endregion

    #region Setter

    public function setParameters(array $parameters) : self { $this->_parameters = $parameters; return $this; }
    public function setView(string $view) : self { $this->_view = $view; return $this; }

    #endregion
}