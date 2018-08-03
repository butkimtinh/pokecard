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
 * Create at: Aug 3, 2018 9:30:42 AM
 */

namespace Pokecard\Model\Game;

use Pokecard\Model\Game\AbstractGame;
use Pokecard\Model\Card\CardInterface;

class Pokechance extends AbstractGame{
    protected $bits = [];
    protected $cardCustomer;
    
    public function __construct(CardInterface $cardSelected) {
        $this->cardSelected = $cardSelected;
        
    }
    
    // 
    public function addCard(CardInterface $card) {
        $name = $card->getName();
        $this->collection[$name] = $card;
        $this->bits[$name] = 0;
        return $this;
    }
    
    // generate randomly a new card
    public function genrateRandomCard(){
        $avaiables = [];
        foreach ($this->cardCollection as $card) {
            if(!$card->getState()){
                continue;
            }
            $avaiables[] = $card->getName();
        }
        if(count($avaiables) == 0) {
            return false;
        }
        shuffle($avaiables);
        return $this->getCard(current($avaiables));
    }
    
    public function getCardCustomer() {
        return $this->cardCustomer;
    }
    
    // check consumerCard exist
    public function consumerCardExist() {
        $cardSelected = $this->getCardCustomer();
        $cardNameSelected = $cardSelected->getName();
        if(!isset($this->collection[$cardNameSelected])) {
            throw new Exception('Card selected is not exist');
        }
    }
    
    // get card by name
    public function getCard($name) {
        return $this->collection[$name];
    }
    
    // draft next card
    public function draftNext() {
        $this->consumerCardExist();
        $cardPick = $this->genrateRandomCard();
        
    }
    
    public function getCountCardAvaiable() {
        $count_card_avaiable = 0;
        
        foreach ($this->cardCollection as $card) {
            if($card->getState()){
                continue;
            }
            $count_card_avaiable++;
        }
        return $count_card_avaiable;
    }


    public function getChanceNext() {
        $count_history = isset($_SESSION['chance_history'])? count($_SESSION['chance_history']) : 0;
        $count_card_avaiable = $this->getCountCardAvaiable();
        return $count_history / $count_card_avaiable;
    }
}