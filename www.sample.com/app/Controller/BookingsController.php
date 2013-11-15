<?php
App::uses('AppController', 'Controller');
/**
 * Bookings Controller
 *
 * @property Booking $Booking
 */
class BookingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Booking->recursive = 0;
		$this->set('bookings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Booking->id = $id;
		if (!$this->Booking->exists()) {
			throw new NotFoundException(__('Invalid booking'));
		}
		$this->set('booking', $this->Booking->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Booking->create();
			if ($this->Booking->save($this->request->data)) {
				$this->Session->setFlash(__('The booking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The booking could not be saved. Please, try again.'));
			}
		}
		$users = $this->Booking->User->find('list');
		$venues = $this->Booking->Venue->find('list');
		$rooms = $this->Booking->Room->find('list');
		$this->set(compact('users', 'venues', 'rooms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Booking->id = $id;
		if (!$this->Booking->exists()) {
			throw new NotFoundException(__('Invalid booking'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Booking->save($this->request->data)) {
				$this->Session->setFlash(__('The booking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The booking could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Booking->read(null, $id);
		}
		$users = $this->Booking->User->find('list');
		$venues = $this->Booking->Venue->find('list');
		$rooms = $this->Booking->Room->find('list');
		$this->set(compact('users', 'venues', 'rooms'));
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
		$this->Booking->id = $id;
		if (!$this->Booking->exists()) {
			throw new NotFoundException(__('Invalid booking'));
		}
		if ($this->Booking->delete()) {
			$this->Session->setFlash(__('Booking deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Booking was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
