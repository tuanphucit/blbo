<?php

class BusController extends Controller
{
	public function actionIndex()
	{
		$id = Yii::app()->request->getParam('id',0);
		$bus = Bus::model()->findByPk($id);
		if ($bus == null)
			throw new CHttpException('404','Object not found');
		$bus->getCLocation();
		$this->render('index',array(
			'bus'=>$bus,
		));
	}
	
	public function actionNow()
	{
		$id = Yii::app()->request->getParam('id',0);
		$bus = Bus::model()->findByPk($id);
		if ($bus == null)
			throw new CHttpException('404','Object not found');
		$bus->getCLocation();
		$this->layout = 'ajax';
		$this->renderPartial('now',array(
			'bus'=>$bus,
		));
	}
}