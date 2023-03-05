<h4>Edit user</h4>

<?= $this->Form->create($user); ?>
<div class="form-group">
    <label for="">First Name</label>
    <?= $this->Form->input('firstname',['label'=>false,'class'=>'form-control','type'=>'text']); ?>
  </div>
  <div class="form-group">
    <label for="">Last name</label>
    <?= $this->Form->input('lastname',['label'=>false,'class'=>'form-control','type'=>'text']); ?>
  </div>
  <div class="form-group">
    <label for="">User name</label>
    <?= $this->Form->input('username',['label'=>false,'class'=>'form-control','type'=>'text']); ?>
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <?= $this->Form->input('email',['label'=>false,'class'=>'form-control']); ?>
  </div>
  <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
<?php echo $this->Form->end(); ?>