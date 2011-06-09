<?php

namespace Acme\TableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="games")
 */
class Game
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
     * @var string $club
     */
    private $club;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $result
     */
    private $result;

    /**
     * @ORM\Column(name="local_game1", type="string")
     *
     * @var string $localGame1
     */
    private $localGame1;

    /**
     * @ORM\Column(name="local_game2", type="string")
     *
     * @var string $localGame2
     */
    private $localGame2;

    /**
     * @ORM\Column(name="local_game3", type="string")
     *
     * @var string $localGame3
     */
    private $localGame3;

    /**
     * @ORM\Column(name="visitor_game1", type="string")
     *
     * @var string $visitorGame1
     */
    private $visitorGame1;

    /**
     * @ORM\Column(name="visitor_game2", type="string")
     *
     * @var string $visitorGame2
     */
    private $visitorGame2;

    /**
     * @ORM\Column(name="visitor_game3", type="string")
     *
     * @var string $visitorGame3
     */
    private $visitorGame3;

    /**
     * @ORM\Column(name="tie_break1", type="string")
     *
     * @var string $tieBreak1
     */
    private $tieBreak1;

    /**
     * @ORM\Column("tie_break2", type="string")
     *
     * @var string $tieBreak2
     */
    private $tieBreak2;

    /**
     * @ORM\Column("tie_break3", type="string")
     *
     * @var string $tieBreak3
     */
    private $tieBreak3;

    /**
     * @ORM\Column(name="super_tie_break", type="string")
     *
     * @var string $superTieBreak
     */
    private $superTieBreak;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_local_id", referencedColumnName="id")
     * })
     * 
     * @var Team
     */
    private $teamLocal;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_visitor_id", referencedColumnName="id")
     * })
     * 
     * @var Team
     */
    private $teamVisitor;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_winner_id", referencedColumnName="id")
     * })
     * 
     * @var Team
     */
    private $teamWinner;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_looser_id", referencedColumnName="id")
     * })
     * 
     * @var Team
     */
    private $teamLooser;
}