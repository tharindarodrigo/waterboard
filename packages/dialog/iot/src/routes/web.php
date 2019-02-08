<?php

$namespace = 'IoT\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'dialog-iot'
], function (){
    Route::get('/', function(){
        return 'Hello Package';
    });
});
