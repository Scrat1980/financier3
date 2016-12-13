<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Progress;
use app\assets\ProgressAsset;

$this->title = 'House';
$this->params['breadcrumbs'][] = $this->title;

ProgressAsset::register($this);

?>
<div class="site-about">
    <div id="progressbar"></div>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is your house
    </p>

    <?php echo Html::img($picture, ['width' => '100px']); ?>

    <?php /*echo Html::a('Upgrade to next level', '#', ['id' => 'upgrade']); */?>


<!--    <code>--><?//= __FILE__ ?><!--</code>-->
</div>
