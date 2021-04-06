<?php

namespace Tadcms\Frontend\Controllers\Auth;

use Tadcms\Frontend\FrontendController;

class LoginController extends FrontendController
{
    public function index()
    {
        return view('pages.auth.login');
    }
}