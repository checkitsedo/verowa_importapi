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
 * Targetgroup
 */
class Targetgroup extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * groupId
     *
     * @var int
     */
    protected $groupId = 0;

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * longname
     *
     * @var string
     */
    protected $longname = '';

    /**
     * Returns the targetgroupId
     *
     * @return string $targetgroupId
     */
    public function getTargetgroupId()
    {
        return $this->targetgroupId;
    }

    /**
     * Sets the targetgroupId
     *
     * @param string $targetgroupId
     * @return void
     */
    public function setTargetgroupId(string $targetgroupId)
    {
        $this->targetgroupId = $targetgroupId;
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
     * Returns the longname
     *
     * @return string $longname
     */
    public function getLongname()
    {
        return $this->longname;
    }

    /**
     * Sets the longname
     *
     * @param string $longname
     * @return void
     */
    public function setLongname(string $longname)
    {
        $this->longname = $longname;
    }
}
