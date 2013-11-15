<?php
App::uses('AppController', 'Controller');
/**
 * Venues Controller
 *
 * @property Venue $Venue
 */
class VenuesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Venue->recursive = 0;
		$this->set('venues', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Venue->id = $id;
		if (!$this->Venue->exists()) {
			throw new NotFoundException(__('Invalid venue'));
		}
		$this->set('venue', $this->Venue->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Venue->create();
			if ($this->Venue->save($this->request->data)) {
				$this->flash(__('Venue saved.'), array('action' => 'index'));
			} else {
			}
		}
		$users = $this->Venue->User->find('list');
		$cusines = $this->Venue->Cusine->find('list');
		$this->set(compact('users', 'cusines'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Venue->id = $id;
		if (!$this->Venue->exists()) {
			throw new NotFoundException(__('Invalid venue'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Venue->save($this->request->data)) {
				$this->flash(__('The venue has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Venue->read(null, $id);
		}
		$users = $this->Venue->User->find('list');
		$cusines = $this->Venue->Cusine->find('list');
		$this->set(compact('users', 'cusines'));
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
		$this->Venue->id = $id;
		if (!$this->Venue->exists()) {
			throw new NotFoundException(__('Invalid venue'));
		}
		if ($this->Venue->delete()) {
			$this->flash(__('Venue deleted'), array('action' => 'index'));
		}
		$this->flash(__('Venue was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Venue->recursive = 0;
		$this->set('venues', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Venue->id = $id;
		if (!$this->Venue->exists()) {
			throw new NotFoundException(__('Invalid venue'));
		}
		$this->set('venue', $this->Venue->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Venue->create();
			if ($this->Venue->save($this->request->data)) {
				$this->flash(__('Venue saved.'), array('action' => 'index'));
			} else {
			}
		}
		$users = $this->Venue->User->find('list');
		$cusines = $this->Venue->Cusine->find('list');
		$this->set(compact('users', 'cusines'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Venue->id = $id;
		if (!$this->Venue->exists()) {
			throw new NotFoundException(__('Invalid venue'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Venue->save($this->request->data)) {
				$this->flash(__('The venue has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Venue->read(null, $id);
		}
		$users = $this->Venue->User->find('list');
		$cusines = $this->Venue->Cusine->find('list');
		$this->set(compact('users', 'cusines'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Venue->id = $id;
		if (!$this->Venue->exists()) {
			throw new NotFoundException(__('Invalid venue'));
		}
		if ($this->Venue->delete()) {
			$this->flash(__('Venue deleted'), array('action' => 'index'));
		}
		$this->flash(__('Venue was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
