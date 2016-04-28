<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use yii\widgets\Menu;
/* @var $this \yii\web\View */
/* @var $content string */

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
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">

        <?php
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Sukarelawan', 'url' => ['/kds-sukarelawan/index']],
                ['label' => 'Isu', 'url' => ['/kds-isu/index']],
                ['label' => 'Profil', 'url' => ['/kds-profil/index']],
                ['label' => 'Modules',
                    'url' => ['#'],
                    'items' => [
                        ['label' => 'Bimbing', 'url'=>['/bimbing']],
                        ['label' => 'JCFM', 'url'=>['/jcfm']],
                        ['label' => 'Gallery', 'url'=>['/gallery']],

                    ]

                ],
                ['label' => 'Sub',
                    'url' => ['#'],
                    'items' => [
                        ['label' => 'Program', 'url'=>['/kds-program']],
                        ['label' => 'Aktiviti', 'url'=>['/kds-aktiviti']],
                        ['label' => 'Organisasi', 'url'=>['/kds-organisasi']],


                    ]

                ]

            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php 

Modal::begin([
    'header' =>'KDS',
    'id' => 'modal',
    'size' => 'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],

]);

echo "<div id='modalContent'></div>";
Modal::end();

$this->endPage() ?>
