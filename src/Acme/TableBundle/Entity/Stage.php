<?php

namespace Acme\TableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stages")
 */
class Stage
{
    /**
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     * 
     * @var integer $id
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer $number
     */
    private $number;

    /**
     * @ORM\Column(name="start_date", type="string")
     *
     * @var string $startDate
     */
    private $startDate;

    /**
     * @ORM\Column(name="finish_date", type="string")
     *
     * @var string $finishDate
     */
    private $finishDate;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $year
     */
    private $year;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $status
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="League")
     *
     * @var League
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="league_id", referencedColumnName="id")
     * })
     */
    private $leagueLeague;
}