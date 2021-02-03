<?php

function DS(){
    return  DIRECTORY_SEPARATOR;
}

function getModuleName($moduleName){
    return app_path('Modules' . DS() . $moduleName . DS());
}

function loadConfigFile(string $fileName, string $moduleName){
    return getModuleName($moduleName) . 'config'. DS() . $fileName . '.php';
}


function loadRoute(string $fileName, string $moduleName){
   return getModuleName($moduleName).'routes'.DS().$fileName.'.php';
}

function loadViews(string $moduleName){
    return getModuleName($moduleName).'resources'.DS().'views';
}

function loadLang(string $moduleName){
    return getModuleName($moduleName).'resources'.DS().'lang';
}

function loadMigrate(string $moduleName){
    return getModuleName($moduleName).'database'.DS().'migrations';
}


