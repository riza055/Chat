<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\Chat\models\AccountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
           

            'id',
            'name',
            'surname',
            'mail',
            'password',

           
        ],
    ]); ?>
</div>
