<?php
App::uses('AppController', 'Controller');
/**
 * Reviews Controller
 *
 * @property Review $Review
 */
class ReviewsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Review->recursive = 0;
		$this->set('reviews', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		$this->set('review', $this->Review->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Review->create();
			if ($this->Review->save($this->request->data)) {
				$this->flash(__('Review saved.'), array('action' => 'index'));
			} else {
			}
		}
		$users = $this->Review->User->find('list');
		$venues = $this->Review->Venue->find('list');
		$this->set(compact('users', 'venues'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Review->save($this->request->data)) {
				$this->flash(__('The review has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Review->read(null, $id);
		}
		$users = $this->Review->User->find('list');
		$venues = $this->Review->Venue->find('list');
		$this->set(compact('users', 'venues'));
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
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		if ($this->Review->delete()) {
			$this->flash(__('Review deleted'), array('action' => 'index'));
		}
		$this->flash(__('Review was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
