<div class="votes view">
<h2><?php  echo __('Vote'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vote['Vote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Candidate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vote['Candidate']['name'], array('controller' => 'candidates', 'action' => 'view', $vote['Candidate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Voter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vote['Voter']['name'], array('controller' => 'voters', 'action' => 'view', $vote['Voter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vote['Vote']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vote'), array('action' => 'edit', $vote['Vote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vote'), array('action' => 'delete', $vote['Vote']['id']), null, __('Are you sure you want to delete # %s?', $vote['Vote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Votes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Voters'), array('controller' => 'voters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voter'), array('controller' => 'voters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidates'), array('controller' => 'candidates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidate'), array('controller' => 'candidates', 'action' => 'add')); ?> </li>
	</ul>
</div>
