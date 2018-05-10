<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
    <title><?= Html::encode($this->title) ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">
    <?php $this->registerCsrfMetaTags() ?>
    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <?php $this->head() ?>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">
<?php $this->beginBody()?>

<div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link active" href="#home">Главная <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#features">Кабинет абитуриента</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#gallery">Новости</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#pricing">Регистрация</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#contact">Авторизация</a> </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<header class="bg-gradient" id="home">
    <div class="container mt-5">
        <h1>Портал абитуриентов КГТУ</h1>
        <p class="tagline"> Добро пожаловать на портал абитуриентов</p>
    </div>

</header>

<div class="section light-bg" id="features">


    <div class="container">

        <div class="section-title">

            <h3>Здесь вы сможете:</h3>
        </div>


        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-email gradient-fill ti-5x mr-5"></span>
                            <div class="media-body">
                                <h4 class="card-title">Получать информацию о планируемых мероприятиях</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-pencil-alt gradient-fill ti-5x mr-5"></span>
                            <div class="media-body">
                                <h4 class="card-title">Заполнить и подать заявление на зачисление в электронной форме</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-id-badge gradient-fill ti-5x mr-5"></span>
                            <div class="media-body">
                                <h4 class="card-title">Отслеживать персональную конкурсную ситуацию</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>

<div class="section" >

    <div class="container" >
        <div class="row">

            <div class="col-md-6 d-flex align-items-center">
                <div>

                   <h2>Заполнить заявление для поступления в несколько шагов:</h2>

                    <a href="index.php?id=8" class="btn btn-primary">Заполнить заявление</a></div>
            </div>
        </div>

    </div>

</div>

<div <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Зайти на страницу "Кабинет абитуриента"</h5>

                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Зарегистрироваться</h5>

                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Заполнить заявление</h5>

                            </div>
                        </li>
                    </ul>
                </div>


            </div>

        </div>

    </div>

<div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> Адрес: 720044 Кыргызстан, г.Бишкек, пр.Мира 66</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:rector@kstu.kg">E-mail: rector@kstu.kg</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:51836362800">+996-312-54-51-62</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">

                </div>
            </div>

        </div>

    </div>




<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage()?>