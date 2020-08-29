<?php
//Start session
@session_start();
require_once 'config/config.php';
require_once 'config/database.php';
require_once 'functions.php';
if($config['error_reporting'] === false)
    error_reporting(0);

/* Initialize paths */
define('DS', DIRECTORY_SEPARATOR);
//root directory
define('ROOT_DIR', getcwd().DS);
//core directory
define('CORE_DIR', ROOT_DIR.'core'.DS);
//public controllers director
define('CONTROLLERS_DIR', ROOT_DIR.'controllers'.DS);
//View Directory
define('VIEW_DIR', ROOT_DIR.'views'.DS);
//Model Directory
define('MODEL_DIR', ROOT_DIR.'models'.DS);
//Config Directory
define('CONFIG_DIR', ROOT_DIR.'config'.DS);
//Image Directory
define('IMG_DIR', base_url().DS. 'images'. DS);
/* Initialize paths */



/*
|--------------------------------------------------------------------------
| Auto Load Classes
| in specified folder
|--------------------------------------------------------------------------
*/
spl_autoload_register(function ($class){

    $core_path_file = CORE_DIR . "{$class}.php";
    $controllers_path_file = CONTROLLERS_DIR . "{$class}.php";
    $model_path_file = MODEL_DIR . "{$class}.php";

    if(file_exists($core_path_file))
        require_once $core_path_file;
    else if(file_exists($controllers_path_file))
        require_once $controllers_path_file;
    else if(file_exists($model_path_file))
        require_once $model_path_file;
    /*
    |--------------------------------------------------------------------------
    | Auto Load Classes inside the
    | folder controller
    |--------------------------------------------------------------------------
    */
    global $config;

    if(!empty($config['autoload_classes_in_folder']['controllers'])){
        foreach ($config['autoload_classes_in_folder']['controllers'] as $path){
            if(file_exists(CONTROLLERS_DIR . $path . DS . "{$class}.php")){
                require_once CONTROLLERS_DIR . $path . DS . "{$class}.php";
            }
        }
    }
    /*
    |--------------------------------------------------------------------------
    | Auto Load Classes inside the
    | folder Model
    |--------------------------------------------------------------------------
    */
    if(!empty($config['autoload_classes_in_folder']['models'])){
        foreach ($config['autoload_classes_in_folder']['models'] as $path){
            require_once MODEL_DIR . $path . DS . "{$class}.php";
        }
    }
});
/*
 |--------------------------------------------------------------------------
 | Require config/route.php and get the requested url
 |--------------------------------------------------------------------------
 */
$router = Router::load(CONFIG_DIR . 'routes')
    ->direct(Request::uri(), Request::method());
?>