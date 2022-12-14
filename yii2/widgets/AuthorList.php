<?php


namespace app\widgets;


use app\models\Authors;
use app\models\AuthorsSearch;
use app\models\Books;
use app\models\BooksAuthors;
use yii\base\BaseObject;
use yii\base\Widget;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Url;

class AuthorList extends Widget
{
    public $bookId;
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        ob_start();
    }

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        $content = ob_get_clean();

        $query = BooksAuthors::find()->where('book_id='.$this->bookId)->asArray()->all();

        $arr = [];
        foreach ($query as $row) {
            array_push($arr, $row['author_id']);
        }

        $searchModel = new AuthorsSearch();
        $dataProvider = $searchModel->searchById($arr);

        return GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                'id',
                'name',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Authors $modelAuthor, $key, $index, $column) {
                        if ($action == 'delete')
                            return Url::to(['authors/' . $action.'rel', 'id' => $modelAuthor->id]);
                        else
                            return Url::to(['authors/' . $action, 'id' => $modelAuthor->id]);
                    }
                ],

            ],
        ]);

    }
}