<?php

namespace nlib\View\Traits;

use lib\View\Classes\View;

trait ViewTrait {

    private $_view;

    #region Getter

    public function View(string $view) : View {
        if(empty($this->_view)) $this->setParser(new View($view));
        return $this->_view->setView($view);
    }

    #endregion

    #region Setter

    public function setView(View $view) : self { $this->_view = $view; return $this; }
    
    #endregion
}