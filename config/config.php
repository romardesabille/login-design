<?php
    /*
    |--------------------------------------------------------------------------
    | Add your base url here example
    | http://google.com
    |--------------------------------------------------------------------------
    */
    $config['base_url'] = 'http://localhost:8080/BloodBank_/';
    /*
    |--------------------------------------------------------------------------
    | set empty when not using a root folder in url
    |--------------------------------------------------------------------------
    */
    $config['root_folder'] = 'BloodBank_/';
    /*
    |--------------------------------------------------------------------------
    | Auto load class in controllers and model
    | add folder path
    | example 'controllers' => array('dashboard') this will autoload the class
    | inside the dashboard folder specifically in controllers
    |--------------------------------------------------------------------------
    */
    $config['autoload_classes_in_folder'] = array(
        'controllers' => array('admin'),
        'models' => array()
    );
    /*
    |--------------------------------------------------------------------------
    |
    |--------------------------------------------------------------------------
    */
    $config['charset'] = 'UTF-8';
    /*
    |--------------------------------------------------------------------------
    | Set to false if you dont want to see errors
    |--------------------------------------------------------------------------
    */
    $config['error_reporting'] = true;




?>