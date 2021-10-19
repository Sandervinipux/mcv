<?php

require_once ('./models/CModel.php');
require_once ('./views/CView.php');

class CController {
    public $model;
    public $view;

    public function setMainpage () {
        $model = new CModel();
        $resultModel = $model->GetData();

        return $resultModel;
    }
}