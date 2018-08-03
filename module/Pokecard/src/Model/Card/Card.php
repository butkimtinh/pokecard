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
 * Create at: Aug 3, 2018 9:23:02 AM
 */
namespace Pokecard\Model\Card;

use Pokecard\Model\Card\CardInterface;

class Card implements CardInterface {
    protected $name;
    protected $state = true;


    public function __construct($name) {
        $this->name = $name;
    }
    
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }
    
    public function setState($state) {
        $this->state = $state;
        return $this;
    }

    public function getState() {
        return $this->state;
    }
}
