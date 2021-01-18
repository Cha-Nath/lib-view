<?php

namespace nlib\View\Classes;

use nlib\View\Interfaces\FormInterface;

class Form extends View implements FormInterface {

    private $_version = '4';
    private $_defaults = [
        'type' => 'text',
        'name' => '',
        'id' => '',
        'label' => '',
        'value' => '',
        'placeholder' => '',
        'class' => '',
        'field_class' => '',
        'min' => '',
        'max' => '',
        'step' => '',
        'autofocus' => false,
        'checked' => false,
        'selected' => false,
        'required' => false,
        'options' => [],
        'selected_option' => '',
        'attributes' => [],
    ];

    public function input(array $parameters) : string {
        return $this->setView($this->getPathField() . __FUNCTION__)->render(array_merge($this->getDefaults(), $parameters));
    }

    public function select(array $parameters) : string {
        return $this->setView($this->getPathField() . __FUNCTION__)->render(array_merge($this->getDefaults(), $parameters));
    }

    public function textarea(array $parameters) : string {
        return $this->setView($this->getPathField() . __FUNCTION__)->render(array_merge($this->getDefaults(), $parameters));
    }

    public function checbox(array $parameters) : string { 
        return $this->setView($this->getPathField() . __FUNCTION__)->render(array_merge($this->getDefaults(), $parameters));
    }

    public function radio(array $parameters) : string {
        return $this->setView($this->getPathField() . __FUNCTION__)->render(array_merge($this->getDefaults(), $parameters));
    }

    #region Getter

    public function getVersion() : int { return $this->_version; }
    public function getDefaults() : array { return $this->_defaults; }
    public function getPathField() : string {
        return dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'public'
        . DIRECTORY_SEPARATOR . 'bv' . $this->getVersion() . DIRECTORY_SEPARATOR . 'form'
        . DIRECTORY_SEPARATOR . 'fields' . DIRECTORY_SEPARATOR;
    }

    #endregion

    #region Setter
    
    public function setVersion(int $version) : self { $this->_version = $version; return $this; }

    #endregion
}