<?php

namespace nlib\View\Interfaces;

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
     * @return array
     */
    public function getParameters() : array;

    /**
     *
     * @param string $key
     * @return null|mixed
     */
    public function getParameter(string $key);

    /**
     *
     * @param string $i
     * @return self
     */
    public function setI(string $i = 'i');

    /**
     *
     * @param string $view
     * @return self
     */
    public function setView(string $view);

    /**
     *
     * @param array $parameters
     * @return self
     */
    public function setParameters(array $parameters);
}