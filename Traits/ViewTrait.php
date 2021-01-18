<?php

namespace nlib\View\Traits;

use nlib\View\Classes\View;

trait ViewTrait {

    private $_view;

    #region Getter

    public function View(string $view) : View {
        $instance = (method_exists($this, $method = '_i')) ? $this->{$method}() : 'i';
        if(empty($this->_view)) $this->setView(new View($view));
        else $this->_view->setView($view)->setParameters([]);
        return $this->_view->setInstance($instance);
    }

    #endregion

    #region Setter

    public function setView(View $view) : self { $this->_view = $view; return $this; }
    
    #endregion
}