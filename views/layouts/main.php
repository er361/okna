<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top">
<?php $this->beginBody() ?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo.png" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden"> <a class="page-scroll" href="#page-top"></a> </li>
                <li><a class="page-scroll" href="#page-top">Главная <span class="sr-only">(current)</span></a></li>
                <li><a class="page-scroll" href="#jobs">Как мы работаем</a></li>
                <li><a class="page-scroll" href="#advice">Советы</a></li>
                <li><a class="page-scroll" href="#mypartners">Партнеры</a></li>
                <li><a class="page-scroll" href="#sertificate">Сертификаты</a></li>
                <li><a class="page-scroll" href="#contt">Контакты</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>


<footer id="contt">
    <div class="cont--footer">
        <div class="col-md-6">
            <div class="logo--footer"><img src="img/logo.png" alt=""></div>
            <div class="p--footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, aperiam, corrupti veritatis perferendis vero ratione cumque possimus ullam veniam molestiae molestias repellendus debitis facilis rerum excepturi quam adipisci repellat quaerat?</div>
        </div>
        <div class="col-md-6">
            <div class="text--footer">
                <div class="heading--footer"><span>Контакты</span></div>
                <div class="contacts--footer">
                    <div><b>Адрес:</b> г.Астана, ул. Пушкина</div>
                    <div><b>Телефон:</b> +7 777 777 77 77</div>
                    <div><b>E-mail:</b> abcdef@gmail.com</div>
                    <div><b>Вконтакте:</b> <a href="#">Armada Win</a></div>
                    <div><b>Instagram:</b> <a href="#">Armada Win</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
