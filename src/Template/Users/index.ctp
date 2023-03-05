<h4>List users</h4>

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Actions</th>
	</tr>
	<tbody>
		<?php if(count($users) == 0) echo '<tr><td>Without Redistered</td></tr>'; ?>
		<?php foreach($users as $user): ?>
			<tr>
				<td><?= $user->id ?></td>
				<td><?= $user->firstname ?></td>
				<td><?= $user->lastname ?></td>
				<td><?= $user->username ?></td>
				<td><?= $user->email ?></td>
				<td>
					<?= 
						$this->Html->link(
						    'View',
						    array(
						        'controller' => 'users',
						        'action' => 'view/'.$user->id
						    ),
						    [
						    	'class'=>'btn btn-info'
						    ]
						);
					?>
					<?php if($Auth->user()): ?>
						<?= 
							$this->Html->link(
							    'Edit',
							    array(
							        'controller' => 'users',
							        'action' => 'edit/'.$user->id
							    ),
							    [
							    	'class'=>'btn btn-primary'
							    ]
							);
						?>
						<?= 
							$this->Form->postLink(
			                'Delete',
			                ['action' => 'delete', $user->id],
			                ['confirm' => 'Do You want to delete?','class'=>'btn btn-danger'])
						?>
						<?= 
							$this->Html->link(
							    'Update password',
							    array(
							        'controller' => 'users',
							        'action' => 'password/'.$user->id
							    ),
							    [
							    	'class'=>'btn btn-warning'
							    ]
							);
						?>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>