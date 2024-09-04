<?php

declare(strict_types=1);

namespace Checkit\VerowaApiconnector\Controller;


/**
 * This file is part of the "Verowa API Connector" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

/**
 * OrganizerController
 */
class OrganizerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * organizerRepository
     *
     * @var \Checkit\VerowaApiconnector\Domain\Repository\OrganizerRepository
     */
    protected $organizerRepository = null;

    /**
     * @param \Checkit\VerowaApiconnector\Domain\Repository\OrganizerRepository $organizerRepository
     */
    public function injectOrganizerRepository(\Checkit\VerowaApiconnector\Domain\Repository\OrganizerRepository $organizerRepository)
    {
        $this->organizerRepository = $organizerRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $organizers = $this->organizerRepository->findAll();
        $this->view->assign('organizers', $organizers);
    }
}
