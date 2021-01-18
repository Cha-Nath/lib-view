<?php

namespace nlib\View\Traits;

use nlib\View\Classes\Form;

trait FormTrait {

    private $_Form;

    #region Getter

    public function Form(string $formView) : Form {

        $instance = method_exists($this, $method = '_i') ? $this->{$method}() : 'i';

        if(empty($this->_Form)) $this->setForm(new Form($formView));
        else $this->_Form->setView($formView)->setParameters([]);

        return $this->_Form->setInstance($instance);
    }

    #endregion

    #region Setter

    public function setForm(Form $Form) : self { $this->_Form = $Form; return $this; }
    
    #endregion
}