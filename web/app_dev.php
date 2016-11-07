<?php
/**
 * Created by PhpStorm.
 * User: smatejic
 * Date: 4/17/16
 * Time: 10:18 PM
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpFoundation\RequestStack;


umask(0000);

/**
 * @var Composer\Autoload\ClassLoader $loader
 */
$loader = require __DIR__.'/../app/autoload.php';

$dotenv = new \Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();

$env = $_SERVER['SYMFONY_ENV'];
$debug = $_SERVER['SYMFONY_DEBUG'];

if($debug) {
    Debug::enable();
}
require_once __DIR__.'/../app/AppKernel.php';

$request = Request::createFromGlobals();

$kernel = new AppKernel($env, $debug);

$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
