<?php

namespace HDNET\Bastel\Controller;

use \OxidEsales\Eshop\Application\Controller\FrontendController;

class BastelController extends FrontendController {
    /**
     * @var string
     */
    protected $_sThisTemplate = 'bastel_index.tpl';

    public function render()
    {
        $result = parent::render();
    }
}