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
 * TargetgroupController
 */
class TargetgroupController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * targetgroupRepository
     *
     * @var \Checkit\VerowaApiconnector\Domain\Repository\TargetgroupRepository
     */
    protected $targetgroupRepository = null;

    /**
     * @param \Checkit\VerowaApiconnector\Domain\Repository\TargetgroupRepository $targetgroupRepository
     */
    public function injectTargetgroupRepository(\Checkit\VerowaApiconnector\Domain\Repository\TargetgroupRepository $targetgroupRepository)
    {
        $this->targetgroupRepository = $targetgroupRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $targetgroups = $this->targetgroupRepository->findAll();
        $this->view->assign('targetgroups', $targetgroups);
    }
}
