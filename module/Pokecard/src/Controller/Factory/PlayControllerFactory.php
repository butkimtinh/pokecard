<?php

/**
 * OnlineBiz Software Solution
 * 
 * @project pokecard
 * @version 0.0.1
 * @encoding UTF-8
 * @author Joe Vu<joe@onlinebizsoft.com>
 * @see http://onlinebizsoft.com
 * @copyright (c) 2017 , OnlineBiz Software Solution
 * 
 * Create at: Aug 3, 2018 1:34:00 PM
 */

namespace Pokecard\Controller\Factory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Pokecard\Controller\PlayController;

class PlayControllerFactory implements FactoryInterface { 
    
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
        $pokechanceService = $container->get('pokechanceService');
        return new PlayController($pokechanceService);
    }

}