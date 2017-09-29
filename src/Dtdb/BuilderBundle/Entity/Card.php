<?php

namespace Dtdb\BuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 */
class Card
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $ts;

    /**
     * @var string
     */
    private $code;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $flavor;

    /**
     * @var string
     */
    private $illustrator;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @var integer
     */
    private $rank;

    /**
     * @var integer
     */
    private $upkeep;

    /**
     * @var integer
     */
    private $production;

    /**
     * @var integer
     */
    private $bullets;

    /**
     * @var integer
     */
    private $influence;

    /**
     * @var integer
     */
    private $control;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $decklists;

    /**
     * @var \Dtdb\BuilderBundle\Entity\Pack
     */
    private $pack;

    /**
     * @var \Dtdb\BuilderBundle\Entity\Type
     */
    private $type;

    /**
     * @var \Dtdb\BuilderBundle\Entity\Shooter
     */
    private $shooter;

    /**
     * @var \Dtdb\BuilderBundle\Entity\Gang
     */
    private $gang;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->decklists = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     * @return Card
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Card
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Card
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Card
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Card
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Card
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Card
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set flavor
     *
     * @param string $flavor
     * @return Card
     */
    public function setFlavor($flavor)
    {
        $this->flavor = $flavor;

        return $this;
    }

    /**
     * Get flavor
     *
     * @return string
     */
    public function getFlavor()
    {
        return $this->flavor;
    }

    /**
     * Set illustrator
     *
     * @param string $illustrator
     * @return Card
     */
    public function setIllustrator($illustrator)
    {
        $this->illustrator = $illustrator;

        return $this;
    }

    /**
     * Get illustrator
     *
     * @return string
     */
    public function getIllustrator()
    {
        return $this->illustrator;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return Card
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return Card
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set upkeep
     *
     * @param integer $upkeep
     * @return Card
     */
    public function setUpkeep($upkeep)
    {
        $this->upkeep = $upkeep;

        return $this;
    }

    /**
     * Get upkeep
     *
     * @return integer
     */
    public function getUpkeep()
    {
        return $this->upkeep;
    }

    /**
     * Set production
     *
     * @param integer $production
     * @return Card
     */
    public function setProduction($production)
    {
        $this->production = $production;

        return $this;
    }

    /**
     * Get production
     *
     * @return integer
     */
    public function getProduction()
    {
        return $this->production;
    }

    /**
     * Set bullets
     *
     * @param integer $bullets
     * @return Card
     */
    public function setBullets($bullets)
    {
        $this->bullets = $bullets;

        return $this;
    }

    /**
     * Get bullets
     *
     * @return integer
     */
    public function getBullets()
    {
        return $this->bullets;
    }

    /**
     * Set influence
     *
     * @param integer $influence
     * @return Card
     */
    public function setInfluence($influence)
    {
        $this->influence = $influence;

        return $this;
    }

    /**
     * Get influence
     *
     * @return integer
     */
    public function getInfluence()
    {
        return $this->influence;
    }

    /**
     * Set control
     *
     * @param integer $control
     * @return Card
     */
    public function setControl($control)
    {
        $this->control = $control;

        return $this;
    }

    /**
     * Get control
     *
     * @return integer
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Add decklists
     *
     * @param \Dtdb\BuilderBundle\Entity\Decklist $decklists
     * @return Card
     */
    public function addDecklist(\Dtdb\BuilderBundle\Entity\Decklist $decklists)
    {
        $this->decklists[] = $decklists;

        return $this;
    }

    /**
     * Remove decklists
     *
     * @param \Dtdb\BuilderBundle\Entity\Decklist $decklists
     */
    public function removeDecklist(\Dtdb\BuilderBundle\Entity\Decklist $decklists)
    {
        $this->decklists->removeElement($decklists);
    }

    /**
     * Get decklists
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDecklists()
    {
        return $this->decklists;
    }

    /**
     * Set pack
     *
     * @param \Dtdb\BuilderBundle\Entity\Pack $pack
     * @return Card
     */
    public function setPack(\Dtdb\BuilderBundle\Entity\Pack $pack = null)
    {
        $this->pack = $pack;

        return $this;
    }

    /**
     * Get pack
     *
     * @return \Dtdb\BuilderBundle\Entity\Pack
     */
    public function getPack()
    {
        return $this->pack;
    }

    /**
     * Set type
     *
     * @param \Dtdb\BuilderBundle\Entity\Type $type
     * @return Card
     */
    public function setType(\Dtdb\BuilderBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Dtdb\BuilderBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set shooter
     *
     * @param \Dtdb\BuilderBundle\Entity\Shooter $shooter
     * @return Card
     */
    public function setShooter(\Dtdb\BuilderBundle\Entity\Shooter $shooter = null)
    {
        $this->shooter = $shooter;

        return $this;
    }

    /**
     * Get shooter
     *
     * @return \Dtdb\BuilderBundle\Entity\Shooter
     */
    public function getShooter()
    {
        return $this->shooter;
    }

    /**
     * Set gang
     *
     * @param \Dtdb\BuilderBundle\Entity\Gang $gang
     * @return Card
     */
    public function setGang(\Dtdb\BuilderBundle\Entity\Gang $gang = null)
    {
        $this->gang = $gang;

        return $this;
    }

    /**
     * Get gang
     *
     * @return \Dtdb\BuilderBundle\Entity\Gang
     */
    public function getGang()
    {
        return $this->gang;
    }

    /**
     * @var integer
     */
    private $wealth;


    /**
     * Set wealth
     *
     * @param integer $wealth
     * @return Card
     */
    public function setWealth($wealth)
    {
        $this->wealth = $wealth;

        return $this;
    }

    /**
     * Get wealth
     *
     * @return integer
     */
    public function getWealth()
    {
        return $this->wealth;
    }
    /**
     * @var string
     */
    private $octgnid;


    /**
     * Set octgnid
     *
     * @param string $octgnid
     * @return Card
     */
    public function setOctgnid($octgnid)
    {
        $this->octgnid = $octgnid;

        return $this;
    }

    /**
     * Get octgnid
     *
     * @return string
     */
    public function getOctgnid()
    {
        return $this->octgnid;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reviews;
    
    
    /**
     * Add reviews
     *
     * @param \Dtdb\BuilderBundle\Entity\Review $reviews
     * @return Card
     */
    public function addReview(\Dtdb\BuilderBundle\Entity\Review $reviews)
    {
        $this->reviews[] = $reviews;
    
        return $this;
    }
    
    /**
     * Remove reviews
     *
     * @param \Dtdb\BuilderBundle\Entity\Review $reviews
     */
    public function removeReview(\Dtdb\BuilderBundle\Entity\Review $reviews)
    {
        $this->reviews->removeElement($reviews);
    }
    
    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviews()
    {
        return $this->reviews;
    }
}
