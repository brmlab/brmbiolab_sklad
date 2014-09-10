<?php

App::uses('AppModel', 'Model');

class ItemType extends AppModel
{

    public $name = 'ItemType';
    public $displayField = 'name';
    public $hasMany = array('Item');
    public $validate = array(
        'name' => array(
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Name must be unique'
            ),
            'minLength' => array(
                'rule' => array('minLength', 3),
                'message' => 'Name must be at least 3 letters'
            )
        )
    );

} 