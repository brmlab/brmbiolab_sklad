<?php

App::uses('AppModel', 'Model');

class Item extends AppModel
{

    public $name = 'Item';
    public $displayField = 'name';
    public $belongsTo = array(
        'ItemType',
        'StockUnitType'
    );
    public $hasMany = array(
        'StockHistory' => array(
            'order' => 'StockHistory.created DESC'
        )
    );
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

    public function beforeFind($query)
    {
        if (!isset($query['conditions']['is_deleted'])) {
            $query['conditions']['is_deleted'] = 0;
            return $query;
        }
        return true;
    }


} 