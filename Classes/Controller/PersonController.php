<?php

declare(strict_types=1);

namespace Checkit\VerowaImportapi\Controller;


/**
 * This file is part of the "Verowa API Connector" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

/**
 * PersonController
 */
class PersonController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * personRepository
     *
     * @var \Checkit\VerowaImportapi\Domain\Repository\PersonRepository
     */
    protected $personRepository = null;

    /**
     * @param \Checkit\VerowaImportapi\Domain\Repository\PersonRepository $personRepository
     */
    public function injectPersonRepository(\Checkit\VerowaImportapi\Domain\Repository\PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $persons = $this->personRepository->findAll();
        $this->view->assign('persons', $persons);
    }
}
