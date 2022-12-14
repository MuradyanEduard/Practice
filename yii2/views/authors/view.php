<?php

use app\models\Books;
use kartik\select2\Select2;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Authors $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="author-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="book-form">

        <?php $form = ActiveForm::begin();

        $arr = \app\models\Authors::find()->with('books')->where(['authors.id' => $_GET['id']])
            ->asArray()->all();
        $bookId = [];

        foreach ($arr as $row) {
            foreach ($row['books'] as $bookss) {
                array_push($bookId, $bookss['id']);
            }
        }

        ?>

        <?= $form->field($model, 'booksArr')->widget(Select2::className(), [
            'name' => 'booksArr',
            'data' => ArrayHelper::map(\app\models\Books::find()->where(['NOT', ['id' => $bookId]])->asArray()->all(), 'id', 'name'),
            'options' => [
                'placeholder' => 'Select Books ...',
                'multiple' => true
            ],
        ]); ?>

        <div class="form-group">
            <?= Html::submitButton('Add', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>

</div>

<?php \app\widgets\BookList::begin(['authorId' => $model->id]) ?>
<?php \app\widgets\BookList::end() ?>
