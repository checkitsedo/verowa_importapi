<?php

declare(strict_types=1);

namespace Checkit\VerowaImportapi\Domain\Model;

/*
 * This file is part of the "Verowa API Connector" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
 
/**
 * Event
 */
class Event extends AbstractEntity
{

    /**
     * eventId
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $eventId = 0;

    /**
     * dateFrom
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $dateFrom = 0;

    /**
     * dateTo
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $dateTo = 0;

    /**
     * dateText
     *
     * @var string
     */
    protected $dateText = '';

    /**
     * hideTime
     *
     * @var bool
     */
    protected $hideTime = false;

    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * topic
     *
     * @var string
     */
    protected $topic = '';

    /**
     * shortDesc
     *
     * @var string
     */
    protected $shortDesc = '';

    /**
     * longDesc
     *
     * @var string
     */
    protected $longDesc = '';

    /**
     * organizer
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */
    protected $organizer = null;
	
	/**
     * organizerName
     *
     * @var string
     */
    protected $organizerName = '';
	
	/**
     * organizerFirstname
     *
     * @var string
     */
    protected $organizerFirstname = '';
	
	/**
     * organizerLastname
     *
     * @var string
     */
    protected $organizerLastname = '';
	
	/**
     * organizerPersonId
     *
     * @var int
     */
    protected $organizerPersonId = 0;
	
	/**
     * organizerEmail
     *
     * @var string
     */
    protected $organizerEmail = '';

    /**
     * coorganizers
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * furtherCoorganizers
     *
     * @var string
     */

    /**
     * service1
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * service2
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * service3
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * service4
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * service5
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * service6
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * service7
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * service8
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * lectors
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * organists
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * vergers
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * catering
     *
     * @var string
     */
    protected $catering = '';

    /**
     * withSacrament
     *
     * @var bool
     */
    protected $withSacrament = false;
	
    /**
     * childcareId
     *
     * @var int
     */
    protected $childcareId = 0;

    /**
     * childcareText
     *
     * @var string
     */
    protected $childcareText = '';

    /**
     * childcarePerson
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person>
     */

    /**
     * additionalText1
     *
     * @var string
     */
    protected $additionalText1 = '';

    /**
     * additionalText2
     *
     * @var string
     */
    protected $additionalText2 = '';

    /**
     * additionalText4
     *
     * @var string
     */
    protected $additionalText4 = '';

    /**
     * subsModuleActive
     *
     * @var bool
     */
    protected $subsModuleActive = false;

    /**
     * subsDate
     *
     * @var int
     */
    protected $subsDate = 0;

    /**
     * subsText
     *
     * @var string
     */
    protected $subsText = '';

    /**
     * subsPersonId
     *
     * @var int
     */
    protected $subsPersonId = 0;

    /**
     * datetimeText
     *
     * @var string
     */
    protected $datetimeText = '';
	
	/**
     * urlEventDetails
     *
     * @var string
     */
    protected $urlEventDetails = '';

    /**
     * baptismOfferId
     *
     * @var int
     */
    protected $baptismOfferId = 0;

    /**
     * baptismOfferText
     *
     * @var string
     */
    protected $baptismOfferText = '';

    /**
     * collection
     *
     * @var int
     */

    /**
     * targetGroups
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Targetgroup>
     */

    /**
     * layers
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Layer>
     */
    protected $layers = null;

    /**
     * layerName
     *
     * @var string
     */
    protected $layerName = '';

    /**
     * rooms
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Room>
     */
    protected $rooms = null;
	
	/**
     * roomName
     *
     * @var string
     */
    protected $roomName = '';

    /**
     * files
     *
     * @var int
     */
	
	/**
     * fileName
     *
     * @var string
     */
    protected $fileName = '';
	
	/**
     * fileDesc
     *
     * @var string
     */
    protected $fileDesc = '';
	
	/**
     * fileUrl
     *
     * @var string
     */
    protected $fileUrl = '';
	
	/**
     * fileFilesizeKb
     *
     * @var int
     */
    protected $fileFilesizeKb = 0;
	
	/**
     * fileFiletype
     *
     * @var string
     */
    protected $fileFiletype = '';

    /**
     * imageUrl
     *
     * @var string
     */
    protected $imageUrl = '';

    /**
     * imageWidth
     *
     * @var int
     */
    protected $imageWidth = 0;
	
	/**
     * imageHeight
     *
     * @var int
     */
    protected $imageHeight = 0;

    /**
     * listImageUrl
     *
     * @var string
     */
    protected $listImageUrl = '';


    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->person = $this->person ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->targetgroup = $this->targetgroup ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->layer = $this->layer ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->room = $this->room ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the eventId
     *
     * @return int $eventId
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Sets the eventId
     *
     * @param int $eventId
     * @return void
     */
    public function setEventId(int $eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * Returns the dateFrom
     *
     * @return \DateTime $dateFrom
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets the dateFrom
     *
     * @param \DateTime $dateFrom
     * @return void
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * Returns the dateTo
     *
     * @return \DateTime $dateTo
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets the dateTo
     *
     * @param \DateTime $dateTo
     * @return void
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
    }

    /**
     * Returns the dateText
     *
     * @return string $dateText
     */
    public function getDateText()
    {
        return $this->dateText;
    }

    /**
     * Sets the dateText
     *
     * @param string $dateText
     * @return void
     */
    public function setDateText(string $dateText)
    {
        $this->dateText = $dateText;
    }

    /**
     * Returns the hideTime
     *
     * @return bool $hideTime
     */
    public function getHideTime()
    {
        return $this->hideTime;
    }

    /**
     * Sets the hideTime
     *
     * @param bool $hideTime
     * @return void
     */
    public function setHideTime(bool $hideTime)
    {
        $this->hideTime = $hideTime;
    }

    /**
     * Returns the boolean state of hideTime
     *
     * @return bool
     */
    public function isHideTime()
    {
        return $this->hideTime;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the topic
     *
     * @return string $topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets the topic
     *
     * @param string $topic
     * @return void
     */
    public function setTopic(string $topic)
    {
        $this->topic = $topic;
    }

    /**
     * Returns the shortDesc
     *
     * @return string $shortDesc
     */
    public function getShortDesc()
    {
        return $this->shortDesc;
    }

    /**
     * Sets the shortDesc
     *
     * @param string $shortDesc
     * @return void
     */
    public function setShortDesc(string $shortDesc)
    {
        $this->shortDesc = $shortDesc;
    }

    /**
     * Returns the longDesc
     *
     * @return string $longDesc
     */
    public function getLongDesc()
    {
        return $this->longDesc;
    }

    /**
     * Sets the longDesc
     *
     * @param string $longDesc
     * @return void
     */
    public function setLongDesc(string $longDesc)
    {
        $this->longDesc = $longDesc;
    }

    /**
     * Adds a Organizer
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Person $person
     * @return void
     */
    public function addOrganizer(\Checkit\VerowaImportapi\Domain\Model\Person $person)
    {
        $this->organizer->attach($person);
    }

    /**
     * Removes a Organizer
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Person $personToRemove The Organizer to be removed
     * @return void
     */
    public function removeOrganizer(\Checkit\VerowaImportapi\Domain\Model\Person $personToRemove)
    {
        $this->organizer->detach($personToRemove);
    }

    /**
     * Returns the organizer
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person> $person
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * Sets the organizer
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person> $person
     * @return void
     */
    public function setOrganizer(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $person)
    {
        $this->organizer = $person;
    }
	
	/**
     * Returns the organizerName
     *
     * @return string $organizerName
     */
    public function getOrganizerName()
    {
        return $this->organizerName;
    }

    /**
     * Sets the organizerName
     *
     * @param string $organizerName
     * @return void
     */
    public function setOrganizerName(string $organizerName)
    {
        $this->organizerName = $organizerName;
    }
	
	/**
     * Returns the organizerFirstname
     *
     * @return string $organizerFirstname
     */
    public function getOrganizerFirstname()
    {
        return $this->organizerFirstname;
    }

    /**
     * Sets the organizerFirstname
     *
     * @param string $organizerFirstname
     * @return void
     */
    public function setOrganizerFirstname(string $organizerFirstname)
    {
        $this->organizerFirstname = $organizerFirstname;
    }
	
	/**
     * Returns the organizerLastname
     *
     * @return string $organizerLastname
     */
    public function getOrganizerLastname()
    {
        return $this->organizerLastname;
    }

    /**
     * Sets the organizerLastname
     *
     * @param string $organizerLastname
     * @return void
     */
    public function setOrganizerLastname(string $organizerLastname)
    {
        $this->organizerLastname = $organizerLastname;
    }
	
	/**
     * Returns the organizerPersonId
     *
     * @return int $organizerPersonId
     */
    public function getOrganizerPersonId()
    {
        return $this->organizerPersonId;
    }

    /**
     * Sets the organizerPersonId
     *
     * @param int $organizerPersonId
     * @return void
     */
    public function setOrganizerPersonId(int $organizerPersonId)
    {
        $this->organizerPersonId = $organizerPersonId;
    }
	
	/**
     * Returns the organizerEmail
     *
     * @return string $organizerEmail
     */
    public function getOrganizerEmail()
    {
        return $this->organizerEmail;
    }

    /**
     * Sets the organizerEmail
     *
     * @param string $organizerEmail
     * @return void
     */
    public function setOrganizerEmail(string $organizerEmail)
    {
        $this->organizerEmail = $organizerEmail;
    }

    /**
     * Adds a Coorganizer
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Person $person
     * @return void
     */

    /**
     * Removes a Coorganizer
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Person $personToRemove The Organizer to be removed
     * @return void
     */

    /**
     * Returns the coorganizer
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person> $person
     */
 
    /**
     * Sets the coorganizer
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person> $person
     * @return void
     */

    /**
     * Returns the furtherCoorganizers
     *
     * @return string $furtherCoorganizers
     */
    public function getFurtherCoorganizers()
    {
        return $this->furtherCoorganizers;
    }

    /**
     * Sets the furtherCoorganizers
     *
     * @param string $furtherCoorganizers
     * @return void
     */
    public function setFurtherCoorganizers(string $furtherCoorganizers)
    {
        $this->furtherCoorganizers = $furtherCoorganizers;
    }

    /**
     * service1 (int)
     *
     */

    /**
     * service2 (int)
     *
     */

    /**
     * service3 (int)
     *
     */

    /**
     * service4 (int)
     *
     */

    /**
     * service5 (int)
     *
     */

    /**
     * service6 (int)
     *
     */

    /**
     * service7 (int)
     *
     */

    /**
     * service8 (int)
     *
     */

    /**
     * lectors (int)
     *
     */

    /**
     * organists (int)
     *
     */

    /**
     * vergers (int)
     *
     */

    /**
     * Returns the catering
     *
     * @return string $catering
     */
    public function getCatering()
    {
        return $this->catering;
    }

    /**
     * Sets the catering
     *
     * @param string $catering
     * @return void
     */
    public function setCatering(string $catering)
    {
        $this->catering = $catering;
    }

    /**
     * Returns the withSacrament
     *
     * @return bool $withSacrament
     */
    public function getWithSacrament()
    {
        return $this->withSacrament;
    }

    /**
     * Sets the withSacrament
     *
     * @param bool $withSacrament
     * @return void
     */
    public function setWithSacrament(bool $withSacrament)
    {
        $this->withSacrament = $withSacrament;
    }

    /**
     * Returns the boolean state of withSacrament
     *
     * @return bool
     */
    public function isWithSacrament()
    {
        return $this->withSacrament;
    }

    /**
     * Returns the childcareId
     *
     * @return int $childcareId
     */
    public function getChildcareId()
    {
        return $this->childcareId;
    }

    /**
     * Sets the childcareId
     *
     * @param int $childcareId
     * @return void
     */
    public function setChildcareId(int $childcareId)
    {
        $this->childcareId = $childcareId;
    }

    /**
     * Returns the childcareText
     *
     * @return string $childcareText
     */
    public function getChildcareText()
    {
        return $this->childcareText;
    }

    /**
     * Sets the childcareText
     *
     * @param string $childcareText
     * @return void
     */
    public function setChildcareText(string $childcareText)
    {
        $this->childcareText = $childcareText;
    }
	
	/**
     * Adds a childcarePerson
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Person $person
     * @return void
     */

    /**
     * Removes a childcarePerson
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Person $personToRemove The childcarePerson to be removed
     * @return void
     */

    /**
     * Returns the childcarePerson
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person> $person
     */
 
    /**
     * Sets the childcarePerson
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Person> $person
     * @return void
     */

    /**
     * Returns the additionalText1
     *
     * @return string $additionalText1
     */
    public function getAdditionalText1()
    {
        return $this->additionalText1;
    }

    /**
     * Sets the additionalText1
     *
     * @param string $additionalText1
     * @return void
     */
    public function setAdditionalText1(string $additionalText1)
    {
        $this->additionalText1 = $additionalText1;
    }

    /**
     * Returns the additionalText2
     *
     * @return string $additionalText2
     */
    public function getAdditionalText2()
    {
        return $this->additionalText2;
    }

    /**
     * Sets the additionalText2
     *
     * @param string $additionalText2
     * @return void
     */
    public function setAdditionalText2(string $additionalText2)
    {
        $this->additionalText2 = $additionalText2;
    }

    /**
     * Returns the additionalText4
     *
     * @return string $additionalText4
     */
    public function getAdditionalText4()
    {
        return $this->additionalText4;
    }

    /**
     * Sets the additionalText4
     *
     * @param string $additionalText4
     * @return void
     */
    public function setAdditionalText4(string $additionalText4)
    {
        $this->additionalText4 = $additionalText4;
    }

    /**
     * Returns the subsModuleActive
     *
     * @return bool $subsModuleActive
     */
    public function getSubsModuleActive()
    {
        return $this->subsModuleActive;
    }

    /**
     * Sets the subsModuleActive
     *
     * @param bool $subsModuleActive
     * @return void
     */
    public function setSubsModuleActive(bool $subsModuleActive)
    {
        $this->subsModuleActive = $subsModuleActive;
    }

    /**
     * Returns the boolean state of subsModuleActive
     *
     * @return bool
     */
    public function isSubsModuleActive()
    {
        return $this->subsModuleActive;
    }

    /**
     * Returns the subsDate
     *
     * @return int $subsDate
     */
    public function getSubsDate()
    {
        return $this->subsDate;
    }

    /**
     * Sets the subsDate
     *
     * @param int $subsDate
     * @return void
     */
    public function setSubsDate(int $subsDate)
    {
        $this->subsDate = $subsDate;
    }

    /**
     * Returns the subsText
     *
     * @return string $subsText
     */
    public function getSubsText()
    {
        return $this->subsText;
    }

    /**
     * Sets the subsText
     *
     * @param string $subsText
     * @return void
     */
    public function setSubsText(string $subsText)
    {
        $this->subsText = $subsText;
    }

    /**
     * Returns the subsPersonId
     *
     * @return int $subsPersonId
     */
    public function getSubsPersonId()
    {
        return $this->subsPersonId;
    }

    /**
     * Sets the subsPersonId
     *
     * @param int $subsPersonId
     * @return void
     */
    public function setSubsPersonId(int $subsPersonId)
    {
        $this->subsPersonId = $subsPersonId;
    }

    /**
     * Returns the datetimeText
     *
     * @return string $datetimeText
     */
    public function getDatetimeText()
    {
        return $this->datetimeText;
    }

    /**
     * Sets the datetimeText
     *
     * @param string $datetimeText
     * @return void
     */
    public function setDatetimeText(string $datetimeText)
    {
        $this->datetimeText = $datetimeText;
    }
	
	/**
     * Returns the urlEventDetails
     *
     * @return string $urlEventDetails
     */
    public function getUrlEventDetails()
    {
        return $this->urlEventDetails;
    }

    /**
     * Sets the urlEventDetails
     *
     * @param string $urlEventDetails
     * @return void
     */
    public function setUrlEventDetails(string $urlEventDetails)
    {
        $this->urlEventDetails = $urlEventDetails;
    }

    /**
     * Returns the baptismOfferId
     *
     * @return int $baptismOfferId
     */
    public function getBaptismOfferId()
    {
        return $this->baptismOfferId;
    }

    /**
     * Sets the baptismOfferId
     *
     * @param int $baptismOfferId
     * @return void
     */
    public function setBaptismOfferId(int $baptismOfferId)
    {
        $this->baptismOfferId = $baptismOfferId;
    }

    /**
     * Returns the baptismOfferText
     *
     * @return string $baptismOfferText
     */
    public function getBaptismOfferText()
    {
        return $this->baptismOfferText;
    }

    /**
     * Sets the baptismOfferText
     *
     * @param string $baptismOfferText
     * @return void
     */
    public function setBaptismOfferText(string $baptismOfferText)
    {
        $this->baptismOfferText = $baptismOfferText;
    }

    /**
     * Returns the collection
     *
     * @return int $collection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Sets the collection
     *
     * @param int $collection
     * @return void
     */
    public function setCollection(int $collection)
    {
        $this->collection = $collection;
    }

    /**
     * Returns the targetGroups
     *
     * @return int $targetGroups
     */
    public function getTargetGroups()
    {
        return $this->targetGroups;
    }

    /**
     * Sets the targetGroups
     *
     * @param int $targetGroups
     * @return void
     */
    public function setTargetGroups(int $targetGroups)
    {
        $this->targetGroups = $targetGroups;
    }

    /**
     * Adds a Layer
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Layer $layer
     * @return void
     */
    public function addLayer(\Checkit\VerowaImportapi\Domain\Model\Layer $layer)
    {
        $this->layer->attach($layer);
    }

    /**
     * Removes a Layer
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Layer $layerToRemove The Layer to be removed
     * @return void
     */
    public function removeLayer(\Checkit\VerowaImportapi\Domain\Model\Layer $layerToRemove)
    {
        $this->layer->detach($layerToRemove);
    }

    /**
     * Returns the layer
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Layer> $layer
     */
    public function getLayer()
    {
        return $this->layer;
    }

    /**
     * Sets the layer
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Layer> $layer
     * @return void
     */
    public function setLayer(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $layer)
    {
        $this->layer = $layer;
    }

    /**
     * Returns the layers
     *
     * @return \Checkit\VerowaImportapi\Domain\Model\Layer $layers
     */
    public function getLayers()
    {
        return $this->layers;
    }

    /**
     * Sets the layers
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Layer $layers
     * @return void
     */
    public function setLayers(\Checkit\VerowaImportapi\Domain\Model\Layer $layers)
    {
        $this->layers = $layers;
    }

    /**
     * Returns the layerName
     *
     * @return string $layerName
     */
    public function getLayerName()
    {
        return $this->layerName;
    }

    /**
     * Sets the layerName
     *
     * @param string $layerName
     * @return void
     */
    public function setLayerName(string $layerName)
    {
        $this->layerName = $layerName;
    }
	
	/**
     * Adds a Room
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Room $room
     * @return void
     */
    public function addRoom(\Checkit\VerowaImportapi\Domain\Model\Room $room)
    {
        $this->room->attach($room);
    }

    /**
     * Removes a Room
     * @param \Checkit\VerowaImportapi\Domain\Model\Room $roomToRemove The Room to be removed
     * @return void
     */
    public function removeRoom(\Checkit\VerowaImportapi\Domain\Model\Room $roomToRemove)
    {
        $this->room->detach($roomToRemove);
    }

    /**
     * Returns the room
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Room> $room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets the room
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkit\VerowaImportapi\Domain\Model\Room> $room
     * @return void
     */
    public function setRoom(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $room)
    {
        $this->room = $room;
    }

    /**
     * Returns the rooms
     *
     * @return \Checkit\VerowaImportapi\Domain\Model\Room $rooms
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Sets the rooms
     *
     * @param \Checkit\VerowaImportapi\Domain\Model\Room $rooms
     * @return void
     */
    public function setRooms(\Checkit\VerowaImportapi\Domain\Model\Room $rooms)
    {
        $this->rooms = $rooms;
    }
	
	/**
     * Returns the roomName
     *
     * @return string $roomName
     */
    public function getRoomName()
    {
        return $this->roomName;
    }

    /**
     * Sets the roomName
     *
     * @param string $roomName
     * @return void
     */
    public function setRoomName(string $roomName)
    {
        $this->roomName = $roomName;
    }
	
	/**
     * Returns the fileName
     *
     * @return string $fileName
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets the fileName
     *
     * @param string $fileName
     * @return void
     */
    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }
	
	/**
     * Returns the fileDesc
     *
     * @return string $fileDesc
     */
    public function getFileDesc()
    {
        return $this->fileDesc;
    }

    /**
     * Sets the fileDesc
     *
     * @param string $fileDesc
     * @return void
     */
    public function setFileDesc(string $fileDesc)
    {
        $this->fileDesc = $fileDesc;
    }
	
	/**
     * Returns the fileUrl
     *
     * @return string $fileUrl
     */
    public function getFileUrl()
    {
        return $this->fileUrl;
    }

    /**
     * Sets the fileUrl
     *
     * @param string $fileUrl
     * @return void
     */
    public function setFileUrl(string $fileUrl)
    {
        $this->fileUrl = $fileUrl;
    }
	
	/**
     * Returns the fileFilesizeKb
     *
     * @return int $fileFilesizeKb
     */
    public function getFileFilesizeKb()
    {
        return $this->fileFilesizeKb;
    }

    /**
     * Sets the fileFilesizeKb
     *
     * @param int $fileFilesizeKb
     * @return void
     */
    public function setFileFilesizeKb(int $fileFilesizeKb)
    {
        $this->fileFilesizeKb = $fileFilesizeKb;
    }
	
	/**
     * Returns the fileFiletype
     *
     * @return string $fileFiletype
     */
    public function getFileFiletype()
    {
        return $this->fileFiletype;
    }

    /**
     * Sets the fileFiletype
     *
     * @param string $fileFiletype
     * @return void
     */
    public function setFileFiletype(string $fileFiletype)
    {
        $this->fileFiletype = $fileFiletype;
    }

    /**
     * Returns the imageUrl
     *
     * @return string $imageUrl
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Sets the imageUrl
     *
     * @param string $imageUrl
     * @return void
     */
    public function setImageUrl(string $imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * Returns the imageWidth
     *
     * @return int $imageWidth
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Sets the imageWidth
     *
     * @param int $imageWidth
     * @return void
     */
    public function setImageWidth(int $imageWidth)
    {
        $this->imageWidth = $imageWidth;
    }

    /**
     * Returns the imageHeight
     *
     * @return int $imageHeight
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Sets the imageHeight
     *
     * @param int $imageHeight
     * @return void
     */
    public function setImageHeight(int $imageHeight)
    {
        $this->imageHeight = $imageHeight;
    }

    /**
     * Returns the listImageUrl
     *
     * @return string $listImageUrl
     */
    public function getListImageUrl()
    {
        return $this->listImageUrl;
    }

    /**
     * Sets the listImageUrl
     *
     * @param string $listImageUrl
     * @return void
     */
    public function setListImageUrl(string $listImageUrl)
    {
        $this->listImageUrl = $listImageUrl;
    }

}
