<?php

namespace Tadcms\Frontend\Controllers\Auth;

use Tadcms\Frontend\Controllers\FrontendController;

class RegisterController extends FrontendController
{
    public function index()
    {
        return view('auth.register');
    }
}
