<?php

namespace frontend\controllers;
use frontend\models\Contact;
use yii\web\Controller;

use Yii;
class TestController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionContact()
    {
        
        $model = new Contact();
        $model->name = Yii::$app->request->post('name');
        $model->email = Yii::$app->request->post('email');
        $model->subject = Yii::$app->request->post('subject');
        $model->message = Yii::$app->request->post('message');
        if ($model->save()) {
            Yii::$app->session->setFlash('success', 'Bizga bilan bog\'langaningiz uchun tashakkur. Sizga imkon qadar tezroq javob beramiz');
    } else {
        
            Yii::$app->session->setFlash('error', 'There was an error sending your message.');
        }
        return $this->redirect('/#end');

        // return $this->redirect('/');
        // return $this->render('mansur');
    }

}
