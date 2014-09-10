<?php
App::uses('AppController', 'Controller');

class ItemsController extends AppController
{

    public $uses = array('Item', 'ItemType', 'StockUnitType', 'StockHistory');

    public function index()
    {
        $this->set('items', $this->Item->find('all'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            //die(print_r($this->request->data));
            $this->StockHistory->create();
            if ($this->StockHistory->saveAll($this->request->data)) {
                $this->Session->setFlash(__('The item type has been saved.'));
                $this->redirect(array('action' => 'index'));
                return;
            } else {
                $this->Session->setFlash(__('The item type could not be saved. Please, try again.'));
            }
        }
        $this->set('itemTypes', $this->ItemType->find('list'));
        $this->set('stockUnitTypes', $this->StockUnitType->find('list'));
    }

    public function view($id = null)
    {
        if (!$this->ItemType->exists($id)) {
            throw new NotFoundException(__('Invalid item type'));
        }
        $options = array('conditions' => array('ItemType.id' => $id));
        $this->set('itemType', $this->ItemType->find('first', $options));
    }

    public function edit($id = null)
    {
        if (!$this->Item->exists($id)) {
            throw new NotFoundException(__('Invalid item type'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Item->save($this->request->data)) {
                $this->Session->setFlash(__('The item type has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The item type could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('ItemType.id' => $id));
            $this->request->data = $this->ItemType->find('first', $options);
        }
    }

    public function delete($id = null)
    {
        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            throw new NotFoundException(__('Invalid item type'));
        }
        $this->request->allowMethod('post', 'delete');
        $this->Item->set('is_deleted', 1);
        if ($this->Item->save()) {
            $this->Session->setFlash(__('The item type has been deleted.'));
        } else {
            $this->Session->setFlash(__('The item type could not be deleted. Please, try again.'));
        }
        $this->redirect(array('action' => 'index'));
    }

} 