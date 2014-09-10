<?php

App::uses('AppModel', 'Model');

class StockUnitType extends AppModel
{

    public $name = 'StockUnitType';
    public $displayField = 'name';
    public $hasMany = array('Item');

} 