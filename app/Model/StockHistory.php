<?php

App::uses('AppModel', 'Model');

class StockHistory extends AppModel
{

    public $name = 'StockHistory';
    public $displayField = 'name';
    public $belongsTo = array('Item');
    public $order = 'StockHistory.created DESC';
} 