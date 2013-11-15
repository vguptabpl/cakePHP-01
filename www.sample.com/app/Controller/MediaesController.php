<?php
App::uses('AppController', 'Controller');
/**
 * Mediaes Controller
 *
 * @property Mediae $Mediae
 */
class MediaesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mediae->recursive = 0;
		$this->set('mediaes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Mediae->id = $id;
		if (!$this->Mediae->exists()) {
			throw new NotFoundException(__('Invalid mediae'));
		}
		$this->set('mediae', $this->Mediae->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mediae->create();
			if ($this->Mediae->save($this->request->data)) {
				$this->Session->setFlash(__('The mediae has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mediae could not be saved. Please, try again.'));
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
		$this->Mediae->id = $id;
		if (!$this->Mediae->exists()) {
			throw new NotFoundException(__('Invalid mediae'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mediae->save($this->request->data)) {
				$this->Session->setFlash(__('The mediae has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mediae could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Mediae->read(null, $id);
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
		$this->Mediae->id = $id;
		if (!$this->Mediae->exists()) {
			throw new NotFoundException(__('Invalid mediae'));
		}
		if ($this->Mediae->delete()) {
			$this->Session->setFlash(__('Mediae deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mediae was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
