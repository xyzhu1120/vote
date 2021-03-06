<?php
App::uses('AppModel', 'Model');
/**
 * Vote Model
 *
 * @property Voter $Voter
 */
class Vote extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Voter' => array(
			'className' => 'Voter',
			'foreignKey' => 'voterid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Candidate' => array(
			'className' => 'Candidate',
			'foreignKey' => 'candidateid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
