<?php 
/** @var $this \App\Core\View */

use App\Core\Form\TextAreaField;

$this->title = 'Test';
?>
    <h1>TEST PAGES</h1>

<?php $form = \App\Core\Form\Form::begin('', 'post')?>

<?php echo $form->field($model, 'email')?>
<?php echo new TextAreaField($model, 'message')?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php \App\Core\Form\Form::end();?>