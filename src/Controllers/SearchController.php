<?php

namespace Tadcms\Frontend\Controllers;

use Tadcms\Frontend\FrontendController;

class SearchController extends FrontendController
{
    public function index()
    {
        return view('pages.search');
    }
    
    public function ajaxSearch()
    {
    
    }
}