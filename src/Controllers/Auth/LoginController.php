<?php

namespace Tadcms\Frontend\Controllers\Auth;

use Tadcms\Frontend\Controllers\FrontendController;

class LoginController extends FrontendController
{
    public function index()
    {
        return view('auth.login');
    }
}
