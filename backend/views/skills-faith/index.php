<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SkillsFaithSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faiths';
$this->params['breadcrumbs'][] = $this->title;
?>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::$app->request->baseUrl?>/js/approve.js"></script>

<div class="skills-faith-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Faith', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'faithid',            
            'faith',
            //'crtdt',
            //'crtby',
            // 'upddt',
            // 'updby',
            
               [
                    'label'=>'Approved',
                   'attribute'=>'Is_approved',
                    'format'=>'raw',
                    //'contentOptions' =>function ($model, $key, $index, $column){
                      //  $category=new backend\models\Category();
                        //$status=$model->getCategoryStatus($model->id); 
                        //return [(($status==1)? Html::encode('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>') : Html::encode('<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>'))];
                   // },                    
                       'value'=>function($model){
                        $activs=$model->getIsAprvdskillfaith($model->faithid);
                        //return $activs;
                        return $activs==1? "<span class='glyphicon glyphicon-ok-circle aprovfaith'  aria-hidden='true'  style='color:#33CCFF' id='ven_".$model->faithid."_1'></span>" : "<span class='glyphicon glyphicon-ban-circle aprovfaith' aria-hidden='true' style='color:#d9534f' id='ven_".$model->faithid."_0'></span>";
                        
                    },
        ],

           ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
