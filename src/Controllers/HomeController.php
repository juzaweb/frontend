<?php

namespace Tadcms\Frontend\Controllers;

class HomeController extends FrontendController
{
    public function index()
    {
        do_action('frontend.home.index');

        return $this->view('index');
    }


}
