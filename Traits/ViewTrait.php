<?php

namespace nlib\View\Traits;

use lib\View\Classes\View;

trait ViewTrait {

    private $_view;

    #region Getter

    public function View() : View {
        if(empty($this->_view)) $this->setParser(new View);
        return $this->_view;
    }

    #endregion

    #region Setter

    public function setParser(View $view) : self { $this->_view = $view; return $this; }
    
    #endregion
}