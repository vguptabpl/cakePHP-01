<?php
App::uses('AppController', 'Controller');
/**
 * Cusines Controller
 *
 * @property Cusine $Cusine
 */
class CusinesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cusine->recursive = 0;
		$this->set('cusines', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cusine->id = $id;
		if (!$this->Cusine->exists()) {
			throw new NotFoundException(__('Invalid cusine'));
		}
		$this->set('cusine', $this->Cusine->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cusine->create();
			if ($this->Cusine->save($this->request->data)) {
				$this->Session->setFlash(__('The cusine has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cusine could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cusine->id = $id;
		if (!$this->Cusine->exists()) {
			throw new NotFoundException(__('Invalid cusine'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cusine->save($this->request->data)) {
				$this->Session->setFlash(__('The cusine has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cusine could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cusine->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Cusine->id = $id;
		if (!$this->Cusine->exists()) {
			throw new NotFoundException(__('Invalid cusine'));
		}
		if ($this->Cusine->delete()) {
			$this->Session->setFlash(__('Cusine deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cusine was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
