<?php

namespace Pokecard\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Pokecard\Form\PokechaneForm;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $viewmodel = new ViewModel();
        $form = new PokechaneForm();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $suit = $this->getRequest()->getPost('suit');
            $rank = $this->getRequest()->getPost('rank');
            $_SESSION['customer_card'] = "{$suit}{$rank}";
            $this->redirect()->toRoute('play');
        }
        $viewmodel->setVariable('form', $form);
        return $viewmodel;
        
    }
    
}