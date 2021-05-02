<?php

namespace Tadcms\Frontend\Controllers;

use Tadcms\System\Controllers\Controller;
use Tadcms\Frontend\Facades\Theme;

class FrontendController extends Controller
{
    public function callAction($method, $parameters)
    {
        /**
         * TAD CMS: Action after call action frontend
         * Add action to this hook add_action('frontend.call_action', $callback)
         * */
        do_action('frontend.call_action', $method, $parameters);

        Theme::set($this->getCurrentTheme());

        return parent::callAction($method, $parameters);
    }

    protected function getCurrentTheme()
    {
        return get_config('activated_theme', 'default');
    }
}
