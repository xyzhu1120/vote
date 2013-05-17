<?php
App::uses('Candidate','Model');
class CandidatesController extends AppController{
	public $helpers = array('Html', 'Form');

	public $components = array('Session');
	public function index() {
		$this->set('candidates', $this->Candidate->find('all'));
	}

	public function add() {
		if($this->request->is('post')) {
			$this->Candidate->create();
			if($this->Candidate->save($this->request->data)) {
				$this->Session->setFlash('you post has been saved.');
				//$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('cannot add the candidate.');
			}
		}
	}

}
