<?php

namespace Tadcms\Frontend\Controllers;

use Tadcms\Frontend\FrontendController;

class HomeController extends FrontendController
{
    public function index()
    {
        do_action('home_page');
        
        return view('pages.home');
    }
}
