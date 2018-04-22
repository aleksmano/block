<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Url;
?>
<div class="site-index">
    <div>
        <img src="assets/index.jpg" style="padding-left: 285px;">

    </div>

    <div class="jumbotron" style="padding-top: 0px;">
        <h1>Добро пожаловать на StudyChain!</h1>

        <p class="lead">Наш проект направлен на помощ студентам сформировать и получить выбранную им специальность , сформировав ку
            подходящий именно ему. К тому же система рейтинга позволяет отделить зерна от плевел тем саммым найти работадателям более грамотных специалистов
            в выбранных областях</p>

        <p class="lead">Кто вы ?</p>

      <div><a class="btn btn-lg btn-success" href=<?=Url::toRoute(['site/student'])?> style="margin-right:10px;background-color: #2D404E;
              border-color: #253745;">Студент</a>
          <a class="btn btn-lg btn-success" href="<?=Url::toRoute(['site/rabota'])?>" style="background-color: #2D404E;
    border-color: #253745;">Работодатель</a>
      </div>
    </div>



</div>
</div>
