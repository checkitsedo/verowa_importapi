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
 * LayerController
 */
class LayerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * layerRepository
     *
     * @var \Checkit\VerowaImportapi\Domain\Repository\LayerRepository
     */
    protected $layerRepository = null;

    /**
     * @param \Checkit\VerowaImportapi\Domain\Repository\LayerRepository $layerRepository
     */
    public function injectLayerRepository(\Checkit\VerowaImportapi\Domain\Repository\LayerRepository $layerRepository)
    {
        $this->layerRepository = $layerRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $layers = $this->layerRepository->findAll();
        $this->view->assign('layers', $layers);
    }
}
