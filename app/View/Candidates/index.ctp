<?php
	$candidateNumRow=4;
?>
<h1>Candidates</h1>
<div style='min-height:900px; width:auto; margin-left:auto; margin-right:auto'>
		<?php foreach ($candidates as $candidate): ?>
		<div class='span3' style='background-color:#fff; height:300px; margin-bottom:30px'>
			<div style='min-height:150px'>
			</div>
			<?php echo $candidate['Candidate']['id']; ?>
			<?php echo $candidate['Candidate']['name']; ?>
			<?php echo $this->Html->link('Vote','/Votes/add/'.$candidate['Candidate']['id'], array('class'=>'btn')); ?>
		</div>
		
		<?php endforeach; ?>
		<?php unset($candidate); ?>
</div>
