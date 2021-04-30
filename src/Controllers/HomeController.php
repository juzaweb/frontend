<?php

namespace Tadcms\Frontend\Controllers;

use Tadcms\Frontend\FrontendController;

class HomeController extends FrontendController
{
    public function index()
    {
        do_action('frontend.home.index');
        
        return view('pages.home');
    }
}
