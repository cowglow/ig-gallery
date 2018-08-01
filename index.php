<?php
// Require once the Composer Autoload
if (file_exists(dirname(__FILE__).'/vendor/autoload.php')) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}


$rootDirectory = __DIR__.DIRECTORY_SEPARATOR;
include_once $rootDirectory.'assets'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR.'header.php';

$App = new Cowglow\InstagramGallery\Ports\App();
$App->loadGrams();

include_once $rootDirectory.'assets'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR.'footer.php';

