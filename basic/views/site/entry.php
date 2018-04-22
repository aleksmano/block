<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'login') ?>
<?= $form->field($model, 'pass') ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'family') ?>
<?= $form->field($model, 'wallet') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>