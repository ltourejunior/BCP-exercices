<?php

//system folder
define('SYSTEM_DIR', DOCROOT.'/system');

//core folder
define('CORE_DIR', SYSTEM_DIR.'/core');

//project folder
define('PROJECT_DIR', SYSTEM_DIR.'/project');

//folder for libraries that are part of the core
define('CORE_LIBRARIES_DIR', CORE_DIR.'/libraries');

//project config folder
define('CONFIG_DIR', PROJECT_DIR.'/config');

//project controllers folder
define('CONTROLLERS_DIR', PROJECT_DIR.'/controllers');

//project libraries folder
define('LIBRARIES_DIR', PROJECT_DIR.'/libraries');

//project models folder
define('MODELS_DIR', PROJECT_DIR.'/models');

//project views folder
define('VIEWS_DIR', PROJECT_DIR.'/views');

//load the libraries (it's better to do it one by one because its important to keep the right order')
require_once(CORE_LIBRARIES_DIR.'/request.class.php');
require_once(CORE_LIBRARIES_DIR.'/router.class.php');
require_once(CORE_LIBRARIES_DIR.'/config.class.php');
require_once(CORE_LIBRARIES_DIR.'/url.class.php');
require_once(CORE_LIBRARIES_DIR.'/view.class.php');
require_once(CORE_LIBRARIES_DIR.'/presenter.class.php');
require_once(CORE_LIBRARIES_DIR.'/db.class.php');
require_once(CORE_LIBRARIES_DIR.'/model.class.php');
require_once(CORE_LIBRARIES_DIR.'/functions.php');

//load the models
$files = scandir(MODELS_DIR);
foreach($files as $file)
{
    if($file == '.' || $file == '..') continue;
    if(pathinfo($file, PATHINFO_EXTENSION) == 'php')
    {
        require_once MODELS_DIR . '/'. $file;
    }
}

//load the project config
config::load();