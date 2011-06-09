<?php

namespace Acme\TableBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Acme\TableBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class FixtureLoader implements FixtureInterface {

    public function load($manager) {
        $user1 = new User();
        $user1->setName('Joe');
        $user1->setAge('45');
        $manager->persist($user1);
        
        $user2 = new User();
        $user2->setName('Mary');
        $user2->setAge('22');
        $manager->persist($user2);
        
        $user3 = new User();
        $user3->setName('Elisabeth');
        $user3->setAge('33');
        $manager->persist($user3);
        
        $user4 = new User();
        $user4->setName('Helen');
        $user4->setAge('54');
        $manager->persist($user4);
        
        $user5 = new User();
        $user5->setName('Jonas');
        $user5->setAge('72');
        $manager->persist($user5);

        $manager->flush();
    }

}
