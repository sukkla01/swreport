<?php

namespace app\controllers;

use yii\web\Controller;
use \app\models\UploadForm;
use yii\web\UploadedFile;
use Yii;

class UploadController extends Controller {

    public function actionUpload() {
        $model = new UploadForm;

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->file && $model->validate()) {
                $model->file->saveAs(
                        'uploads/' . $model->file->baseName . '.' . $model->file->extension);
                        Yii::$app->session->setFlash('success','สำเร็จ');
            }  else {
                        Yii::$app->session->setFlash('danger','สำเร็จ');
            }
        }
        /*Yii::$app->session->setFlash('success','สำเร็จ');
        Yii::$app->session->setFlash('warning','สำเร็จ');
        Yii::$app->session->setFlash('danger','สำเร็จ');
        Yii::$app->session->setFlash('info','สำเร็จ');
        Yii::$app->session->setFlash('seccess','สำเร็จ');*/
            

        return $this->render('upload', ['model' => $model]);
    }

}
