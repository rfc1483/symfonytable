<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Acme\TableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TableBundle\Entity\User;

class DefaultController extends Controller {

    public function indexAction() {
        $users = new User();

        $em = $this->get('doctrine')->getEntityManager();
        $users = $em->getRepository('AcmeTableBundle:User')->findAll();

        return $this->render('AcmeTableBundle:Default:index.html.twig', array(
            'users' => $users,
        ));
    }

}
