<?php

namespace Tadcms\Frontend\Controllers;

use Tadcms\Frontend\FrontendController;

class PostController extends FrontendController
{
    public function index()
    {
        return view('pages.post.index');
    }
    
    public function detail($slug)
    {
        return view('pages.post.detail');
    }
}