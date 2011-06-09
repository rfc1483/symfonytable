<?php

namespace Acme\TableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="teams")
 */
class Team
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
     * @var string $name1
     */
    private $name1;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $surname1
     */
    private $surname1;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $phone1
     */
    private $phone1;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $email1
     */
    private $email1;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $name2
     */
    private $name2;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $surname2
     */
    private $surname2;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $phone2
     */
    private $phone2;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $email2
     */
    private $email2;

    /**
     * @ORM\ManyToMany(targetEntity="Division", mappedBy="teamsTeam")
     *
     * @var Division
     */
    private $divisionsDivision;

    /**
     * @ORM\ManyToOne(targetEntity="League")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="league_id", referencedColumnName="id")
     * })
     * 
     * @var League
     */
    private $leagueLeague;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     *
     * @var User
     */
    private $userUser;

    public function __construct()
    {
        $this->divisionsDivision = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}