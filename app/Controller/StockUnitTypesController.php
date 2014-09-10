<?php
App::uses('AppController', 'Controller');

class StockUnitTypesController extends AppController
{

    public function index()
    {
        if ($this->request->is('post')) {
            $this->StockUnitType->create();
            if ($this->StockUnitType->save($this->request->data)) {
                $this->Session->setFlash(__('The item type has been saved.'));
            } else {
                $this->Session->setFlash(__('The item type could not be saved. Please, try again.'));
            }
        }

        $this->StockUnitType->recursive = 0;
        $this->set('items', $this->StockUnitType->find('list'));
    }

} 