<?php

namespace api\controllers;

use api\components\AccessTokenAuth;

class YoutubeController extends ApiController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => AccessTokenAuth::class,
        ];

        return $behaviors;
    }

    public function actionIndex()
    {
        $this->msg = 'Test Controller';
    }

}
