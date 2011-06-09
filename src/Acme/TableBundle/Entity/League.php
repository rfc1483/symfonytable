<?php

namespace Acme\TableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="leagues")
 */
class League
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     *
     * @var integer $id
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $name
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $status
     */
    private $status;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $year
     */
    private $year;


}