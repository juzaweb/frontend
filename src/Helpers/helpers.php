<?php
/**
 * @package    tadcms\tadcms
 * @author     The Anh Dang <dangtheanh16@gmail.com>
 * @link       https://github.com/tadcms/tadcms
 * @license    MIT
 *
 * Created by The Anh.
 * Date: 5/13/2021
 * Time: 10:25 PM
 */

/**
 * Get theme asset url
 * @param string $path
 * @return string
 * */
function theme_asset($path)
{
    $publicPath = public_path('theme/assets/' . $path);
    if (file_exists($publicPath)) {
        return url($publicPath);
    }

    return false;
}
