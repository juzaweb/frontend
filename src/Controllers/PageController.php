<?php

namespace Tadcms\Frontend\Controllers;

use Tadcms\Frontend\FrontendController;

class PageController extends FrontendController
{
    public function index()
    {
        return view('pages.page.index');
    }
    
    public function detail($slug)
    {
        return view('pages.page.detail');
    }
}