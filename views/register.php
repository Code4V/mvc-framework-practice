<?php 
/** @var $this \App\Core\View */

$this->title = 'Register';
?>
<h1>REGISTER</h1>


<?php $form = \App\Core\Form\Form::begin('', "post")?>
  <?php echo $form->field($model, 'email')?>
  <?php echo $form->field($model, 'password')->passwordField()?>


  <button type="submit" class="btn btn-primary">Submit</button>
<?php \App\Core\Form\Form::end()?>
<!-- <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" name="check" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->