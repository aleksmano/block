<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Family</label>: <?= Html::encode($model->family) ?></li>
    <li><label>Wallet</label>: <?= Html::encode($model->wallet) ?></li>
</ul>