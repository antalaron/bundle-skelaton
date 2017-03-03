<?php

/*
 * (c) Antal Áron <antalaron@antalaron.hu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Antalaron\Bundle\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * DefaultController.
 *
 * @author Antal Áron <antalaron@antalaron.hu>
 */
class DefaultController
{
    /**
     * IndexAction.
     *
     * The main controller.
     *
     * @return Response
     */
    public function indexAction()
    {
        return new Response('Ok');
    }
}
