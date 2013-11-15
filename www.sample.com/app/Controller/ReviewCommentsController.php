<?php
App::uses('AppController', 'Controller');
/**
 * ReviewComments Controller
 *
 * @property ReviewComment $ReviewComment
 */
class ReviewCommentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReviewComment->recursive = 0;
		$this->set('reviewComments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ReviewComment->id = $id;
		if (!$this->ReviewComment->exists()) {
			throw new NotFoundException(__('Invalid review comment'));
		}
		$this->set('reviewComment', $this->ReviewComment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReviewComment->create();
			if ($this->ReviewComment->save($this->request->data)) {
				$this->Session->setFlash(__('The review comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review comment could not be saved. Please, try again.'));
			}
		}
		$reviews = $this->ReviewComment->Review->find('list');
		$this->set(compact('reviews'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ReviewComment->id = $id;
		if (!$this->ReviewComment->exists()) {
			throw new NotFoundException(__('Invalid review comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReviewComment->save($this->request->data)) {
				$this->Session->setFlash(__('The review comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review comment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ReviewComment->read(null, $id);
		}
		$reviews = $this->ReviewComment->Review->find('list');
		$this->set(compact('reviews'));
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
		$this->ReviewComment->id = $id;
		if (!$this->ReviewComment->exists()) {
			throw new NotFoundException(__('Invalid review comment'));
		}
		if ($this->ReviewComment->delete()) {
			$this->Session->setFlash(__('Review comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Review comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
