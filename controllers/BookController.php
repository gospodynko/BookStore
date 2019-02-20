<?php

namespace app\controllers;

use app\models\Author;
use app\models\BookImages;
use app\models\BooksRelations;
use app\models\Category;
use app\models\PublishHouse;
use Yii;
use app\models\Book;
use app\models\BookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Book models.
     * @return mixed
     */
    public function actionIndex()
    {


        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $data = Book::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'data' => $data,
        ]);
    }

    /**
     * Displays a single Book model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $data = Book::find()->where(['id' => $id])
            ->one();
//        var_dump($data);
        return $this->render('view', [
            'data' => $data,
        ]);
    }

    /**
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Book();
        $author = new Author();
        $category = new Category();
        $publisher = new PublishHouse();
        $book_images = new BookImages();
        $book_relation = new BooksRelations();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $request = Yii::$app->request;

            $get = $request->post('Book');
            $model->name = $get['name'];
            $model->save();

            $get = $request->post('Author');
            $author->name = $get['name'];
            $author->save();

            $getPublish = $request->post('PublishHouse');
            $getCategory =  $request->post('Category');

            $book_relation->book_id = $model->id;
            $book_relation->author_id = $author->id;
            $book_relation->publish_id = $getPublish['name'];
            $book_relation->category_id = $getCategory['name'];
            $book_relation->save();

            $pictures = UploadedFile::getInstances($book_images, 'image_url');
           foreach ($pictures as $picture){
               $book_images = new BookImages();
               $book_images->image_url = $picture->name;
               $book_images->book_id = $model->id;
               $book_images->save();
           }


//            return $model->load(Yii::$app->request->post());
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'author' => $author,
            'category' => $category,
            'publisher' => $publisher,
            'book_images' => $book_images,

        ]);
    }

    /**
     * Updates an existing Book model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
//        var_dump($model);
//        $publish_relation = BooksRelations::find()
//            ->where(['book_id' => $id])
//            ->all();
//        var_dump($publish_relation);
//        $model = new Book();
//        $book_relation =  BooksRelations::;
//        var_dump($book_relation);
//        $category = Category::where(['id' => $book_relation->category_id])->one();
        $publisher = new PublishHouse();
        $book_images = new BookImages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'author' => $author,
            'category' => $category,
            'publisher' => $publisher,
            'book_images' => $book_images,
        ]);
    }

    /**
     * Deletes an existing Book model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
