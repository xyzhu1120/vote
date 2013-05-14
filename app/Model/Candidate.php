<?php
App::uses('AppModel','Model');
class Candidate extends AppModel{
	public $name= 'Candidate';
	public function test(){
		$this->set('can','can');
	}
}
