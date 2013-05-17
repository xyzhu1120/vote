<div class="votes form">
<?php echo $this->Form->create('Vote'); ?>
	<fieldset>
		<legend><?php echo __('Add Vote'); ?></legend>
	<?php
		echo $this->Form->input('candidateid');
		echo $this->Form->input('voterid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Votes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Voters'), array('controller' => 'voters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voter'), array('controller' => 'voters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
