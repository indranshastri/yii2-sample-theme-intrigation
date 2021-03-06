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
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
             <?php include("top_header.php");
              $this->beginBody() ?>
                <!-- page content -->
                    <div class="right_col" role="main">
                            <?= $content ?>
                    </div>
                <!-- /page content -->
            <?php $this->endBody() ?>
            <?php include("footer.php");?>
        </div>
    </div>
</body>
</html>
<?php $this->endPage() ?>
