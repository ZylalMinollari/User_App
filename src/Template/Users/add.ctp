<h4>Add user</h4>

<?= $this->Form->create($user,['autocomplete'=>"off"]); ?>
<div class="form-group">
        <label for="">First Name</label>
        <?= $this->Form->input('firstname',['label'=>false,'class'=>'form-control','type'=>'text','value'=>'']); ?>
      </div>
      <div class="form-group">
        <label for="">Last Name</label>
        <?= $this->Form->input('lastname',['label'=>false,'class'=>'form-control','type'=>'text','value'=>'']); ?>
      </div>
      <div class="form-group">
        <label for="">User name</label>
        <?= $this->Form->input('username',['label'=>false,'class'=>'form-control','type'=>'text','value'=>'']); ?>
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <?= $this->Form->input('email',['label'=>false,'class'=>'form-control','value'=>'','autocomplete'=>'off']); ?>
      </div>
      <div class="form-group">
            <label for="">Password</label>
            <?= $this->Form->input('password',['class'=>'form-control','label'=>false,'value'=>'']) ?>
      </div> 
    <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
<?php echo $this->Form->end(); ?>