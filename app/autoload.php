<?php
/**
 * Created by PhpStorm.
 * User: smatejic
 * Date: 08/06/16
 * Time: 11:37
 */
use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;