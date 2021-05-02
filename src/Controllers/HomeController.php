<?php

namespace Tadcms\Frontend\Controllers;


use Illuminate\Support\Facades\View;

class HomeController extends FrontendController
{
    public function index()
    {
        do_action('frontend.home.index');

        $this->setupLayout();
        $this->layout->content = View::make('index');

        return $this->layout;
    }
}
