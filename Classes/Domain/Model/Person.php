<?php

declare(strict_types=1);

namespace Checkit\VerowaImportapi\Domain\Model;


/**
 * This file is part of the "Verowa API Connector" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

/**
 * Person
 */
class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * personId
     *
     * @var string
     */
    protected $personId = '';

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * firstname
     *
     * @var string
     */
    protected $firstname = '';

    /**
     * lastname
     *
     * @var string
     */
    protected $lastname = '';

    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';

    /**
     * profession
     *
     * @var string
     */
    protected $profession = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * Returns the personId
     *
     * @return string $personId
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Sets the personId
     *
     * @param string $personId
     * @return void
     */
    public function setPersonId(string $personId)
    {
        $this->personId = $personId;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the firstname
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Returns the lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the lastname
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the profession
     *
     * @return string $profession
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Sets the profession
     *
     * @param string $profession
     * @return void
     */
    public function setProfession(string $profession)
    {
        $this->profession = $profession;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}
