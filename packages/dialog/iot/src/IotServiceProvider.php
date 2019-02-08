<?php
/**
 * Created by PhpStorm.
 * User: Tharinda Rodrigo
 * Date: 1/23/2019
 * Time: 5:58 PM
 */

namespace Iot;

use Illuminate\Support\ServiceProvider;

class IotServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {

    }
}
