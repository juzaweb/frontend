<?php

namespace Tadcms\Frontend\Controllers;

use Illuminate\Http\Request;
use Tadcms\System\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.search');
    }
    
    public function ajaxSearch()
    {
    
    }
}
