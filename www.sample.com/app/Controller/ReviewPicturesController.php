<?php
App::uses('AppController', 'Controller');
/**
 * ReviewPictures Controller
 *
 * @property ReviewPicture $ReviewPicture
 */
class ReviewPicturesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReviewPicture->recursive = 0;
		$this->set('reviewPictures', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ReviewPicture->id = $id;
		if (!$this->ReviewPicture->exists()) {
			throw new NotFoundException(__('Invalid review picture'));
		}
		$this->set('reviewPicture', $this->ReviewPicture->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReviewPicture->create();
			if ($this->ReviewPicture->save($this->request->data)) {
				$this->Session->setFlash(__('The review picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review picture could not be saved. Please, try again.'));
			}
		}
		$reviews = $this->ReviewPicture->Review->find('list');
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
		$this->ReviewPicture->id = $id;
		if (!$this->ReviewPicture->exists()) {
			throw new NotFoundException(__('Invalid review picture'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReviewPicture->save($this->request->data)) {
				$this->Session->setFlash(__('The review picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review picture could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ReviewPicture->read(null, $id);
		}
		$reviews = $this->ReviewPicture->Review->find('list');
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
		$this->ReviewPicture->id = $id;
		if (!$this->ReviewPicture->exists()) {
			throw new NotFoundException(__('Invalid review picture'));
		}
		if ($this->ReviewPicture->delete()) {
			$this->Session->setFlash(__('Review picture deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Review picture was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
