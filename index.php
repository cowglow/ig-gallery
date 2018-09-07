<?php
// Require once the Composer Autoload
if (file_exists(\dirname(__FILE__).'/vendor/autoload.php')) {
    require_once \dirname(__FILE__).'/vendor/autoload.php';
}

$GLOBALS['isDev']  = ($_SERVER['SERVER_NAME'] === 'localhost');
$GLOBALS['config'] = require 'config.php';

$partials = __DIR__.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'partials';

include $partials.DIRECTORY_SEPARATOR.'header.php';

$App = new Cowglow\InstagramGallery\Ports\App($GLOBALS['config']['bind'], $GLOBALS['config']['type']);

try {
    $grams = $App->loadGrams();
} catch (Exception $e) {
    throw new RuntimeException($e->getMessage());
}

echo '<pre>';
print_r($grams);
echo '</pre>';

include $partials.DIRECTORY_SEPARATOR.'footer.php';
