<?php


namespace app\widgets;


use app\models\Authors;
use app\models\AuthorsSearch;
use app\models\Books;
use app\models\BooksAuthors;
use app\models\BooksSearch;
use yii\base\Widget;
use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Url;

class BookList extends Widget
{
    public $authorId;
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        ob_start();
    }

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        $content = ob_get_clean();

        $query = BooksAuthors::find()->where('author_id='.$this->authorId)->asArray()->all();

        $arr = [];
        foreach ($query as $row) {
            array_push($arr, $row['book_id']);
        }

        $searchModel = new BooksSearch();
        $dataProvider = $searchModel->searchById($arr);

        return GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                'id',
                'name',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Books $modelAuthor, $key, $index, $column) {
                        if ($action == 'delete')
                            return Url::to(['books/' . $action.'rel', 'id' => $modelAuthor->id]);
                        else
                            return Url::to(['books/' . $action, 'id' => $modelAuthor->id]);
                    }
                ],

            ],
        ]);

    }


}