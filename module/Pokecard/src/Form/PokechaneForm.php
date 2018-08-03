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
 * Create at: Aug 3, 2018 9:51:55 AM
 */

namespace Pokecard\Form;

use Zend\Form\Form;

class PokechaneForm extends Form {

    public function __construct() {
        parent::__construct('pokechanceForm');
        $this->add([
            'type' => 'Select',
            'name' => 'suit',
            'options' => [
                'label' => 'Suit',
                'value_options' => [
                    'H' => 'H',
                    'S' => 'S',
                    'D' => 'D',
                    'C' => 'C'
                ]
            ]
        ]);
        $this->add([
            'type' => 'Select',
            'name' => 'rank',
            'options' => [
                'label' => 'Rank',
                'value_options' => [
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10',
                    'J' => 'J',
                    'Q' => 'Q',
                    'K' => 'K',
                    'A' => 'A'
                ]
            ]
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Go',
                'id' => 'submitbutton',
            ],
        ]);
    }

}
