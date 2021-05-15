<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiceForm::begin();?>

<?=$form->field($model, 'name');?>
<?=$form->field($model, 'email');?>
<!-- <=$form->field($model, 'subject');?> -->
<!-- <=$form->field($model, 'message');?> -->

<?= Html::submitButton('Submit', ['class'=>'btn btn-success']); ?>


