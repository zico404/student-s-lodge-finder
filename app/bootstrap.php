<?php

//Load Config/Helpers
require_once 'config/config.php';
require_once 'helpers/session_helper.php';
require_once 'helpers/functions.php';
require_once 'helpers/url_helper.php';
require_once 'helpers/flash_helper.php';



//AutoLoad libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
