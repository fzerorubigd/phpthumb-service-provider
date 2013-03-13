<?php

/*
 * This file is part of PHPThumbServiceProvider.
 *
 * (c) fzerorubigd <me@cyberrabbits.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fzerorubigd\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;
use PHPThumb\GD;
use PHPThumb\PluginCollection;

class PHPThumbServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['phpthumb'] = $app->protect(
            function ($fileName, $options = array(), PluginCollection $plugins = null) {
                return new GD($fileName, $options, $plugins);
            }
        );
    }

    public function boot(Application $app)
    {
    }
}
