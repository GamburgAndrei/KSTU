<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title>Greeting</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <?php $this->head() ?>
</head>


<!--Страница приветствия-->

<div class="container theme-showcase index " >
<div class="tab-my-content">
  <div class="anketa-wrapper">

    <div class="row main-landing-page-wrapper">
      <div class="col-xs-12">

        <h3 style="color:#633991">Добро пожаловать в кабинет абитуриента КГТУ</h3>


        <p style="color:#633991;font-size:300%;">Здесь вы сможете:</p>
        <ul class="ul-rhombus" style="font-size: 200%">
          <li>получать информацию о планируемых мероприятиях</li>
          <li>заполнить и подать заявление на зачисление в электронной форме</li>
          <li>отслеживать персональную конкурсную ситуацию</li>
        </ul>

          <p>
            <span style="color:#633991;font-size: 250%">
    Для работы вам необходимо

<a class="btn btn-success" href="index.php?id=9">Войти</a>
или
              <a class="btn btn-info" href="/site/registration">Зарегистрироваться</a>
            </span>
          </p><p>
      </p></div>
    </div>
  </div>
</div>

