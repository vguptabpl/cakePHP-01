<?php
App::uses('AppController', 'Controller');
/**
 * Rooms Controller
 *
 * @property Room $Room
 */
class RoomsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Room->recursive = 0;
		$this->set('rooms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Room->id = $id;
		if (!$this->Room->exists()) {
			throw new NotFoundException(__('Invalid room'));
		}
		$this->set('room', $this->Room->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Room->create();
			if ($this->Room->save($this->request->data)) {
				$this->Session->setFlash(__('The room has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The room could not be saved. Please, try again.'));
			}
		}
		$venues = $this->Room->Venue->find('list');
		$this->set(compact('venues'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Room->id = $id;
		if (!$this->Room->exists()) {
			throw new NotFoundException(__('Invalid room'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Room->save($this->request->data)) {
				$this->Session->setFlash(__('The room has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The room could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Room->read(null, $id);
		}
		$venues = $this->Room->Venue->find('list');
		$this->set(compact('venues'));
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
		$this->Room->id = $id;
		if (!$this->Room->exists()) {
			throw new NotFoundException(__('Invalid room'));
		}
		if ($this->Room->delete()) {
			$this->Session->setFlash(__('Room deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Room was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
