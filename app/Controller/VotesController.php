<?php
App::uses('AppController', 'Controller');
/**
 * Votes Controller
 *
 */
class VotesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function add($candidateid){
		$this->Vote->Create();
		$this->Vote->set('voterid',1);
		$this->Vote->set('candidateid',1);
		$this->Vote->save();
		return;
	}

}
