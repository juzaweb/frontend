<?php
/**
 * @package    tadcms\tadcms
 * @author     The Anh Dang <dangtheanh16@gmail.com>
 * @link       https://github.com/tadcms/tadcms
 * @license    MIT
 *
 * Created by The Anh.
 * Date: 5/13/2021
 * Time: 9:57 PM
 */

namespace Tadcms\Frontend\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishAssetCommand extends Command
{
    protected $signature = 'theme:publish {name?}';

    public function handle()
    {
        $themePath = config('frontend.theme.path');
        $themeName = $this->argument('name') ?? get_config('activated_theme', 'default');

        $assetPath = $themePath . '/' . $themeName . '/assets';
        $publicPath = public_path('theme/assets');

        if (!File::isDirectory($publicPath)) {
            File::makeDirectory($publicPath, 0777, true);
        }

        File::copyDirectory($assetPath, $publicPath);

        $this->info(ucfirst($themeName).' Theme Publish Successfully !!!');
    }
}
