<?php
/**
 * Created by PhpStorm.
 * User: Лина
 * Date: 29.06.2019
 * Time: 11:23
 */

namespace frontend\modules\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\User;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\web\Response;
//use frontend\modules\user\models\forms\PictureForm;


class ProfileController extends Controller
{
    public function actionView($nickname)
    {


        return $this->render('view', [
            'user' => $this->findUser($nickname),
            /*'currentUser' => $currentUser,
            'modelPicture' => $modelPicture,*/
        ]);
    }

    /**
     * @param string $nickname
     * @return User
     * @throws NotFoundHttpException
     */
    private function findUser($nickname)
    {
        if ($user = User::find()->where(['nickname' => $nickname])->orWhere(['id' => $nickname])->one()) {
            return $user;
        }
        throw new NotFoundHttpException();
    }
}