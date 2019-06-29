<?php

/* @var $this yii\web\View */
use yii\web\JqueryAsset;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <?php foreach ($users as $user): ?>
            <a href="<?php echo Url::to(['/user/profile/view', 'nickname' => $user->getNickname()]); ?>">
                    <?php echo $user->username; ?>
            </a>
            <hr>
            <?php endforeach; ?>
        </div>

    </div>
</div>
