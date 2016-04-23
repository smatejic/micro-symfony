<?php
/**
 * Created by PhpStorm.
 * User: smatejic
 * Date: 4/23/16
 * Time: 8:31 PM
 */
use Symfony\Bundle\FrameworkBundle\HttpCache\HttpCache;

/**
 * Class AppCache
 */
class AppCache extends HttpCache
{
    protected function getOptions()
    {
        return array(
            'debug'                  => false,
            'default_ttl'            => 0,
            'private_headers'        => array('Authorization', 'Cookie'),
            'allow_reload'           => false,
            'allow_revalidate'       => false,
            'stale_while_revalidate' => 2,
            'stale_if_error'         => 60,
        );
    }
}
