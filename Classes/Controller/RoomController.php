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
 * RoomController
 */
class RoomController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * roomRepository
     *
     * @var \Checkit\VerowaImportapi\Domain\Repository\RoomRepository
     */
    protected $roomRepository = null;

    /**
     * @param \Checkit\VerowaImportapi\Domain\Repository\RoomRepository $roomRepository
     */
    public function injectRoomRepository(\Checkit\VerowaImportapi\Domain\Repository\RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $rooms = $this->roomRepository->findAll();
        $this->view->assign('rooms', $rooms);
    }
}
