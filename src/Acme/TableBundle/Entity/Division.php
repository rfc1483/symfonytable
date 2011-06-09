<?php

namespace Acme\TableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="divisions")
 */
class Division
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var integer $id
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer $level
     */
    private $level;

    /**
     * @ORM\ManyToMany(targetEntity="Team", inversedBy="divisionsDivision")
     * @ORM\JoinTable(name="divisions_teams",
     *   joinColumns={
     *     @ORM\JoinColumn(name="division_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     *   }
     * )
     *
     * @var Team
     */
    private $teamsTeam;

    /**
     * @ORM\ManyToOne(targetEntity="Stage")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="stage_id", referencedColumnName="id")
     * })
     *
     * @var Stage
     */
    private $stagesStage;

    public function __construct()
    {
        $this->teamsTeam = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}