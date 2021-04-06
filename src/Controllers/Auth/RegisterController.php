<?php

namespace Tadcms\Frontend\Controllers\Auth;

use Tadcms\Frontend\FrontendController;

class RegisterController extends FrontendController
{
    public function index()
    {
        return view('pages.auth.register');
    }
}