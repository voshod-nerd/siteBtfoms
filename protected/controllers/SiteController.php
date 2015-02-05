<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	

	public function actionNSI() 
	{
		$model=new NSI(); 
		// рендеринг View nsi
		$this->render('NSI',array('model'=>$model));

	}

	public function actionSimpleInformation($type) 
	{
      
   
     $model = new SimpleInformation(); 
     $data=$model->ReturnHtmlFromBase($type);
     
     if (count($data)>0) 
     	{ 
     $html=$data[0];
     $dateadd=$data[1];
 		}
      // вывод данных для сайта
      $this->render('SimpleInformation',array('html'=>$html,'dateadd'=>$dateadd));
	}

    public function actionListDoctors()
    {
      $model = new ListDoctors();
      $this->render('ListDoctors',array('model'=>$model)); 


    }

    public function actionPolis() 
    {
	$model=new Polis();
   
	// Если существует запрос пост значит обрабатываем результат запроса иначе просто выводим страницу
	if (isset($_POST['polis'])) {
	$model->attributes=$_POST['polis'];
	if($model->validate())   // если данные верны
    {
 	$this->render('polis',array('model'=>$model,'obr'=>1));
    }
   else
	{ $this->render('polis',array('model'=>$model,'obr'=>3)); }
		//перваначальная загрузка страницы когда нет обработки Post  запроса
								} 
								else $this->render('polis',array('model'=>$model,'obr'=>2));     
   }



}