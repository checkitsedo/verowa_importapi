<?php

/**
 * Index traversing.
 */
declare(strict_types=1);

namespace Checkit\VerowaImportapi\ViewHelpers;

use Checkit\VerowaImportapi\Domain\Model\Event;
use Checkit\VerowaImportapi\Domain\Repository\EventRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
 * Index traversing.
 *
 * == Examples ==
 *
 * <code title="Traversing thru future and past occurings of the event">
 * {namespace checkit=Checkit\VerowaImportapi\ViewHelpers}
 * <f:for each="{checkit:eventTraversing(event:'{event}', limit:'{settings.limitrecord}', sort: 'ASC')}" as="futureEvent">
 *  <f:debug>{futureEvent}</f:debug>
 * </f:for>
 * </code>
 */
class EventTraversingViewHelper extends AbstractViewHelper
{
    /**
     * Init arguments.
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('event', Event::class, '', true);
        $this->registerArgument('limit', 'int', '', false, 100);
        $this->registerArgument('sort', 'string', '', false, QueryInterface::ORDER_ASCENDING);
    }

    /**
     * Render method.
     *
     * @return array
     */
    public function render()
    {
        $eventRepository = GeneralUtility::makeInstance(ObjectManager::class)->get(EventRepository::class);

        return $eventRepository->findByTraversing(
            $this->arguments['event'],
            (int)$this->arguments['limit'],
            $this->arguments['sort'],
        );
    }
}
