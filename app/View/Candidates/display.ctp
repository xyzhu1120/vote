<h1>Candidates</h1>
<table>
	<tr>
		<th>Id</th>
		<th>name</th>
		<th>gender</th>
		<th>created</th>
	</tr>
	<?php foreach ($candidates as $candidate): ?>
	<tr>
		<td><?php echo $candidate['Candidate']['id']; ?></td>
		<td><?php echo $candidate['Candidate']['name']; ?></td>
		<td><?php echo $candidate['Candidate']['gender']; ?></td>
		<td><?php echo $candidate['Candidate']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($candidate); ?>
</table>
