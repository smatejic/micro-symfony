<?php
/**
 * Created by PhpStorm.
 * User: smatejic
 * Date: 4/23/16
 * Time: 8:51 PM
 */
namespace AppBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DemoController
 * @package AppBundle\Controller
 */
class DemoController implements ContainerAwareInterface
{
    use ContainerAwareTrait;


    public function indexAction()
    {
        $html = $this->container->get('templating')
            ->render(
                'app/demo/index.html.twig',
                ['demo' => "Hey there how are you hey"]
            );

        return new Response($html);
    }
}
