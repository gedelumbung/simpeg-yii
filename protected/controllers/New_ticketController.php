<?php

class New_ticketController extends Controller
{
	public function init()
	{
		$this->widget('SettingWidgets');
	}
	public $layout='//layouts/main';

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xf5f5f5,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		$model=new Ticket;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Ticket']))
		{
			$model->attributes=$_POST['Ticket'];
			$model->ticket_id = time().rand(10,100);
			$model->date = date("d/M/Y H:i:s");
			$model->last_update = date("d/M/Y H:i:s");
			$model->status = "Open";
			if($model->save())
				$this->redirect(Yii::app()->baseUrl."/ticket_list/".$model->ticket_id);
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ticket-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
