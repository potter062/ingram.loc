<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use frontend\models\User;
use yii\web\Cookie;


/**
 * Site controller
 */
class SiteController extends Controller
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
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $users = User::find()->all();

        return $this->render('index', [
            'users' => $users,
        ]);
    }

}
