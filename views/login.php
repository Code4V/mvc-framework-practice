<?php 
 /** @var $model \App\Models\User */ 
 /** @var $this \App\Core\View */

$this->title = 'Login';
?>
<h1>LOG IN</h1>


<?php $form = \App\Core\Form\Form::begin('', "post")?>
  <?php echo $form->field($model, 'email')?>
  <?php echo $form->field($model, 'password')->passwordField()?>


  <button type="submit" class="btn btn-primary">Submit</button>
<?php \App\Core\Form\Form::end()?>