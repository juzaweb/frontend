<?php

namespace Tadcms\Frontend\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class Tadcms\Frontend\Exceptions\ThemeNotFoundException
 *
 * @package    Tadcms\Frontend
 * @author     The Anh Dang <dangtheanh16@gmail.com>
 * @link       https://github.com/tadcms/tadcms
 * @license    MIT
 */
class ThemeNotFoundException extends NotFoundHttpException
{
    public function __construct($themeName)
    {
        parent::__construct("Theme [ $themeName ] not found!");
    }
}
