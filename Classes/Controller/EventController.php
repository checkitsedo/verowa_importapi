<?php

declare(strict_types=1);

namespace Checkit\VerowaApiconnector\Controller;

/*
 * This file is part of the "Verowa API Connector" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

use Checkit\VerowaApiconnector\Domain\Model\Event;
use Checkit\VerowaApiconnector\Domain\Repository\EventRepository;
use GeorgRinger\NumberedPagination\NumberedPagination;
use TYPO3\CMS\Core\Pagination\SimplePagination;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;

/**
 * EventController
 */
class EventController extends ActionController
{

	/**
 	 * eventRepository
   	 *
     * @var \Checkit\VerowaApiconnector\Domain\Repository\EventRepository
     */
	protected $eventRepository = null;

	/**
 	 * @param \Checkit\VerowaApiconnector\Domain\Repository\EventRepository $eventRepository
   	 */
	public function injectEventRepository(\Checkit\VerowaApiconnector\Domain\Repository\EventRepository $eventRepository)
	{
		$this->eventRepository = $eventRepository;
	}

	/**
 	 * action list
   	 *
     	 * @return string|object|null|void
       	 */
	public function listAction()
	{
		$this->cacheService->clearPageCache($pid);

		$events = $this->eventRepository->findAll();

		// pagination
		$itemsPerPage = 10;
		$maximumLinks = 5;
		$currentPage = $this->request->hasArgument('currentPage') ? (int)$this->request->getArgument('currentPage') : 1;
		$paginator = new \TYPO3\CMS\Extbase\Pagination\QueryResultPaginator($events, $currentPage, $itemsPerPage);
		$pagination = new \GeorgRinger\NumberedPagination\NumberedPagination($paginator, $maximumLinks);

		$this->view->assign('pagination', [
			'paginator' => $paginator,
			'pagination' => $pagination,
		]);
	}

	/**
 	 * action show
   	 *
     	 * @param \Checkit\VerowaApiconnector\Domain\Model\Event $event
       	 * @return string|object|null|void
	 */
	public function showAction(\Checkit\VerowaApiconnector\Domain\Model\Event $event)
	{
		$this->view->assign('event', $event);
	}
	protected function getErrorFlashMessage()
	{
		return false;
	}
}
