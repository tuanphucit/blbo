<?php

class DataController extends Controller
{
	public $layout='//layouts/old_main';
	
	public function actionIndex()
	{
		$query = new Query();
		$this->render('index',array('query'=>$query));
	}
	
	public function actionInput()
	{
		$dataQuery = Yii::app()->request->getParam('data');
		Data::insertData($dataQuery);
		
		$query = new Query();
		$query->query = Yii::app()->request->requestUri;
		$query->time  = new CDbExpression('NOW()');
		if (!$query->save()) {
			echo ('ERROR');
		}
		
		$this->render('input');
	}
}