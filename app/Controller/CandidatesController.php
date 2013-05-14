<?php
App::uses('Candidate','Model');
class CandidatesController extends AppController{
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('candidates', $this->Candidate->find('all'));
	}

}
