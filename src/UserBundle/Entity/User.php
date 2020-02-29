<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use MainBundle\Entity\JobOffer;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Gedmo\Slug(fields={"fname","lname","id"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

        
    /**
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = array();

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=255, nullable=true)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=255, nullable=true)
     */
    private $lname;

    /**
     * @ORM\Column(name="profession", type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @ORM\Column(name="presentation", type="text", nullable=true)
     */
    private $presentation;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="created_on", type="datetime")
     */
    private $createdOn;

    /**
     * @var bool
     *
     * @ORM\Column(name="acceptedRules", type="boolean")
     */
    private $acceptedRules;

    
    public function __construct() {
        $this->createdOn = new \DateTime();
        $this->isActive = false;
    }
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fname
     *
     * @param string $fname
     *
     * @return User
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     *
     * @return User
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setPlainPassword($plainPassword){
        $this->plainPassword = $plainPassword;
    }
    
    public function getPlainPassword(){
        return $this->plainPassword;
    }

    public function getAcceptedRules(){
        return $this->acceptedRules;
    }

    public function getSalt(){
        return $this->salt;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($val){
        $this->username = $val;
        return $this;
    }

    public function setAcceptedRules($val){
        $this->acceptedRules = $val;
        return $this->acceptedRules;
    }

    public function getRoles(){
        return $this->roles;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
        return $this;
    }

    public function eraseCredentials() {
        
    }

    public function getName(){
        if($this->fname != null && $this->lname != null){
            return $this->fname." ".$this->lname;
        }else if($this->fname == null && $this->lname != null){
            return $this->lname;
        }else if($this->fname != null && $this->lname == null){
            return $this->fname;
        }else{
            return $this->email;
        }
    }


    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     *
     * @return User
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Add createdCompany
     *
     * @param \MainBundle\Entity\Company $createdCompany
     *
     * @return User
     */
    public function addCreatedCompany(\MainBundle\Entity\Company $createdCompany)
    {
        $this->createdCompanies[] = $createdCompany;

        return $this;
    }

    /**
     * Remove createdCompany
     *
     * @param \MainBundle\Entity\Company $createdCompany
     */
    public function removeCreatedCompany(\MainBundle\Entity\Company $createdCompany)
    {
        $this->createdCompanies->removeElement($createdCompany);
    }

    /**
     * Get createdCompanies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreatedCompanies()
    {
        return $this->createdCompanies;
    }

    /**
     * Add createdArticle
     *
     * @param \MainBundle\Entity\Article $createdArticle
     *
     * @return User
     */
    public function addCreatedArticle(\MainBundle\Entity\Article $createdArticle)
    {
        $this->createdArticles[] = $createdArticle;

        return $this;
    }

    /**
     * Remove createdArticle
     *
     * @param \MainBundle\Entity\Article $createdArticle
     */
    public function removeCreatedArticle(\MainBundle\Entity\Article $createdArticle)
    {
        $this->createdArticles->removeElement($createdArticle);
    }

    /**
     * Get createdArticles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreatedArticles()
    {
        return $this->createdArticles;
    }

    /**
     * Set subscriptions
     *
     * @param \MainBundle\Entity\Subscription $subscriptions
     *
     * @return User
     */
    public function setSubscriptions(\MainBundle\Entity\Subscription $subscriptions = null)
    {
        $this->subscriptions = $subscriptions;

        return $this;
    }

    /**
     * Get subscriptions
     *
     * @return \MainBundle\Entity\Subscription
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    public function getHasSubscribed(JobOffer $offer){
        $has_subscribed = false;
        $subs = $this->subscriptions;
        for($i = 0; $i < count($subs); $i++){
            if($subs[$i]->getOffer() == $offer){
                $has_subscribed = true;
                break;
            }
        }
        return $has_subscribed;
    }


    /**
     * Set subscriptionsEvaluated
     *
     * @param \MainBundle\Entity\Subscription $subscriptionsEvaluated
     *
     * @return User
     */
    public function setSubscriptionsEvaluated(\MainBundle\Entity\Subscription $subscriptionsEvaluated = null)
    {
        $this->subscriptionsEvaluated = $subscriptionsEvaluated;

        return $this;
    }

    /**
     * Get subscriptionsEvaluated
     *
     * @return \MainBundle\Entity\Subscription
     */
    public function getSubscriptionsEvaluated()
    {
        return $this->subscriptionsEvaluated;
    }

    /**
     * Add createdOffer
     *
     * @param \MainBundle\Entity\JobOffer $createdOffer
     *
     * @return User
     */
    public function addCreatedOffer(\MainBundle\Entity\JobOffer $createdOffer)
    {
        $this->createdOffers[] = $createdOffer;

        return $this;
    }

    /**
     * Remove createdOffer
     *
     * @param \MainBundle\Entity\JobOffer $createdOffer
     */
    public function removeCreatedOffer(\MainBundle\Entity\JobOffer $createdOffer)
    {
        $this->createdOffers->removeElement($createdOffer);
    }

    /**
     * Get createdOffers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreatedOffers()
    {
        return $this->createdOffers;
    }

    /**
     * Add subscription
     *
     * @param \MainBundle\Entity\Subscription $subscription
     *
     * @return User
     */
    public function addSubscription(\MainBundle\Entity\Subscription $subscription)
    {
        $this->subscriptions[] = $subscription;

        return $this;
    }

    /**
     * Remove subscription
     *
     * @param \MainBundle\Entity\Subscription $subscription
     */
    public function removeSubscription(\MainBundle\Entity\Subscription $subscription)
    {
        $this->subscriptions->removeElement($subscription);
    }

    /**
     * Add subscriptionsEvaluated
     *
     * @param \MainBundle\Entity\Subscription $subscriptionsEvaluated
     *
     * @return User
     */
    public function addSubscriptionsEvaluated(\MainBundle\Entity\Subscription $subscriptionsEvaluated)
    {
        $this->subscriptionsEvaluated[] = $subscriptionsEvaluated;

        return $this;
    }

    /**
     * Remove subscriptionsEvaluated
     *
     * @param \MainBundle\Entity\Subscription $subscriptionsEvaluated
     */
    public function removeSubscriptionsEvaluated(\MainBundle\Entity\Subscription $subscriptionsEvaluated)
    {
        $this->subscriptionsEvaluated->removeElement($subscriptionsEvaluated);
    }

    /**
     * Add experience
     *
     * @param \UserBundle\Entity\Experience $experience
     *
     * @return User
     */
    public function addExperience(\UserBundle\Entity\Experience $experience)
    {
        $this->experiences[] = $experience;

        return $this;
    }

    /**
     * Remove experience
     *
     * @param \UserBundle\Entity\Experience $experience
     */
    public function removeExperience(\UserBundle\Entity\Experience $experience)
    {
        $this->experiences->removeElement($experience);
    }

    /**
     * Get experiences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Add competence
     *
     * @param \UserBundle\Entity\Competence $competence
     *
     * @return User
     */
    public function addCompetence(\UserBundle\Entity\Competence $competence)
    {
        $this->competences[] = $competence;

        return $this;
    }

    /**
     * Remove competence
     *
     * @param \UserBundle\Entity\Competence $competence
     */
    public function removeCompetence(\UserBundle\Entity\Competence $competence)
    {
        $this->competences->removeElement($competence);
    }

    /**
     * Get competences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * Add receivedInvitation
     *
     * @param \MainBundle\Entity\Invitation $receivedInvitation
     *
     * @return User
     */
    public function addReceivedInvitation(\MainBundle\Entity\Invitation $receivedInvitation)
    {
        $this->receivedInvitations[] = $receivedInvitation;

        return $this;
    }

    /**
     * Remove receivedInvitation
     *
     * @param \MainBundle\Entity\Invitation $receivedInvitation
     */
    public function removeReceivedInvitation(\MainBundle\Entity\Invitation $receivedInvitation)
    {
        $this->receivedInvitations->removeElement($receivedInvitation);
    }

    /**
     * Get receivedInvitations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReceivedInvitations()
    {
        return $this->receivedInvitations;
    }

    /**
     * Add createdInvitation
     *
     * @param \MainBundle\Entity\Invitation $createdInvitation
     *
     * @return User
     */
    public function addCreatedInvitation(\MainBundle\Entity\Invitation $createdInvitation)
    {
        $this->createdInvitations[] = $createdInvitation;

        return $this;
    }

    /**
     * Remove createdInvitation
     *
     * @param \MainBundle\Entity\Invitation $createdInvitation
     */
    public function removeCreatedInvitation(\MainBundle\Entity\Invitation $createdInvitation)
    {
        $this->createdInvitations->removeElement($createdInvitation);
    }

    /**
     * Get createdInvitations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreatedInvitations()
    {
        return $this->createdInvitations;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return User
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return User
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return User
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Add formation
     *
     * @param \UserBundle\Entity\Formation $formation
     *
     * @return User
     */
    public function addFormation(\UserBundle\Entity\Formation $formation)
    {
        $this->formations[] = $formation;

        return $this;
    }

    /**
     * Remove formation
     *
     * @param \UserBundle\Entity\Formation $formation
     */
    public function removeFormation(\UserBundle\Entity\Formation $formation)
    {
        $this->formations->removeElement($formation);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormations()
    {
        return $this->formations;
    }

    public function getNote($competences){
        $res = 0;
        foreach($this->competences as $c){
            foreach($competences as $p){
                if(strcmp($c->getTitle(),$p) == 0){
                    $res++;
                }               
            }
        }
        return $res;
    }

    /**
     * Add dataCompetence
     *
     * @param \UserBundle\Entity\DataCompetence $dataCompetence
     *
     * @return User
     */
    public function addDataCompetence(\UserBundle\Entity\DataCompetence $dataCompetence)
    {
        $this->dataCompetences[] = $dataCompetence;

        return $this;
    }

    /**
     * Remove dataCompetence
     *
     * @param \UserBundle\Entity\DataCompetence $dataCompetence
     */
    public function removeDataCompetence(\UserBundle\Entity\DataCompetence $dataCompetence)
    {
        $this->dataCompetences->removeElement($dataCompetence);
    }

    /**
     * Get dataCompetences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDataCompetences()
    {
        return $this->dataCompetences;
    }

    /**
     * Add dataSchoolFormation
     *
     * @param \UserBundle\Entity\DataSchoolFormation $dataSchoolFormation
     *
     * @return User
     */
    public function addDataSchoolFormation(\UserBundle\Entity\DataSchoolFormation $dataSchoolFormation)
    {
        $this->dataSchoolFormations[] = $dataSchoolFormation;

        return $this;
    }

    /**
     * Remove dataSchoolFormation
     *
     * @param \UserBundle\Entity\DataSchoolFormation $dataSchoolFormation
     */
    public function removeDataSchoolFormation(\UserBundle\Entity\DataSchoolFormation $dataSchoolFormation)
    {
        $this->dataSchoolFormations->removeElement($dataSchoolFormation);
    }

    /**
     * Get dataSchoolFormations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDataSchoolFormations()
    {
        return $this->dataSchoolFormations;
    }
}
