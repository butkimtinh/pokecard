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
 * Create at: Aug 3, 2018 9:23:16 AM
 */

namespace Pokecard\Model\Card;

interface CardInterface {
    public function getName();
    public function getState();
}