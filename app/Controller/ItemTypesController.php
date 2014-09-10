<?php
App::uses('AppController', 'Controller');

/**
 * ItemTypes Controller
 *
 * @property ItemType $ItemType
 * @property PaginatorComponent $Paginator
 */
class ItemTypesController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        if ($this->request->is('post')) {
            $this->ItemType->create();
            if ($this->ItemType->save($this->request->data)) {
                $this->Session->setFlash(__('The item type has been saved.'));
            } else {
                $this->Session->setFlash(__('The item type could not be saved. Please, try again.'));
            }
        }

        $this->ItemType->recursive = 0;
        $this->set('itemTypes', $this->ItemType->find('list'));
    }
}
