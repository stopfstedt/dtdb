<?php

namespace Dtdb\BuilderBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Dtdb\BuilderBundle\Entity\Deck;
use Dtdb\BuilderBundle\Entity\Decklist;
use Dtdb\BuilderBundle\Entity\Comment;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    private $reputation;

    /**
     * @var string
     */
    private $gang;
    
    /**
     * @var \DateTime
     */
    private $creation;

    /**
     * @var string
     */
    private $resume;

    /**
     * @var integer
     */
    private $role;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $avatar;

    /*
     * @var integer
     */
    private $donation;
    
    /**
     * @var Deck[]
     */
    private $decks;

    /**
     * @var Decklist[]
     */
    private $decklists;
    
    /**
     * @var Comments[]
     */
    private $comments;
    
    /**
     * @var Decklist[]
     */
    private $favorites;
    
    /**
     * @var Decklist[]
     */
    private $votes;
    
    /**
     * @var User[]
     */
    private $following;
    
    /**
     * @var User[]
     */
    private $followers;
    
    /**
     * Set reputation
     *
     * @param integer $reputation
     * @return User
     */
    public function setReputation($reputation)
    {
        $this->reputation = $reputation;
    
        return $this;
    }

    /**
     * Get reputation
     *
     * @return integer
     */
    public function getReputation()
    {
        return $this->reputation;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     * @return User
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    
        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return User
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    
        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * Set gang
     *
     * @param string $gang
     * @return User
     */
    public function setGang($gang)
    {
    	$this->gang = $gang;
    
    	return $this;
    }
    
    /**
     * Get gang
     *
     * @return string
     */
    public function getGang()
    {
    	return $this->gang;
    }
    
    /**
     * Set avatar
     *
     * @param string $avatar
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set donation
     *
     * @param integer $donation
     * @return User
     */
    public function setDonation($donation)
    {
        $this->donation = $donation;
    
        return $this;
    }
    
    /**
     * Get donation
     *
     * @return integer
     */
    public function getDonation()
    {
        return $this->donation;
    }
    
    /**
     * Set deck
     *
     * @param string $decks
     * @return User
     */
    public function setDecks($decks)
    {
    	$this->decks = $decks;
    
    	return $this;
    }
    
    /**
     * Get deck
     *
     * @return \Dtdb\BuilderBundle\Entity\Deck[]
     */
    public function getDecks()
    {
    	return $this->decks;
    }

    /**
     * Set decklists
     *
     * @param string $decklists
     * @return Deck
     */
    public function setDecklists($decklists)
    {
    	$this->decklists = $decklists;
    
    	return $this;
    }
    
    /**
     * Get decklists
     *
     * @return string
     */
    public function getDecklists()
    {
    	return $this->decklists;
    }
    
    /**
     * Set comments
     *
     * @param string $comments
     * @return Deck
     */
    public function setComments($comments)
    {
    	$this->comments = $comments;
    
    	return $this;
    }
    
    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
    	return $this->comments;
    }

    /**
     * Add to favorites
     *
     * @param Decklist $favorites
     * @return User
     */
    public function addFavorite($decklist)
    {
    	$decklist->addFavorite($this);
    	$this->favorites[] = $decklist;
    
    	return $this;
    }

    /**
     * Remove from favorites
     *
     * @param Decklist $favorites
     * @return User
     */
    public function removeFavorite($decklist)
    {
    	$decklist->removeFavorite($this);
    	$this->favorites->removeElement($decklist);
    	
    	return $this;
    }
    
    
    /**
     * Get favorites
     *
     * @return Decklist
     */
    public function getFavorites()
    {
    	return $this->favorites;
    }
    
    /**
     * Set votes
     *
     * @param Decklist $votes
     * @return User
     */
    public function addVote($decklist)
    {
    	$decklist->addVote($this);
    	$this->votes[] = $decklist;
    
    	return $this;
    }
    
    /**
     * Get votes
     *
     * @return Decklist
     */
    public function getVotes()
    {
    	return $this->votes;
    }

    /**
     * Set following
     *
     * @param User $following
     * @return User
     */
    public function addFollowing($user)
    {
    	$user->addFollower($this);
    	$this->following[] = $user;
    
    	return $this;
    }
    
    /**
     * Get following
     *
     * @return User
     */
    public function getFollowing()
    {
    	return $this->following;
    }

    /**
     * Add follower
     *
     * @param User $follower
     * @return User
     */
    public function addFollower($user)
    {
    	$this->followers[] = $user;
    
    	return $this;
    }
    
    /**
     * Get followers
     *
     * @return User
     */
    public function getFollowers()
    {
    	return $this->followers;
    }
    
    public function getMaxNbDecks()
    {
    	return 100+floor($this->reputation/ 10);
    }
    
    public function __construct()
    {
    	$this->decks = new ArrayCollection();
    	$this->decklists = new ArrayCollection();
       	$this->comments = new ArrayCollection();
       	$this->favorites = new ArrayCollection();
       	$this->votes = new ArrayCollection();
       	$this->following = new ArrayCollection();
       	$this->followers = new ArrayCollection();
       	$this->reputation = 1;
       	$this->gang = 'neutral';
       	$this->creation = new \DateTime();
       	$this->donation = 0;
       	
       	parent::__construct();
    }
    /**
     * @var boolean
     */
    private $notif_author = TRUE;

    /**
     * @var boolean
     */
    private $notif_commenter = TRUE;

    /**
     * @var boolean
     */
    private $notif_mention = TRUE;

    /**
     * @var boolean
     */
    private $notif_follow = TRUE;

    /**
     * @var boolean
     */
    private $notif_successor = TRUE;


    /**
     * Set notif_author
     *
     * @param boolean $notifAuthor
     * @return User
     */
    public function setNotifAuthor($notifAuthor)
    {
        $this->notif_author = $notifAuthor;
    
        return $this;
    }

    /**
     * Get notif_author
     *
     * @return boolean
     */
    public function getNotifAuthor()
    {
        return $this->notif_author;
    }

    /**
     * Set notif_commenter
     *
     * @param boolean $notifCommenter
     * @return User
     */
    public function setNotifCommenter($notifCommenter)
    {
        $this->notif_commenter = $notifCommenter;
    
        return $this;
    }

    /**
     * Get notif_commenter
     *
     * @return boolean
     */
    public function getNotifCommenter()
    {
        return $this->notif_commenter;
    }

    /**
     * Set notif_mention
     *
     * @param boolean $notifMention
     * @return User
     */
    public function setNotifMention($notifMention)
    {
        $this->notif_mention = $notifMention;
    
        return $this;
    }

    /**
     * Get notif_mention
     *
     * @return boolean
     */
    public function getNotifMention()
    {
        return $this->notif_mention;
    }

    /**
     * Set notif_follow
     *
     * @param boolean $notifFollow
     * @return User
     */
    public function setNotifFollow($notifFollow)
    {
        $this->notif_follow = $notifFollow;
    
        return $this;
    }

    /**
     * Get notif_follow
     *
     * @return boolean
     */
    public function getNotifFollow()
    {
        return $this->notif_follow;
    }

    /**
     * Set notif_successor
     *
     * @param boolean $notifSuccessor
     * @return User
     */
    public function setNotifSuccessor($notifSuccessor)
    {
        $this->notif_successor = $notifSuccessor;
    
        return $this;
    }

    /**
     * Get notif_successor
     *
     * @return boolean
     */
    public function getNotifSuccessor()
    {
        return $this->notif_successor;
    }

    /**
     * Add decks
     *
     * @param \Dtdb\BuilderBundle\Entity\Deck $decks
     * @return User
     */
    public function addDeck(\Dtdb\BuilderBundle\Entity\Deck $decks)
    {
        $this->decks[] = $decks;
    
        return $this;
    }

    /**
     * Remove decks
     *
     * @param \Dtdb\BuilderBundle\Entity\Deck $decks
     */
    public function removeDeck(\Dtdb\BuilderBundle\Entity\Deck $decks)
    {
        $this->decks->removeElement($decks);
    }

    /**
     * Add decklists
     *
     * @param \Dtdb\BuilderBundle\Entity\Decklist $decklists
     * @return User
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
     * Add comments
     *
     * @param \Dtdb\BuilderBundle\Entity\Comment $comments
     * @return User
     */
    public function addComment(\Dtdb\BuilderBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    
        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Dtdb\BuilderBundle\Entity\Comment $comments
     */
    public function removeComment(\Dtdb\BuilderBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Remove votes
     *
     * @param \Dtdb\BuilderBundle\Entity\Decklist $votes
     */
    public function removeVote(\Dtdb\BuilderBundle\Entity\Decklist $votes)
    {
        $this->votes->removeElement($votes);
    }

    /**
     * Remove following
     *
     * @param \Dtdb\BuilderBundle\Entity\User $following
     */
    public function removeFollowing(\Dtdb\BuilderBundle\Entity\User $following)
    {
        $this->following->removeElement($following);
    }

    /**
     * Remove followers
     *
     * @param \Dtdb\BuilderBundle\Entity\User $followers
     */
    public function removeFollower(\Dtdb\BuilderBundle\Entity\User $followers)
    {
        $this->followers->removeElement($followers);
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reviewvotes;
    
    
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
     * Set role
     *
     * @param integer $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }
    
    /**
     * Get role
     *
     * @return integer
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * Add reviewvotes
     *
     * @param \Dtdb\BuilderBundle\Entity\Review $reviewvotes
     * @return User
     */
    public function addReviewvote(\Dtdb\BuilderBundle\Entity\Review $review)
    {
        $review->addVote($this);
        $this->reviewvotes[] = $review;
    
        return $this;
    }
    
    /**
     * Remove reviewvotes
     *
     * @param \Dtdb\BuilderBundle\Entity\Review $reviewvotes
     */
    public function removeReviewvote(\Dtdb\BuilderBundle\Entity\Review $reviewvotes)
    {
        $this->reviewvotes->removeElement($reviewvotes);
    }
    
    /**
     * Get reviewvotes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviewvotes()
    {
        return $this->reviewvotes;
    }
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reviews;
    
    
    /**
     * Add reviews
     *
     * @param \Dtdb\BuilderBundle\Entity\Review $reviews
     * @return User
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