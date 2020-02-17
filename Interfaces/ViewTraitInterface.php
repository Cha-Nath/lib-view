<?php

namespace nlib\View\Interfaces;

use nlib\View\Classes\View;

interface ViewTraitInterface {

    /**
     *
     * @return View
     */
    public function View() : View;

    /**
     *
     * @param View $view
     * @return self
     */
    public function setView(View $view);
}