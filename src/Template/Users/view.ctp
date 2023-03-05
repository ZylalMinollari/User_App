<h4>View user</h4>

<table class="table table-bordered">
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last name</th>
    <th>User Name</th>
    <th>Email</th>
  </tr>
  <tbody>
      <tr>
        <td><?= $user->id ?></td>
        <td><?= $user->firstname ?></td>
        <td><?= $user->lastname ?></td>
        <td><?= $user->username ?></td>
        <td><?= $user->email ?></td>
      </tr>

  </tbody>
</table>

<div>
  <a href="<?= FULL_BASE_URL ?>users/index" class="btn btn-primary">BACK</a>
</div>
