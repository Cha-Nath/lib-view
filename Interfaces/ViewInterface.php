<?php

namespace lib\View\Interfaces;

interface ViewInterface {

    /**
     *
     * @param string $view
     * @return void
     */
    public function load(string $view);

    /**
     *
     * @param array $parameters
     * @return string
     */
    public function render(array $parameters = []) : string;

    /**
     *
     * @param string $view
     * @return self
     */
    public function setView(string $view);
}