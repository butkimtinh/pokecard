<?php

namespace Pokecard\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Pokecard\Model\Game\GameInterface;

class PlayController extends AbstractActionController
{
    /* @var $pokechanceService \Pokecard\Model\Game\Pokechance */
    protected $pokechanceService;
    
    public function __construct(GameInterface $pokechanceService) {
        $this->pokechanceService = $pokechanceService;
    }

    public function indexAction()
    {
        $viewmodel = new ViewModel();
        $request = $this->getRequest();
        if($request->isPost()) {
            $this->pokechanceService->draftNext();
        }
        $viewmodel->setVariable('chance_next', $this->pokechanceService->getChanceNext());
        return $viewmodel;
        
    }
}