<?php

namespace lib\View\Interfaces;

interface ViewInterface {

    /**
     *
     * @param string $file
     * @return void
     */
    public function load(string $file);

    /**
     *
     * @param string $message
     * @return void
     */
    public function error(string $message);
}