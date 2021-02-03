<?php

$moduleName = basename(dirname(__DIR__, 1));

Route::namespace(buildControllerNamespace($moduleName))->group(function() use ($moduleName){
    Route::prefix(buildPrefix($moduleName , 'backend'))->middleware('customer')->namespace('BackEnd')->group(function(){

        require 'backend.php';
    });

    Route::prefix(buildPrefix($moduleName , 'frontend'))->namespace('FrontEnd')->group(function(){
        require 'frontend.php';
    });

});

require 'api.php';
