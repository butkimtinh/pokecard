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
 * Create at: Aug 3, 2018 1:17:36 PM
 */


namespace Pokecard\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Pokecard\Model\Game\Pokechance;
use Pokecard\Model\Card\Card;

class PokechanceFactory implements FactoryInterface {
    
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
        $cardSelected = new Card($_SESSION['customer_card']);
        $pokechance = new Pokechance($cardSelected);
        $pokechance->addCard(new Card('H2'));
        $pokechance->addCard(new Card('H3'));
        $pokechance->addCard(new Card('H4'));
        $pokechance->addCard(new Card('H5'));
        $pokechance->addCard(new Card('H6'));
        $pokechance->addCard(new Card('H7'));
        return $pokechance;
    }
    
    // initilize cards for PokerChance
}
