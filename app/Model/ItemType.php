<?php

App::uses('AppModel', 'Model');

class ItemType extends AppModel
{

    public $name = 'ItemType';
    public $displayField = 'name';
    public $hasMany = array('Item');

} 