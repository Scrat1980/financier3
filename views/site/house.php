<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'House';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is your house
    </p>

    <?php echo Html::img('img/House.jpg', ['width' => '500px']); ?>

<!--    <code>--><?//= __FILE__ ?><!--</code>-->
</div>
